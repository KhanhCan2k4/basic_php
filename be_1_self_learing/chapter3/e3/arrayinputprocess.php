<?php 
    /**
     * TOPIC: EXERCISE 2 CHAPTER 3 
     * ARRAY INPUT
     * Proessing with array
     *  
     * NAME: LE VIET KHANH
     * CLASS: CD22TT11
     * ID: 22211TT2577
     * DATE: 2023/08/07
     */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, html {
            margin: 0;
            width: 100%;
            position: relative;
            box-sizing: border-box;
        }

        .array-frame {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, 20%);
            width: 440px;
            border: #ccc solid 1px;
            box-shadow: inset 5px 2px #ccc;
            text-align: center;
        }

        .title {
            margin-top: 60px;
            text-align: left;
            padding-left: 20px;
        }

        .content {
            text-align: left;
            padding-left: 50px;
        }

        .btn {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form class="array-frame" method="post" 
    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
        <h2>ARRAY FORMATING RESULT</h2>
        <div class="array-result">
            <?php 
            session_start();

                if (isset($_SESSION['array'])) {
                    # code...
                    $array = $_SESSION['array'];

                    //title
                    echo '<p class="title">Entered array: '.toString($array).'</p>';

                    //a
                    echo '<p class="content">a. Sum: '.toSum($array).'</p>';

                    //b
                    echo '<p class="content">b. Min: '.getMin($array).'</p>';

                    //c
                    echo '<p class="content">c. Max: '.getMax($array).'</p>';

                    //d
                    echo '<p class="content">d. Delete last element: '.toString(deleteLast($array)).'</p>';

                    //e
                    echo '<p class="content">e. Delete first element: '.toString(deleteFirst($array)).'</p>';
                    

                }

                function toString($array) {
                    return implode(", ", $array);
                }

                function toSum($array) {
                    $sum = 0;
                    foreach($array as $value) {
                        $sum += (int) $value;
                    }

                    return $sum;
                }

                function getMin($array)  {
                    $min = $array[0];

                    for ($i=0; $i < count($array); $i++) { 
                        # code...
                        $min = ($array[$i] < $min) ? $array[$i] : $min;
                    }

                    return $min;
                }

                function getMax($array)  {
                    $max = $array[0];

                    for ($i=0; $i < count($array); $i++) { 
                        # code...
                        $max = ($array[$i] > $max) ? $array[$i] : $max;
                    }
                    return $max;
                }

                function deleteLast($array) {
                    $newArray = array();
                    for ($i=0; $i < count($array) -1; $i++) { 
                        # code...
                        array_push($newArray, $array[$i]);
                    }

                    return $newArray;
                }

                function deleteFirst($array) {
                    $newArray = array();
                    for ($i=1; $i < count($array); $i++) { 
                        # code...
                        array_push($newArray, $array[$i]);
                    }

                    return $newArray;
                }

            ?>
        </div>
        <button class="btn" type="submit" name="back">Back</button>
    </form>
    <?php 
        if (isset($_POST['back'])) {
            # code...
            header("Location: ./arrayinput.php");
        }
    ?>
</body>
</html>