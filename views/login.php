<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="assets/images/COGIP-logo.png" />
        <script src="vendor/components/jquery/jquery.js"></script>
        <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>COGIP App</title>
    </head>
<body>
<div class="model">
  <div class='login'>
    <form action="assets/config/php/login.php" method="post">
    <div class="row">
      <div class="col-5 offset-1 text-left">
        <label class="labelLog text-primary" for="login">Identifiant</label>
      </div>
      <div class="col-6 text-center">
        <input class="inputLog bg-info text-white" type="text" name="login" id="login">
      </div>
    </div>
    <div class="row">
      <div class="col-5 offset-1 text-left">
        <label class="labelLog text-primary" for="pwd">Mot de passe </label>
      </div>
      <div class="col-6 text-center">
        <input class="inputLog bg-info text-white" type="password" name="pwd" id=pwd>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <button class="buttonLog" type="submit" name="button">Se connecter</button>
      </div>
    </div>
    </form>
  </div>
</div>
<?php require 'views/partials/footer.php';?>
