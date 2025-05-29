<?php

$server = "localhost";
$dbName = "";
$userName = "root";
$pwd = "";


$proConn = mysqli_connect($server, $userName, $pwd);
$objConn = new mysqli($server, $userName, $pwd);

if(!$proConn){
    die("connection failed 1");
}

if($objConn->connect_error){
    die("connection failed 2");
}

echo "Connection Successful";

?>