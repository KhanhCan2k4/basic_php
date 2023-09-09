<?php 
    /**
     * TOPIC: EXERCISE 4 CHAPTER 3 
     * BASIC CALCULATIONS
     * Enter 2  number and choose the operator
     * Conduct the calculation
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

        .cal-frame {
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
    <form class="cal-frame" method="post" 
    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
        <h2>CALCULATIONS PROCESSING RESULT</h2>
        <div class="cal-result">
            <?php 
                session_start();

                $calculator = [
                    'plus' => function ($a = 0, $b = 0)  {
                        return "Sum of ".$a." and ".$b." is ".$a + $b;
                    },

                    'minus' => function ($a = 0, $b = 0)  {
                        return "Subtraction of ".$a." and ".$b." is ".$a - $b;
                    },

                    'multiply' => function ($a = 0, $b = 0)  {
                        return "Multiplication of ".$a." and ".$b." is ".$a * $b;
                    },

                    'divide' => function ($a = 0, $b = 1)  {
                        if ($b == 0) {
                            # code...
                            return "Cannot divide by zero";
                        }
                        return "Division of ".$a." and ".$b." is ".$a / $b;
                    }
                ];

                # code...
                $number1 = $_SESSION['number-1'];
                $number2 = $_SESSION['number-2'];
                $operator = $_SESSION['operator'];

                if (isset($_SESSION['number-1']) && isset($_SESSION['number-2']) && isset($_SESSION['operator'])) {

                    $result = $calculator[$operator]($number1, $number2);

                    echo '<p class="content">'.$result.'</p>';

                }
            ?>
        </div>
        <button class="btn" type="submit" name="back">Back</button>
    </form>
    <?php 
        if (isset($_POST['back'])) {
            # code...
            header("Location: ./basiccalculations.php");
        }
    ?>
</body>
</html>