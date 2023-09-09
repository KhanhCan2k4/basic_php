<?php
/**
    TOPIC: ARRAY
    
    NAME: LE VIET KHANH
    CLASS: CD22TT11
    ID: 22211TT2577
    DATE: 2023/08/02
*/

    //variable declaration
    $listNames = ['abc', 'xyz', 'hihi'];
    $listAges = [12, 13, 25, 10];
    $listPrices = [12, 12.6, 40];

    // print_r($listNames);
    // var_dump($listNames);

    // print_r($listAges);
    // var_dump($listAges);
    
    // print_r($listPrices);
    // var_dump($listPrices);

    for ($i=0; $i < 3; $i++) { 
        # code...
        echo "Customer[". $i +1 ."]<br>";
        echo $listNames[$i]."<br>";
        echo $listAges[$i]."<br>";
        echo $listPrices[$i]."<br>";
    }
    

    //associative array
    $list = [
        'name' => 'abc',
        'age' => 12,
        'price' => 12.6,
        3 => 'number 3',
    ];

    echo $list['age'] . " <br>";
    echo $list[3] ."<br>";
    
    var_dump(json_encode($list));
?>