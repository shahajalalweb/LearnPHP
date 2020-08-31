<?php
    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        header("Location: index.php ");
    }


    if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']) ) {
        //get username and password 
        $username = $_POST['username'];
        $password = $_POST['password'];
        //set username & password tenasfore index.php
        if ( $username == 'badsha' && $password == '52525') {
            setcookie('username', $username, time() + (84600 * 30) );
            setcookie('password', $password, time() + (84600 * 30) );
            header('Location: index.php');
        } else{
            setcookie('error', 'username or password are invalid! ', time() + (84600 * 30) );
            header("Location: login.php ");
        }
    } else {
        header("Location: login.php");
    }