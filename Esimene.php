<?php

	//See on kommentaar, edasi paar muutujat
	$myName = "Maritana";
	$myFamilyName = "Sampu";
	
	$monthNamesEt = ["jaanuar","veebruar","märts","aprill","mai","juuni","juuli",
	"august","september","oktoober","november","detsember"];
	//var_dump($monthNamesEt);
	//echo $monthNamesEt[1];
	$monthNow = $monthNamesEt[date("n")-1];
	
	//Vaatame, mis kell on ja määrame päeva osa
	$hourNow = date("H");
	//echo $hourNow;
	$partOfDay = "";
	if ($hourNow <8) { 	// <    > <=  >=  <> !=
		$partOfDay = "varajane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16) {
		$partOfDay = "koolipäev";
	}
	if ($hourNow >=16) {
		$partOfDay = "vaba aeg";
	}
		
	//echo $partOfDay;
	//Vaatame, kaua on koolipäeva lõpuni jäänud
	$timeNow = strtotime(date("d.m.Y H:i:s"));
	//echo $timeNow;
	$schoolDayEnd = strtotime(date("d.m.Y" ." " ."15:45"));
	//echo $schoolDayEnd
	$toTheEnd = $schoolDayEnd - $timeNow;
	//echo (round($toTheEnd / 60));
	
	//Tegeleme vanusega
	$myBirthYear;
	$ageNotice = '';
	//var_dump($_POST);
	if ( isset($_POST['birthYear']) ) {
		$myBirthYear = $_POST ['birthYear'];
		$myAge = date('Y')- $_POST['birthYear'];
		//echo $myAge;
		$ageNotice = "<p> Teie vanus on ligikaudu ". $myAge ." aastat. </p>";
		$ageNotice .= '<p>Olete elanud järgnevatel aastatel:</p>';
		$ageNotice .= "\n <ul> \n";
		
		$yearNow = date('Y');
		for ($i = $myBirthYear; $i <= $yearNow; $i ++) {
			$ageNotice .= '<li>' .$i ."</li> \n";
		}
		$ageNotice .='</ul>';
	}
	
	
	
	// Teeme tsükli
	/*for ($i = 0; $i < 9; $i ++) {
		echo 'ha';
	}*/
	
	?>


<!DOCTYPE html>
<html>

 <head>
  <meta charset="utf-8">
   <title>1. test</title>
   <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
 </head>

 <body>
  <h1>
	<?php
		echo $myName ." " .$myFamilyName;
	?>
  1. test</h1>
  <p>See leht on loodud õppetöö raames ja ei sisalda mingit usaldusväärset sisu</p>
  <p>This page is created for study and does not consist anything reliable</p>
  <p><strong>Minu nimi on Maritana ja ma astusin see aasta sisse informaatika erialale.</strong></p>
  
	<?php
		echo "<p>See on esimene jupp PHP abil väljastatud teksti</p>";
		echo "<p>Täna on ";
		echo date("d. ") .$monthNow .date (" Y") . ", kell lehe avamisel oli " .date("H:i:s");
		echo ", käes on " . $partOfDay.".</p>";
	?>
	<h2>Natuke aastaarvudest</h2>
	<form method = 'post'>
	<label>Teie sünniaasta: </label>
	<input type='number' name='birthYear' id='birthYear' min='1900' max='2017' value='
	<?php echo $myBirthYear; ?>'>
	<input type='submit' name='submitBirthYear' value='Kinnita'>
	
	</form>
	<?php
		if ($ageNotice != '') {
			echo $ageNotice;
		}
	?>

 </body>

</html>
