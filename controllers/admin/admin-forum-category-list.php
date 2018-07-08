<?php
require_once ('models/admin/forum.php');



$query = $db->query('SELECT * FROM forum_categories');
$categories = $query->fetchall();

if(isset($_GET['category_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    $message = deleteFeature($_GET['category_id']);

    deleteFeature($_GET['category_id']);
}


require_once('views/admin/admin-forum-category-list.php');