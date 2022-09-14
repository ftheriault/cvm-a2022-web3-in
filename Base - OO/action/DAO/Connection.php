<?php
    
    class Connection {
        private static $connection;

        public static function getConnection() {
            if (empty(Connection::$connection)) {
                Connection::$connection = new PDO(DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
                Connection::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                Connection::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }

            return Connection::$connection;
        }
    }