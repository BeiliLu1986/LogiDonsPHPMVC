<?php
require_once('./controleur/DefaultAction.class.php');
require_once('./controleur/LoginAction.class.php');
require_once('./controleur/NewDonAction.class.php');
require_once('./controleur/SaveAction.class.php');
require_once('./controleur/NewBenevoleAction.class.php');



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
                        case "newBenevole" :
				return new NewBenevoleAction();
				break;
                        case "save" :
				return new SaveAction();
				break;
			default :
				return new DefaultAction();
		}
	}
}
?>
