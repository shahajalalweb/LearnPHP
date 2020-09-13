<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        # code...
    }else {
        header("Location: login.php")
    }

?>