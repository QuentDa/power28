<?php
require_once('models/user-profile.php');

if(!isset($_SESSION['user'])){
    header('location:../index.php');
    exit;
}

if(isset($_POST['update'])){
    $user = updateUser($_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['password'], $_POST['password_confirm'], $_POST['id']);

}

$user =  actualUser($_SESSION['user_id']);

require_once('views/user-profile.php');

?>
