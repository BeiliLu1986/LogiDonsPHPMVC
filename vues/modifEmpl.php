<?php
require_once('/modele/UserDAO.class.php');
$nom=$prenom=$email=$tel=$ville=$prov=$codePost=$adresse=$pass="";

 if(isset($_REQUEST["idEmp"])){
    $user= UserDAO::findById($_REQUEST["idEmp"]);
    }
 else {
    $u= UserDAO::findUser($_SESSION["connected"]);
    $idEmpl=$u->getId_user();
    $user= UserDAO::findById($idEmpl);    
        }
 
if($user!=NULL){
$nom=$user->getNom();
$prenom=$user->getPrenom();
$email=$user->getCourriel();
$tel=$user->getTelephone();
$ville=$user->getVille();
$prov=$user->getProvince();
$codePost=$user->getCode_postale();
$adresse=$user->getAdresse();
$pass=$user->getPassword();
}

?>
<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<h1>Modifier l'employe</h1>
					<hr>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
</div>
<h1>Modifier le compte</h1>
<form method="post">
    <div><label for="nom">Nom</label><input required type="text" name="nomEmplMod" id="nomEmplMod" value="<?=$nom?>"></div>
    <div><label for="prenom">Prenom</label><input required type="text" name="prenomEmpl" id="prenomEmpl" value="<?=$prenom?>"></div>
    <div><label for="email">Courriel</label><input required type="email" name="emailEmpl" id="emailEmpl" value="<?=$email?>"></div>
    <div><label for="tel">Téléphone</label><input required type="text" name="telEmpl" id="telEmpl" value="<?=$tel?>"></div>
    <div><label for="ville">Ville</label><input required type="text" name="villeEmpl" id="villeEmpl" value="<?=$ville?>"></div>
    <div><label for="province">Province</label><input required type="text" name="provEmpl" id="provEmpl" value="<?=$prov?>"></div>
    <div><label for="code">Code postale</label><input required type="text" name="codeEmpl" id="codeEmpl" value="<?=$codePost?>"></div>
    <div><label for="adresse">Adresse</label><input required type="text" name="adrEmpl" id="adrEmpl" value="<?=$adresse?>"></div>
    <div><label for="password">Mot de pass</label><input required type="text" name="pasEmpl" id="pasEmpl" value="<?=$pass?>"></div>
    <div><input type="submit" value="Sauvegarder" id="ok"></div>
    <div><input type="button" value="Modifier" id="mod">
    <input type="button" value="Annuler" id="annul"></div>
<input name="action" value="save" type="hidden" />
</form>