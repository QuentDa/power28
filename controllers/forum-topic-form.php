<?php
require_once ('models/admin/forum.php');
require_once ('models/forum.php');

if(isset($_POST['save'])){
    $message = createTopic($_POST['name'], $_POST['text']);

}

if(isset($_POST['update'])) {

    $message = updateTopic($_POST['name'], $_POST['text'], $_POST["id"]);
}

if(isset($_GET['topic_id']) && isset($_GET['action']) && $_GET['action'] == 'edit'){

    $topics= selectTopics($_GET['topic_id']);

}




require_once ('views/forum-topic-form.php');