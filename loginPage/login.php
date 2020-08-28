<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>
<body>
    <form action="loginconfirm.php" method="POST">
        Email: <input type="email" name="email"><br/><br/> 
        Password: <input type="password" name="password"><br/> <br/> 
        <button type="submit">login </button>
    </form>
    
</body>
</html>