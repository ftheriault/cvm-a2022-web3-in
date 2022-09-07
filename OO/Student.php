<?php
    class Student extends User {
        private $session;

        public function __construct($firstName, $lastName, $session = null) {
            parent::__construct($firstName, $lastName); // super()
            $this->session = $session;
        }

        public function getName() {
            return parent::getName() . " (" . $this->session . ")";
        }
    }