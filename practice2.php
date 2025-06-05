<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        echo $_POST['name']. "<br>";
        echo $_POST['email'] . "<br>";
        print_r($_POST);
        echo "<br>";

        $uploadDir = 'uploads/'; 
        $uploadFile = $uploadDir . basename($_FILES['image_file']['name']); 
        
        if (move_uploaded_file($_FILES['image_file']['tmp_name'], $uploadFile)) { 
            echo "File uploaded successfully.<br>"; 
        } else { 
            echo "File upload failed.<br>"; 
        } 

        $data = json_decode(file_get_contents("php://input"), true); 
        echo json_encode(["message" => "Received POST request", "data" => $data]); 

    }
    

    
?>