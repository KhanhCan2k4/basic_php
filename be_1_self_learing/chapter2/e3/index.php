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
        require './User.php';
        session_start();
        if (isset($_SESSION['user-name'])) {
            # code...
            $user = $_SESSION['user'];
            $username = $user->getUsername();
            $fullname = $user->getFullName();

            $html = '
                <table>
                    <tr>
                        <th>Username</th>
                        <th>Fullname</th>
                    </tr>
                    <tr>
                    <td>'.$username.'</td>
                    <td>'.$fullname.'</td>
                    </tr>
                </table>';
            echo $html;
        } 
    ?>
    <a href="./register.php">Log out</a>
</body>
</html>