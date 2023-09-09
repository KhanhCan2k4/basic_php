<?php
/**
    TOPIC: SESSIONS
    are stored in the server
    can be used across multiple pages

    NAME: LE VIET KHANH
    CLASS: CD22TT11
    ID: 22211TT2577
    DATE: 2023/08/02
*/
session_start();
if (isset($_POST['submit'])) {
    # code...
    $studenID = filter_input(INPUT_POST, 'student-id', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($studenID == '22211TT2577' && $password == '123') {
        # code...
        $_SESSION['student-id'] = $studenID;
        $_SESSION['is-login'] = TRUE;
    }
    else {
        # code...
        // echo "Log in fail...";
        // echo "<a href='./session.php'>Back</a>";
        $_SESSION['is-login'] = FALSE;
    }
    header("Location: ./db.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex Ex1</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <form action="
        <?php
            echo htmlspecialchars($_SERVER['PHP_SELF']);
        ?>
        " 
        method="post">
            <div>
                <label for="student-id">Student ID</label>
                <input type="text" name="student-id" id="student-id" class="form-control" value="">
            </div>


            <div>
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control" value="">
            </div>
            
            <button type="submit" value="submit" name="submit" class="btn btn-primary mt-2">Sign in</button>

        </form>

    </div>
</body>

</html>