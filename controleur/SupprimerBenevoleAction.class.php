<?php
require_once('./controleur/Action.interface.php');

class SupprimerBenevoleAction implements Action {
	public function execute(){
            if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION["connected"]))
			return "login"; 
                
        require_once('/modele/UserDAO.class.php');
        UserDAO::deleteBenevole($_REQUEST["idBen"]);
		UNSET($_SESSION["connected"]);
		session_destroy();
        return "default";
	}
}
