<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="assets/images/COGIP-logo.png" />
        <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/components/font-awesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>COGIP App</title>
    </head>
<body>

<!-- MENU -->
<nav class="navbar navbar-expand-md bg-light navbar-blue">
  <!-- Brand -->

  <span class="navbar-brand" id="band"><a href="<?=$url?>?page=dashboard"><img src="assets/images/COGIP-logo.png" alt="logo"></a>
  </span>
  <!-- Toggler/collapsibe Button -->
  <button name="menu" aria-hidden="true" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav nav-fill">
      <li class="nav-item">
        <a class="nav-link" href="<?=$url?>?page=societe">Société</a>
      </li>

            <li class="nav-item"><a class="nav-link" href="<?=$url?>?page=client">Client</a></li>
            <li class="nav-item"><a class="nav-link" href="<?=$url?>?page=provider">Fournisseur</a></li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$url?>?page=directory">Annulaire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$url?>?page=bill">Facture</a>
      </li>
    </ul>
  </div>
</nav>
