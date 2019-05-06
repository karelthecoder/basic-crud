<?php 
    session_start();
    if(!isset($_SESSION['username']) && !isset($_SESSION['level'])) {
        header('Location: template/login.php');
    }
?>