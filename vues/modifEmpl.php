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
<form method="post">
<div class="row" >
	<div class="col-md-4"></div>
	<div class="col-md-4">
    <div class="form-group">
		<label for="nom">Nom</label>
		<input required type="text" name="nomEmplMod" id="nomEmplMod" value="<?=$nom?>" class="form-control">
	</div>
    <div class="form-group">
		<label for="prenom">Prenom</label>
		<input required type="text" name="prenomEmpl" id="prenomEmpl" value="<?=$prenom?>" class="form-control">
	</div>
    <div class="form-group">
		<label for="email">Courriel</label>
		<input required type="email" name="emailEmpl" id="emailEmpl" value="<?=$email?>" class="form-control">
	</div>
    <div class="form-group">
		<label for="tel">Téléphone</label>
		<input required type="text" name="telEmpl" id="telEmpl" value="<?=$tel?>"class="form-control">
	</div>
    <div class="form-group">
		<label for="ville">Ville</label>
		<input required type="text" name="villeEmpl" id="villeEmpl" value="<?=$ville?>" class="form-control">
	</div>
    <div class="form-group">
		<label for="province">Province</label>
		<input required type="text" name="provEmpl" id="provEmpl" value="<?=$prov?>" class="form-control">
		</div>
    <div class="form-group">
		<label for="code">Code postale</label>
		<input required type="text" name="codeEmpl" id="codeEmpl" value="<?=$codePost?>" class="form-control">
	</div>
    <div class="form-group">
		<label for="adresse">Adresse</label>
		<input required type="text" name="adrEmpl" id="adrEmpl" value="<?=$adresse?>" class="form-control">
	</div>
    <div class="form-group">
		<label for="password">Mot de pass</label>
		<input required type="text" name="pasEmpl" id="pasEmpl" value="<?=$pass?>" class="form-control">
	</div>
    <div class="form-group">
		<input type="submit" value="Sauvegarder" id="ok" class="form-control btn btn-info "></div>
    <div class="form-group">
		<input type="button" value="Modifier" id="mod" class="form-control btn btn-info ">
		<input type="button" value="Annuler" id="annul" class="form-control btn btn-danger">
	</div>
		<input name="action" value="save" type="hidden" />
</div>
</div>
</form>