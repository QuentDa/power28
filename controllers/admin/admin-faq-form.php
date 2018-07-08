<?php
require_once ('models/admin/faq.php');

if(isset($_POST['save'])){
    $message = createFaqQuestion($_POST['question'], $_POST['answer']);

}

if(isset($_POST['update'])) {

    $message = updateFaqQuestion($_POST['question'], $_POST['answer'], $_POST["id"]);
}

if(isset($_GET['question_id']) && isset($_GET['action']) && $_GET['action'] == 'edit'){

    $questions= selectFaqQuestions($_GET['question_id']);

}

require_once ('views/admin/admin-faq-form.php');