<?php
     
require "connection.php";


if(isset($_POST["submit"])){

    $targetDir = "uploads/";
    $targetFile = $targetDir.basename($_FILES["profile_picture"]["name"]);

    if(move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFile)){
        echo "The File has uploaded";
    }else{
        echo "Sorry some error has happend";
    }

}

?>
