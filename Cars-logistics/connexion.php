<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connectez vous</title>
 <link rel="icon" type="image/png" href="img/icone.png" />
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="./css/style.css">

</head>
<body>
  <?php include('nav.php');?>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 form-wrap">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Connexion</a></li>
        <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Créer un Compte</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="login">
          <h3>Connexion à votre Compte</h3>
          <hr>
          <form role="form">
            <label class="sr-only" for="user">Utilisateur</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="input2"  id="user" placeholder="Utilisateur" data-original-title="" title="">
            </div>
            <br>
            <label class="sr-only" for="inputPassword">Mot de passe</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="input2"  id="inputPassword" placeholder="Mot de passe">
            </div>
            <div class="checkbox">
              <label>
                <input class="input2"  type="checkbox"> 
                Se souvenir de moi
              </label>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Envoyer</button>

          </form>
        </div>
        <div role="tabpanel" class="tab-pane" id="register">
          <h3>Créer un nouveau Compte</h3>
          <hr>
          <form role="form">
            <label class="sr-only" for="user">Nom d'utilisateur</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="input2"  id="user" placeholder="Nom d'utilisateur" data-original-title="" title="">
            </div>
            <br>
            <label class="sr-only" for="email">Adresse Mail</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <input type="email" class="input2"  id="email" placeholder="Adresse Mail" data-original-title="" title="">
            </div>
            <br>
            <label class="sr-only" for="inputPassword">Mot de passe</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="input2"  id="password" placeholder="Mot de passe">
            </div>
            <br>
            <label class="sr-only" for="inputPassword">Confirmation</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="input2"  id="verification" placeholder="Confirmer le Mot de passe">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script><script  src="./script.js"></script>

</body>
</html>
