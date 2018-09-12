<?php
include_once('/model/classes/Database.class.php'); 
include_once('/model/classes/Don.class.php'); 
include_once('/model/classes/Liste.class.php'); 

class DonDAO
{	
    
    public static function addDon($newDon)
	{
		$db = Database::getInstance();
                
		try {
                    
                    if($newDon->getDate_livr()==NULL){
                $pstmt = $db->prepare("INSERT INTO don (donateur, type_don, description,livraison,date_livr,quantite,montant)".
                                                  " VALUES (:a,:b,:c,:d,:e,:f,:g)");
                $n = $pstmt->execute(array(':a' => $newDon->getDonateur(),':b' => $newDon->getType_don(),
                    ':c' => $newDon->getDescription(),':d' => $newDon->getLivraison(),':e' => NULL,
                    ':f' => $newDon->getQuantite(),':g' => $newDon->getMontant()));
                    }
                    else {
                $pstmt = $db->prepare("INSERT INTO don (donateur, type_don, description,livraison,date_livr,quantite,montant)".
                                                             " VALUES (:a,:b,:c,:d,:e,:f,:g)");
                           $n = $pstmt->execute(array(':a' => $newDon->getDonateur(),':b' => $newDon->getType_don(),
                               ':c' => $newDon->getDescription(),':d' => $newDon->getLivraison(),':e' => $newDon->getDate_livr(),
                               ':f' => $newDon->getQuantite(),':g' => $newDon->getMontant()));
     
     
 }
                $pstmt->closeCursor();
                $pstmt = NULL;
            
        }
            catch (PDOException $ex){
            }     
	} 
	
	  public static function findById($id)
	{
		$db = Database::getInstance();

		$pstmt = $db->prepare("SELECT * FROM don WHERE id_don = :x");
		$pstmt->execute(array(':x' => $id));
		
		$result = $pstmt->fetch(PDO::FETCH_OBJ);
		$u = new Don();

		if ($result)
		{
			$u->setid_don($result->id_don);
			$u->setDonateur($result->setDonateur);
			$u->setDescription($result->setDescription);
			$u->setType_don($result->setType_don);
			$u->setLivraison($result->setLivraison);
		    $u->setDate_livr($result->setDate_livr);
			$u->setQuantite($result->setQuantite);
		    $u->setMontant($result->setMontant);
			$pstmt->closeCursor();
			return $u;
		}
		$pstmt->closeCursor();
		return null;
	}
	
	  public static function findByIdEmployer($id)
	{
		try {
		$db = Database::getInstance();
	       $liste= new Liste();
		
        
		$pstmt = $db->prepare("SELECT * FROM employes_dons WHERE employe = :x");
	
		$res = $db->query($pstmt);
		    foreach($res as $row) {
				$d = new Don();
				$d->loadFromRecord($row);
				$liste->add($d);
		    }
			$res->closeCursor();
		    $cnx = null;
			return $liste;
        
		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    return $liste;
		}	
	}
	
	
   public static accepterDon($x){
	   
	   $request = "UPDATE don SET status = '"accepter"'".
				" WHERE id_don = '".$x->getId_don()."'";
	   
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
	
	 public static refuserDon($x){
	   
	   $request = "UPDATE don SET status = '"refuzer"'".
				" WHERE id_don = '".$x->getId_don()."'";
	   
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

