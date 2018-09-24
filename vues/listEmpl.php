<link rel="stylesheet" type="text/css" href="./css/listEmpl.css">
<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<h1 class="display-4">Liste des employes</h1>
					<hr>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
</div>
<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					
                                        <a class="link" href="?action=ajoutEmpl">Ajouter nouveau employe</a><br>
					<hr>
				</div>
			
			</div>
		</div>
</div>


<div>
<table>
    <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Courriel</th>
    <th>Téléphone</th>
    <th>Adresse</th>
    <th>Code Postale</th>
    <th>Ville</th>
    <th>Province</th>
    <th></th>
    </tr>
<?php
require_once('/modele/UserDAO.class.php');
$id_user=$nom=$prenom=$email=$tel=$adresse=$codePost=$ville=$prov="";
$liste= UserDAO::findAllEmpls();

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
    
    echo '<tr><td>'.$nom.'</td><td>'.$prenom.'</td><td>'.$email.'</td><td>'.$tel.'</td><td>'.$adresse.'</td>'
            . '<td>'.$codePost.'</td><td>'.$ville.'</td><td>'.$prov.'</td><td><a href="?action=modifEmpl&idEmp='.$id_user.'">edit</td></tr>';
    
}
 
}

?>


</table>
</div>
