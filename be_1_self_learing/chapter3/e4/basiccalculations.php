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
            top: 50%;
            left: 50%;
            transform: translate(-50%, 50%);
            width: 600px;
            height: 150px;
            border: #ccc solid 1px;
            box-shadow: inset 5px 2px #ccc;
            text-align: center;
            padding-bottom: 30px;
        }

        .btn {
            margin-top: 10px;
        }

        #cal {
            margin-top: 5px;
            width: 500px;
            height: 10px;
            margin-left: 10px;
            padding: 5px;
        }

        #number-1, #number-2 {
            text-align: right;
            padding-right: 3px;
        }

        a {
            display: block;
            text-decoration: none;
            color: aquamarine;
            background: cadetblue;
            width: fit-content;
            margin: 5px auto;
            padding: 5px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <form class="cal-frame" method="post" 
        action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

        <h2>CALCULATIONS PROCESSING EXERCISE</h2>
        <label for="number-1">Enter number 1: </label>
        <input type="number" name="number-1" step="0.0001" value="0" id="number-1"  >
        <br>
        <label for="number-2">Enter number 2: </label>
        <input type="number" name="number-2" step="0.0001" value="0" id="number-2" >
        <br>
        <select name="operator" id="operator">
            <option value="plus">Plus</option>
            <option value="minus">Minus</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <button class="btn" name="submit">View result</button>
        <a href="../e6/index.php">Home</a>
    </form>
    <?php 
        session_start();

        if (isset($_POST['submit'])) {
            # code...
            $number1 = (float) filter_input(INPUT_POST, 'number-1', FILTER_SANITIZE_SPECIAL_CHARS);
            $number2 = (float) filter_input(INPUT_POST, 'number-2', FILTER_SANITIZE_SPECIAL_CHARS);
            $operator = filter_input(INPUT_POST, 'operator', FILTER_SANITIZE_SPECIAL_CHARS);

            $_SESSION['number-1'] = $number1;
            $_SESSION['number-2'] = $number2;
            $_SESSION['operator'] = $operator;

            header("Location: ./basiccalculationsprocess.php");
        }
    ?>
</body>
</html>
