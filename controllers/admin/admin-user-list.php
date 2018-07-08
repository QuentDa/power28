<?php
require_once ('models/user-profile.php');



$query = $db->query('SELECT * FROM user');
$users = $query->fetchall();


if(isset($_GET['user_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    $message = deleteUser($_GET['user_id']);

    deleteUser($_GET['user_id']);
}


require_once('views/admin/admin-user-list.php');