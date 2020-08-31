<?php
    if (!isset($_COOKIE['username']) || ! isset($_COOKIE['password'])) {
        header("Location: login.php ");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authenticate with cookie</title>
</head>
<body>
    <h3>welcame to <?php
        if (isset($_COOKIE['username'])) {
            echo $_COOKIE['username'];
        }
    ?></h3>
    <p>Your are logged in ! </p>
    <a href="logout.php">Logout?</a>
    
</body>
</html>