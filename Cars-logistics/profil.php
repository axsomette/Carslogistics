<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon profil</title>
 <link rel="icon" type="image/png" href="img/icone.png" />
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<?php include('nav.php');?>

	<section class="container-fluid" id="box-3">
    <div class="box_titre">
         <h1 class="titre">Mon profil</h1>
    </div>
    <div class="container-fluid" id="box5">
      <div class="row">
        <div class="col-lg-12 col-md-12">
           <h1 class="h1">Mes expéditions</h1>
            <div class="table-responsive">
               <table class="table">
               	   <thead>
               	   	   <tr>
               	   	   	  <th>#</th>
               	   	   	  <th>Destinataire</th>
               	   	   	  <th>Adresse de départ</th>
               	   	   	  <th>Adresse d'arrivée</th>
               	   	   	  <th>Poids total</th>
               	   	   	  <th>Date d'expédition</th>
               	   	   	  <th>Avec enlèvement</th>
               	   	   	  <th>Nombre de colis</th>
               	   	   	  <th>Prix total estimé</th>
               	   	   	  <th>Numéro de suivi</th>
               	   	   	  <th>Status</th>
               	   	   </tr>
               	   </thead>
               </table>
          </div>
        </div>
    </div>
    <div class="col-md-8">
        	<h2 class="right-line">Informations</h2>
        	<section>
        		<div class="expe">
        			<div class="panel-heading">
        				 <i class="fa fa-user">Mes informations</i>
        			</div>       			
        		</div>
        	</section>
        </div>
    </section>
</body>
</html>
