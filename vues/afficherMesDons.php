<div id="vue1">
	
<?php

require_once('./modele/DonDAO.class.php');
require_once('./modele/classes/Liste.class.php');
require_once('./modele/classes/User.class.php');


$dao = new UserDAO();
/*
if (ISSET($_REQUEST["numASupprimer"]))
{
	$x = new Items();
	$x->setIdItem($_REQUEST["numASupprimer"]);
	$dao->delete($x);
}
*/

$idEmpl="bob1";
$liste = $dao->findEmplsDon($idEmpl);


?>
<!-- Table -->
<div class="table-responsive">
		<table id="items_data" class="table table-striped table-bordered table-hover">
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
	if ($p!=null)
	{
		echo "
		<tr>
		<td>".$p->getId_don()."</td>
		<td>".$p->getType_don()."</td>
		<td>".$p->getDescription()."</td>
		<td>".$p->getStatus()."</td>
		
	    <td class ='text-center'>
		<a href='?action=editerService&serviceEditer=".$p->getId_don()."' class='btn btn-success  ' title='Editer Service' ><i class='glyphicon glyphicon-edit'></i></a> 
		<a href='?action=supprimerService&numASupprimer=".$p->getId_don()."' class='btn btn-danger' title='Supprimer Service'><i class='glyphicon glyphicon-trash'></i></a>

		</td>
		</tr>
		";
	}
}?>
</table>
</div>
<script>  
		$(document).ready(function(){  
		$('#items_data').DataTable(
				{
					    dom: 'Bfrtip',
						buttons:[
									{ extend: 'print', text: 'Empprimer table' }
								],
						"language": {
						"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
						}
				}
				);  
			});  
		</script>  
</div>
