<?php
require_once('./controleur/Action.interface.php');

class AccepterDonAction implements Action {
	public function execute(){
            
            require_once('./modele/DonDAO.class.php');
            $id_don=$_REQUEST["donAccepter"];
            DonDAO::accepterDon($id_don);
            return "afficherMesDons";
	}
}
