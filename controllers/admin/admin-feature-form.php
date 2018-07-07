<?php
require_once ('models/admin/features.php');

//Si $_POST['save'] existe, cela signifie que c'est un ajout d'utilisateur
if(isset($_POST['save'])){

    $message = createFeature($_POST['name'], $_POST["description"]);
    createFeature($_POST['name'], $_POST["description"]);

}

//Si $_POST['update'] existe, cela signifie que c'est une mise à jour d'utilisateur
if(isset($_POST['update'])) {
    $message = updateFeature($_POST['name'], $_POST["description"]);
    updateFeature($_POST['name'], $_POST["description"]);

}

//si on modifie un utilisateur, on doit séléctionner l'utilisateur en question (id envoyé dans URL) pour pré-remplir le formulaire plus bas
if(isset($_GET['feature_id']) && isset($_GET['action']) && $_GET['action'] == 'edit'){

    $user = selectFeatures($_GET['feature_id']);
}




require_once ('views/admin/admin-feature-form.php');