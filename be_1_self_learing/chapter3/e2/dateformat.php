<?php 
    /**
     * TOPIC: EXERCISE 2 CHAPTER 3 
     * STRING (DATE) FORMATING
     * dd/MM/yyy --> dd-MM-yy, Month day, Year
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

        .date-frame {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 50%);
            width: 400px;
            height: 170px;
            border: #ccc solid 1px;
            box-shadow: inset 5px 2px #ccc;
            text-align: center;
            padding-bottom: 20px;
        }

        .btn {
            margin-top: 20px;
        }

        #date {
            width: 100px;
            height: 30px;
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
    <form class="date-frame" method="post" 
        action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

        <h2>DATE FORMATING EXERCISE</h2>
        <label for="date">Enter date: </label>
        <input type="date" name="date" id="date" value="2023-01-01">
        <br>
        <button class="btn" name="submit">View result</button>
        <a href="../e6/index.php">Home</a>
    </form>
    <?php 
        session_start();

        if (isset($_POST['submit'])) {
            # code...
            $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_SPECIAL_CHARS);

            $_SESSION['date'] = $date;

            header("Location: ./dateformat_re.php");
        }
    ?>
</body>
</html>