<?php

try {


    require_once ("../controllers/homepage.php");

    require_once ("../controllers/legal_notice.php");

    require_once ("../controllers/privacy_policy.php");

    $url = "";

    if (isset ($_GET["url"])) {
        $url = explode('/', $_GET['url']);
    }

    if ($url == '') {

        // echo'homepage';
        homepage();
    } 
    
    else if ($url[0] == 'Mention-Légal') {
        legal_notice();
    } 

    else if ($url[0] == 'Politique-de-confidentialite') {

        privacy_policy();
    } 

    else {
        echo 'error 404';
        // error404();
    }


} catch (\Throwable $th) {
    echo ''. $th->getMessage() .'';
}