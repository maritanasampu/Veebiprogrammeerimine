<?php
	// Radio tüüpi input väljade puhul võib mõlemale kirjutada sisse php osa, mis kontrollib, kas sugu on just see, 
	//mis antud nupuga valiti ja siis echo abil kirjutaks ühe atribuudi juurde: "checked" (jah ainult ühe sõna).
	

	?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>1. test</title>
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>

<body>
	<h1>Avaleht</h1>
	<p>See leht on loodud õppetöö raames ja ei sisalda mingit usaldusväärset sisu</p>
	<p>This page is created for study and does not consist anything reliable</p>
	  
	<div class="form">
		<h3>Logi sisse</h3>
		<form method="POST">
			<label>Kasutajanimi/e-mail: </label>
			<input name="loginEmail" type="email">
			<label>Parool: </label>
			<input name="loginPassword" type="password">
			<input type="submit" name="submitLogin" value="Kinnita">
		</form>
	</div>

	<div class="form">
		<h3>Registreeru</h3>
		<form method="post">
			<label>Nimi: </label>
			<input name="signupFirstName" type="text">
			<label>Perekonnanimi: </label>
			<input name="signupFamilyName" type="text">
			<label>Sugu: </label>
			<input id="Sugu1" type="radio" name="gender" value="1">
			<label for "Sugu1">M</label>
			<input id="Sugu2" type="radio" name="gender" value="2">
			<label for="Sugu2">N</label>
			<div>
				<label>E-mail: </label>
				<input name="signupEmail" type="email">
				<label>Parool: </label>
				<input name="signupPassword" type="password">
				<!--	<label>Korda parooli: </label>
				<input name="signupPassword" type="password"> -->
			</div>
			<input type="submit" name="submitNewAccount" value="Kinnita">
		</form>
	</div>

</body>

</html>

