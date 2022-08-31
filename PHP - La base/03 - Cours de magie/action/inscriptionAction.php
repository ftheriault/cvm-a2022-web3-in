<?php
    
    function execute() {
        $hasRegistered = false;
        $alreadyExists = false;

        if (!empty($_POST["name"])) {
            $file = file_get_contents("inscription.txt");
            $lines = explode("\n", $file);

            foreach ($lines as $line) {
                if (strlen($line) > 2) {
                    $columns = explode(",", $line);

                    if ($_POST["name"] == trim($columns[0]) && $_POST["course"] == trim($columns[1])) {
                        $alreadyExists = true;
                        break;
                    }
                }
            }

            if (!$alreadyExists) {
                $line = $_POST["name"] . ", " . $_POST["course"] . ", " . $_POST["message"] . "\n";
                file_put_contents("inscription.txt", $line, FILE_APPEND);
                $hasRegistered = true;
            }
        }

        return compact("hasRegistered", "alreadyExists");
    }