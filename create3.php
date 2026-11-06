<?php

$con = mysqli_connect("localhost", "root", "", "my_students");

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$id = (int)($_GET['id'] ?? 0);

// Retrieve the selected product
$stmt = $con->prepare("SELECT * FROM students WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    die("Product not found.");
}

// Begin transaction
mysqli_begin_transaction($con);

try {

    // Insert product into stockout
    $insert = $con->prepare(
        "INSERT INTO stockout (firstname, lastname, email, date)
         VALUES (?, ?, ?, ?)"
    );

    $insert->bind_param(
        "siss",
        $row['firstname'],
        $row['lastname'],
        $row['email'],
        $row['date']
    );

    if (!$insert->execute()) {
        throw new Exception($insert->error);
    }

    // Delete original product from students
    $delete = $con->prepare(
        "DELETE FROM students WHERE id = ?"
    );

    $delete->bind_param("i", $id);

    if (!$delete->execute()) {
        throw new Exception($delete->error);
    }

    // Confirm transaction
    mysqli_commit($con);

    header("Location: stock.php");
    exit();

} catch (Exception $e) {

    mysqli_rollback($con);
    die("Transfer failed: " . $e->getMessage());

}

?>