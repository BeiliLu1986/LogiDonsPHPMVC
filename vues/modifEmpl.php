<?php
require_once('/modele/UserDAO.class.php');

$id='Ksa'; //$_REQUEST["idUser"]
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
    <div><label for="nom">Nom</label><input required type="text" name="nomEmplMod" value="<?=$nom?>"></div>
<div><label for="prenom">Prenom</label><input required type="text" name="prenomEmpl" value="<?=$prenom?>"></div>
<div><label for="email">Courriel</label><input required type="email" name="emailEmpl" value="<?=$email?>"></div>
<div><label for="tel">Téléphone</label><input required type="text" name="telEmpl" value="<?=$tel?>"></div>
<div><label for="ville">Ville</label><input required type="text" name="villeEmpl" value="<?=$ville?>"></div>
<div><label for="province">Province</label><input required type="text" name="provEmpl" value="<?=$prov?>"></div>
<div><label for="code">Code postale</label><input required type="text" name="codeEmpl" value="<?=$codePost?>"></div>
<div><label for="adresse">Adresse</label><input required type="text" name="adrEmpl" value="<?=$adresse?>"></div>
<div><label for="password">Mot de pass</label><input required type="text" name="pasEmpl" value="<?=$pass?>"></div>
<div><input type="submit" value="Ok"></div>
<input name="action" value="save" type="hidden" />
</form>