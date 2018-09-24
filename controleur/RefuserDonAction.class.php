<?php
require_once('./controleur/Action.interface.php');

class RefuserDonAction implements Action {
	public function execute(){
            require_once('./modele/DonDAO.class.php');
            $id_don=$_REQUEST["donRefuser"];
            DonDAO::refuserDon($id_don);
            return "afficherMesDons";
	}
}
