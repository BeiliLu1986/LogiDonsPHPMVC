
<div id="main_page">
    
    <br>
<?php
$user= UserDAO::findUser($_SESSION["connected"]);
$typeUser=$user->getType_user();
$nom=$user->getNom();
$prenom=$user->getPrenom();
if($typeUser=='sup'){
 ?>   
    Bienvenue, <?php echo $nom." ".$prenom ?>
    
<?php    
}
elseif ($typeUser=='emp') {
?>
    Bienvenue, <?php echo $nom." ".$prenom ?>
 <?php   
}
elseif ($typeUser=='ben') {
    ?>
    Bienvenue, <?php echo $nom." ".$prenom ?>
    <?php
}
?>
</div>



