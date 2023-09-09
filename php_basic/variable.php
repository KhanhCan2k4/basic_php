<?php
/**
    TOPIC: VARIABLES
    
    NAME: LE VIET KHANH
    CLASS: CD22TT11
    ID: 22211TT2577
    DATE: 2023/08/02
*/

//variable declaration
    $name = "Kane";
    $age = 19;
    $isMarried = true;
    $price = 22.3;

//processing
    echo 'Name: ', $name, '<br>';
    echo 'Age: ', $age, '<br>';
    echo 'Relationship: ',$isMarried, '<br>';  //print 1
    
    $isMarried = false;
    echo 'Relationship: ',$isMarried, '<br>';  //not print

    echo 'Price: ', $price, '<br>';
    var_dump($price);

//string expression
    $isMarried = !$isMarried;
    echo "Infor: $name, $age, $isMarried <br>"; // required "

//constaint declaration
    define('SERVER_NAME', 'localhost');
    define('SERVER_PORT', 8080);

    echo SERVER_NAME."/".SERVER_PORT."<br>";
?>