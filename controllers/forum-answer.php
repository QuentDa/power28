<?php
require_once ('models/forum.php');


$query = $db->query('SELECT * FROM forum_answers');
$forumAnswers = $query->fetchall();


$query = $db->query('SELECT * FROM forum_topic');
$forumTopics = $query->fetchall();

$query = $db->query('SELECT * FROM forum_categories');
$forumCategories = $query->fetchall();


require_once('views/forum-answer.php');

?>
