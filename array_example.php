<?php
    //single-value variable declaration

    $text = "Hello world";

    $philippines = "I, II, III";

    //an indexed array
    $fruit = array("apples", "pears", "oranges");

    //an associative array
    $fruit = array(
        "first"  => "apples",
        "second" => "pears",
        "third"  => "oranges"
    );

    //add a value to existing array
    $fruit["fourth"] = "banana";
    $fruit[] = "cotton fruit"; 

    echo "The number of values inside the fruit array are " . count($fruit) . "<br>";
    print_r($fruit); echo "<br>";

    // Using foreach first-variant
    foreach($fruit as $prutas) {
        echo "The fruit is: $prutas <br>";
    }

    //Using foreach second-variant
    foreach ($fruit as $fruit_key => $fruit_value) {
        echo "<p>";
        echo "Key is: $fruit_key | Value is: $fruit_value <br>";
        echo "</p>";
    }
    
    //Selecting a array value inside of an array
    echo "My favorite fruit is: " . $fruit["fourth"] . "<br>";

    //Replace the current array value with new one.
    $fruit["second"] = "mango";

    print_r($fruit); echo "<br>";
