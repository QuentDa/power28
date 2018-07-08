<?php
require_once ('models/features.php');

$query = $db->query('SELECT * FROM features');
$features = $query->fetchall();

require_once('views/features.php');

?>
