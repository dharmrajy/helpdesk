<?php

$servername  = "localhost";
$username= "root";
$password = "";
$database = "helpdesk";

$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
    echo "error in connection";
else "successfully connected";

?>