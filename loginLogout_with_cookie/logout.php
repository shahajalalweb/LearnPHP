<?php
            setcookie('username', $username, time() - (84600 * 30) );
            setcookie('password', $password, time() - (84600 * 30) );
            header("Location: login.php ");

?>