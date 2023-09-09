<?php 
     /**
     * TOPIC: EXERCISE 5 CHPATER 2 
     * view information
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
    <style>
        table {
            width: 100%;
        }
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Well come to my home page <3</h1>
    <?php 
        require '../Student.php';
        session_start();
        if (isset($_SESSION['student'])) {
            # code...
            //get the student information
            $student = $_SESSION['student'];

            //render the student information
            $html = '
                <table>
                    <tr>
                        <th>Username</th>
                        <th>Fullname</th>
                        <th>GPA</th>
                        <th>Rank</th>
                    </tr>
                    <tr>
                        <td>'.$student->getUsername().'</td>
                        <td>'.$student->getFullname().'</td>
                        <td>'.$student->getGpa().'</td>
                        <td>'.$student->rank().'</td>
                    </tr>
                </table>';
            echo $html;
        } 
    ?>
    <a href="./form.php">Log out</a>
</body>
</html>