<?php
/**
    TOPIC:  BUILD-IN GLOBAL VARIABLES
    NAME: LE VIET KHANH
    CLASS: CD22TT11
    ID: 22211TT2577
    DATE: 2023/08/02
*/

    // print_r($_SERVER);

    // print_r($_GET);
    // echo $_GET['age'];
    // if (isset($_GET['name'])) {
    //     # code...
    //     echo $_GET['name'];
    // }

    $name = filter_var($_GET['name'] ?? '', FILTER_SANITIZE_EMAIL);
    $age = htmlspecialchars($_POST['age'] ?? '');

    echo $name;

?>