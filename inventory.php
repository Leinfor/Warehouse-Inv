<?php
$con = mysqli_connect ("localhost", "root" , "" , "my_students");

$totalItems = 0;
$totalAdded = 0;

$result = mysqli_query($con,"SELECT COUNT(*) AS total from students");
$row = $result->fetch_assoc();
$totalItems = $row['total'];

$result = $con->query("SELECT COUNT(*) AS total from students WHERE id = 'ADDED'");
$totalAdded = $row['total'];

?>