<?php

function selectFaqCategories(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM faq_categories');
    return $query->fetchAll();
};


function createFaqCategory($name){
    $db = dbConnect();

    $query = $db->prepare('INSERT INTO faq_categories (name) VALUES (?)');
    return $query->execute(
        [
            $name
        ]
    );
}


function deleteFaqCategory($categoryId){
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM faq_categories WHERE id = ?');
    $result = $query->execute(
        [
            $categoryId
        ]
    );
    if($result){
        return "Suppression efféctuée.";
    }
    else{
        return "Impossible de supprimer la séléction.";
    }
}




function updateFaqCategory($name){
    $db = dbConnect();

    $queryString = 'UPDATE faq_categories SET name = :name ';
    $queryParameters = [ 'name' => $name, 'id' => $categoryId ];

    $queryString .= 'WHERE id = :id';

    $query = $db->prepare($queryString);
    $result = $query->execute($queryParameters);

    if($result){
        header('location:index.php?c=admin-faq-category-list');
        exit;
    }
    else{
        return 'Erreur.';
    }
}


function nbFaqCategory(){
    $db = dbConnect();

    return $db->query("SELECT COUNT(*) FROM faq_categories")->fetchColumn();
}


function selectFaqQuestions(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM faq_questions');
    return $query->fetchAll();
};


function createFaqQuestion($question, $answer){
    $db = dbConnect();

    $query = $db->prepare('INSERT INTO faq_questions (question, answer) VALUES (?, ?)');
    return $query->execute(
        [
            $question,
            $answer
        ]
    );
}


function deleteFaqQuestion($questionId){
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM faq_questions WHERE id = ?');
    $result = $query->execute(
        [
            $questionId
        ]
    );
    if($result){
        return "Suppression efféctuée.";
    }
    else{
        return "Impossible de supprimer la séléction.";
    }
}




function updateFaqQuestion($question, $answer){
    $db = dbConnect();

    $queryString = 'UPDATE faq_questions SET question = :question, answer = :answer';
    $queryParameters = [ 'question' => $question, 'answer' => $answer, 'id' => $questionId ];

    $queryString .= 'WHERE id = :id';

    $query = $db->prepare($queryString);
    $result = $query->execute($queryParameters);

    if($result){
        header('location:index.php?c=admin-faq-list');
        exit;
    }
    else{
        return 'Erreur.';
    }
}


function nbFaqQuestion(){
    $db = dbConnect();

    return $db->query("SELECT COUNT(*) FROM faq_questions")->fetchColumn();
}
