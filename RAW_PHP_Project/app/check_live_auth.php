<?php

$id = $_SESSION['auth']['id'];

$sql = "SELECT * FROM users WHERE id = $id LIMIT 1";   

$query = mysqli_query($connect , $sql);

if ($query->num_rows<1) {
    session_destroy();
    header("Location: ". APP_URL ."/login.php");
    die();
}


?>