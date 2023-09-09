<?php
/**
    TOPIC: EXCEPTION

    NAME: LE VIET KHANH
    CLASS: CD22TT11
    ID: 22211TT2577
    DATE: 2023/08/02
*/

function divide($a = 0, $b =1){
    if ($b === 0) {
        # code...
        throw new Exception("Cannot divide by 0");
    }

    return $a / $b;
}
try {
    //code...
    echo divide(10,2)."<br>";
    echo divide(10,0)."<br>";
} catch (\Throwable $th) {
    //throw $th;
    echo $th->getMessage().'<br>';
} finally {
    // code...
    echo "Finally";
}

?>