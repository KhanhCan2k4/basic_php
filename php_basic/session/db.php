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
if ($_SESSION['is-login']) {
    # code...
    echo "Log in susses...<br>";
    echo "Wellcom ".$_SESSION['student-id']."???<br>";
} else {
    # code...
    echo "Log in fail...";
    echo "<a href='./session.php'>Back</a>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>