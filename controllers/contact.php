<?php

require_once ('models/contact.php');
if (isset($_POST['send']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
    sendMail($_POST['name'], $_POST['email'], $_POST['message']);
}

require_once('views/contact.php');

?>