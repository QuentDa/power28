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

function getFaqQuestions(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM faq_questions');

    $query->execute();

    return $questions = $query->fetchAll();
}

function getFaqAnswers(){
    $db = dbConnect();
    $query = $db->query ('SELECT * FROM faq_answers');
    $query -> execute();

    return $answers = $query->fetchAll();
}