<link rel="stylesheet" type="text/css" href="./css/listEmpl.css">
<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4 text-center">
					<h1 class="display-4">Liste des dons</h1>
					
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
</div>
<div class="table-responsive">
<table class="table table-hover">
    <tr>
    <th scope="col">Don id</th>
    <th scope="col">Type</th>
    <th scope="col">Description</th>
    <th scope="col">Status</th>
    <th scope="col">Affecté à</th>
    <th scope="col"></th>
    </tr>
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
			<td scope="row">'.$id_don.'</td>
			<td scope="row">'.$type.'</td>
			<td scope="row">'.$descr.'</td>
			<td scope="row">'.$status.'</td>
			<td scope="row">'.$nom." ".$prenom.'</td>
			</tr>';
    }
}

    
    
    
?>
</table>
</div>
