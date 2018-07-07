<?php
require_once ('models/login-register.php');

if(isset($_POST['register'])) {
    $error = newUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['password_confirm']);
    if (!$error) {
        header('location:index.php');
    }
}

require_once ('views/register.php');
?>
