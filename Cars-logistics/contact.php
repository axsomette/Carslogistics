<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
 <link rel="icon" type="image/png" href="img/icone.png" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<title>Contactez nous</title>
</head>
<body>
	<?php include('nav.php');?>

	<section class="container-fluid" id="box6">
	<div class="row">
    <div class="col-lg-6" id="shadow">
	<h1 class="titre_co">Contacter nous</h1>
<form class="cf">
  <div class="half left cf">
    <input class="co" type="text" id="input-name" placeholder="Nom">
    <input class="co" type="email" id="input-email" placeholder="Adresse Email">
    <input class="co" type="text" id="input-subject" placeholder="Objet">
  </div>
  <div class="half right cf">
    <textarea class="texte" name="message" type="text" id="input-message" placeholder="Message"></textarea>
  </div>  
  <input class="co" type="submit" value="Soumettre" id="input-submit">
</form>
</div>
<div class="col-lg-4 offset-md-1">
	 <div class="panel">
                    <div class="panel-heading"><i class="fa fa-envelope-o"></i>Informations</div>
                    <div class="panel-body">
                        <h4 class="section-title">Contacts</h4>
                        <address class="adr">
                            <strong>Cars Logistics</strong><br>
                            296 Route Minervoise<br>
                            11000 Carcassonne<br>
                            <abbr title="Phone">Fixe:</abbr> 04 68 25 39 75<br>
                            <abbr title="Fax">Fax:</abbr> 04 68 72 04 25<br>
                            Mail: <a href="#">contact@cars-logistics.fr</a>
                        </address>

                        <!-- Business Hours -->
                        <h4 class="section-title">Heures d'ouverture</h4>
                        <ul class="list-unstyled">
                            <li><strong>Lundi-Vendredi:</strong> 8h-12h et 14h-18h</li>
                            <li><strong>Samedi:</strong> Fermé</li>
                            <li><strong>Dimanche:</strong> Fermé</li>
                        </ul>
                    </div>
                </div>
</div>
</div>
</section>

</body>
</html>
