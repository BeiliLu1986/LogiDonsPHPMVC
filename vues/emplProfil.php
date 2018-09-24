<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<h1>Votre profil</h1>
<?php
if (!ISSET($_SESSION)) session_start();
	if (ISSET($_SESSION["connected"]))
	{
		require_once('/modele/UserDAO.class.php');
	$user= UserDAO::findUser($_SESSION["connected"]);
	$idEmpl=$user->getId_user();
$nom=$prenom=$email=$tel=$ville=$prov=$codePost=$adresse=$pass="";
$user=UserDAO::findById($idEmpl);
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
<div class="container py-4">
<form method="post" autocomplete="off">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-3">
		<div class="form-group">
			<label for="nom">Nom</label>
			<input required type="text" name="nomEmplMod" value="<?=$nom?>" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label for="prenom">Prenom</label>
			<input required type="text" name="prenomEmpl" value="<?=$prenom?>" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label for="email">Courriel</label>
			<input required type="email" name="emailEmpl" value="<?=$email?>" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label for="password">Mot de pass</label>
			<input required type="text" name="pasEmpl" value="<?=$pass?>" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label for="tel">Téléphone</label>
			<input required type="text" name="telEmpl" value="<?=$tel?>" class="form-control" readonly>
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
			<label for="ville">Ville</label>
			<input required type="text" name="villeEmpl" value="<?=$ville?>" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label for="province">Province</label>
			<input required type="text" name="provEmpl" value="<?=$prov?>" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label for="code">Code postale</label>
			<input required type="text" name="codeEmpl" value="<?=$codePost?>" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label for="adresse">Adresse</label>
			<input required type="text" name="adrEmpl" value="<?=$adresse?>" class="form-control" readonly>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>
</div>
</form>