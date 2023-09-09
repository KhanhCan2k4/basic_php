<?php 
    /**
     * TOPIC: EXERCISE 3 CHAPTER 3 
     * enter information to from and see result
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
    <style>
        p {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="main">
        <form class="frame" method="post" 
        action="
        <?php 
            echo htmlspecialchars($_SERVER['PHP_SELF']);
        ?>
        ">
            <h1>EXERCISE 3 CHAPTER 3</h1>
            <br>
            <?php 
                session_start();

                if (isset($_SESSION['name'])) {
                    # code...
                    echo '<p>Name: '.$_SESSION['name'].'</p>';
                }

                if (isset($_SESSION['email'])) {
                    # code...
                    echo '<p>Email: '.$_SESSION['email'].'</p>';
                }

                if (isset($_SESSION['website'])) {
                    # code...
                    echo '<p>Website: '.$_SESSION['website'].'</p>';
                }

                if (isset($_SESSION['comment'])) {
                    # code...
                    echo '<p>Comment: '.$_SESSION['comment'].'</p>';
                }

                if (isset($_SESSION['gender'])) {
                    # code...
                    echo '<p>Gender: '.$_SESSION['gender'].'</p>';
                }

            ?>
            <button name="back" >Back</button>
            <?php 
                if (isset($_POST['back'])) {
                    # code...
                    header("Location: index.php");
                }
            ?>
        </form>
    </div>
    <div class="back">
        <?php 
            require "../public/back.php"
        ?>
    </div>
</body>
</html>