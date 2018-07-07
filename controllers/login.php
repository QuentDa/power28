<?php
require_once ('models/login-register.php');


if(isset($_SESSION['user'])){
    header('location:index.php');
}

if(isset($_POST['submit'])) {
    $error = newConnexion($_POST['email'], $_POST['password']);
    if (!$error) {
        header('location:index.php');
    }
}

require_once('views/login.php');

?>
