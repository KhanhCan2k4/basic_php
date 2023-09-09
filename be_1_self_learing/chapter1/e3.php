<?php 
    /**
     * TOPIC: EXERCISE 3 CHAPTER 1
     * CREATE TABLE WITH 3 FIELDS AND 10 ROWS
     * 
     * NAME: LE VIET KHANH
     * CLASS: CD22TT11
     * ID: 22211TT2577
     * DATE: 2023/08/04
     */

     $html = '<table>';
     $style = "<style>
     table {
        width: 100%;
        border:1px solid black;
     }
     th, td {
       border:1px solid black;
       text-align:left;
       padding-left: 25px;
     }
     </style>";

     for ($j=0; $j < 3; $j++) { 
        # code...
        $html = $html. "<th>Title ".$j+1 ."</th>";
    }

    for ($i=0; $i < 10; $i++) { 
        # code...
        $html = $html."<tr>";
        for ($j=0; $j < 3; $j++) { 
            # code...
            $html = $html. "<td>Column ".$j+1 ." Row" .$i+1 ."</td>";
        }

        $html = $html."</tr>";
    }

    $html = $html."</table>";

    echo $html.$style;

?>