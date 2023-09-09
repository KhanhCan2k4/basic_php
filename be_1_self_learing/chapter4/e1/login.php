<?php 
    /**
     * TOPIC: EXERCISE 1 CHAPTER 4
     * LOG IN 
     * 
     * NAME: LE VIET KHANH
     * CLASS: CD22TT11
     * ID: 22211TT2577
     * DATE: 2023/08/11
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
            <h1>EXERCISE 1 CHAPTER 4</h1>
            <br>
            <div>
                <label for="username">Enter your Username: </label>
                <input type="text" id="username" name="username"
                value="
                <?php 
                    if (isset($_COOKIE['username'])) {
                        # code...
                        echo trim($_COOKIE['username']);
                    } else {
                        # code...
                        echo "";
                    }
                ?>
                "
                >
            </div>

            <div>
                <label for="password">Enter your Password: </label>
                <input type="password" id="password" name="password" 
                value="<?php 
                        if (isset($_COOKIE['password'])) {
                            # code...
                            echo trim($_COOKIE['password']);
                        } else {
                            # code...
                            echo "";
                        }
                    ?>">
            </div>


            <div>
                <label for="save">Do you want to save your account?</label>
                <input type="checkbox" id="save" name="save">
            </div>

            <?php 
                session_start();

                //when the user entered submit button
                if (isset($_POST['submit'])) {
                    # code...
                    $username = isset($_POST['username']) ? trim($_POST['username']) : "";
                    $password = isset($_POST['password']) ? trim($_POST['password']) : "" ;

                    //check if the user is admin
                    if ($username == "admin" && $password == "123456") {
                        # code...
                        //stored `username` in the session
                        $_SESSION['username'] = $username;

                        if (isset($_POST['save'])) {
                            # code...
                            //stored `username` in the cookie
                            setcookie('username', $username, time() + 24*36000);
                            //stored `password` in the cookie
                            setcookie('password', $password, time() + 24*36000);
                        }

                        //go adhead to the view page
                        header("Location: admin.php");
                    } else {
                        # code...
                        echo '<p style="color: red;">Log in unsecessfully !</p>';
                    }

                }
            ?>
            <button name="submit" class="link">Log in</button>
        </form>
    </div>
    <div class="back">
        <?php 
            require "../public/back.php"
        ?>
    </div>
</body>
</html>