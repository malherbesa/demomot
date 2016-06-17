<?php
/**
 * Created by PhpStorm.
 * User: malherbesa
 * Date: 15.06.16
 * Time: 12:03
 */

include_once("class/connexion.php");

$con = new connectToDB();

$locality = $con->selectLocal($_POST["locality"]);

$con->insert($_POST["Fname"],$_POST["Lname"],$_POST["age"],$_POST["Sexe"],$locality);

?>

<!DOCTYPE html>
<html>
<head>
<title>Semi Marathon des Côtes de l'Orbe</title>
<!-- for-mobile-apps -->
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta charset="UTF-8" name="keywords" content="Contact form widget Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="content">
	<h1>Semi marathon des Côtes de l'Orbe</h1>
		<div class="main">
            <p>Vous pouvez maintenant vous déconnecter du réseau Wi-Fi. Bonne Course !</p>
		</div>
</div>
</body>
</html>
