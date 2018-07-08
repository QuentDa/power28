<?php
require_once ('models/admin/features.php');



$query = $db->query('SELECT * FROM features');
$features = $query->fetchall();

if(isset($_GET['feature_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    $message = deleteFeature($_GET['feature_id']);

    deleteFeature($_GET['feature_id']);
}


require_once('views/admin/admin-feature-list.php');