<?php
$con = mysqli_connect ("localhost", "root" , "" , "my_students");

$id = $_GET['id'];

$sql = "DELETE FROM supplier WHERE id = '$id'";
mysqli_query($con, $sql);

header("Location: supplier.php");
exit;
?>