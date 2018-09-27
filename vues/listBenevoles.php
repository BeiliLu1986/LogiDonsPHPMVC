<link rel="stylesheet" type="text/css" href="./css/listEmpl.css">
<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4 text-center">
					<h1 class="display-4">Liste des bénévoles</h1>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
</div>
<div class="table-responsive">
<table class="table table-hover">
    <tr>
    <th scope="col">Nom</th>
    <th scope="col">Prenom</th>
    <th scope="col">Courriel</th>
    <th scope="col">Téléphone</th>
    <th scope="col">Adresse</th>
    <th scope="col">Code Postale</th>
    <th scope="col">Ville</th>
    <th scope="col">Province</th>
    <th scope="col">Disponibilités</th>
    <th scope="col"></th>
    </tr>
<?php
require_once('/modele/UserDAO.class.php');
$id_user=$nom=$prenom=$email=$tel=$adresse=$codePost=$ville=$prov=$dispo="";
$liste= UserDAO::findAllBenevoles();

if($liste!=NULL){
while($liste->next()){
    $u=$liste->current();
    $id_user=$u->getId_user();
    $nom=$u->getNom();
    $prenom=$u->getPrenom();
    $email=$u->getCourriel();
    $tel=$u->getTelephone();
    $adresse=$u->getAdresse();
    $codePost=$u->getCode_postale();
    $ville=$u->getVille();
    $prov=$u->getProvince();
    $dispo=$u->getDisponibilite();
    
    echo '<tr>
			<td scope="row">'.$nom.'</td>
			<td scope="row">'.$prenom.'</td>
			<td scope="row">'.$email.'</td>
			<td scope="row">'.$tel.'</td>
			<td scope="row">'.$adresse.'</td>
                        <td scope="row">'.$codePost.'</td>
			<td scope="row">'.$ville.'</td>
			<td scope="row">'.$prov.'</td>
                        <td scope="row">'.$dispo.'</td>
			</tr>';
    }
}

?>
</table>
</div>
