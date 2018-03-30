<?php
include("dbconn.php");
$user= $_POST['email'];
$pass= $_POST['password'];

$sql= "SELECT * FROM user WHERE email='".$user."'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$chck = $row['password'];
if($pass == $chck)
{
echo "Valid Credentials";
}
else
    echo "Invalid Credntials";


?>