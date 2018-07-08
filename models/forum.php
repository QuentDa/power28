<?php
function getCategories(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM forum_categories');
    return $query->fetchAll();
}



function getCategory($categoryId){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM forum_categories WHERE id = ?');
    $query->execute(array($categoryId));
    return $query->fetch();
}

function getTopics(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM forum_topic');
    return $query->fetchAll();
}



function getTopic($topicId){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM forum_topic WHERE id = ?');
    $query->execute(array($topicId));
    return $query->fetch();
}


function getAnswers(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM forum_answers');
    return $query->fetchAll();
}



function getAnswer($answerId){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM forum_answers WHERE id = ?');
    $query->execute(array($answerId));
    return $query->fetch();
}



