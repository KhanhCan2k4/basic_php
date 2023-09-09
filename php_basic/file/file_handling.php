<?php
/**
    TOPIC: FILE

    NAME: LE VIET KHANH
    CLASS: CD22TT11
    ID: 22211TT2577
    DATE: 2023/08/02
*/

// read / write text files
$path = './people.txt';
echo str_replace(' ', '<br>', readFromFile($path));

$path = './subject.txt';
$list = ['PHP', 'JavaScript', 'Java', 'C#'];
$content = implode(''.PHP_EOL, $list);
var_dump(writeToFile($path, $content));

echo str_replace(' ', '<br>', readFromFile($path));


//read from file , return file content  
function readFromFile($path) {
    if (file_exists($path)) {
        # code...
        // echo readfile($path); // 35- number of bytes
    
        $fo = fopen($path, 'r');
        $fr = fread($fo, filesize($path));
        
        fclose($fo);
        return $fr;
    
    }
}

// write to file
function writeToFile($path, $value = "") {
    
    $fo = fopen($path, 'w');
    $fw = $value;
    $issussesful = fwrite($fo, $fw);

    fclose($fo);

    return $issussesful >= 0 ? true : false;
}


?>