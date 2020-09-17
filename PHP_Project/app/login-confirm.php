<?php


    require_once 'config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";   
        
            $query = mysqli_query ($connect , $sql);
        
            if ($query) {
                header("Location: ../index.php");
            }else {
                header("Location: ../login.php");
            }
        }else {
            header("Location: ../login.php");
        }
