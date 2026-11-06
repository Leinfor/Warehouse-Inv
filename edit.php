<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    $con = mysqli_connect ("localhost", "root" , "" , "my_students");

    $id = $_GET['id'];
    $result = mysqli_query($con,"SELECT * FROM students WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
?>
    
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label>Product Name: </label>
            <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"><br><br>
            <label>Quantity: </label>
            <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"><br><br>
            <label>Supplier: </label>
            <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
            <label>Date: </label>
            <input type="date" name="date" value="<?php echo $row['date']; ?>"><br><br>
            <input type="submit" value="UPDATE">
        </form>
</html>