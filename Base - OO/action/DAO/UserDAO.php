<?php
    
    // Toutes les méthodes qui gèrent les données liées aux usagers
    class UserDAO {

        public static function authenticate($username, $password) {
            $connection = Connection::getConnection();

            // ' or 1=1 or '1' = '1 <-- SQL injection
            $statement = $connection->prepare("SELECT * FROM users where username = ?");
            $statement->bindParam(1, $username); // Remplace le premier ? par $username
            $statement->setFetchMode(PDO::FETCH_ASSOC); // Retourne un dictionnaire
            $statement->execute();

            $result = null;

            // Le résultat de fetch va dans $row, et le if évalue si row est nul (pas de résultat), ou psa
            if ($row = $statement->fetch()) { // fetch retourne la première ligne.
                // var_dump($row);exit;

                if (password_verify($password, $row["password"])) {
                    $result = [];
                    $result["username"] = $row["username"];
                    $result["visibility"] = $row["visibility"];
                }

            }
            return $result;
        }

        public static function getAllUsers() {
            // $statement->fetchAll(); // Retourne un tableau de tous les users
        }

        public static function updateProfile($username, $newFirstName, $newLastName, $newPassword) {
            $connection = Connection::getConnection();

            $statement = $connection->prepare("UPDATE users set first_name = ? WHERE username = ?");
            $statement->bindParam(1, $newFirstName); // Remplace le premier ? par $username
            $statement->bindParam(2, $username); // Remplace le premier ? par $username
            
            $statement->execute();
        }
    }