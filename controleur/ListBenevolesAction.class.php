<?php
require_once('./controleur/Action.interface.php');

class ListBenevolesAction implements Action {
	public function execute(){
            if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION["connected"]))
			return "login";
            return "listBenevoles";
	}
}