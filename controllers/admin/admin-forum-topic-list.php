<?php
require_once ('models/admin/forum.php');



$query = $db->query('SELECT * FROM forum_topic');
$topics = $query->fetchall();

if(isset($_GET['topic_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    $message = deleteFeature($_GET['topic_id']);

    deleteFeature($_GET['topic_id']);
}


require_once('views/admin/admin-forum-topic-list.php');