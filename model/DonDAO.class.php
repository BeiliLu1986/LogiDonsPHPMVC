<?php
include_once('/model/classes/Database.class.php'); 
include_once('/model/classes/Don.class.php'); 
include_once('/model/classes/Liste.class.php'); 
include_once('/model/classes/User.class.php'); 

class DonDAO
{	
    
    public static function addDon($newDon)
	{
		$db = Database::getInstance();
                
		try {
                    
                    if($newDon->getDate_livr()==NULL){
                $pstmt = $db->prepare("INSERT INTO don (id_don,donateur, type_don, description,livraison,date_livr,quantite,montant)".
                                                  " VALUES (:x,:a,:b,:c,:d,:e,:f,:g)");
                $n = $pstmt->execute(array(':x' => $newDon->getId_don(),':a' => $newDon->getDonateur(),':b' => $newDon->getType_don(),
                    ':c' => $newDon->getDescription(),':d' => $newDon->getLivraison(),':e' => NULL,
                    ':f' => $newDon->getQuantite(),':g' => $newDon->getMontant()));
                    }
                    else {
                $pstmt = $db->prepare("INSERT INTO don (id_don,donateur, type_don, description,livraison,date_livr,quantite,montant)".
                                                             " VALUES (:x,:a,:b,:c,:d,:e,:f,:g)");
                           $n = $pstmt->execute(array(':x' => $newDon->getId_don(),':a' => $newDon->getDonateur(),':b' => $newDon->getType_don(),
                               ':c' => $newDon->getDescription(),':d' => $newDon->getLivraison(),':e' => $newDon->getDate_livr(),
                               ':f' => $newDon->getQuantite(),':g' => $newDon->getMontant()));
     
     
				}
                $pstmt->closeCursor();
                $pstmt = NULL;
            
        }
            catch (PDOException $ex){

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
	
	  public static function findByIdEmploye($id)
	{
		try {
		$db = Database::getInstance();
	       $liste= new Liste();
		
        
		$pstmt = $db->prepare("SELECT * FROM employes_dons WHERE employe = :x");
	    $pstmt->execute(array(':x' => $id));
		
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
	
	
   public static function accepterDon($x){
	   
	   $request = "UPDATE don SET status = 'accepter'".
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
	
	 public static function refuserDon($x){
	   
	   $request = "UPDATE don SET status = 'refuzer'".
				" WHERE id_don = '".$x->getId_don()."'";


	}    
    
    
    //compter la quantite de tous les dons qui a chaque employe
    public static function countEmplsDons(){
        $liste= UserDAO::findAllEmpls();
        $cnx = Database::getInstance();
        $listeD=new Liste();
            while ($liste->next()){
                $p=$liste->current();
                $id_user=$p->getId_user();
                $sql="SELECT * FROM employes_dons where employe='$id_user'";
                $stmt = $cnx->prepare($sql);
                    try { $stmt->execute();}
                    catch(PDOException $e)
                    {echo $e->getMessage();}
                $count=$stmt->rowCount();
                $us=new User();
                $us->setId_user($id_user);
                $us->setCountDons($count);
                $listeD->add($us);
                    }
                    return $listeD;
        }
        
        //trouver un empl avec la quantite min de dons
      public static function findMinQuantEmplsDons(){
          $liste = DonDAO::countEmplsDons();
          if($liste->next()){
              $p=$liste->current();
          }
          $min=$p->getCountDons();
          $id_empl=$p->getId_user();
          
          while ($liste->next()){
                $p=$liste->current();
                $count=$p->getCountDons();
                if($count<=$min){
                    $min=$count;
                    $id_empl=$p->getId_user();
                }
                
            }
            return $id_empl;
          }
          
       
       //affecter un don a un employe
      public static function affecterDon($idEmpl,$idDon){
          $request = "INSERT INTO employes_dons (employe ,don) VALUES ('$idEmpl','$idDon')";
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
      
      //recherche tous les dons d'un employe
        public static function findEmplsDon($idEmpl){
            try {
			$liste = new Liste();
		
			$requete = "SELECT * FROM don d,employes_dons e  WHERE e.employe='$idEmpl' AND d.id_don=e.don";
			$cnx = Database::getInstance();
			
			$res = $cnx->query($requete);
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
        
        //recherche du don selon son id
        public static function findDon($idDon){
                $db = Database::getInstance();

		$pstmt = $db->prepare("SELECT * FROM don WHERE id_don = :x");
		$pstmt->execute(array(':x' => $idDon));
		
		$result = $pstmt->fetch(PDO::FETCH_OBJ);
		$p = new Don();

		if ($result)
		{
                    $p->setId_don($result->id_don);
                    $p->setDonateur($result->donateur);
                    $p->setDescription($result->description);
                    $p->setType_don($result->type_don);
                    $p->setLivraison($result->livraison);
                    $p->setDate_livr($result->date_livr);
                    $p->setQuantite($result->quantite);
                    $p->setMontant($result->montant);
                    $p->setStatus($result->status);
                    $pstmt->closeCursor();
                    return $p;
		}
		$pstmt->closeCursor();
		return null;
        }
        
        //accepter le don
        public static function accepterDon($idDon){
            $sql = "UPDATE don SET status = 'acc' WHERE id_don = '$idDon'";
		try
		{
			$db = Database::getInstance();
			return $db->exec($sql);
		}
		catch(PDOException $e)
		{
			throw $e;
		}
            
        }
        
        //refuser le don
        public static function refuserDon($idDon){
            $sql = "UPDATE don SET status = 'ref' WHERE id_don = '$idDon'";
		try
		{
			$db = Database::getInstance();
			return $db->exec($sql);
		}
		catch(PDOException $e)
		{
			throw $e;
		}
            
        }

}
?>

