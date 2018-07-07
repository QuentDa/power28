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
//générer un message à afficher plus bas pour l'administrateur
    if($result){
        return "Suppression efféctuée.";
    }
    else{
        return "Impossible de supprimer la séléction.";
    }
}


function updateFeature($name, $description){
    $db = dbConnect();

    //début de la chaîne de caractères de la requête de mise à jour
    $queryString = 'UPDATE features SET name = :name, description = :description ';
    //début du tableau de paramètres de la requête de mise à jour
    $queryParameters = [ 'name' => $name, 'description' => $description, 'id' => $featureId ];

    //fin de la chaîne de caractères de la requête de mise à jour
    $queryString .= 'WHERE id = :id';

    //préparation et execution de la requête avec la chaîne de caractères et le tableau de données
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
