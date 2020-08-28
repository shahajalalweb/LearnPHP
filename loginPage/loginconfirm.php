
<?php
session_start();
if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == 'badsha@gmail.com' && $password == '52525') {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password; 
        header("Location: index.php");
    }else {
        echo "Email and Password worng! ";
    }
}else {
    header("Location: login.php");
}




?>