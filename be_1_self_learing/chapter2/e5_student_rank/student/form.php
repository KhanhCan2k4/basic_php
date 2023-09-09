<?php 
    /**
     * TOPIC: EXERCISE 5 CHPATER 2 
     * log in information
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
</head>
<body>
    <h1># Register page #</h1>
    <form action="
        <?php
            echo htmlspecialchars($_SERVER['PHP_SELF']);
        ?>
        " 
        method="post" >
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
            <label for="gpa">GPA</label>
            <input type="number" min="0.0" max="10.0" step="0.01" name="gpa" id="gpa" class="form-control" value="">
        </div>

        <button type="submit" name="submit" class="btn btn-primary mt-2">Register</button>

        
    </form>

<?php 
    require '../Student.php';

    
    session_start();
    if (isset($_POST['submit'])) {
        # code...
        $username = filter_input(INPUT_POST, 'user-name', FILTER_SANITIZE_SPECIAL_CHARS);
        $firstname = filter_input(INPUT_POST, 'first-name', FILTER_SANITIZE_SPECIAL_CHARS);
        $lastname = filter_input(INPUT_POST, 'last-name', FILTER_SANITIZE_SPECIAL_CHARS);
        $gpa = filter_input(INPUT_POST, 'gpa', FILTER_SANITIZE_SPECIAL_CHARS);

        $student = new Student($username, "", $firstname, $lastname, $gpa);

        if ($student->isValid()) {
            # code...
            $_SESSION['student'] = $student;
            header("Location: ./index.php");
        } else {
            # code...
            echo '<p class="message" style="color: red;">Please enter correct information</p>';
        }

    }
?>
</body>
</html>