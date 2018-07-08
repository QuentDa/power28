<?php
require_once ('models/admin/forum.php');
require_once ('models/forum.php');

if(isset($_POST['save'])){
    $message = createAnswer($_POST['text']);

}

if(isset($_POST['update'])) {

    $message = updateAnswer($_POST['text'], $_POST["id"]);
}

if(isset($_GET['answer_id']) && isset($_GET['action']) && $_GET['action'] == 'edit'){

    $topics= selectAnswers($_GET['topic_id']);

}

require_once ('views/forum-answer-form.php');