<?php
	$picsDir = "../../pics/";
	$picFileTypes = ["jpg", "jpeg", "png", "gif", "JPG", "JPEG", "PNG", "GIF"];
	$picFiles = [];
	
	$allFiles = array_slice(scandir($picsDir), 2);
	//var_dump($allFiles);
	foreach ($allFiles as $file) {
		$fileType = pathinfo($file, PATHINFO_EXTENSION);
		if (in_array($fileType, $picFileTypes) == true){
			array_push ($picFiles, $file);
		}
	}
	
	//$picFiles = array_slice($allFiles, 2);
	//var_dump($picFiles);
	
	$picCount = count($picFiles);
	
	$picNum = mt_rand(0,($picCount -1));
	$picFile = $picFiles[$picNum];
	
	?>


<!DOCTYPE html>
<html>

 <head>
  <meta charset="utf-8">
   <title>1. test</title>
   <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" 
   rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/style.css">
 </head>

 <body>
  <h1>
	Foto</h1>
  <p>See leht on loodud õppetöö raames ja ei sisalda mingit usaldusväärset sisu</p>
  <p>This page is created for study and does not consist anything reliable</p>
  <img src="<?php echo $picsDir .$picFile; ?>" alt="TLÜ">
  
 </body>

</html>
