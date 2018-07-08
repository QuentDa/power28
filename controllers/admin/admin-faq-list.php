<?php
require_once ('models/admin/faq.php');



$query = $db->query('SELECT * FROM faq_questions');
$questions = $query->fetchall();

if(isset($_GET['question_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    $message = deleteFaqQuestion($_GET['question_id']);

    deleteFaqQuestion($_GET['question_id']);
}


require_once('views/admin/admin-faq-list.php');


