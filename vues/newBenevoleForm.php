<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h1 class="display-4">S'enregistrer</h1>
        <hr>
    </div>
    <div class="col-md-4"></div>
</div>
<div class="container py-5">
<form action="" method="post">
    <div class="row">
        <div class="col-md-10 mx-auto">
          
                <div class="form-group row">
                    <div class="col-sm-6">
						<label for="email">Courriel</label>
						<input type="email" name="courriel" id="courriel" class="form-control" placeholder="votre@courriel.com" />
						<label for="nom">Nom</label>
						<input type="text" name="nomBen" id="nomBen" class="form-control" placeholder="Nom"  />
						<label for="prenom">Prenom</label>
						<input type="text" name="prenomBen" id="prenomBen" class="form-control" placeholder="Prénom"  />
				    </div>
					<div class="col-sm-3">
						<label for="">Ma disponibilité :</label>
				        <fieldset class="form-control">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" id="" name="" value="">
								<label class="form-check-label" for="inlineRadio1">Lundi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="" value="">
								<label class="form-check-label" for="inlineRadio2" >Mardi</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" id="" name="" value="">
								<label class="form-check-label" for="inlineRadio3">Mercredi</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="" value="">
								<label class="form-check-label" for="inlineRadio4" >Juedi</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="" value="">
								<label class="form-check-label" for="inlineRadio5" >Vendredi</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" id="" name="" value="">
								<label class="form-check-label" for="inlineRadio6">Samedi</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="" value="">
								<label class="form-check-label" for="inlineRadio7" >Vendredi</label>
							</div>
						</fieldset>
					</div>
					<div class="col-sm-3">
						 <label for="">De:</label>				
						<input type="time" class="form-control" >heures
						<label for="">À:</label>
					    <input type="time" class="form-control">heures
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
						<label for="tel">Téléphone</label>
						<input type="text" name="tel" id="tel" class="form-control" placeholder="Téléphone"  />
                    </div>
                </div>
				<div class="form-group row">
                    <div class="col-sm-3">
						 <label for="adresse">Adresse</label>
						 <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Adresse"  />
                    </div>
					<div class="col-sm-3">
						<label for="ville">Ville</label>
						<input type="text" name="ville" id="ville" class="form-control" placeholder="Ville" />
                    </div>
                </div>
				<div class="form-group row">
                    <div class="col-sm-3">
						 <label for="codePostP">Code postale</label>
						 <input type="text" name="codePost" id="codePost" class="form-control" placeholder="CodePostal"  />
                    </div>
					<div class="col-sm-3">
						<label for="province">Province</label>
						<select class="selectpicker form-control">
							<option>Quebec</option>
							<option>Ontario</option>
							<option>Nova Scotia</option>
							<option>New Brunswick</option>
							<option>Manitoba</option>
							<option>British Columbia</option>
							<option>Prince Edward Isladn</option>
							<option>Saskatchewan</option>
							<option>Alberta</option>
							<option>Newfoundland and Labrador</option>
						</select>
                    </div>
                </div>
		</div>
	</div> <!--Row-->
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<button type="submit"  name="ok" value="OK" class="btn btn-info px-4 float-right " >M'enregistrer</button>
			<input name="action" value="save" type="hidden" />
		</div>
		<div class="col-sm-4"></div>
		
	</div>
</form>
</div>
        


