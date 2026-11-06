<?php
$con = mysqli_connect("localhost","root","","my_students");

$id = $_POST['id'];
$supp_name = $_POST['supp_name'];
$contact = $_POST['contact'];
$product_supp = $_POST['product_supp'];

$sql = "UPDATE supplier
SET supp_name = '$supp_name', contact = '$contact', product_supp = '$product_supp' WHERE id = '$id'";

mysqli_query($con, $sql);

header("Location: supplier.php");
exit;
?>