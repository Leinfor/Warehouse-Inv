<?php
$con = mysqli_connect ("localhost", "root" , "" , "my_students");

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id = '$id'";
mysqli_query($con, $sql);

header("Location: stock.php");
?>