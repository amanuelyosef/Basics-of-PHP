<?php


    $businesses = ["Tech Hub", "Green Grocers", "City Cafe", "Auto Fix", "Book Haven"];

    echo "<select>";

    foreach ($businesses as $business){

        echo "<option value='$business'>$business</option>";

    }
    echo "</select>";

    $businessDetails = [
        "Tech Hub" => ["category" => "IT Services", "location" => "New York", "contact" => "123-456-7890"],
        "Green Grocers" => ["category" => "Grocery", "location" => "Los Angeles", "contact" => "987-654-3210"],
    ];


    foreach ($businessDetails as $name => $detail){
        echo "<h3>$name</h3>";
        echo "Category: {$detail['category']} <br>";
        echo "Location: {$detail['location']} <br>";
        echo "Contact: {$detail['contact']} <br>";

    }

    print_r ( array_filter(
        $businessDetails, function ($value){
            return $value['category'] === "Grocery";
        }
    )
    );


    echo "this
        is
        test"; 

/*

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