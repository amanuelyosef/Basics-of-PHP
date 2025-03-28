<?php
     
require "connection.php"

echo $_POST['submit'];

/*
if (isset($_POST["submit"])) {
    $targetDir = "uploads/";  
    $targetFile = $targetDir . basename($_FILES["profile_picture"]["name"]); // File path

    echo $targetFile

    
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // If everything is ok, move the file to the target directory
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "The file ". basename($_FILES["file"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
        */
}
    

    


?>
