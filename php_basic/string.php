<?php
/**
    TOPIC: STRING
    NAME: LE VIET KHANH
    CLASS: CD22TT11
    ID: 22211TT2577
    DATE: 2023/08/02
*/

$fullName = "Kane Lee";

echo strrev($fullName). "<br>"; // reverse string

echo strtolower($fullName) . "<br>"; // convert to lower case

echo strtoupper($fullName) ."<br>"; // convert to upper case

echo str_replace(' ', '***', $fullName) ."<br>";// repalce string

//ignore html strings
echo htmlspecialchars("<h1>$fullName</h1>") ."<br>";
echo "<h1>$fullName</h1>"."<br>";

//string formatting
printf('<h1>%s %d%d%d%f</h1>', $fullName,1,2,3,0.1234567);
?>