
<div id="main_page">
    Bienvenue!
    <br>
<?php
$user= UserDAO::findUser($_SESSION["connected"]);
$typeUser=$user->getType_user();
if($typeUser=='sup'){
 ?>   
    Hello Superviseur
    
<?php    
}
elseif ($typeUser=='emp') {
?>
    Hello employe
 <?php   
}
    ?>
</div>



