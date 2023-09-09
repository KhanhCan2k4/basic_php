<?php 
    /**
     * TOPIC: EXERCISE 3 CHAPTER 3 
     * enter information to from and see result
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
        input,textarea {
            display: block;
            text-align: left;
        }

        .radio {
            display: inline;
        }

        label {
            display: block;
            text-align: left;
        }

        body {
            height: 110%;
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
            <h1>EXERCISE 3 CHAPTER 3</h1>
            <br>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" 
            value="
            <?php echo isset($_COOKIE['name'])? $_COOKIE['name']: ""?>
            "
            >

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" 
            value="
            <?php echo isset($_COOKIE['email'])? $_COOKIE['email']: ""?>
            "
            >

            <label for="website">Website:</label>
            <input type="text" id="website" name="website" 
            value="
            <?php echo isset($_COOKIE['website'])? $_COOKIE['website']: ""?>
            "
            >
            
            <label for="comment">Comment:</label>
            <textarea name="comment" id="comment" cols="30" rows="3"><?php echo isset($_COOKIE['comment'])? $_COOKIE['comment']: ""?></textarea>
            
            <label for="gender">Gender:</label>
            <input class="radio" type="radio" name="gender" value="Female" 
            <?php echo isset($_COOKIE['gender']) && $_COOKIE['gender'] == 'Female'?  'checked="checked"': ""?>
            >
            <span>Female</span>

            <input class="radio" type="radio" name="gender" value="Male" 
            <?php echo isset($_COOKIE['gender']) && $_COOKIE['gender'] == 'Male'?  'checked="checked"': ""?>
            >
            <span>Male</span>

            <input class="radio" type="radio" name="gender" value="Other" 
            <?php echo isset($_COOKIE['gender']) && $_COOKIE['gender'] == 'Other'?  'checked="checked"': ""?>
            >
            <span>Other</span>

            <br>
            <button name="submit" >Submit</button>
        </form>
        <?php 
            session_start();

            if (isset($_POST['submit'])) {
                # code...
                $name = trim(isset($_POST['name'])? $_POST['name']: '');
                $email = isset($_POST['email'])? $_POST['email']: '';
                $website = isset($_POST['website'])? $_POST['website']: '';
                $comment = isset($_POST['comment'])? $_POST['comment']: '';
                $gender = isset($_POST['gender'])? $_POST['gender']: 'Male';

                setcookie('name', trim($name), time() + 24*3600);
                setcookie('email', trim($email), time() + 24*3600);
                setcookie('website', trim($website), time() + 24*3600);
                setcookie('comment', trim($comment), time() + 24*3600);
                setcookie('gender', trim($gender), time() + 24*3600);

                $_SESSION['name'] = trim($name);
                $_SESSION['email'] = $email;
                $_SESSION['website'] = $website;
                $_SESSION['comment'] = $comment;
                $_SESSION['gender'] = $gender;

                //go to the result page
                header("Location: result.php");
            }

        ?>
    </div>
    <div class="back">
        <?php 
            require "../public/back.php"
        ?>
    </div>
</body>
</html>