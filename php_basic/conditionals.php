<?php
/**
    TOPIC: CONDITIONS
    
    NAME: LE VIET KHANH
    CLASS: CD22TT11
    ID: 22211TT2577
    DATE: 2023/08/02
*/
//variable declaration
    $isPrinted = 2 === '2';
    $age = 18;

    if ($isPrinted || $age > 18) {
        # code...
        echo 'true<br>';
    } else {
        # code...
        echo 'false<br>';
    }
    
// //date time
//     $date = new DateTime();
//     echo $date->format('Y-m-d');

//     echo '<br>'. date("H") .":". date("m") .":". date("s");

//
echo 1 > 2? '1 > 2' : '1 < 2' ."<br>";
$list = [];
$default = $list[0] ?? 'null';

print_r($default."<br>");


//switch case
switch ($age) {
    case 18:
        # code...
        echo '18<br>';
        break;
    case 19:
        # code...
        echo '19<br>';
        break;
    case 20:
        # code...
        echo '20<br>';
        break;
    default:
        # code...
        echo 'default<br>';
        break;
}
?>