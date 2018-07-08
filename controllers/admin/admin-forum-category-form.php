<?php
require_once ('models/admin/forum.php');

if(isset($_POST['save'])){
    $message = createCategory($_POST['name']);

}

if(isset($_POST['update'])) {

    $message = updateCategory($_POST['name'], $_POST["id"]);
}

if(isset($_GET['category_id']) && isset($_GET['action']) && $_GET['action'] == 'edit'){

    $categories= selectCategories($_GET['category_id']);

}




require_once ('views/admin/admin-forum-category-form.php');