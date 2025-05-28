<?php

    $date = date("l,  d-m-Y  H:i:s a");
    $time = time();

    echo $date."<br>";
    echo $time."<br>";
    echo date("d-m-Y",$time)."<br>";
    echo date("d-m-Y", strtotime("+7 years"))."<br>";


    date_default_timezone_set("America/New_York");

    echo date("l,  d-m-Y  H:i:s a")."<br>";

    $hashedPwd = password_hash("mypassword", PASSWORD_DEFAULT);
    
    if(password_verify("mypassword", $hashedPwd)){
        echo "pass is correct<br>";
    }else{
        echo "incorrect";
    }

 
?>