<?php
    if(file_exists('config.php')){
        require_once "config.php";
    }
    if(file_exists('app/session.php')){
        require_once "app/session.php";
    }
    if(file_exists('app/cookie.php')){
        require_once "app/cookie.php";
    }
    if(file_exists('app/functions.php')){
        require_once "app/functions.php";
    }
    if(file_exists('app/database.php')){
        require_once "app/database.php";
    }
    if(file_exists('app/auth.php')){
        require_once "app/auth.php";
    }
?>