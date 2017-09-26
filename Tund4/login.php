<?php
	// Radio tüüpi input väljade puhul võib mõlemale kirjutada sisse php osa, mis kontrollib, kas sugu on just see, 
	//mis antud nupuga valiti ja siis echo abil kirjutaks ühe atribuudi juurde: "checked" (jah ainult ühe sõna).
	
		$signupFirstName = "";
	$signupFamilyName = "";
	$signupEmail = "";
	$gender = "";
	$signupBirthDay = null;
	$signupBirthMonth = null;
	$signupBirthYear = null;
	
	$loginEmail = "";
	
	//kas on kasutajanimi sisestatud
	if (isset ($_POST["loginEmail"])){
		if (empty ($_POST["loginEmail"])){
			//$loginEmailError ="NB! Ilma selleta ei saa sisse logida!";
		} else {
			$loginEmail = $_POST["loginEmail"];
		}
	}
	
	//kontrollime, kas kirjutati eesnimi
	if (isset ($_POST["signupFirstName"])){
		if (empty ($_POST["signupFirstName"])){
			//$signupFirstNameError ="NB! Väli on kohustuslik!";
		} else {
			$signupFirstName = $_POST["signupFirstName"];
		}
	}
	
	//kontrollime, kas kirjutati perekonnanimi
	if (isset ($_POST["signupFamilyName"])){
		if (empty ($_POST["signupFamilyName"])){
			//$signupFamilyNameError ="NB! Väli on kohustuslik!";
		} else {
			$signupFamilyName = $_POST["signupFamilyName"];
		}
	}
	
	//kas kuu määratud
	if(isset($_POST["signupBirthMonth"])) {
		$signupBirthMonth = intval($_POST["signupBirthMonth"]);
	}
	
	//kontrollime, kas kirjutati kasutajanimeks email
	if (isset ($_POST["signupEmail"])){
		if (empty ($_POST["signupEmail"])){
			//$signupEmailError ="NB! Väli on kohustuslik!";
		} else {
			$signupEmail = $_POST["signupEmail"];
		}
	}
	
	if (isset ($_POST["signupPassword"])){
		if (empty ($_POST["signupPassword"])){
			//$signupPasswordError = "NB! Väli on kohustuslik!";
		} else {
			//polnud tühi
			if (strlen($_POST["signupPassword"]) < 8){
				//$signupPasswordError = "NB! Liiga lühike salasõna, vaja vähemalt 8 tähemärki!";
			}
		}
	}
	
	if (isset($_POST["gender"]) && !empty($_POST["gender"])){ //kui on määratud ja pole tühi
			$gender = intval($_POST["gender"]);
		} else {
			//$signupGenderError = " (Palun vali sobiv!) Määramata!";
	}
	
	//tekitame sünnikuu valiku
	$monthNamesEt = ["jaanuar","veebruar","märts","aprill","mai","juuni","juuli","august","september","oktoober","november","detsember"];
	$signupMonthSelectHTML = "";
	$signupMonthSelectHTML .= '<select name="signupBirthMonth">' ."\n";
	$signupMonthSelectHTML .= '<option value="" selected disabled> kuu </option>' ."\n";
	foreach ($monthNamesEt as $key=>$month) {
	if($key + 1 === $signupBirthMonth){
		$signupMonthSelectHTML .= '<option value="' .($key +1) .' " selected>' .
		$month ."</option> \n";
	}
	else {
			$signupMonthSelectHTML .= '<option value="' .($key +1) .'">' .$month ."</option> \n";
	}
	}
	$signupMonthSelectHTML .= "</select> \n";
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
			<label>Sünnikuupäev</label>
			<?php
			echo $signupMonthSelectHTML;
			?>
			<br>
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

