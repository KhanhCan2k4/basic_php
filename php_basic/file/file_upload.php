<?php
/**
    TOPIC: FILE

    NAME: LE VIET KHANH
    CLASS: CD22TT11
    ID: 22211TT2577
    DATE: 2023/08/02
*/

print_r($_FILES);
if (isset($_POST['submit'])) {
    # code...
    print_r($_FILES);
        // $file_name = $_FILES['up-img']['name'];
        
        // if (!empty($_FILES['up-img']['name'])) {
        //     $permited_extensitons = ['jpg', 'png', 'gif'];
        //     $message = [ '<p style="color: green;">File uploaded successfully</p>' , '<p style="color: red;">No file uploaded</p>'];
        //     # code...
        //     $file_size = $_FILES['up-img']['size'];
        //     $file_tmp = $_FILES['up-img']['tmp_name'];
        //     $file_type = $_FILES['up-img']['type'];
        //     $file_error = $_FILES['up-img']['error'];

        //     $file_path_des = './uploads/'. time().'-'.$file_name;

        //     $file_ex = explode('.', $file_name);
        //     $file_ex = strtolower( end($file_ex));

        //     //validate 
        //     // if (in_array($file_ex, $permited_extensitons)) {
        //     //     move_uploaded_file($file_tmp, $file_path_des);
        //     // }
            
        //     move_uploaded_file($file_tmp, $file_path_des);
        
        
        
        // } else {
        //     # code...

        // }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="
    <?php
        echo $_SERVER['PHP_SELF'];
    ?>
    " method="post">
        Choose a image file
        <input type="file" name="up-img">
        <input type="submit" value="submit" name="submit">
    </form>
    <!-- <?php
        // echo $message[0];
    ?> -->
</body>
</html>