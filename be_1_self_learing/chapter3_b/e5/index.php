<?php 
    /**
     * TOPIC: EXERCISE 5 CHAPTER 3 
     * show items information
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
        .main {
            height: fit-content;
        }

        .item {
            width: 800px;
            height: calc(800*0.3*0.8px);
            margin: 20px;
        }

        .image {
            width: 30%;
            float: left;
            height: 100%;
        }

        img {
            width: 80%;
            height: auto;
        }

        .content {
            height: 100%;
            float: 100%;
        }

        .title {
            color: #1967BF;
            width: auto;
            height: 20%;
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
            $products = array(
                "p01" => array (
                    "id" => "p01",
                    "name" => "Apple iPhone 5S Silver 16GB",
                    "price" => 219.95,
                    "desc" => "This Certified Refurbished product is tested and Certified to look and work like new, with limited to No wear. The refurbishing process includes functionality  testing,  inspection,  and  repackaging. The  product is  backed  by  a minimum 90-day warranty, and may arrive in a generic box. The product ships with a charger and cable, but does not include headphone, Manual or SIM card. Only select sellers who maintain ahigh performance bar may offer CertifiedRefurbished products on Amazon.",
                    "image" => "iphone1.jpg"
                ),
                "p02" => array (
                    "id" => "p02",
                    "name" => "Apple iPhone 5C White 16GB",
                    "price" => 183.95,
                    "desc" => "Factory unlocked iPhones are GSM models and are ONLY compatible with  GSM  carriers  like  AT&T  and  T-Mobile  as  well  as  other  GSM networks  around  the  world.  They  WILL  NOT  WORK with  CDMA  carriers  like Sprint, Verizon and the likes. The phone requires a nano SIM card (not included in the package).",
                    "image" => "iphone2.jpg"
                ),
                "p03" => array (
                    "id" => "p03",
                    "name" => "Apple iPhone 6 16GB Space Grey",
                    "price" => 449.99,
                    "desc" => "Unlocked cell phones are compatible with GSM carriers like AT&T and T-Mobile as well as with GSM SIM cards (e.g. H20, Straight Talk, and select prepaid carriers). Unlocked cellphones will not work with CDMA Carriers like Sprint, Verizon, Boost or Virgin.",
                    "image" => "iphone3.jpg"
                ),
                // "p04" => array (
                //     "id" => "p04",
                //     "name" => "Apple iPhone 6 16GB Space Grey",
                //     "price" => 449.99,
                //     "desc" => "Unlocked cell phones are compatible with GSM carriers like AT&T and T-Mobile as well as with GSM SIM cards (e.g. H20, Straight Talk, and select prepaid carriers). Unlocked cellphones will not work with CDMA Carriers like Sprint, Verizon, Boost or Virgin.",
                //     "image" => "iphone3.jpg"
                // )
            );

            foreach ($products as $key => $item) {
                # code...
                echo '
                <div class="item">
                    <div class="image">
                        <img src="../public/images/'.$item["image"].'" alt="">
                    </div>
                    <div class="content">
                        <h2 class="title">'.$item['name'].'</h2>
                        <div class="price">
                            <label>Price: </Label>
                            <div class="price-value">'.$item['price'].'</div>
                        </div>
                        <div class="description">'.$item['desc'].'</div>
                    </div>
                </div>';
            }
            
        ?>

    </div>
    <div class="back">
        <?php 
            require "../public/back.php";
        ?>
    </div>
</body>
</html>