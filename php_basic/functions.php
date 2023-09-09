<?php
/**
    TOPIC: FUNCTIONS

    NAME: LE VIET KHANH
    CLASS: CD22TT11
    ID: 22211TT2577
    DATE: 2023/08/02
*/

//
function alert($message) {
    echo "Message: " . $message."<br>";
}    

alert("My name is Kane Lee"); 

function toSum($a = 0, $b =0) {
    return $a + $b;
}

alert("1 + 2 = ".toSum(1,2));

// variable function
$toMulti = function($a = 0, $b = 1) {
    return $a * $b;
};

alert("1 * 2 = ".$toMulti(1,2));

//arraw function
$toSubstract = fn($a = 0, $b = 0) => $a - $b;

alert("1 - 2 = ".$toSubstract(1,2));

//build-in functions for arrays
$list = [
    1,2,3,4,5,6,7,8,9
];

// echo "<br>number of items in: " .count($list); // 9
// echo var_dump(in_array('2', $list)); // true
// echo var_dump(in_array('10', $list)); // false

// array_push($list,10, 1); // add 10, 1 at the end of the list
// echo print_r($list);

// array_unshift($list,10, 1); // add 10, 1 at the beginning of the list
// echo print_r($list);

// array_pop($list); // remove the last element of the list
// echo print_r($list);

// array_shift($list); // remove the begining element of the list
// echo print_r($list);

// $list2 = array_chunk($list, 3); // disperse the list into arrays with 3 elements
// echo print_r($list2);

// echo print_r(array_merge($list, $list2));

// [...$list] // clone an array with the same elements but different locations
// [...$list, ...$list2] // clone and merge 2 (or upper) lists

// array_combine($keys, $valus); // merge the keys and values into one array as associate array
// array_keys($list)
// array_values($list)

// array_flip($list); // keys --> values, values --> keys
// range(begin, end); // list [begin, end]

// array_map(callback) // map an array 

// array_filter($list, callback); // filter an array
?>