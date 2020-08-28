<?php
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
    header('Location: login.php');
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
    <h2>WoW ! Your login Successfull . </h2>
    <p><?php
        if (isset($_SESSION['email'])) {
            echo $_SESSION['email'];
        }
    ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>