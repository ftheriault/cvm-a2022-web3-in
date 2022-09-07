<?php
	require_once("action/CommonAction.php");

	class HomeAction extends CommonAction {
		
		// :: = appeler une méthode du parent, ou accéder à une variable statique
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {

			return [];
		}
	}	
