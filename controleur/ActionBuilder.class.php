<?php
require_once('./controleur/DefaultAction.class.php');
//Login
require_once('./controleur/LoginAction.class.php');
require_once('./controleur/LogoutAction.class.php');


class ActionBuilder{
	public static function getAction($nom){
		switch ($nom)
		{
			case "connecter" :
				return new LoginAction();
			break; 
			case "deconnecter" :
				return new LogoutAction();
			break; 
			
			default :
				return new DefaultAction();
		}
	}
}
?>
