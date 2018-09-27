<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h1 class="display-4">S'enregistrer</h1>
        <hr>
    </div>
    <div class="col-md-4"></div>
</div>
<div class="container py-5">
<form action="" method="post" autocomplete="off" id="newBenevoleform">
    <div class="row">
        <div class="col-md-10 mx-auto">
          
                <div class="form-group row">
                    <div class="col-sm-6">
                    <label for="email">* Courriel</label>
                    <input required type="" name="courriel" id="courriel" class="form-control" placeholder="votre@courriel.com" />
                    <label for="password">* Mot de passe</label>
                    <input required type="password" name="password" id="password" class="form-control" placeholder="Votre mot de passe"  />
                    <label for="nom">* Nom</label>
                    <input required type="text" name="nomBen" id="nomBen" class="form-control" placeholder="Nom"  />
                    <label for="prenom">* Prenom</label>
                    <input required type="text" name="prenomBen" id="prenomBen" class="form-control" placeholder="Prénom"  />
                </div>
                    <div class="col-sm-3">
                            <label for="">* Ma disponibilité :</label>
                            <fieldset class="form-control" >
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="" name="lundi" value="Lundi">
                                <label class="form-check-label" for="inlineRadio1">Lundi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="mardi" value="Mardi">
                                <label class="form-check-label" for="inlineRadio2" >Mardi</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="" name="mercredi" value="Mercredi">
                                <label class="form-check-label" for="inlineRadio3">Mercredi</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jeudi" value="Jeudi">
                                <label class="form-check-label" for="inlineRadio4" >Jeudi</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="vendredi" value="Vendredi">
                                <label class="form-check-label" for="inlineRadio5" >Vendredi</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="" name="samedi" value="Samedi">
                                <label class="form-check-label" for="inlineRadio6">Samedi</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dimanche" value="Dimanche">
                                <label class="form-check-label" for="inlineRadio7" >Dimanche</label>
                        </div>
                            </fieldset>
                    </div>
                    <div class="col-sm-3">
                             <label for="">* De:</label>				
                             <input  type="time" class="form-control" name="deHr">heures
                            <label for="">À:</label>
                            <input  type="time" class="form-control" name="aHr">heures
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                            <label for="tel">* Téléphone <small>(format: 000-000-0000)</small></label>
                            <input required type="tel" name="tel" id="tel" class="form-control" placeholder="000-000-0000"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" minlength="12" maxlength="12" />
                    </div>
                </div>
				<div class="form-group row">
                    <div class="col-sm-3">
                             <label for="adresse">* Adresse</label>
                             <input required type="text" name="adresse" id="adresse" class="form-control" placeholder="Adresse"  />
                    </div>
					<div class="col-sm-3">
                            <label for="ville">* Ville</label>
                            <input required type="text" name="ville" id="ville" class="form-control" placeholder="Ville" />
                    </div>
                </div>
				<div class="form-group row">
                    <div class="col-sm-3">
                                 <label for="codePostP">* Code postale <small>(format: A0A0A0)</small></label>
                                 <input required type="text" name="codePost" id="codePost" class="form-control" placeholder="Code postale" minlength="6" maxlength="6" />
    </div>
                        <div class="col-sm-3">
                                <label for="province" >* Province</label>
                                <select required name="prov" class="selectpicker form-control">
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
<script>$('#login-form').disableAutoFill({
    passwordFiled: '.password'}
);</script>


