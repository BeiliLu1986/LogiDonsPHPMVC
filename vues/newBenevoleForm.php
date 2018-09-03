
<html>

<head>
<meta http-equiv="Content-Language" content="en-ca">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="./css/style.css" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<title>Bénévolat</title>
</head>

<body>
<div id="container">

	<div id="body">
            
    
<div><h2 style=" text-align: center">Nouveau bénévole</h2></div><br/>
 

<form action="controleur/contact.php"  method="post">
    
          <label for="email">Courriel :</label><input type="email" name="courriel" id="courriel" value="<?php echo(isset($_POST['courriel']))? htmlspecialchars($_POST['courriel']):'';?>" />
		  <?php echo $erreurs['courriel']; ?><br>
		  
          <label for="nom">Nom :</label><input type="text" name="nomBen" id="nomBen" value="<?php echo(isset($_POST['nomBen']))? htmlspecialchars($_POST['nomBen']):'';?>" />
		   <?php echo $erreurs['nomBen']; ?><br>
		   
          <label for="prenom">Prenom :</label><input type="text" name="prenomBen" id="prenomBen" value="<?php echo(isset($_POST['prenomBen']))? htmlspecialchars($_POST['prenomBen']):'';?>" />
		   <?php echo $erreurs['prenomBen']; ?><br>
		   
          <label for="tel">Téléphone :</label><input type="text" name="tel" id="tel" value="<?php echo(isset($_POST['tel']))? htmlspecialchars($_POST['tel']):'';?>" />
		   <?php echo $erreurs['tel']; ?><br>
		   
          <label for="adresse">Adresse :</label><input type="text" name="adresse" id="adresse" value="<?php echo(isset($_POST['adresse']))? htmlspecialchars($_POST['adresse']):'';?>" />
		   <?php echo $erreurs['adresse']; ?><br>
		   
          <label for="ville">Ville :</label><input type="text" name="ville" id="ville" value="<?php echo(isset($_POST['ville']))? htmlspecialchars($_POST['ville']):'';?>" />
		   <?php echo $erreurs['ville']; ?><br>
		   
          <label for="codePostP">Code postale :</label><input type="text" name="codePost" id="codePost" value="<?php echo(isset($_POST['codePost']))? htmlspecialchars($_POST['codePost']):'';?>" />
		   <?php echo $erreurs['codePost']; ?><br>
		   
          <label for="province">Province :</label><input type="text" name="prov" id="prov" value="<?php echo(isset($_POST['prov']))? htmlspecialchars($_POST['prov']):'';?>" />
		   <?php echo $erreurs['prov']; ?><br>
          
         <legend>Ma disponibilité :</legend>
         <fieldset>
              <input type="checkbox" value="lun">Lundi
              <input type="checkbox" value="mar">Mardi
              <input type="checkbox" value="mer">Mercredi
              <input type="checkbox" value="jeu">Jeudi
              <input type="checkbox" value="ven">Vendredi
              <input type="checkbox" value="sam">Samedi
              <input type="checkbox" value="dim">Dimanche
              <br>
              De: <input type="time">heures<br>
              A: <input type="time">heures<br>
          </fieldset>
    <button type="submit"  name="ok" value="OK" >OK</button>
    <input name="action" value="save" type="hidden" />
</form>


</div>
            </div>

</div>
</body>
</html>
