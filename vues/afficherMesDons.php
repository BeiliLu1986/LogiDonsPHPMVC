<div id="vue1">
	
<?php
require_once('./modele/UserDAO.class.php');
include_once('./modele/classes/User.class.php');
require_once('./modele/classes/Liste.class.php');

$dao = new UserDAO();
/*
if (ISSET($_REQUEST["numASupprimer"]))
{
	$x = new Items();
	$x->setIdItem($_REQUEST["numASupprimer"]);
	$dao->delete($x);
}
*/
$courriel = 'user@logidons.com';
$liste = $dao->findUser($courriel);

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
	$u = $liste->getCurrent();
	if ($u!=null)
	{
		echo "
		<tr>
		<td>".$u->id_user()."</td>
		<td>".$u->id_user()."</td>
		<td>".$u->id_user()."</td>
		<td>".$u->id_user()."</td>
		<td>".$u->id_user()."</td>
	    <td class ='text-center'>
		<a href='?action=editerService&serviceEditer=".$u->id_user()."' class='btn btn-success  ' title='Editer Service' ><i class='glyphicon glyphicon-edit'></i></a> 
		<a href='?action=supprimerService&numASupprimer=".$u->id_user()."' class='btn btn-danger' title='Supprimer Service'><i class='glyphicon glyphicon-trash'></i></a>
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
