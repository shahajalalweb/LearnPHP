<?php
//mysql connect php
$host ='localhost';
$user ='root';
$password ='';
$database = 'php_project';

$connect = mysqli_connect($host,$user,$password, $database);

if (!$connect) {
    echo 'connection fail ! ';
}

?>