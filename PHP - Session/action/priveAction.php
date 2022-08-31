<?php
	session_start();

	function execute() {
		$isConnected = $_SESSION["isConnected"] ?? false;

		if (empty($_SESSION["isConnected"])) {
			header("location:index.php");
			exit;
		}

		$cc = "4540 1233 5645 3453";
		
		return compact("cc", "isConnected");
	}