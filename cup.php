<!DOCTYPE html>
<html>
<?php include('head.php');?>
<body>

	<?php include('navbar2.php');?>


	<h1>Benvenuti nel CUP</h1>


	<form>
		<div class="row">
			<div class="col-md-4 mb-3">
				<label for="validationDefault01">NOME</label>
				<input type="text" class="form-control" id="validationDefault01" placeholder="nome" minlength="2" required>
			</div>
			<div class="col-md-4 mb-3">
				<label for="validationDefault02">COGNOME</label>
				<input type="text" class="form-control" id="validationDefault02" placeholder="cognome" minlength="2" required>
				<div class="invalid-feedback">
					Please provide a valid name.
				</div>      
			</div>
			<div class="col-md-4 mb-3">
				<label for="validationDefault01">CODICE FISCALE</label>
				<input type="text" class="form-control" id="validationDefault01" placeholder="codice fiscale" minlength="2" required>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 mb-3">
				<label for="validationDefault01">DATA DI NASCITA</label>
				<input class="form-control" id="validationDefault01"id="date" type="date">
			</div>
			<div class="col-md-4 mb-3">

				<label>SESSO</label><br>
				<label class="custom-control custom-radio">
					<input id="radio1" name="radio" type="radio" class="custom-control-input">
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Maschio</span>
				</label>
				<label class="custom-control custom-radio">
					<input id="radio2" name="radio" type="radio" class="custom-control-input">
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Femmina</span>
				</label>

			</div>
			<div class="col-md-4 mb-3">

				<div class="form-group">
					<label for="exampleFormControlSelect2">Seleziona il tipo di esame</label>
					<select  class="form-control" id="exampleFormControlSelect2">
						<option>Visita Cardiologica</option>
						<option>Visita Neurologica</option>
						<option>Visita Ginecologica</option>
						<option>Visita Ortopedica</option>
						<option>Visita Urologica</option>
						<option>Visita Odontoiatrica</option>
							
					
					</select>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-4 mb-3">
				<label for="validationDefault01">DATA DI PRENOTAZIONE</label>
				<input class="form-control" id="validationDefault01"id="date" type="date">
			</div>
			<div class="col-md-4 mb-3">

				<div class="form-group">
					<label for="exampleFormControlSelect2">STRUTTURA OSPEDALIERA</label>
					<select  class="form-control" id="exampleFormControlSelect2">
						<option>OSPEDALE POLICLINICO UNIVERSITARIO</option>
						<option>OSPEDALE BINAGHI</option>
						<option>OSPEDALE CIVILE</option>
						<option>OSPEDALE BUSINCO</option>
						<option>OSPEDALE MICROCITEMICO</option>
						<option>OSPEDALE BROTZU</option>
						<option>OSPEDALE SS TRINITA</option>
						<option>OSPEDALE MARINO</option>
					</select>
				</div>
			</div>

		</div>

		<button class="btn btn-primary" type="submit">Conferma</button>
	</form>


	<?php include('script.php');?>


</body>

</html>