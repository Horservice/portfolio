<?php

try {


    require_once ("controllers/homepage.php");

    require_once ("controllers/legal_notice.php");

    require_once ("controllers/privacy_policy.php");

    require_once ("controllers/error404.php");

    $url = "";

    if (isset ($_GET["url"])) {
        $url = explode('/', $_GET['url']);
    }

    if ($url == '') {
        homepage();
    } 
    
    else if ($url[0] == 'Mention-Légal') {
        legal_notice();
    } 

    else if ($url[0] == 'Politique-de-confidentialité') {

        privacy_policy();
    } 

    else {
        error404();
    }


} catch (\Throwable $th) {
    echo ''. $th->getMessage() .'';
}