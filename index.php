<?php

require_once ('common.php');

$db = dbConnect();

session_start();

if (isset($_POST['register'])){
    require_once('./controllers/register.php');
}


if (isset($_POST['submit'])){
    require_once('./controllers/login.php');
}

require_once ('views/partials/head_assets.php');

if (isset($_GET['c']) ) {


    if ($_GET['c'] && $_GET['c'] == 'index') {
        require_once('./controllers/index.php');
    }
    if ($_GET['c'] && $_GET['c'] == 'about') {
        require_once('./controllers/about.php');
    }
    if ($_GET['c'] && $_GET['c'] == 'applications') {
        require_once('./controllers/applications.php');
    }
    if ($_GET['c'] && $_GET['c'] == 'features') {
        require_once('./controllers/features.php');
    }
    if ($_GET['c'] && $_GET['c'] == 'onefeature') {
        require_once('./controllers/onefeature.php');
    }
    if ($_GET['c'] && $_GET['c'] == 'contact') {
        require_once('./controllers/contact.php');
    }
    if ($_GET['c'] && $_GET['c'] == 'login') {
        require_once('./controllers/login.php');
    }
    if ($_GET['c'] && $_GET['c'] == 'register') {
        require_once('./controllers/register.php');
    }
    if ($_GET['c'] && $_GET['c'] == 'faqCategories') {
        require_once('./controllers/faqCategories.php');
    }
    if ($_GET['c'] && $_GET['c'] == 'faqQuestions') {
        require_once('./controllers/faqQuestions.php');
    }
    if ($_GET['c'] && $_GET['c'] == 'user-profile') {
        require_once('./controllers/user-profile.php');
    }

    //ADMIN
    if ($_GET['c'] == 'admin-index') {
        if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
            require('./controllers/admin/admin-index.php');
        }
    }

    if ($_GET['c'] == 'admin-user-list') {
        if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
            require('./controllers/admin/admin-user-list.php');
        }
    }

    if ($_GET['c'] == 'admin-user-form') {
        if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
            require('./controllers/admin/admin-user-form.php');
        }
    }

    if ($_GET['c'] == 'admin-feature-list') {
        if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
            require('./controllers/admin/admin-feature-list.php');
        }
    }

    if ($_GET['c'] == 'admin-feature-form') {
        if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
            require('./controllers/admin/admin-feature-form.php');

        }
    }


        if(isset($_GET['logout']) && isset($_SESSION)) {
        unset($_SESSION['user']);
        header('location:index.php');
    }



}


else{
    require_once('./controllers/index.php');
}

if(isset($_GET['logout']) && isset($_SESSION)) {
    logout($_SESSION);
    header('location:index.php');
}

require_once ('views/partials/footer.php');
