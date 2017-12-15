<!DOCTYPE html>
<html>
	<?php include('head.php');?>
<body>
	
	<?php include('navbar2.php');?>
	<link rel="stylesheet" type="text/css" href="style.css">


	<h1> DRG</h1>
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

<div class="row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">DRG</label>
        <select class="form-control" id="exampleFormControlSelect2">
          <option>Patologie dell'apparato respiratorio</option>
          <option>Patologie del Sistema Nervoso Centrale</option>
          <option>Patologie dell'apparato digerente</option>
          <option>Patologie cardiologiche</option>
                    <option>Patologie neoplastiche</option>
                    <option>Patologie dell'apparato genitale</option>
                    <option>Patologie dell'apparato muscolo-scheletrico</option>
</select>
        
      </div>
    </div>
      <button class="btn btn-primary" type="submit">Conferma</button>



	
