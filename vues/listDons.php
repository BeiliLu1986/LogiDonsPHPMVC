
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
					<h1 class="display-4">Liste des dons</h1>
					<hr>
					
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
</div>
<!-- Table de Dons -->
<div class="table-responsive">
<table id="items_data"   class="table table-striped table-bordered table-hover">
    <thead>
	<tr class="info">
	<td>Don id</td>
    <td>Type</td>
    <td>Description</td>
    <td>Status</td>
    <td>Affecté à</td>
	</tr>
    </thead>
<?php
require_once('/modele/DonDAO.class.php');
$id_don=$type=$descr=$status=$nom=$prenom="";
$liste= DonDAO::findEmplsDonAll();
if($liste!=NULL){
    while ($liste->next()){
        $p=$liste->current();
        $id_don=$p->getId_don();
        $t=$p->getType_don();
        $descr=$p->getDescription();
        $s=$p->getStatus();
        $nom=$p->getNomEmpl();
        $prenom=$p->getPrenomEmpl();
        
        if($t=='hab'){$type="habilement";}
        elseif ($t=='arg') {$type="argent";}
        elseif ($t=='nou'){$type='nourriture';}
        elseif ($t=='ame'){$type='ameublement';}
        
        if($s=='acc'){$status='Accepté';}
        elseif ($s=='ref') {$status='Refusé';}
        else {$status='Nouveau';}
		echo '<tr>
			<td>'.$id_don.'</td>
			<td>'.$type.'</td>
			<td>'.$descr.'</td>
			<td>'.$status.'</td>
			<td>'.$nom." ".$prenom.'</td>
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
<!--  Table de Dons -->


