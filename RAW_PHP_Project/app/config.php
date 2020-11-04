<?php
    session_start();

        require_once 'functions.php';

//site url
    define('APP_URL' , 'http://localhost/LearnPHP/RAW_PHP_Project');



//mysql connect php

 /* $host ='localhost';
    $user ='root';
    $password ='';
    $database = 'php_project';

    $connect = mysqli_connect($host,$user,$password, $database);*/

    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','php_project');
    $connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$connect) {
    echo 'connection fail ! ';
}

?>