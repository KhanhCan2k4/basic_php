<?php 
    /**
     * TOPIC: EXERCISE 3 CHAPTER 3 
     * ARRAY INPUT
     * Enter n more than 10 elements array
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
            top: 50%;
            left: 50%;
            transform: translate(-50%, 50%);
            width: 600px;
            height: 150px;
            border: #ccc solid 1px;
            box-shadow: inset 5px 2px #ccc;
            text-align: center;
            padding-bottom: 35px;
        }

        .btn {
            margin-top: 10px;
        }

        #array {
            margin-top: 5px;
            width: 500px;
            height: 10px;
            margin-left: 10px;
            padding: 5px;
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
    <form class="array-frame" method="post" 
        action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

        <h2>ARRAY PROCESSING EXERCISE</h2>
        <label for="array">Enter array: </label>
        <input type="text" name="array" id="array" >
        <br>
        <button class="btn" name="submit">View result</button>
        <a href="../e6/index.php">Home</a>
    </form>
    <?php 
        session_start();

        if (isset($_POST['submit'])) {
            # code...
            $array_str = filter_input(INPUT_POST, 'array', FILTER_SANITIZE_SPECIAL_CHARS);
            $array_str = str_replace(" ", "", $array_str);
            $array_str = str_replace(",,", ",", $array_str);

            $array = explode(",", $array_str); // string --> array

            $_SESSION['array'] = $array;

            header("Location: ./arrayinputprocess.php");
        }
    ?>
</body>
</html>
