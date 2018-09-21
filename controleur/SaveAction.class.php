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
            $rand=rand(5, 15);
            $id_don=$rand.$id_user;
            
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
            $newUser->setProvince($_REQUEST["province"]);
            $newUser->setCode_postale($_REQUEST["codePostale"]);
            $newUser->setAdresse($_REQUEST["adresse"]);
            $userDao=new UserDAO();
            $userDao->addUser($newUser);
            
            
            if(isset($_REQUEST["dateLivraison"])){
                $date_livr=$_REQUEST["dateLivraison"];
            }
            else {$date_livr=NULL;}
            
           
            
            $newDon=new Don();
            $newDon->setId_don($id_don);
            $newDon->setType_don($_REQUEST["typeDon"]);
            $newDon->setDescription($_REQUEST["descr"]);
            $newDon->setDonateur($id_user);
            $newDon->setLivraison($_REQUEST["livraison"]);
            $newDon->setDate_livr($date_livr);
            $newDon->setQuantite($_REQUEST["quantite"]);
            $newDon->setMontant($_REQUEST["montant"]);
            
            $dao=new DonDAO();
            $dao->addDon($newDon);
            
            $empl= DonDAO::findMinQuantEmplsDons();
            DonDAO::affecterDon($empl, $id_don);
            
            
            return "default";    
            
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
            $newUser->setPassword($_REQUEST["password"]);
            $newUser->setTelephone($_REQUEST["tel"]);
            $newUser->setVille($_REQUEST["ville"]);
            $newUser->setProvince($_REQUEST["prov"]);
            $newUser->setCode_postale($_REQUEST["codePost"]);
            $newUser->setAdresse($_REQUEST["adresse"]);
            $userDao=new UserDAO();
            $userDao->addBenevole($newUser);
            
            return "default";
            
            
            } 
            
        elseif (isset($_REQUEST["nomEmpl"])){
            require_once('/modele/UserDAO.class.php');
            require_once('/modele/classes/User.class.php');
            $nom=$_REQUEST["nomEmpl"];
            $prenom=$_REQUEST["prenomEmpl"];

            $id=substr($nom,0,1).$prenom;
            if(UserDAO::findById($id)==null){
                $id_user=$id;
            }
            else{
                $id_user=UserDAO::creerUserId($id);
            }
            
            $newEmpl=new User();
            $newEmpl->setId_user($id_user);
            $newEmpl->setNom($nom);
            $newEmpl->setPrenom($prenom);
            $newEmpl->setCourriel($_REQUEST["emailEmpl"]);
            $newEmpl->setTelephone($_REQUEST["telEmpl"]);
            $newEmpl->setVille($_REQUEST["villeEmpl"]);
            $newEmpl->setProvince($_REQUEST["provEmpl"]);
            $newEmpl->setCode_postale($_REQUEST["codeEmpl"]);
            $newEmpl->setAdresse($_REQUEST["adrEmpl"]);
            $newEmpl->setPassword($_REQUEST["pasEmpl"]);
            
            UserDAO::addEmploye($newEmpl);
            
            return "listEmpl";
          }   
          
          elseif (isset($_REQUEST["nomEmplMod"])){
            require_once('/modele/UserDAO.class.php');
            require_once('/modele/classes/User.class.php');
              
            $id='Ksa'; //$_REQUEST["idUser"]
            $empl=new User();
            $empl->setId_user($id);
            $empl->setNom($_REQUEST["nomEmplMod"]);
            $empl->setPrenom($_REQUEST["prenomEmpl"]);
            $empl->setCourriel($_REQUEST["emailEmpl"]);
            $empl->setTelephone($_REQUEST["telEmpl"]);
            $empl->setVille($_REQUEST["villeEmpl"]);
            $empl->setProvince($_REQUEST["provEmpl"]);
            $empl->setCode_postale($_REQUEST["codeEmpl"]);
            $empl->setAdresse($_REQUEST["adrEmpl"]);
            $empl->setPassword($_REQUEST["pasEmpl"]);
            
            UserDAO::updateUser($empl);
            
              return "listEmpl";
          }
          
          
          
 else { return "default";}
	}
}

