<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Language" content="en-ca">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="./css/style.css" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<title>Projets</title>
</head>

<body>
<div id="container">

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
  </div> 
</body>
</html>


