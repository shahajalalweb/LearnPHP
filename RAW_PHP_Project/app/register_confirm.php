<?php

require_once 'config.php';
    //check authenticate user 
    auth();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_password'])) {
        $_SESSION['message'] = "Field must not be empty!";
        header("Location: ". APP_URL ."/register.php");
        die();

    }else {
        $name = input_validate($_POST['name']);
        $email = input_validate($_POST['email']);
        $password = input_validate($_POST['password']);
        $confirm_password = input_validate($_POST['confirm_password']);

    }

    $email_sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1"; 
    $email_query = mysqli_query($connect , $email_sql);
    if ($email_query->num_rows > 0) {
        $_SESSION['message'] = "Email already exist!";
        header("Location: ". APP_URL ."/register.php");
        die();
    }

    if ($password != $confirm_password) {
        $_SESSION['message'] = "confirm must not be empty!";
        header("Location: ". APP_URL ."/register.php");
        die();
    }

    $hash_password = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$hash_password')";   

    $query = mysqli_query($connect , $sql);

    if ($query) {
            $_SESSION['success'] = "Register successfully! Now you can login !";
            header("Location: ". APP_URL ."/index.php");
            die();

        } else {
            $_SESSION['message'] = "Something went wrong!";
            header("Location: ". APP_URL ."/register.php");
            die();
        }
    } else {
       header("Location: ". APP_URL ."/register.php");
}
