
<?php
include_once("php/class/connexion.php");

$con = new connectToDB();
$locality = $con->setAllLocal();
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
			<div class="pic-image"><img src="img/logo-banniere.jpg" alt=" "/></div>
				<form  action="php/processform.php" method="post" class="j-forms j-multistep" id="j-forms" >

							<!-- start name -->
							<div class="unit">
								<label class="label">Prénom</label>
								<div class="input">
									
									<input type="text" id="Fname" name="Fname">
								</div>
							</div>
							<!-- end name -->
                            <!-- start name -->
                            <div class="unit">
                                <label class="label">Nom</label>
                                <div class="input">

                                    <input type="text" id="Lname" name="Lname">
                                </div>
                            </div>
                            <!-- end name -->

							<!-- start way to communicate -->
							<div class="unit check" id="Sexe">
								<div class="inline-group">
									<label class="label">Genre</label>
									<label class="radio">
										<input type="radio" name="Sexe" value="Homme">
										<i></i>
										Homme
									</label>
									<label class="radio">
										<input type="radio" name="Sexe" value="Femme">
										<i></i>
										Femme
									</label>
                                    <label class="radio">
                                        <input type="radio" name="Sexe" value="Autres">
                                        <i></i>
                                        Autres
                                    </label>
								</div>
							</div>
                    <div class="unit">
                            <label class="label">Année de naissance</label>
                        <select name="age" id="age">
                            <?php for($i=2016;$i>1899;$i--) { ?>
                            <option><?php echo $i ; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="unit">
                        <label class="label">Commune</label>
                        <select name="locality" id="locality">
                            <?php foreach($locality as $info) { ?>
                                <option><?php echo $info["toName"] ; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

					<div class="footer">
						<button type="submit" class="primary-btn multi-submit-btn">Send</button>
					</div>
					<!-- end /.footer -->

				</form>

		</div>
</div>
</body>
</html>
