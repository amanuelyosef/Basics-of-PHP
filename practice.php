<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "new_db";

//creating database paractice
//$conn1 = mysqli_connect($server, $username, $password, $database);
//$conn2 = new mysqli($server, $username, $password, $database);

try{
    $conn3 = new PDO("mysql:host=$server;dbname=$database",$username,$password);
    $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE IF NOT EXISTS pdotest(
    id int(6) UNSIGNED AUTO_INCREMENT primary key,
    name varchar(18) NOT NULL,
    email varchar(18) NOT NULL
    )"; 

    $conn3->exec($sql);
     
}catch(PDOException $e){
    echo $e->getMessage();
}

/*
if(!$conn1){
    echo "Connection failed: " . mysqli_connect($conn1) . "<br>";
}

if($conn2->connect_error){
    echo "Connection failed: " . $conn2->connect_error . "<br>";
}

echo "Connection 1 and Connection 2 has connected sucessfully<br>";


//mysqli_query($conn1, "create database $database");


$createDB = "CREATE TABLE IF NOT EXISTS Users (
    id int(6) UNSIGNED auto_increment PRIMARY KEY,
    name varchar(50) not null,
    email varchar(50) not null
)";

$insertItem = "insert into Users (name, email) values ('john doe', 'dlfk@dl.com')";

$deleteDB = "delete from Users";

if(mysqli_query($conn1, $createDB)){
    echo "Database created sucessfully<br>";
   // mysqli_query($conn1, $deleteDB);
    echo "Databse deleted sucessfully for conn1<br>";
}

if($conn2->query($createDB)){
    echo "Database created sucessfully<br>";
    $conn2->query($deleteDB);
    echo "Database deleted sucessfully for conn2<br>";
}

mysqli_close($conn1);
$conn2->close();


try{

    $conn3 = new PDO("mysql:host=$server;dbname=$database", $username, $password);

    $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $selectQuery = "SELECT id,name,email FROM users";

    $stmt = $conn3->prepare($selectQuery);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $row){
        echo $row['name'] . "<br>";
    }

}catch(PDOException $e){
    echo "Connection failed: ".$e->getMessage();
}


$stmt = $conn2->prepare("SELECT * FROM users"); 
//$stmt->bind_param("ss", $username, $password); 
$stmt->execute(); 
$result = $stmt->get_result();

if($result->num_rows > 0){
    while($row = $result->fetch_object()){
        echo $row->name . "<br>";
    }
}


mysqli_close($conn1);
$conn2->close();
$conn3 = null;
/*
$unsafe_string = "<script>alert('Hacked!');</script>"; 
$safe_string = filter_var($unsafe_string, FILTER_SANITIZE_STRING); 
echo $safe_string; 

echo "<br>";

$unsafe_email = "user@@example.com"; 
$safe_email = filter_var($unsafe_email, FILTER_SANITIZE_EMAIL); 
echo $safe_email; 

echo "<br>";

$unsafe_url = "https://example.com/?search=<script>"; 
$safe_url = filter_var($unsafe_url, FILTER_SANITIZE_URL); 
echo $safe_url;


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    echo $username."  ".$password;

    if(empty($username)){
        echo "Please enter user name<br>";
    }
    
    if(strlen($password)<10){
        echo "Please make sure your password is greateer that 10 <br>";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

    }
}

    $businesses = ["Tech Hub", "Green Grocers", "City Cafe", "Auto Fix", "Book Haven"];

    echo "<select>";

    foreach ($businesses as $business){

        echo "<option value='$business'>$business</option>";

    }
    echo "</select>";

    $businessDetails = [
        "Tech Hub" => ["category" => "IT Services", "location" => "New York", "contact" => "123-456-7890"],
        "Green Grocers" => ["category" => "Grocery", "location" => "Los Angeles", "contact" => "987-654-3210"],
        "Green Grocers" => ["category" => "Grocery", "location" => "Los Angeles", "contact" => "987-654-3210"],
        "Green Grocers" => ["category" => "Grocery", "location" => "New York", "contact" => "987-654-3210"],
        "Green Grocers" => ["category" => "Grocery", "location" => "Los Angeles", "contact" => "987-654-3210"],
        "Green Grocers" => ["category" => "Grocery", "location" => "New York", "contact" => "987-654-3210"],
        "Green Grocers" => ["category" => "Grocery", "location" => "New York", "contact" => "987-654-3210"],

    ];

    foreach ($businessDetails as $name => $detail){
            
        echo $detail['location'] . " is added<br>";
        
    }

    /*
    echo "<br><br>";
    $location = [];
    function adder($businessDetails, $location){
        foreach ($businessDetails as $name => $detail){

            echo $detail['location'] . " is added<br>";
            array_push($location, $detail['location']);
        }
    }

    adder($businessDetails, $location);

    echo "<br><br>";


    echo "<table border = 1>";
    echo "<tr>";
    echo "<th>Name</th><th>Category</th><th>Location</th><th>Contact</th>";
    echo "</tr>";
    foreach ($businessDetails as $name => $detail){
       
        echo "<tr>";
        echo "<td>{$name}</td> <td>{$detail['category']}</td> <td>{$detail['location']}</td> <td>{$detail['contact']}</td>";
        echo "</tr>";
        
    }
    echo "</table>";

    print_r ( array_filter(
        $businessDetails, function ($value){
            return $value['category'] === "Grocery";
        }
    )
    );


    echo "this
        is
        test"; 



    $business = [ 
        "john" => 15,
        "kane" => 41,
        "michael" => 35,
        "jonathan" => 22,
        "luci" => 24
    ];

    $names = [ "muluken", "fila", "speed", "mahlet", "habiba" ];


    print_r($names);
    echo "<br>";

    echo array_search("john", $business)."<br>";

    echo "<br>";

    $filtered = array_filter($business, 
        function ($value){
            return $value>18;
        }
    );

    print_r($filtered);

*/

?>