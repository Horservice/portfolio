<?php

function homepage(){



    if(isset($_POST['submit'])){

        echo"work";
    }


    // echo"homepage";
    require_once("../view/homepage.php");
}