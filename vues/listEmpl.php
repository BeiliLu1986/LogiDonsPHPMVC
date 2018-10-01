
<!-- Script pour dataTables  -->
<?php include 'ScriptsDataTables.php';?>
<!--  CSS pour la couleur de colonnes -->
<link rel="stylesheet" href="./css/ColorValues.css">


<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4 text-center">
					<h1 class="display-4">Liste des employes</h1>
					<hr>
					<a class="link btn btn-info " href="?action=ajoutEmpl"  style="color:white;" >Ajouter nouveau employe</a><br>
					<hr>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
</div>
<div class="table-responsive">
<table id="items_data"   class="table table-striped table-bordered table-hover">
    <thead>
	<tr class="info">
    <td>Nom</td>
    <td>Prenom</td>
    <td>Courriel</td>
    <td>Téléphone</td>
    <td>Adresse</td>
    <td>Code Postale</td>
    <td>Ville</td>
    <td>Province</td>
    <td class="text-center">Modifier info.</th>
    </tr>
	</thead>
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
    
    echo '<tr>
			<td>'.$nom.'</td>
			<td>'.$prenom.'</td>
			<td>'.$email.'</td>
			<td>'.$tel.'</td>
			<td>'.$adresse.'</td>
            <td>'.$codePost.'</td>
			<td>'.$ville.'</td>
			<td>'.$prov.'</td>
			<td class="text-center"><a href="?action=modifEmpl&idEmp='.$id_user.' " class="btn btn-success" title="Modifier employe" >Modifier <i class="fa fa-pencil" style="color:white;"></i></td>
			</tr>';
    }
}

?>
</table>
<!--  Script -->
<script type="text/javascript">  
				$(document).ready(function(){  
					$('#items_data').DataTable({
							dom: 'Bfrtip',
							buttons:[
									{ extend: 'print', text: 'Empprimer table' }
									
									],
									
							"language":{
										"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
										},
							"columnDefs":[{
												"targets": 3,
												"render": function(data, type, full, meta) {
															var cellText = $(data).text(); //Stripping html tags !!!
															if (type === 'display' &&  (cellText == "Nouveau" || data=='Nouveau')) {
																var rowIndex = meta.row+1;
																var colIndex = meta.col+1;
																$('#items_data tbody tr:nth-child('+rowIndex+')').addClass('lightGreen');
																$('#items_data tbody tr:nth-child('+rowIndex+') td:nth-child('+colIndex+')').addClass('green');
																return data;
															} else if (type === 'display' &&  (cellText == "Accepté" || data=='Accepté')) {
																var rowIndex = meta.row+1;
																var colIndex = meta.col+1;
																$('#items_data tbody tr:nth-child('+rowIndex+')').addClass('lightBlue');
																$('#items_data tbody tr:nth-child('+rowIndex+') td:nth-child('+colIndex+')').addClass('blue');
																return data;
															} else if (type === 'display' &&  (cellText == "Refusé" || data=='Refusé')) {
																var rowIndex = meta.row+1;
																var colIndex = meta.col+1;
																$('#items_data tbody tr:nth-child('+rowIndex+')').addClass('lightRed');
																$('#items_data tbody tr:nth-child('+rowIndex+') td:nth-child('+colIndex+')').addClass('red');
															return data;
															} else {
																	return data;
																}
														}
										}]
					});  
				});  
			</script>  
</div>
