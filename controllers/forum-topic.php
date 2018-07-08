<?php
require_once ('models/forum.php');


$query = $db->query('SELECT * FROM forum_topic');
$forumTopics = $query->fetchall();


require_once('views/forum-topic.php');

?>
