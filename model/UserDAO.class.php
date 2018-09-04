<?php
include_once('./model/classes/Database.class.php'); 
include_once('./model/classes/User.class.php'); 

class UserDAO
{	
	public static function findUser($id)
	{
		$db = Database::getInstance();

		$pstmt = $db->prepare("SELECT * FROM users WHERE passwordUser = :x");
		$pstmt->execute(array(':x' => $id));
		
		$result = $pstmt->fetch(PDO::FETCH_OBJ);
		$p = new User();

		if ($result)
		{
			$p->setUsername($result->nomUser);
			$p->setPassword($result->passwordUser);
			$pstmt->closeCursor();
			return $p;
		}
		$pstmt->closeCursor();
		return null;
	}	
}
?>