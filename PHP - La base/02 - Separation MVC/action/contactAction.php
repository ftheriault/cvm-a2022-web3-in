<?php
    
    function execute() {
        $msgSent = false;

        if (!empty($_POST["commentaire"])) {
            $msgSent = true;
        }

        return compact("msgSent");
    }