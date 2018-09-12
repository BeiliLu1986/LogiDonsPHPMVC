<div id="vue1">
	
<?php
require_once('./model/DonDAO.class.php');
require_once('./model/classes/Liste.class.php');
require_once('./model/classes/User.class.php');



$dao = new DonDAO();
/*
if (ISSET($_REQUEST["numASupprimer"]))
{
	$x = new Items();
	$x->setIdItem($_REQUEST["numASupprimer"]);
	$dao->delete($x);
}
*/
$liste = $dao->findByIdEmploye();

?>
<!-- Table de Services -->
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
	$p = $liste->getCurrent();
	if ($p!=null)
	{
		echo "
		<tr>
		<td>".$p->getIdItem()."</td>
		<td>".$p->getClave()."</td>
		<td>".$p->getNomItem()."</td>
		<td>".$p->getDescriptionItem()."</td>
		<td>".$p->getPrixItem()."</td>
	    <td class ='text-center'>
		<a href='?action=editerService&serviceEditer=".$p->getClave()."' class='btn btn-success  ' title='Editer Service' ><i class='glyphicon glyphicon-edit'></i></a> 
		<a href='?action=supprimerService&numASupprimer=".$p->getIdItem()."' class='btn btn-danger' title='Supprimer Service'><i class='glyphicon glyphicon-trash'></i></a>
		</td>
		</tr>
		";
	}
}?>
</table>
</div>
<!-- Table de Services -->
</div>
