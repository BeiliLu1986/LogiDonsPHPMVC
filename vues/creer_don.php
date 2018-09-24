<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h1 class="display-4">Faire un don</h1>
        <hr>
    </div>
    <div class="col-md-4"></div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <form action="" method="post" id="newDon">
                <div class="form-group row">
                    <div class="col-sm-6">
						<label for="typeDeDon">* Type de don</label>
						<select required  class="selectpicker form-control" name="typeDon">
							<option value="">Choisir...</option>
							<option value="arg">argent</option>
							<option value="hab">habillement</option>
							<option value="nou">nourriture</option>
							<option value="ame">ameublement</option>
						</select>
				    </div>
                    <div class="col-sm-6">
						<label for="email">* Courriel</label>
						<input required type="email" name="email" class="form-control" id="email" placeholder="votre@courriel.com" autocomplete="false">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
						<label for="description">* Description</label>
						<textarea required class="form-control" name="descr" cols="40" rows="3"></textarea>
                    </div>
                    <div class="col-sm-6">
						<label for="nom">* Nom</label>
						<input required type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom"  autocomplete="false">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="livraison">Livraison</label><br>
						<div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="livraison"  id="inlineRadio1" value="oui" checked>
							<label class="form-check-label" for="inlineRadio1">Oui</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="livraison"  id="inlineRadio2" value="non">
							<label class="form-check-label" for="inlineRadio2">Non</label>
						</div>
			        </div>
                    <div class="col-sm-6">
                        <label for="prenom">* Prenom</label>
						<input required type="text" name="prenom" class="form-control" id="prenom" placeholder="prenom">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
						<label for="date">Date</label>
                                                <input required type="date" class="form-control" id="dateLiv" name="dateLivraison" value="">
                    </div>
                    <div class="col-sm-6">
                        <label for="tel">* Téléphone <small>(format: 000-000-0000)</small></label>
						<input required type="text" name="tel" class="form-control" id="tel" placeholder="000-000-0000" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" minlength="12" maxlength="12">
                    </div>
                </div>
				<div class="form-group row">
                    <div class="col-sm-6">
						<label for="quantite">Quantité</label>
                                                <input required type="number" name="quantite" class="form-control" id="quantite" placeholder="Quantité" >
                    </div>
					<div class="col-sm-3">
                        <label for="adresse">* Adresse</label>
						<input required type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse">
                    </div>
                    <div class="col-sm-3">
					    <label for="ville">* Ville</label>
						<input required type="text" name="ville" class="form-control" id="ville" placeholder="ville">
                    </div>
                </div>
			   <div class="form-group row">
                    <div class="col-sm-6">
						<label for="montant">Montant</label>
						<input required type="number" name="montant" step="0.01" class="form-control" id="montant" placeholder="$">
					</div>
					<div class="col-sm-3">
                        <label for="codePostP">* Code postale</label>
						<input required type="text" name="codePostale" class="form-control" id="codePostale" placeholder="Code postale" minlength="6" maxlength="6">
					</div>
                    <div class="col-sm-3">
					    <label for="province">* Province</label>
                                                <select required name="province" class="selectpicker form-control">
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
				<div class="form-group row">
                    <div class="col-sm-6">
					</div>
					<div class="col-sm-3">
						<label for="question">Ce don provient d'une organisation?</label>
				    	<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="checkOui" name="checkOrg" value="oui">
							<label class="form-check-label" for="inlineRadio1">Oui</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="checkNon" name="checkOrg" value="non" checked>
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
				<div class="form-group row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<button type="submit" value="OK" class="btn btn-info px-4 float-right btn-block ">Donner</button>
						<input name="action" value="save" type="hidden" /> 
					</div>
					<div class="col-sm-4"></div>
				</div>
                   
            </form>
		</div>
    </div>
</div>



