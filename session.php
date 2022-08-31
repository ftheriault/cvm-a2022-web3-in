<?php
    
    session_start();

    //$_SESSION["isConnected"] = "oui";
    //$_SESSION["tab"] = [];

    // echo $_SESSION["isConnected"];

    session_unset();        // Supprime les variables de session
    session_destroy();      // Supprime le cookie/ID