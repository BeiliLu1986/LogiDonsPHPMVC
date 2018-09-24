
<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
			    <?php include("chercherEmpl.php"); ?>
<?php
require_once('/modele/UserDAO.class.php');

$nom="";
$prenom="";
$email="";
$tel="";
$ville="";
$prov="";
$codePost="";
$adresse="";
$pass="";

if(isset($_POST['ok']))
{
$m = $_POST['subject'];

$id =$m; //$_REQUEST["idUser"]

$nom=$prenom=$email=$tel=$ville=$prov=$codePost=$adresse=$pass="";
$user=UserDAO::findById($id);



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

}
?>
					<hr>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
</div>
<div class="container">
<form method="post" autocomplete="off">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-3">
		<div class="form-group">
			<label for="nom">Nom</label>
			<input required type="text" name="nomEmplMod" value="<?=$nom?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="prenom">Prenom</label>
			<input required type="text" name="prenomEmpl" value="<?=$prenom?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Courriel</label>
			<input required type="email" name="emailEmpl" value="<?=$email?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="password">Mot de pass</label>
			<input required type="text" name="pasEmpl" value="<?=$pass?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="tel">Téléphone</label>
			<input required type="text" name="telEmpl" value="<?=$tel?>" class="form-control">
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
			<label for="ville">Ville</label>
			<input required type="text" name="villeEmpl" value="<?=$ville?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="province">Province</label>
			<input required type="text" name="provEmpl" value="<?=$prov?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="code">Code postale</label>
			<input required type="text" name="codeEmpl" value="<?=$codePost?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="adresse">Adresse</label>
			<input required type="text" name="adrEmpl" value="<?=$adresse?>" class="form-control">
		</div>
	</div>
	<div class="col-md-3"></div>
</div>
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<input type="submit" value="Modifier employe" class="btn btn-info px-4 float-right" >
	<input name="action" value="save" type="hidden" />
</div>
	<div class="col-sm-4"></div>
</div>
</form>