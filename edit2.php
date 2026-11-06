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
    $result = mysqli_query($con,"SELECT * FROM supplier WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
?>
        <form action="update2.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label>Supplier Name: </label>
            <input type="text" name="supp_name" value="<?php echo $row['supp_name']; ?>">
            <label>Contact Info: </label>
            <input type="text" name="contact" value="<?php echo $row['contact']; ?>">
            <label>Product Supplied: </label>
            <input type="text" name="product_supp" value="<?php echo $row['product_supp']; ?>">
            <input type="submit" value="UPDATE">
        </form>
</html>