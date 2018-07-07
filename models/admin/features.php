<?php

function selectFeatures(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM features');
    return $query->fetchAll();
};


function createFeature($name, $description){
    $db = dbConnect();

    $query = $db->prepare('INSERT INTO features (name,description) VALUES (?, ?)');
    return $query->execute(
        [
            $name,
            $description
        ]
    );
}


function deleteFeature($featureId){
$db = dbConnect();

    $query = $db->prepare('DELETE FROM features WHERE id = ?');
    $result = $query->execute(
        [
            $featureId
        ]
    );
    if($result){
        return "Suppression efféctuée.";
    }
    else{
        return "Impossible de supprimer la séléction.";
    }
}




function updateFeature($name, $description){
    $db = dbConnect();

    $queryString = 'UPDATE features SET name = :name, description = :description ';
    $queryParameters = [ 'name' => $name, 'description' => $description, 'id' => $featureId ];

    $queryString .= 'WHERE id = :id';

    $query = $db->prepare($queryString);
    $result = $query->execute($queryParameters);

    if($result){
        header('location:index.php?c=admin-feature-list');
        exit;
    }
    else{
        return 'Erreur.';
    }
}


function nbFeatures(){
    $db = dbConnect();

    return $db->query("SELECT COUNT(*) FROM features")->fetchColumn();
}
