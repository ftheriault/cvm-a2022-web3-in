<?php

	class LoginAction {
		
		public function __construct() {

		}

		public function execute() {
			$hasConnectionError = false;

			if (isset($_POST["username"])) {
				if ($_POST["username"] == "john" &&
					$_POST["pwd"] == "qwerty") {

					header("location:home.php");
					exit;
				}
				else {
					$hasConnectionError = true;
				}
			}

			return compact("hasConnectionError");
		}
	}
