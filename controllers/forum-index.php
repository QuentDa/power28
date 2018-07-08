<?php
require_once ('models/forum.php');


$query = $db->query('SELECT * FROM forum_categories');
$forumCategories = $query->fetchall();


require_once('views/forum-index.php');

?>
