<?php

require_once 'config.php';
    //check authenticate user 
    auth();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $_SESSION['message'] = "Email or password empty!";
        header("Location: ". APP_URL ."/login.php");
        die();

    }else {
        $email = input_validate($_POST['email']);
        $password = input_validate($_POST['password']);
    }

    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";   

    $query = mysqli_query($connect , $sql);

    if ($query->num_rows > 0) {

            foreach ($query as $user) {
                if (password_verify($password, $user['password'])) {
                    $_SESSION[auth] = [
                        'id' => $user['id'],
                        'name' => $user['name'],
                        'email' => $user['email'],
                        'created_at' => $user['created_at'],
                    ];
                    header("Location: ". APP_URL ."/index.php");
                    die();
                }else {
                    $_SESSION['message'] = "Email or password does not match!";
                    header("Location: ". APP_URL ."/login.php");
                    die();
                }
                    
            }

        } else {
            $_SESSION['message'] = "Email or password does not match!";
            header("Location: ". APP_URL ."/login.php");
            die();
        }
    } else {
       header("Location: ". APP_URL ."/login.php");
}
