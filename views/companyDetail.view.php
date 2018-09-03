<?php require 'views/partials/header.php';?>
<section>
  <div class="model">
    <div class="general">
      <div class="row">
        <div class="col-12 text-center title">
          <h1>désignation sociale de la société</h1>
        </div>
        <div class="col-12 text-center">
          <?=$company['name']?>
        </div>
        <div class="col-6 text-center">
          <h1>l'adresse de la société</h1>
        </div>
        <div class="col-4 text-center">
          <h1>le pays</h1>
        </div>
        <div class="col-2 text-center">
          <h1>le type de société</h1>
        </div>
        <div class="col-6 text-center">
          <?=($company['street']." ".$company['number'].", ".$company['zip']." ".$company['city'])?>
        </div>
        <div class="col-4 text-center">
          <?=$company['country']?>
        </div>
        <div class="col-2 text-center">
          <?=$company['categorie']?>
        </div>
        <div class="col-12 text-center">
          <h1>le n° de téléphone</h1>
        </div>
        <div class="col-12 text-center">
          <?=$company['phone']?>
        </div>
        <div class="col-12 text-center">
          <h1>le n° de TVA</h1>
        </div>
        <div class="col-12 text-center">
          <?=$company['VAT']?>
        </div>
        <div class="col-6 text-center">
          <h1>liste des personnes</h1>
        </div>
        <div class="col-6 text-center">
          <h1>liste des factures</h1>
        </div>
        <div class="col-6 text-center">
          <ul>
            <?php
              foreach ($person as $key => $value) { ?>
                <li><?=($value['lastname']." ".$value['firstname'])?></li>
            <?php } ?>
          </ul>
        </div>
        <div class="col-6 text-center">
          <ul>
            <?php
              foreach ($bill as $key => $value) { ?>
                <li><?=$value['object']?></li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <a href="./?page=societe">Retour sur Société</a>
      <a href="./?page=client">Retour sur Client</a>
      <a href="./?page=provider">Retour sur Fournisseur</a>
    </div>
  </div>
</section>
<?php require 'views/partials/footer.php';?>
