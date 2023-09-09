<?php
    echo  "hello world\n\t";
    $x = "";
    $y = 100;
    function toTest()  {
        
        $GLOBALS['x'] = $GLOBALS['y'] + "12";
    }
    toTest();
    echo $x;
?>
