<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/DonDAO.class.php');
require_once('./modele/classes/Don.class.php');

class RefuserDonAction implements Action {
	public function execute(){
           
		if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION["connected"]))
				return "login";
	
	
	    if (!ISSET($_REQUEST["donRefuser"]))
			 return "afficherMesDons";
		
		
		$dao = new DonDAO();
		$idDon = $_REQUEST["donRefuser"];
		
	    	
		if(!$dao->refuserDon($idDon)) {
				return "emplProfil";
		}
		
	return "afficherMesDons";  
}
}

