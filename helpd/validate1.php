<?php
include("dbconnadmin.php");
$user= $_POST['email'];
$pass= $_POST['Password'];

$sql= "SELECT * FROM admin WHERE email='".$user."'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$chck = $row['Password'];
if($pass == $chck)
{
echo "Valid Credentials";
}
else
    echo "Invalid Credntials";


?>