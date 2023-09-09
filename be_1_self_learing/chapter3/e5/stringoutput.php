<?php 
    /**
     * TOPIC: EXERCISE 5 CHAPTER 3 
     * STRING WITH SIGNS
     * 
     * NAME: LE VIET KHANH
     * CLASS: CD22TT11
     * ID: 22211TT2577
     * DATE: 2023/08/08
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

        .cal-frame {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, 20%);
            width: 440px;
            border: #ccc solid 1px;
            box-shadow: inset 5px 2px #ccc;
            text-align: center;
        }

        .title {
            margin-top: 60px;
            text-align: left;
            padding-left: 20px;
        }

        .content {
            text-align: left;
            padding-left: 50px;
        }

        .btn {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form class="cal-frame" method="post" 
    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
        <h2>STRING PROCESSING RESULT</h2>
        <div class="cal-result">
            <?php 
                session_start();
                # code...
                if (isset($_SESSION['string'])) {
                    # code...
                    $string = $_SESSION['string'];

                    $string = trim(strtolower($string));

                    $string = str_replace(' ', '-', $string);

                    $string = filterSign($string);

                    echo $string;
                }
                
                function filterSign($string)  {
                    $defautALetter = [
                        'a'=> ['á', 'à', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ằ' ,'ẳ', 'ẵ', 'ặ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ'],
                        'd'=> ['đ'],
                        'e'=> ['é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ'],
                        'i'=> ['í', 'ì', 'ỉ', 'ĩ', 'ị'],
                        'o'=> ['ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ'],
                        'u'=> ['ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự'],
                        'y'=> ['ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ'],
                    ];

                    $reStr = '';

                    for ($i=0; $i < strlen($string); $i++) { 
                        # code...
                        $char = substr($string, $i, 1);
                        
                        if (ord($char) >= 32 && ord($char) <= 126) {
                            # code...
                            $reStr = $reStr."". $char;
                        } else {
                            # code...
                            $char2 = substr($string, $i, 2);
                            $char3 = substr($string, $i, 3); 
                            foreach ($defautALetter as $key => $value) {
                                # code...
                                if (in_array($char2, $value)) {
                                    # code...
                                    $reStr = $reStr."". $key;
                                } else if (in_array($char3, $value)) {
                                    # code...
                                    $reStr = $reStr."". $key;
                                } 
                            }
                        }
                    }

                    return $reStr;
                }
            ?>
        </div>
        <button class="btn" type="submit" name="back">Back</button>
    </form>
    <?php 
        if (isset($_POST['back'])) {
            # code...
            header("Location: ./stringinput.php");
        }
    ?>
</body>
</html>