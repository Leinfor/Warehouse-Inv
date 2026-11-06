<?php 
$con = mysqli_connect("localhost","root","","my_students");

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$date = $_POST['date'];

$sql = "UPDATE students 
SET firstname = '$firstname', lastname = '$lastname', email = '$email', date = '$date' WHERE id = '$id'";

mysqli_query($con, $sql);

header("Location: stock.php");
exit;
?>