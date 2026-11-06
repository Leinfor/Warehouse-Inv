<?php
$con = mysqli_connect ("localhost", "root" , "" , "my_students");

$supp_name = $_POST["supp_name"]??"";
$contact = $_POST["contact"]??"";
$product_supp = $_POST["product_supp"]??"";

$stmt = $con->prepare("INSERT INTO supplier (supp_name, contact, product_supp)
                        VALUES(?,?,?)");

$stmt->bind_param("sss", $supp_name, $contact, $product_supp);
$stmt->execute();

header("Location: supplier.php");
exit;
?>