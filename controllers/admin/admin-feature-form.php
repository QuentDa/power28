<?php
require_once ('models/admin/features.php');

if(isset($_POST['save'])){
    $message = createFeature($_POST['name'], $_POST["description"]);

}

if(isset($_POST['update'])) {

    $message = updateFeature($_POST['name'], $_POST["description"], $_POST["id"]);
}

if(isset($_GET['feature_id']) && isset($_GET['action']) && $_GET['action'] == 'edit'){

    $features= selectFeatures($_GET['feature_id']);

}




require_once ('views/admin/admin-feature-form.php');