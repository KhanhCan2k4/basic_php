<?php 
    /**
     * TOPIC: EXERCISE 5 CHAPTER 3 
     * STRING WITH SIGNS
     * 
     * NAME: LE VIET KHANH
     * CLASS: CD22TT11
     * ID: 22211TT2577
     * DATE: 2023/08/08
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
            padding-bottom: 20px;
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

        <h2>STRING PROCESSING EXERCISE</h2>
        
        <label for="string">Enter string: </label>
        <input type="text" name="string" id="string" >
        <br>
        <button class="btn" name="submit">View result</button>
        <a href="../e6/index.php">Home</a>
    </form>
    <?php 
        session_start();

        if (isset($_POST['submit'])) {
            # code...
            $string = filter_input(INPUT_POST, 'string', FILTER_SANITIZE_SPECIAL_CHARS);

            $_SESSION['string'] = $string;

            header("Location: ./stringoutput.php");
        }
    ?>
</body>
</html>
