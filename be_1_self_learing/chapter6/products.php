<?php 
/**
     * TOPIC: EXERCISE 1 CHAPTER 6 
     * SERACH, SPEPERATING PAGES, VIEW ALL PAGES
     * 
     * NAME: LE VIET KHANH
     * CLASS: CD22TT11
     * ID: 22211TT2577
     * DATE: 2023/08/09
     */
    require "./database/config.php";
    require "./database/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .frame {
            width: 70%;
        }
    </style>
</head>
<body>
    <div class="main">
        <form class="frame" method="post" 
        action="index.php">
            <h1>EXERCISE 1 CHAPTER 6</h1>
            <br>
            <p>
                <?php 
                $batabase = new database();
                $returnProducts = $batabase->getProducts();
                
                foreach ($returnProducts as $key => $item) {
                    echo '
                    <div class="item">
                        <div class="image">
                            <img src="" alt="" >
                        </div>
                        <div class="content">
                            <h2 class="title">'.$item['name'].'</h2>
                            <div class="price">
                                <label>Price: </Label>
                                <div class="price-value">'.$item['price'].'</div>
                            </div>
                            <div class="description">'.$item['description'].'</div>
                        </div>
                    </div>';
                }

                ?>
            </p>
            <button name="back">Back</button>
        </form>
    </div>
</body>
</html>