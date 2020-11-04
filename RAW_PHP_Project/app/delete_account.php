<?php

require_once 'config.php';
//check guest user 
guest();
$id = $_SESSION['auth']['id'];

$sql = "DELETE FROM users WHERE id = '$id'";   

$query = mysqli_query($connect , $sql);

if ($query) {
    $_SESSION['message'] = "Your account deleted successfully!";
    unset($_SESSION['auth']);
    header("Location: ". APP_URL ."/login.php");
}else {
    header("Location: ". APP_URL ."/index.php");
}