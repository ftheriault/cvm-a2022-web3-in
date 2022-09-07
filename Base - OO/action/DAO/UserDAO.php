<?php
    
    // Toutes les méthodes qui gèrent les données liées aux usagers
    class UserDAO {

        public static function authenticate($username, $password) {
            $result = null;

            if ($username == "john" && $password == "qwerty") {
                $result = [];
                $result["username"] = "john";
                $result["visibility"] = 1;
            }

            return $result;
        }
    }