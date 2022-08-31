<?php
	session_start();

	function execute() {
		//$email = !empty($_SESSION["courriel"]) ? $_SESSION["courriel"] : null;
		$email = $_SESSION["courriel"] ?? null;
		$connectionError = false;
		$isConnected = $_SESSION["isConnected"] ?? false;
		
		if (isset($_POST["courriel"]) && isset($_POST["motDePasse"])) {
			if ($_POST["courriel"] === "test@test.com" &&
				$_POST["motDePasse"] === "test") {
				$email = $_POST["courriel"];

				$_SESSION["isConnected"] = true;
				$_SESSION["courriel"] = $email;
			}
			else {
				$connectionError = true;
			}
		}
		
		return compact("email", "connectionError", "isConnected");
	}