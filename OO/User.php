<?php
    
    class User {
        private $firstName;
        private $lastName;

        // snippet pour $this->, écrire this+enter
        public function __construct($firstName, $lastName) {
            $this->firstName = $firstName; // this.firstName = firstName
            $this->lastName = $lastName;
        }

        public function getName() {
            return $this->firstName . " " . $this->lastName;
        }
    }