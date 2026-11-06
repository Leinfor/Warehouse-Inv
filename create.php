<?php
include("index.php");
$con = mysqli_connect ("localhost", "root" , "" , "my_students");

$firstname =$_POST["firstname"]??"";
$lastname =$_POST["lastname"]??"";
$email =$_POST["email"]??"";
$date =$_POST["date"]??"";

$stmt = $con->prepare("INSERT INTO students (firstname, lastname, email, date)
                        VALUES(?,?,?,?)");

$stmt->bind_param("siss", $firstname, $lastname, $email, $date);
$stmt->execute();

header("Location: stock.php");
exit;
?>