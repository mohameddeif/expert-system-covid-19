<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema especialista</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<style>
			.alert-4 {
				background-color: red;
			}
			.alert-3 {
				background-color: orange;
			}
			.alert-2 {
				background-color: yellow;
			}
			.alert-1 {
				background-color: green;
			}
		</style>
    </head>
    <body>
		<div class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Registros</a>
				  </li>
				</ul>
			</div>
		</div>

    	<div class="container pt-3">
    		<div class="col">
    			<p class="h1 text-center">Sistema Especialista COVID-19</p>
			</div>
		</div>

		<div class="container">
			<div class="col-4 offset-4 text-center">
				@if(session()->has('gravity'))
				<div class="alert alert-{{ session()->get('gravity') }}">
					Grau {{ session()->get('gravity') }}
				</div>
			@endif
			</div>
		</div>
		
    	<div class="container">
    		<div class="col-12 text-center">
    			<p class="h3">Cadastrar Paciente</p>
    		</div>
    		<div class="row text-center">
				<form class="col-6 offset-3" method="POST" action="{{ route('pacient.store') }}">
					@csrf
					<div class="form-group">
						<label for="selectSex">Sexo</label>
						<select class="form-control" id="selectSex" name="sex">
						  <option value="M">Masculino</option>
						  <option value="F">Feminino</option>
						</select>
					</div>
					<div class="form-group">
						<label for="InputAge">Idade</label>
						<input type="number" class="form-control" id="InputAge" name="age">
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="Hypertensive" name="comorbidity_patology_hypertensive" value="comorbidity_patology_hypertensive">
						<label class="form-check-label" for="Hypertensive">Hipertensão Arterial</label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="Diabetes" name="comorbidity_diabetes">
						<label class="form-check-label" for="Diabetes">Diabetes</label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="Coronary" name="comorbidity_coronary_disease">
						<label class="form-check-label" for="Coronary">Coronariopatia</label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="Immunosuppression" name="comorbidity_immunosuppression">
						<label class="form-check-label" for="Immunosuppression">Imunossupresssão</label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="Chronic" name="comorbidity_chronic_lung_disease">
						<label class="form-check-label" for="Chronic">Doença Pulmonar Crônica</label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="gestation" name="comorbidity_gestation">
						<label class="form-check-label" for="gestation">Gestação</label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="fever" name="comorbidity_fever">
						<label class="form-check-label" for="fever">Febre</label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="cough" name="comorbidity_cough">
						<label class="form-check-label" for="cough">Tosse</label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="dyspnea" name="comorbidity_dyspnea">
						<label class="form-check-label" for="dyspnea">Dispnéia</label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="headache" name="comorbidity_headache">
						<label class="form-check-label" for="headache">Cefaléia</label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="diarrhea" name="comorbidity_diarrhea">
						<label class="form-check-label" for="diarrhea">Diarréia</label>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="myalgia" name="comorbidity_myalgia">
						<label class="form-check-label" for="myalgia">Mialgia</label>
					</div>
					<div class="form-group">
						<label for="InputTemperature">Temperatura (corpórea) (em °C)</label>
						<input type="number" class="form-control" id="InputTemperature" name="temperature">
					</div>
					<div class="form-group">
						<label for="Inputheart">Frequência Cardíaca (em bpm)</label>
						<input type="number" class="form-control" id="Inputheart" name="heart_rate">
					</div>
					<div class="form-group">
						<label for="InputResperatory">Frequência Respiratória (em ipm)</label>
						<input type="number" class="form-control" id="InputResperatory" name="resperatory_rate">
					</div>
					<div class="form-group">
						<label for="InputSystolic">Saturação de Oxigênio  (em %)</label>
						<input type="number" class="form-control" id="InputSystolic" name="systolic_blood_pressure">
					</div>
					<button type="submit" class="btn btn-primary">Registrar</button>
				</form>
    		</div>
    	</div>
    </body>
</html>