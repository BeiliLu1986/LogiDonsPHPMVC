<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
		<h1 class="display-4">Creer un employe</h1>
        <hr>
    </div>
    <div class="col-md-4"></div>
</div>
<div class="container">
<form method="post" autocomplete="off">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-3">
		<div class="form-group">
			<label for="nom">* Nom</label>
			<input required type="text" name="nomEmpl" class="form-control" placeholder="Nom d'employe" minlength="1" maxlength="50" >
		</div>
		<div class="form-group">
			<label for="prenom">* Prenom</label>
			<input required type="text" name="prenomEmpl" class="form-control" placeholder="Prenom d'employe" minlength="1" maxlength="50">
		</div>
		<div class="form-group">
			<label for="tel">* Téléphone <small>(format: 000-000-0000)</small></label>
			<input required type="text" name="telEmpl" class="form-control" placeholder="000-000-0000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" minlength="12" maxlength="12">
		</div>
		<div class="form-group">
			<label for="email">* Courriel</label>
			<input required type="email" name="emailEmpl" class="form-control" placeholder="employe@logidons.com" minlength="3" maxlength="50">
		</div>
		<div class="form-group">
			<label for="password">* Mot de pass</label>
			<input required type="password" name="pasEmpl" class="form-control" placeholder="Mot de pass" minlength="6" maxlength="20">
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
			<label for="ville">* Ville</label>
			<input required type="text" name="villeEmpl" class="form-control" placeholder="Ville" minlength="1" maxlength="50">
		</div>
		<div class="form-group">
			<label for="province" >* Province</label>
			<select required name="provEmpl" class="selectpicker form-control">
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
		<div class="form-group">
			<label for="code">* Code postale <small>(format: A0A0A0)</small></label>
			<input required type="text" name="codeEmpl" class="form-control" placeholder="Code Postale" minlength="6" maxlength="6">
		</div>
		<div class="form-group">
			<label for="adresse">* Adresse</label>
			<input required type="text" name="adrEmpl" class="form-control" placeholder="Adresse" minlength="1" maxlength="100">
		</div>
	</div>
	<div class="col-md-3"></div>
</div>
<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<button type="submit"  name="ok" value="OK" class="btn btn-info px-4 float-right " >Enregistrer Employe</button>
							<input name="action" value="save" type="hidden" />
						</div>
						<div class="col-md-4"></div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
</div>
</form>
</div>

