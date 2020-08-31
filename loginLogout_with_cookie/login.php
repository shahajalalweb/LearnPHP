<?php
    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        header("Location: index.php ");
    }

    if (isset($_COOKIE['error'])) {
        echo "<p style= 'color:red'>{$_COOKIE['error']}</p>";
        setcookie('error', 'username or password are invalid! ', time() - (84600 * 30) );
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
    <form action="check_login.php" method="POST">
        Email: <input type="username" name="username" placeholder= "Your username "><br/><br/> 
        Password: <input type="password" name="password" placeholder= "Your password "><br/> <br/> 
        <button type="submit" name="login">login </button>
    </form>
    
</body>
</html>