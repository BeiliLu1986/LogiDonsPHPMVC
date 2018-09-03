<?php
require_once('./controleur/Action.interface.php');
class SaveAction implements Action {
	public function execute(){
            
                //ajouter un don
    if(isset($_REQUEST["nom"])){
            require_once('/modele/classes/Don.class.php');  
            require_once('/modele/UserDAO.class.php');
            require_once('/modele/classes/User.class.php');
            require_once('/modele/DonDAO.class.php');
            
            $nom=$_REQUEST["nom"];
            $prenom=$_REQUEST["prenom"];
            
            //creation de ID user
            $id=substr($nom,0,1).$prenom;
            if(UserDAO::findById($id)==null){
                $id_user=$id;
            }
            else{
                $id_user=UserDAO::creerUserId($id);
            }
            
            //creer user et don et les inserer dans le BD
            $nom_organis="";
            $typeUser="don";
                       
            $newUser=new User();
            $newUser->setId_user($id_user);
            $newUser->setNom($nom);
            $newUser->setPrenom($prenom);
                        
            if(isset($_REQUEST["nomOrg"])){
                $nom_organis=$_REQUEST["nomOrg"];
            }
            
            $newUser->setType_user($typeUser);
            $newUser->setCourriel($_REQUEST["email"]);
            $newUser->setNom_organis($nom_organis);
            $newUser->setTelephone($_REQUEST["tel"]);
            $newUser->setVille($_REQUEST["ville"]);
            $newUser->setProvince($_REQUEST["prov"]);
            $newUser->setCode_postale($_REQUEST["codePost"]);
            $newUser->setAdresse($_REQUEST["adresse"]);
            $userDao=new UserDAO();
            $userDao->addUser($newUser);
            
            
            $newDon=new Don();
            $newDon->setType_don($_REQUEST["typeDon"]);
            $newDon->setDescription($_REQUEST["descr"]);
            $newDon->setDonateur($id_user);
            $newDon->setLivraison($_REQUEST["livr"]);
            $newDon->setDate_livr($_REQUEST["dateLivr"]);
            $newDon->setQuantite($_REQUEST["quantite"]);
            $newDon->setMontant($_REQUEST["montant"]);
            
            $dao=new DonDAO();
            $dao->addDon($newDon);
            
            
            return "main_page";    
            
                }
                
                
    elseif (isset($_REQUEST["courriel"])){
            
            require_once('/modele/UserDAO.class.php');
            require_once('/modele/classes/User.class.php');
            $typeUser="ben";
            $nom=$_REQUEST["nomBen"];
            $prenom=$_REQUEST["prenomBen"];
            
            //creation de ID user
            $id=substr($nom,0,1).$prenom;
            if(UserDAO::findById($id)==null){
                $id_user=$id;
            }
            else{
                $id_user=UserDAO::creerUserId($id);
            }
            //creer un user et l'inserer dans le BD
            
            $newUser=new User();
            $newUser->setId_user($id_user);
            $newUser->setNom($nom);
            $newUser->setPrenom($prenom);
            $newUser->setType_user($typeUser);
            $newUser->setCourriel($_REQUEST["courriel"]);
            
            $newUser->setTelephone($_REQUEST["tel"]);
            $newUser->setVille($_REQUEST["ville"]);
            $newUser->setProvince($_REQUEST["prov"]);
            $newUser->setCode_postale($_REQUEST["codePost"]);
            $newUser->setAdresse($_REQUEST["adresse"]);
            $userDao=new UserDAO();
            $userDao->addUser($newUser);
            
            return "main_page";
            
            
            } 
	}
}

