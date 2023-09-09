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
        action="
        <?php 
            echo htmlspecialchars($_SERVER['PHP_SELF']);
        ?>
        ">
            <h1>EXERCISE 1 CHAPTER 6</h1>
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
                            echo "Result with keyword [$infor] :<br>";

                            //searching and return results
                            $batabase = new database();
                            $returnProducts = $batabase->searchProductsByName($infor);
                            
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
                        }

                    }

                    //when the user entered view all button
                    if (isset($_POST['view'])) {
                        # code...
                        header("Location: products.php");
                    }

                ?>
            </p>
            <button name="view">View All</button>
        </form>
    </div>
</body>
</html>