<?php
include_once('/modele/classes/Database.class.php'); 
include_once('/modele/classes/User.class.php');
require_once('/modele/classes/Liste.class.php');

class UserDAO
{	
	
    public static function findUser($courriel)
	{
		$db = Database::getInstance();

		$pstmt = $db->prepare("SELECT * FROM user WHERE courriel = :x");
		$pstmt->execute(array(':x' => $courriel));
		
		$result = $pstmt->fetch(PDO::FETCH_OBJ);
		$u = new User();

		if ($result)
		{
                        $u->setId_user($result->id_user);
                        $u->setNom($result->nom);
                        $u->setPrenom($result->prenom);
			$u->setType_user($result->type_user);
			$u->setCourriel($result->courriel);
                        $u->setPassword($result->password);
			$pstmt->closeCursor();
			return $u;
		}
		$pstmt->closeCursor();
		return null;
	}
        //methode pour trouver tous les employes
        public static function findAllEmpls(){
        try {
			$liste = new Liste();
			$requete = "SELECT * FROM user where type_user='emp'";
			$cnx = Database::getInstance();
			$res = $cnx->query($requete);
		    foreach($res as $row) {
				$u = new User();
				$u->loadFromRecord($row);
				$liste->add($u);
		    }
		    $cnx = null;
			return $liste;
		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    return $liste;
		}	
    }  
    
        public static function findById($id)
	{
		$db = Database::getInstance();

		$pstmt = $db->prepare("SELECT * FROM user WHERE id_user = :x");
		$pstmt->execute(array(':x' => $id));
		
		$result = $pstmt->fetch(PDO::FETCH_OBJ);
		$u = new User();

		if ($result)
		{
			$u->setId_user($result->id_user);
                        $u->setNom($result->nom);
                        $u->setPrenom($result->prenom);
                        $u->setCourriel($result->courriel);
                        $u->setTelephone($result->telephone);
                        $u->setVille($result->ville);
                        $u->setProvince($result->province);
                        $u->setCode_postale($result->code_postale);
                        $u->setAdresse($result->adresse);
                        $u->setPassword($result->password);
			$pstmt->closeCursor();
			return $u;
		}
		$pstmt->closeCursor();
		return null;
	}
        
        public static function creerUserId($id)
	{
            
            $newId=$id;
            $i=0;
            do{
                $newId=$id.$i++;
            }
            while (UserDAO::findById($newId)!=null);
            return $newId;
	}
        
    public static function addUser($newUser)
	{
		$db = Database::getInstance();
		try {
                $pstmt = $db->prepare("INSERT INTO user (id_user ,nom,prenom,type_user,courriel,nom_organis,telephone,"
                        . "ville,province,code_postale,adresse)".
                                                  " VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:m,:y)");
                $n = $pstmt->execute(array(':a' => $newUser->getId_user(),':b' => $newUser->getNom(),
                    ':c' => $newUser->getPrenom(),':d' => $newUser->getType_user(),':e' => $newUser->getCourriel(),
                    ':f' => $newUser->getNom_organis(),':g' => $newUser->getTelephone(),':h' => $newUser->getVille(),
                    ':i' => $newUser->getProvince(),':m' => $newUser->getCode_postale(),':y' => $newUser->getAdresse()));

                $pstmt->closeCursor();
                $pstmt = NULL;
            }
            catch (PDOException $ex){
            }     
	}    
        
        
    public static function addBenevole($newUser)
	{
		$db = Database::getInstance();
		try {
                $pstmt = $db->prepare("INSERT INTO user (id_user ,nom,prenom,type_user,courriel,nom_organis,telephone,"
                        . "ville,province,code_postale,adresse,password)".
                                                  " VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:m,:y,:x)");
                $n = $pstmt->execute(array(':a' => $newUser->getId_user(),':b' => $newUser->getNom(),
                    ':c' => $newUser->getPrenom(),':d' => $newUser->getType_user(),':e' => $newUser->getCourriel(),
                    ':f' => $newUser->getNom_organis(),':g' => $newUser->getTelephone(),':h' => $newUser->getVille(),
                    ':i' => $newUser->getProvince(),':m' => $newUser->getCode_postale(),':y' => $newUser->getAdresse(),':x' => $newUser->getPassword()));

                $pstmt->closeCursor();
                $pstmt = NULL;
            }
            catch (PDOException $ex){
            }     
	} 
        
    public static function addEmploye($newUser)
	{
		$db = Database::getInstance();
		try {
                $pstmt = $db->prepare("INSERT INTO user (id_user ,nom,prenom,type_user,courriel,telephone,"
                        . "ville,province,code_postale,adresse,password)".
                                                  " VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:m,:y)");
                $n = $pstmt->execute(array(':a' => $newUser->getId_user(),':b' => $newUser->getNom(),
                    ':c' => $newUser->getPrenom(),':d' => 'emp',':e' => $newUser->getCourriel(),
                    ':f' => $newUser->getTelephone(),':g' => $newUser->getVille(),
                    ':h' => $newUser->getProvince(),':i' => $newUser->getCode_postale(),':m' => $newUser->getAdresse(),':y' => $newUser->getPassword()));

                $pstmt->closeCursor();
                $pstmt = NULL;
            }
            catch (PDOException $ex){
            }     
	}
        
        public static function updateUser($x)
	{
		$request = "UPDATE user SET nom = '".$x->getNom()."', prenom = '".$x->getPrenom()."', "
                        . "courriel = '".$x->getCourriel()."', telephone = '".$x->getTelephone()."', ville = '".$x->getVille()."', "
                        . "province = '".$x->getProvince()."', code_postale = '".$x->getCode_postale()."', adresse = '".$x->getAdresse()."', password = '".$x->getPassword()."'"
                        . " WHERE id_user = '".$x->getId_user()."'";
		try
		{
			$db = Database::getInstance();
			return $db->exec($request);
		}
		catch(PDOException $e)
		{
			throw $e;
		}
	}
        
}      
?>