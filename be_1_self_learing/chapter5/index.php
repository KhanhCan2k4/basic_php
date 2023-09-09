<?php 
    /**
     * TOPIC: EXERCISE 3 CHAPTER 5
     * PRODUCTS WITH MYSQL DATABASE
     * 
     * NAME: LE VIET KHANH
     * CLASS: CD22TT11
     * ID: 22211TT2577
     * DATE: 2023/08/13
     */

    require './app/config.php';
    require './app/bd.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .main {
            height: fit-content;
        }

        .item {
            width: 100%;
            height: calc(800*0.3*0.8px);
            margin: 20px;
        }

        .image {
            width: 30%;
            float: left;
            height: 100%;
        }

        img {
            width: auto;
            height: 100%;
        }

        .content {
            height: 100%;
            float: 100%;
        }

        .title {
            color: #1967BF;
            width: auto;
            height: 40%;
            font-size: 2em;
            margin-bottom: 0;
        }

        .price {
            width: auto;
            height: 20%;
        }

        label {
            float: left;
            color: #000;
            font-weight: bold;
            line-height: 23px;
            padding-right: 5px;
        }
        
        .price-value {
            color: #C0CA33;
            font-weight: bold;
            font-size: 1.2em;
        }

        .description {
            float: none;
            width: auto;
            height: 50%;
            overflow:auto ; 
            /* text-overflow:ellipsis;
            white-space:nowrap;  */
        }

    </style>
</head>
<body>
    <div class="main">
        <?php 

        if (!isset($_SESSION['limit'])) {
            # code...
            $_SESSION['limit'] = 4;
        }

        $db = new db();
            $products = $db->getProducts($_SESSION['limit']);

            foreach ($products as $key => $item) {
                $protype = $db->getProtype($item['type_ID']);
                // var_dump($protype);
                // echo "../images/".$protype[0]['type_img'];
                # code...
                echo '
                <div class="item">
                    <div class="image">
                        <img src="./images/'.$protype[0]['type_img'].'" alt="./images/'.$protype[0]['type_img'].'" >
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
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <button name="view-more" class="link" id="view-more">View More</button>
    </form>
    
    <?php 
        if (isset($_POST['view-more'])) {
            # code...
            $_SESSION['limit'] = 1000;
        }
    ?>
</body>
</html>