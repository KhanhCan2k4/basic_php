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
            width: 440px;
            height: 250px;
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
    </style>
</head>
<body>
    <form class="date-frame" method="post" 
    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
        <h2>DATE FORMATING RESULT</h2>
        <div class="date-result">
            <?php 
                $MONTHS = [
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'
                ];

                session_start();

                if (isset($_SESSION['date'])) {
                    # code...
                    $date = $_SESSION['date']; // yyyy-mm-dd
                    $date = explode("-",$_SESSION['date']);

                    $year = $date[0];
                    $month = $date[1];
                    $day = $date[2];

                    $date0 = $day."/".$month."/".$year;
                    $date1 = substr($year, 2,2).'-'.$month.'-'.$day;
                    $date2 = $MONTHS[$month -1]." ".$day.", ".$year;

                    echo '<p class="title">Entered date: '.$date0.' </p>';
                    echo '<p class="content">a. '.$date1.' </p>';
                    echo '<p class="content">b. '.$date2.' </p>';
                }

            ?>
        </div>
        <button class="btn" type="submit" name="back">Back</button>
    </form>
    <?php 
        if (isset($_POST['back'])) {
            # code...
            header("Location: ./dateformat.php");
        }
    ?>
</body>
</html>