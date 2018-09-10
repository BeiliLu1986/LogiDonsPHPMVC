<?php
$erreurs = array();
 
    if (isset($_POST['ok'])){
 
                $erreurs['courriel'] = '';
                $erreurs['nomBen'] = '';
                $erreurs['prenomBen'] = '';
                $erreurs['tel'] = '';
                $erreurs['adresse'] = '';
				$erreurs['ville'] = '';
				$erreurs['codePost'] = '';
				$erreurs['prov'] = '';
				
				
        if(empty($_POST['nomBen'])){
            $erreurs['entreprise'] = 'champ obligatoire';
        }
 
        elseif(empty($_POST['prenomBen'])){
            $erreurs['prenomBen'] = 'champ obligatoire';
        }
		
		 elseif(empty($_POST['tel'])){
            $erreurs['tel'] = 'champ obligatoire';
        }
		 elseif(empty($_POST['adresse'])){
            $erreurs['adresse'] = 'champ obligatoire';
        }
		 elseif(empty($_POST['ville'])){
            $erreurs['ville'] = 'champ obligatoire';
        }
		 elseif(empty($_POST['codePost'])){
            $erreurs['codePost'] = 'champ obligatoire';
        }
		 elseif(empty($_POST['prov'])){
            $erreurs['prov'] = 'champ obligatoire';
        }
        elseif(empty($_POST['courriel'])){
            $erreurs['courriel'] = 'champ obligatoire';
        }
        elseif(!empty($_POST['courriel']) && !preg_match('#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#',$_POST['courriel'])){
            $erreurs['courriel'] = 'Email invalide';
        }
        else {
            "FONCTION POUR ENVOYER LE FORMULAIRE PAR MAIL"
                        
        }
             
    
include ('vues/newBenevoleForm.php');
<?php