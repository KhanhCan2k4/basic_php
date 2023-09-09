
<?php
/**
    TOPIC: INTERATIONS FOR LOOP, FOREACH, WHILE, DO WIHLE

    NAME: LE VIET KHANH
    CLASS: CD22TT11
    ID: 22211TT2577
    DATE: 2023/08/02
*/

//for loop
echo "<br>Here is the loof <br>";
for ($i=0; $i < 10; $i++) { 
    # code...
    echo "This is the ". $i +1 ." line of code<br>";
}

//while loop
echo "<br>Here is the loof <br>";
$a = 0;
while ($a < 10) {
    # code...
    echo "This is the ". $a +1 ." line of code<br>";
    $a++;
}

// do while loop
echo "<br>Here is the loof <br>";
$a = 0;
do {
    # code...
    echo "This is the ". $a +1 ." line of code<br>";
    $a++;
} while ($a <= 10);

//foreach loop
echo "<br>Here is the loof <br>";
$array = [
    -1,-2,-3,-4,5
];
//$array as $value
foreach ($array as $value) {
    # code...
    echo "This is the ". $value." line of code<br>";
}

//$array as $key => $value
echo "<br>Here is the loof <br>";
foreach ($array as $key => $value) {
    # code...
    echo "This is the ". $key." : ". $value."<br>";
}
?>