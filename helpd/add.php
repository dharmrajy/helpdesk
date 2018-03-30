<?php
session_start();
include("dbconn.php");

$first=$_POST['firstname'];
$last=$_POST['lastname'];
$DOB=$_POST['DOB'];
$contact=$_POST['Contact'];
$email=$_POST['email'];
$address=$_POST['address'];
$pwd=$_POST['password'];
$sql = "INSERT INTO user (firstname,lastname,DOB,Contact,email,address,password) VALUES (\"$first\",\"$last\",\"$DOB\",\"$contact\",\"$email\",\"$address\",\"$pwd\")";
$result= $conn->query($sql);
?>