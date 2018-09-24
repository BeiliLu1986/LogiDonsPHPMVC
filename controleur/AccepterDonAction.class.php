<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/DonDAO.class.php');
require_once('./modele/classes/Don.class.php');

class AccepterDonAction implements Action {
	public function execute(){
		
		
		if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION["connected"]))
				return "login";
	
	
	    if (!ISSET($_REQUEST["donAccepter"]))
			 return "afficherMesDons";
		
		
		$dao = new DonDAO();
		$idDon = $_REQUEST["donAccepter"];
		
	    	
		if(!$dao->accepterDon($idDon)) {
				return "emplProfil";
		}
		
	return "afficherMesDons";
  }          
   
}


