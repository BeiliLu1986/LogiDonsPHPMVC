<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h1 class="display-4">Disponibilite</h1>
        <hr>
    </div>
    <div class="col-md-4"></div>
</div>

<form method="post"> 
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
                             <input required type="time" class="form-control" name="deHr">heures
                            <label for="">À:</label>
                            <input required type="time" class="form-control" name="aHr">heures
                    </div>
                
		<div class="col-sm-4">
			<button type="submit"  name="ok" value="OK" class="btn btn-info px-4 float-right " >M'enregistrer</button>
			<input name="action" value="save" type="hidden" />
		</div>
		
</form>



