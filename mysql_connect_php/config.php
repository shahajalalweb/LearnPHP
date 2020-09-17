<?php
//mysql connect php
$host ='localhost';
$user ='root';
$password ='';
$database = 'table';

$connect = mysqli_connect($host,$user,$password, $database);

if (!$connect) {
    echo 'connection fail ! ';
};


?>