
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1># Register page #</h1>
    <form action="
        <?php
            echo htmlspecialchars($_SERVER['PHP_SELF']);
        ?>
        " 
        method="post">
        <div>
            <label for="user-name">Username</label>
            <input type="text" name="user-name" id="user-name" class="form-control" value="">
        </div>
        
        <div>
            <label for="first-name">Firstname</label>
            <input type="text" name="first-name" id="first-name" class="form-control" value="">
        </div>
        
        <div>
            <label for="last-name">Lastname</label>
            <input type="text" name="last-name" id="last-name" class="form-control" value="">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" value="">
        </div>

        <button type="submit" value="submit" name="submit" class="btn btn-primary mt-2">Register</button>
        
    </form>

    <?php 
    require './User.php';

    session_start();
    if (isset($_POST['submit'])) {
        # code...
        $username = filter_input(INPUT_POST, 'user-name', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $firstname = filter_input(INPUT_POST, 'first-name', FILTER_SANITIZE_SPECIAL_CHARS);
        $lastname = filter_input(INPUT_POST, 'last-name', FILTER_SANITIZE_SPECIAL_CHARS);

        $user = new User($username, $password, $firstname, $lastname);

        $_SESSION['user'] = $user;

        header("Location: ./index.php");
    }
    ?>

    <a href="./login.php">Have an account? Log in</a>
</body>
</html>