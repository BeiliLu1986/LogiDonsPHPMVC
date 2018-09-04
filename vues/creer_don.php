<!--
<div id="container">
<div id="smallforms2">
<div><h2>Information sur le don</h2></div> -->
<!--
        <form action="" method="post">
        <label for="typeDeDon">Type de don :</label>
        <select required class="" name="typeDon">
            <option value="">Choisir...</option>
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



          <label for="email">Courriel :</label><input type="email" name="email"><br>
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
    </form> -->
	<!--
</div>
</div> -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <form action="" method="post">
                <div class="form-group row">
                    <div class="col-sm-6">
						<label for="typeDeDon">Type de don</label>
						<select required  class="selectpicker" name="typeDon">
							<option value="">Choisir...</option>
							<option value="arg">argent</option>
							<option value="hab">habillement</option>
							<option value="nou">nourriture</option>
							<option value="ame">ameublement</option>
						</select>
				    </div>
                    <div class="col-sm-6">
						<label for="email">Courriel</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="votre@courriel.com">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
						<label for="description">Description</label>
						<textarea class="form-control" name="descr" cols="40" rows="3"></textarea>
                    </div>
                    <div class="col-sm-6">
						<label for="nom">Nom</label>
						<input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="livraison">Livraison</label><br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="livraison"  id="inlineRadio1" value="oui">
							<label class="form-check-label" for="inlineRadio1">Oui</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="livraison"  id="inlineRadio2" value="non">
							<label class="form-check-label" for="inlineRadio2">Non</label>
						</div>
			        </div>
                    <div class="col-sm-6">
                        <label for="prenom">Prenom</label>
						<input type="text" name="prenom" class="form-control" id="prenom" placeholder="prenom">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
						<label for="date">Date</label>
						<input type="date" class="form-control" name="dateLivraison" value="">
                    </div>
                    <div class="col-sm-6">
						<label for="tel">Téléphone</label>
						<input type="text" name="tel" class="form-control" id="tel" placeholder="tel" >
                    </div>
                </div>
				<div class="form-group row">
                    <div class="col-sm-6">
						<label for="quantite">Quantité</label>
						<input type="text" name="quantite" class="form-control" id="quantite" placeholder="Quantité" >
                    </div>
					<div class="col-sm-3">
                        <label for="adresse">Adresse</label>
						<input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse">
                    </div>
                    <div class="col-sm-3">
					    <label for="ville">Ville</label>
						<input type="text" name="ville" class="form-control" id="ville" placeholder="ville">
                    </div>
                </div>
			   <div class="form-group row">
                    <div class="col-sm-6">
						<label for="montant">Montant</label>
						<input type="text" name="montant" class="form-control" id="montant" placeholder="$">
					</div>
					<div class="col-sm-3">
                        <label for="codePostP">Code postale</label>
						<input type="text" name="codePostale" class="form-control" id="codePostale" placeholder="Code postale">
					</div>
                    <div class="col-sm-3">
					    <label for="province">Province</label>
						<input type="text" name="province"  class="form-control" id="province" placeholder="Province">
				    </div>
                </div>
				<div class="form-group row">
                    <div class="col-sm-6">
					</div>
					<div class="col-sm-3">
						<label for="question">Ce don provient d'une organisation?</label>
				    	<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="checkOrg" name="checkOrg" value="oui">
							<label class="form-check-label" for="inlineRadio1">Oui</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="checkOrg" value="non" checked>
							<label class="form-check-label" for="inlineRadio2" >Non</label>
						</div>
			        </div>
                    <div class="col-sm-3">
					    <div id="orgData">
							<label for="nomOrg">Nom d'organisation</label>
							<input type="text" name="nomOrg" class="form-control" id="nomOrg" placeholder="Nom de l'organisation">
          				</div> 
				    </div>
                </div>
                <button type="submit" value="OK" class="btn btn-info px-4 float-right btn-block">Donner</button>
				<input name="action" value="save" type="hidden" />     
            </form>
		</div>
    </div>
</div>
<script>

$(document).ready(function(){
    $('#orgData').hide();
    
    $('#checkOrg').change(function(){
        if(this.checked )
            $('#orgData').show();
        else
            $('#orgData').hide();
	
    });

	
});
</script>


