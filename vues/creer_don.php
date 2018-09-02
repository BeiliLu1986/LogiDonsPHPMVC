
<html>

<head>
<meta http-equiv="Content-Language" content="en-ca">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="./css/style.css" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#orgData').hide();
    
    $('#checkOrg').change(function(){
        if(this.checked)
            $('#orgData').show();
        else
            $('#orgData').hide();

    });
});
</script>
<title>Proposer un don</title>
</head>

<body>
<div id="container">
<div id="body">

            <div id="smallforms2">
<div><h2>Information sur le don</h2></div>
    <form action="" method="post">
        
        <label for="typeDeDon">Type de don :</label>
        <select class="" name="typeDon">
            <option value="arg">argent</option>
            <option value="hab">habillement</option>
            <option value="nou">nourriture</option>
            <option value="ame">ameublement</option>
          </select><br>
          <label for="description">Description :</label><textarea name="descr" cols="40" rows="3"></textarea><br>
          <label for="livraison">Livraison :</label>
            <input type="radio" name="livr" value="oui">Oui
            <input type="radio" name="livr" value="non">Non
            <br>
            <label for="date">Date :</label>
            <input type="date" name="dateLivr" value=""><br>
          <label for="quantite">Quantité :</label><input type="text" name="quantite" ><br>
          <label for="montant">Montant :</label><input type="text" name="montant"><br>



          <label for="email">E-mail :</label><input type="email" name="email"><br>
          <label for="nom">Nom :</label><input type="text" name="nom" ><br>
          <label for="prenom">Prenom :</label><input type="text" name="prenom" ><br>
          <label for="tel">Téléphone :</label><input type="text" name="tel" ><br>
          <label for="adresse">Adresse :</label><input type="text" name="adresse" ><br>
          <label for="ville">Ville :</label><input type="text" name="ville" ><br>
          <label for="codePostP">Code postale :</label><input type="text" name="codePost" ><br>
          <label for="province">Province :</label><input type="text" name="prov" ><br>
          <label for="question">Ce don provient d'une organisation?</label><input type="checkbox" id="checkOrg" name="checkOrg" ><br>
          <div id="orgData">
          <label for="nomOrg">Nom d'organisation :</label><input type="text" name="nomOrg"><br>
          
          </div>        
        <button type="submit" value="OK" >OK</button>
        <input name="action" value="save" type="hidden" />
    </form>
</div>
</div>

</div>
    
</body>
</html>
