<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="assets/images/COGIP-logo.png" />
        
        <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>COGIP App</title>
    </head>
<body>

<!-- MENU -->
<nav class="navbar navbar-expand-md bg-light navbar-blue">
  <!-- Brand -->

  <span class="navbar-brand" id="band"><a href="index.php"><img src="assets/images/COGIP-logo.png" alt="logo"></a>
  </span>
  <!-- Toggler/collapsibe Button -->
  <button name="menu" aria-hidden="true" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav nav-fill">
      <li class="nav-item">
        <a class="nav-link" href="?page=societe">Société</a>
      </li>

            <li class="nav-item"><a class="nav-link" href="?page=client">Client</a></li>
            <li class="nav-item"><a class="nav-link" href="?page=provider">Fournisseur</a></li>
      <li class="nav-item">
        <a class="nav-link" href="?page=directory">Annulaire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=bill">Facture</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="assets/config/php/logout.php">Déconnection</a>
      </li>
    </ul>
  </div>
</nav>
