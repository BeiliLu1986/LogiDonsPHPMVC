<?php
require_once('/modele/DonDAO.class.php');
$total=$j="";
$count= DonDAO::countAllDons();
$jour= DonDAO::findMoyenDonsJour();
if($count!=NULL && $jour!=NULL){
      $total=$count;
      $j=$jour;
}
    
?>

<div >
<table>
    <tr>
        <td>Total de dons  : </td><td><?php echo $total?></td>
    </tr>
    <tr>
        <td>Moyen par jour   :</td><td><?php echo $j?></td>
    </tr>

</table>
</div>
