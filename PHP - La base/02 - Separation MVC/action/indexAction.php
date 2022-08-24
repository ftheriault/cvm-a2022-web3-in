<?php
    
    function execute() {
        $user = "John";
        $hasError = false;

        if (!empty($_POST["champCourriel"]) && !empty($_POST["champMotDePasse"])) {
            if ($_POST["champCourriel"] == "test@test.com" && 
                $_POST["champMotDePasse"] == "test") {
                header("location:secret.php");
                exit;
            }
            else {
                $hasError = true;
            }
        }
        
        return compact("hasError", "user");
        // return [
        //     "hasError" => $hasError,            
        //     "user" => $user
        // ];
    }