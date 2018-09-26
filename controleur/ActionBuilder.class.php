<?php
require_once('./controleur/LogoutAction.class.php');
require_once('./controleur/DefaultAction.class.php');
require_once('./controleur/LoginAction.class.php');
require_once('./controleur/NewDonAction.class.php');
require_once('./controleur/SaveAction.class.php');
require_once('./controleur/NewBenevoleAction.class.php');
require_once('./controleur/AfficherMesDonsAction.class.php');
require_once('./controleur/AfficherDesEmployesAction.class.php');
require_once('./controleur/AjouterEmployeAction.class.php');
require_once('./controleur/ModifierEmployeAction.class.php');
require_once('./controleur/RefuserDonAction.class.php');
require_once('./controleur/AccepterDonAction.class.php');
require_once('./controleur/ListeDonAction.class.php');

class ActionBuilder{
	public static function getAction($nomAction){
		switch ($nomAction)
		{
			case "connecter" :
				return new LoginAction();
				break; 
			case "deconnecter" :
				return new LogoutAction();
				break; 
			case "creerDon" :
				return new NewDonAction();
				break;
                        case "refuserDon" :
				return new RefuserDonAction();
				break;
                        case "accepterDon" :
				return new AccepterDonAction();
				break;    
                        case "newBenevole" :
				return new NewBenevoleAction();
				break;
                        case "save" :
				return new SaveAction();
				break;
			case "afficherMesDons" :
				return new AfficherMesDonsAction();
				break;
			case "listEmpl" :
				return new AfficherDesEmployesAction();
				break;
                        case "ajoutEmpl" :
				return new AjouterEmployeAction();
				break;
                        case "modifEmpl" :
				return new ModifierEmployeAction();
				break; 
                        case "listDons" :
				return new ListeDonAction();
				break;    
			default :
				return new DefaultAction();
		}
	}
}
?>
