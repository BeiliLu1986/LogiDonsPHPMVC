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
    
}
?>

