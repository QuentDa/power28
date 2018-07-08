<?php
require_once('models/faq.php');

$query = $db->query('SELECT * FROM faq_questions');
$faqQuestions = $query->fetchall();


require_once('views/faqQuestions.php');


?>