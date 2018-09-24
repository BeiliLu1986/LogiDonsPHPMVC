
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">

<style>
.lightRed {
  background-color: #E8F5E9 !important
}

.lightRed a {
  color: #fff;
  font-weight: bold;
}

.red {
  background-color: #66BB6A; 
}
</style>
	
<?php
require_once('./modele/DonDAO.class.php');
require_once('./modele/classes/Liste.class.php');
require_once('./modele/classes/User.class.php');
require_once('./modele/UserDAO.class.php');


$dao = new DonDAO();
//
	if (ISSET($_SESSION["connected"]))
	{
		
		$user= UserDAO::findUser($_SESSION["connected"]);
		$idEmpl=$user->getId_user();
                $nom=$user->getNom();
                $prenom=$user->getPrenom();
                $liste = $dao->findEmplsDon($idEmpl);
	}
?>
<div class="page-header">
	<h1>
		<small>Les dons afféctés à <?php echo $nom." ".$prenom ?></small>
	</h1>
</div>
<br>
<div id="vue1">
<!-- Table de Dons -->
<div class="table-responsive">
		<table id="items_data"   class="table table-striped table-bordered table-hover">
		<thead>
		<tr class="info">
		<td>Id</td>
		<td>Type</td>
		<td>Description</td>
		<td>Status</td>
		<td class="text-center">Actions</td>
		</tr>
		</thead>
<?php	
while ($liste->next())
{
	$p = $liste->current();
        
        //afficher le status correctement
        $status=$p->getStatus();
        $sFr="";
        if($status=='acc'){$sFr='Accepté';}
        elseif ($status=='ref') {$sFr='Refusé';}
        else {$sFr='Nouveau';}
        
        //afficher le type de don correctement
        $type=$p->getType_don();
        $typeFr="";
        if($type=='hab'){$typeFr='habillement';}
        elseif ($type=='arg'){$typeFr='argent';}
        elseif ($type=='nou'){$typeFr='nourriture';}
        elseif ($type=='ame'){$typeFr='ameublement';}
        else{$typeFr='inconnue???Errorrrr!!!';}
        
	if ($p!=null)
	{
            
		echo "
		<tr>
		<td>".$p->getId_don()."</td>
		<td>".$typeFr."</td>
		<td>".$p->getDescription()."</td>
		<td>".$sFr."</td>
		
	    <td class ='text-center'>
		<a href='?action=accepterDon&donAccepter=".$p->getId_don()."' class='btn btn-success' title='Accepter Don' ><i class='fa fa-check'></i></a> 
		<a href='?action=refuserDon&donRefuser=".$p->getId_don()."' class='btn btn-danger' title='Refuser Don'><i class='fa fa-remove'></i></a>
		</td>
		</tr>
		";
	}
}
?>
</table>
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
<!-- Table de Dons  -->
</div>
