<?php

function selectCategories(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM forum_categories');
    return $query->fetchAll();
};


function createCategory($name){
    $db = dbConnect();

    $query = $db->prepare('INSERT INTO forum_categories (name) VALUES (?)');
    return $query->execute(
        [
            $name
        ]
    );
}


function deleteCategory($categoryId){
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM forum_categories WHERE id = ?');
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




function updateCategory($name){
    $db = dbConnect();

    $queryString = 'UPDATE forum_categories SET name = :name ';
    $queryParameters = [ 'name' => $name, 'id' => $categoryId ];

    $queryString .= 'WHERE id = :id';

    $query = $db->prepare($queryString);
    $result = $query->execute($queryParameters);

    if($result){
        header('location:index.php?c=admin-forum-category-list');
        exit;
    }
    else{
        return 'Erreur.';
    }
}


function nbCategories(){
    $db = dbConnect();

    return $db->query("SELECT COUNT(*) FROM forum_categories")->fetchColumn();
}


function selectTopics(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM forum_topic');
    return $query->fetchAll();
};


function createTopic($name, $text){
    $db = dbConnect();

    $query = $db->prepare('INSERT INTO forum_topic (name, text) VALUES (?, ?)');
    return $query->execute(
        [
            $name,
            $text
        ]
    );
}


function deleteTopic($topicId){
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM forum_topic WHERE id = ?');
    $result = $query->execute(
        [
            $topicId
        ]
    );
    if($result){
        return "Suppression efféctuée.";
    }
    else{
        return "Impossible de supprimer la séléction.";
    }
}




function updateTopic($text){
    $db = dbConnect();

    $queryString = 'UPDATE forum_topic SET name= :name, text = :text ';
    $queryParameters = [ 'name' => $name, 'text' => $text, 'id' => $topicId ];

    $queryString .= 'WHERE id = :id';

    $query = $db->prepare($queryString);
    $result = $query->execute($queryParameters);

    if($result){
        header('location:index.php?c=admin-forum-index');
        exit;
    }
    else{
        return 'Erreur.';
    }
}

function nbTopics(){
    $db = dbConnect();

    return $db->query("SELECT COUNT(*) FROM forum_topic")->fetchColumn();
}




function selectAnswers(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM forum_answers');
    return $query->fetchAll();
};


function createAnswer($text){
    $db = dbConnect();

    $query = $db->prepare('INSERT INTO forum_answers (text) VALUES (?)');
    return $query->execute(
        [
            $text
        ]
    );
}


function deleteAnswer($answerId){
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM forum_answers WHERE id = ?');
    $result = $query->execute(
        [
            $answerId
        ]
    );
    if($result){
        return "Suppression efféctuée.";
    }
    else{
        return "Impossible de supprimer la séléction.";
    }
}




function updateAnswer($text){
    $db = dbConnect();

    $queryString = 'UPDATE forum_answer SET name= :name, text = :text ';
    $queryParameters = [ 'text' => $text, 'id' => $topicId ];

    $queryString .= 'WHERE id = :id';

    $query = $db->prepare($queryString);
    $result = $query->execute($queryParameters);

    if($result){
        header('location:index.php?c=admin-forum-index');
        exit;
    }
    else{
        return 'Erreur.';
    }
}

function nbAnswers(){
    $db = dbConnect();

    return $db->query("SELECT COUNT(*) FROM forum_answers")->fetchColumn();
}