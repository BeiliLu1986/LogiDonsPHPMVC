<?php
require_once('./controleur/Action.interface.php');
class LoginAction implements Action {
	public function execute(){
		if (!ISSET($_REQUEST["username"]))
			return "login";
		if (!$this->valide())
		{
			return "login";
		}

		require_once('./modele/UserDAO.class.php');
		$udao = new UserDAO();
		$user = $udao->findUser($_REQUEST["username"]);
		if ($user == null)
			{
				$_REQUEST["field_messages"]["username"] = "Nom utilisateur ou mot de passe non correct !";	
				return "login";
			}
		else if ($user->getPassword() != $_REQUEST["password"])
			{
				$_REQUEST["field_messages"]["password"] = "Nom utilisateur ou mot de passe non correct !";	
				return "login";
			}
		
                
                if (!ISSET($_SESSION)) session_start();
		$_SESSION["connected"] = $_REQUEST["username"];
                return "user_page";
	}
	public function valide()
	{
		$result = true;
		if ($_REQUEST['username'] == "")
		{
			$_REQUEST["field_messages"]["username"] = "Nom utilisateur ou mot de passe non correct !";
			$result = false;
		}	
		if ($_REQUEST['password'] == "")
		{
			$_REQUEST["field_messages"]["password"] = "Nom utilisateur ou mot de passe non correct !";
			$result = false;
		}	
		return $result;
	}
}
?>