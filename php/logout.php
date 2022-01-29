<?php 
        // setcookie('username', $email, 0 , "/");
        setcookie('username', $_COOKIE['username'],  time() - 1 , "/");

        header("Location: ../");

        
?>