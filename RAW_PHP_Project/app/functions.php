<?php

/**
     * check authenticate user
     * @return boolean 
     */
    function auth(){
        if (isset($_SESSION['auth']) && !empty($_SESSION['auth'])) {
            header("Location: ". APP_URL ."/index.php");
        }
        return true;
    }

/**
     * check guest user
     * @return boolean 
     */
    function guest(){
        if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])) {
            header("Location: ". APP_URL ."/login.php");
        }
        return true;
    }

/**
     * user logout
     * @return boolean 
     */
    function logout(){
        //user logout
        session_destroy();
        header("Location: ". APP_URL ."/login.php");
        return true;
    }
    
/**
 * input field validation
 * @param string, integer
 * @return string, integer
 */
    function input_validate($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }