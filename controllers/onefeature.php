<?php
require_once ('models/features.php');

if(isset($_GET['feature_id'] ) ) {
    $query = $db->prepare('SELECT * FROM features');
    $query->execute( array($_GET['feature_id']));

    $features = $query->fetch();
}

require_once('views/onefeature.php');

?>
