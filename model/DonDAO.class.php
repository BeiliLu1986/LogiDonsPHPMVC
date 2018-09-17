<?php
include_once('/modele/classes/Database.class.php'); 
include_once('/modele/classes/Don.class.php'); 
include_once('/modele/classes/Liste.class.php'); 
include_once('/modele/classes/User.class.php'); 

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
?>

