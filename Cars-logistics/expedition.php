<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<title>Cars-logistics.fr</title>
</head>
<body>
	<?php include('nav.php');?>

    <section class="container-fluid" id="box-3">
    <div class="box_titre">
         <h1 class="titre">Mon expédition</h1>
    </div>
    <div class="container-fluid" id="box5">
      <div class="row">
        <div class="col-lg-3 offset-lg-1 col-md-12">
           <form class="expe">
            <h1 class="h1">Expéditeur</h1>
            <input placeholder="Adresse de départ*" type="text"/>
            <input placeholder="Code Postal*" type="text"/>
            <input placeholder="Ville de départ*" type="text"/>
            <input placeholder="Pays/région*" type="text"/>
          </form>
        </div>
        <div class="col-lg-7 col-md-12">
           <form class="dest">
            <h1 class="h1">Destinataire</h1>
            <div>
            <input placeholder="Nom du destinataire*" type="text"/>
            </div>
            <div>
            <input placeholder="Complément du nom" type="text"/>
            </div>
            <div>
            <input placeholder="Numéro de téléphone*" type="text"/>
            </div>
            <div>
            <input placeholder="Adresse d'arrivée*" type="text"/>
            </div>
            <div>
            <input placeholder="Code Postal d'arrivée*" type="text"/>
            </div>
            <div>
            <input placeholder="Ville d'arrivée*" type="text"/>
            </div>
            <div>
            <input placeholder="Pays/région d'arrivée*" type="text"/>
            </div>
            <div>
            <input placeholder="Compléments d'adresse (codes, immeubles, indications etc.)" type="text"/>
            </div>
          </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1 col-md-12">
           <form class="expe">
            <h1 class="h1">Date d'envoi</h1>
            <input placeholder="Date d'expédition ou d'enlèvement*" type="text"/>
            <input placeholder="Nombre de colis*" type="text"/>
            <input placeholder="Poids des colis*" type="text"/>
            <div>
            <span class="important">* champs obligatoires</span>
            <span class="important">** les colis ne doivent pas contenir de produit toxique ou hautement inflammable
            </span>
            </div>
            <div>
            <button class="skewBtn" id="bouton-expe"> Envoyer</button>
            <button class="skewBtn" id="bouton-expe">Revenir à mon profil</button>
            </div>
          </form>
          
        </div>
    </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
