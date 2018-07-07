<?php
function getFeatures(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM feature');
    return $query->fetchAll();
}



function getFeature($featureId){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM feature WHERE id = ?');
    $query->execute(array($featureId));
    return $query->fetch();
}
