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
            <p>
                <?php 
                session_start();

                if (isset($_SESSION['name'])) {
                    # code...
                    $name = $_SESSION['name'];
                    echo "Hello ".$name;
                }

                //back to index page
                if (isset($_POST['back'])) {
                    # code...
                    header('Location: index.php');
                }
                ?>
            </p>
            <button name="back" class="link">Back</button>
        </form>
    </div>
    <div class="back">
        <?php 
            require "../public/back.php"
        ?>
    </div>
</body>
</html>