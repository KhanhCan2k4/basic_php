<?php 
    /**
     * TOPIC: EXERCISE 1 CHAPTER 3 
     * enter name and see result
     * 
     * NAME: LE VIET KHANH
     * CLASS: CD22TT11
     * ID: 22211TT2577
     * DATE: 2023/08/09
     */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="main">
        <form class="frame" method="post" 
        action="
        <?php 
            echo htmlspecialchars($_SERVER['PHP_SELF']);
        ?>
        ">
            <h1>EXERCISE 1 CHAPTER 3</h1>
            <br>
            <label for="name">Enter your name: </label>
            <input type="text" id="name" name="name"
            value="
            <?php 
                if (isset($_COOKIE['name'])) {
                    # code...
                    echo trim($_COOKIE['name']);
                }
            ?>
            "
            >
            <button name="submit" class="link">Enter</button>
        </form>
        <?php 
            session_start();

            //when the user entered submit button
            if (isset($_POST['submit'])) {
                # code...
                $name = $_POST['name'];

                //stored `name` in the session
                $_SESSION['name'] = $name;

                 //stored `name` in the cookie
                 setcookie('name', $name, time() + 24*36000);

                //go adhead to the view page
                header("Location: result.php");
            }
        ?>
    </div>
    <div class="back">
        <?php 
            require "../public/back.php"
        ?>
    </div>
</body>
</html>