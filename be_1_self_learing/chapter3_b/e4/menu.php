<?php 
    /**
     * TOPIC: EXERCISE 4 CHAPTER 3 
     * MENU
     * 
     * NAME: LE VIET KHANH
     * CLASS: CD22TT11
     * ID: 22211TT2577
     * DATE: 2023/08/09
     */
    require "data.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <style>
       table {
        width: 100%;
       }

       th, td {
       border:1px solid black;
       text-align:left;
       padding-left: 25px;
     }
    </style>
</head>
<body>
    <form class="main" method="post"
    action="
    <?php 
        echo htmlspecialchars($_SERVER['PHP_SELF']);
    ?>
    ">
        <div class="frame">
            <h1>Your menu</h1>
            <br>
            <table>
                <tr>
                    <th>Appitizer</th>
                    <th>Main Course</th>
                    <th>Dessert</th>
                </tr>
            <?php 
                session_start();

                // var_dump($_SESSION['appitizers']);
                // var_dump($_SESSION['main-courses']);
                // var_dump($_SESSION['desserts']);

                $appitizerIndexes = $_SESSION['appitizers'];
                $mainCourseIndexes = $_SESSION['main-courses'];
                $dessertIndexes = $_SESSION['desserts'];

                $maxLength = max(count($appitizerIndexes), count($mainCourseIndexes), count($dessertIndexes));
                // echo $maxLength;

                for ($i=0; $i < $maxLength; $i++) { 
                    # code...
                    $appitizer = getDish($menu['appitizers'], getDish($appitizerIndexes, $i));
                    $mainCourse = getDish($menu['main-courses'], getDish($mainCourseIndexes, $i));
                    $dessert = getDish($menu['desserts'], getDish($dessertIndexes, $i));
                    
                    $html = 
                    '<tr>
                        <td>'.$appitizer.'</td>
                        <td>'.$mainCourse.'</td>
                        <td>'.$dessert.'</td>
                    </tr>';
                    echo $html;
                }

                function getDish($array, $key){
                    if (!array_key_exists($key, $array)) {
                        # code...
                        return "";
                    }

                    return $array[$key];
                }

                if (isset($_POST['back'])) {
                    # code...
                    header("Location: index.php");
                }
            ?>
            </table>
            <button name="back" class="link">Back</button>
        </div>
    </form>
    <div class="back">
        <?php 
            require "../public/back.php";
        ?>
    </div>
</body>
</html>