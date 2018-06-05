<?php
session_start();
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

}
else{
    require_once('./controllers/index.php');
}

require_once ('views/partials/footer.php');
