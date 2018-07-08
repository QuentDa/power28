<?php

function getFaqCategory($categoryId){

    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM faq_categories WHERE id = ?');

    $query->execute(array($categoryId));

    return $query -> fetch();

}

function getFaqCategories(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM faq_categories');

    return $query->fetchAll();


}

function getFaqQuestion($questionId){

    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM faq_questions WHERE id = ?');

    $query->execute(array($questionId));

    return $query -> fetch();

}

function getFaqQuestions(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM faq_questions');

    $query->execute();

    return $questions = $query->fetchAll();
}