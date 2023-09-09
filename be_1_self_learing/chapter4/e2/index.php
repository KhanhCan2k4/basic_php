<?php 
    /**
     * TOPIC: EXERCISE 2 CHAPTER 3 
     * enter text to search and see result
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
            <h1>EXERCISE 2 CHAPTER 3</h1>
            <br>
            <input type="search" id="search-text" name="search-text" placeholder="Keyword...">
            <button name="search" >Search</button>
            <p>
                <?php 
                    //when the user entered submit button
                    if (isset($_POST['search'])) {
                        # code...
                        $infor = trim($_POST['search-text']);

                        if ($infor == '') {
                            # code...
                            echo "Please enter a valid search!";
                        } else {
                            # code...
                            echo "Result with keyword [$infor] :";
                        }

                    }
                ?>
            </p>
        </form>
    </div>
    <div class="back">
        <?php 
            require "../public/back.php"
        ?>
    </div>
</body>
</html>