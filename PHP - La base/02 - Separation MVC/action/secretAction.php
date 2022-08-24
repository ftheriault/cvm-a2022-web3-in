<?php
    
    function execute() {
        $spyList = [];
        $spyList[] = "Austin Powers";
        $spyList[] = "James Bond";
        $spyList[] = "OSS 117";
        $spyList[] = "Ethan Hunt";

        return compact("spyList");
    }