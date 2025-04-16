<?php
session_start(); 


if (isset($_SESSION['user'])) {
    unset($_SESSION['user']); 
    $_SESSION['msg'] = "Logout Success"; 
}
header('Location: ../login.php'); 
?>

