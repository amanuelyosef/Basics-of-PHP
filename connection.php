<?php
     
$server = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "userinfo"; 
 
// Create connection 
$conn = mysqli_connect($server, $username, $password, $database);
$conn2 = new mysqli($server, $username, $password, $database); 
try{
    $conn3 = new PDO("mysql:host=$server;dbname=$database",$username,$password);

    $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("connection failed: ".$e->getMessage());
}
 
// Check connection 
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
} 

if($conn2->connect_error){
    die("Connection failed: ".$conn2->connect_error);
}
 
echo "Connected successfully<br>"; 


    


?>