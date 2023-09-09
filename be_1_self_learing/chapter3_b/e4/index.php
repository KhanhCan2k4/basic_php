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
        .frame {
            width: 800px;
        }

        p {
            height: 100px;
            overflow: auto;
        }

        h1 {
            text-align: center;
        }

        .dish, .meal {
            width: 100%;
        }

        .dish {
            height: 30px;
        }

    </style>
</head>
<body>
    <div class="main">
        <form class="frame " method="post"
        action="
        <?php 
            echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>
        ">
        <h1>MENU</h1>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <label for="appitizers">Appitizers:</label>
                        <select name="appitizers[]" id="appitizers" size="4" class="meal" multiple>
                            <?php
                                foreach ($menu["appitizers"] as $key => $value) {
                                    # code...
                                    echo '<option class="dish" value="'.$key.'">'.$value.'</option>';
                                }
                            ?>
                        </select>
    
                        
                    </div>
                    <div class="col-4">
                        
                        <label for="main-courses">Main Course: </label>
                        <select name="main-courses[]" id="main-courses" size="4" class="meal" multiple>
                            <?php
                                foreach ($menu["main-courses"] as $key => $value) {
                                    # code...
                                    echo '<option class="dish" value="'.$key.'">'.$value.'</option>';
                                }
                            ?>
                        </select>
        
                    </div>
                    <div class="col-4">
                        <label for="desserts">Desserts: </label>
                        <select name="desserts[]" id="desserts" size="4" class="meal" multiple>
                            <?php
                                foreach ($menu["desserts"] as $key => $value) {
                                    # code...
                                    echo '<option class="dish" value="'.$key.'">'.$value.'</option>';
                                }
                            ?>
                        </select>
    
                    </div>
                </div>
            </div>
            <button class="link" name="submit">Submit</button>
        </form>
    </div>
        <?php 
            session_start();
            
            if (isset($_POST['submit'])) {
                # code...
                $appitizers = isset($_POST['appitizers']) ? $_POST['appitizers']:[];
                $mainCourses = isset($_POST['main-courses']) ? $_POST['main-courses'] :[];
                $desserts = isset($_POST['desserts']) ? $_POST['desserts'] :[];

                $_SESSION['appitizers'] = $appitizers;
                $_SESSION['main-courses'] = $mainCourses;
                $_SESSION['desserts'] = $desserts;

                header("Location: menu.php");
                // var_dump($_SESSION['appitizers']);
                // var_dump($_SESSION['main-courses']);
                // var_dump($_SESSION['desserts']);
            }
        ?>
    <div class="back">
        <?php 
            require "../public/back.php";
        ?>
    </div>
</body>
</html>