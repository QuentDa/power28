<?php
require_once ('models/admin/user.php');

//Si $_POST['save'] existe, cela signifie que c'est un ajout d'utilisateur
if(isset($_POST['save'])){

    $message = createUserAdmin($_POST['firstname'], $_POST["lastname"], $_POST['password'], $_POST['email'], $_POST['is_admin']);
    createUserAdmin($_POST['firstname'], $_POST["lastname"], $_POST['password'], $_POST['email'], $_POST['is_admin']);

}

//Si $_POST['update'] existe, cela signifie que c'est une mise à jour d'utilisateur
if(isset($_POST['update'])) {
    $message = updateUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['is_admin'], $_POST['id'], $_POST['password']);
    updateUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['is_admin'], $_POST['id'], $_POST['password']);

}

//si on modifie un utilisateur, on doit séléctionner l'utilisateur en question (id envoyé dans URL) pour pré-remplir le formulaire plus bas
if(isset($_GET['user_id']) && isset($_GET['action']) && $_GET['action'] == 'edit'){

    $user = selectUser2($_GET['user_id']);
}




require_once ('views/admin/admin-user-form.php');