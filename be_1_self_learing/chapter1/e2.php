<?php 
    /**
     * TOPIC: EXCERCISE 2 CHPATER 1
     * PRINT FROM 1 TO 30 APTER 'PHEP TINH' WITH DARK BLUE ODDS
     * 
     * NAME: LE VIET KHANH
     * CLASS: CD22TT11
     * ID: 22211TT2577
     * DATE: 2023/08/04
     */
    $txt = 'Phép tính';

     echo $txt;

    for ($i=0; $i < 30; $i++) { 
        # code...
        if ($i % 2 != 0) {
            # code...
            echo '<i style="color: blue">'.$i+1 .'</i>';
        } else {
            # code...
            echo '<i style="color: red">'.$i+1 .'</i>';
        }
        echo "<span> </span>";
    }

    ?>