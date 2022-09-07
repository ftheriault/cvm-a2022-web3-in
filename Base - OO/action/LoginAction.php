<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/UserDAO.php");

	class LoginAction extends CommonAction {
		
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$hasConnectionError = false;

			if (isset($_POST["username"])) {
				$result = UserDAO::authenticate($_POST["username"], $_POST["pwd"]);

				if (!empty($result)) {					
					$_SESSION["visibility"] = $result["visibility"];
					$_SESSION["username"] = $result["username"];
					
					header("location:home.php");
					exit;
				}
				else {
					$hasConnectionError = true;
				}
			}

			return compact("hasConnectionError"); // Création d'un dictionnaire avec la clé hasConnectionError
		}
	}
