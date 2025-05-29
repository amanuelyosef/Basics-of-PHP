<?php

$url = "https://dogapi.dog/api/v2/breeds";
$data = ["message"=>"sent", "with"=>"greetfully"];

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);

$respons = curl_exec($ch);

if(curl_errno($ch)){
    die("error number ". curl_errno($ch) . "<br>" . curl_error($ch));
}

curl_close($ch);

$dataArray = json_decode($respons, true);
echo "Hello<br>";
print_r($dataArray);

?>