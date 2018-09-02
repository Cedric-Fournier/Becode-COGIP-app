<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <?php
        require 'views/partials/link.php';
        ?>
  </head>
  <body>
  <?php
            require 'views/partials/header.php';
        ?>
    <div class="model"><div class="general">
    <div>
      <h1>Factures</h1>
      <table border='1'>
      <caption>Liste des dernières factures</caption>
      <tr>
      <th>numéro</th>
      <th>Date</th>
      <th>Sujet</th>
      <th>Société</th>
      </tr>
        <?php foreach ($bill as $key => $value) { ?>
          <tr>
            <td>"<?= $value['number']?>"</td>
            <td>"<?= $value['date']?>"</td>
            <td>"<a href="<?=$url?>?page=detailbill&number=<?=$value['number']?>"><?= $value['object']?></a>"</td>
            <td>"<?= $value['name']?>"</td>
          </tr>
        <?php } ?>
      </table>
    </div>
    <div>
    <h1>Sociétés</h1>
      <table border='1'>
      <caption>Liste des dernières sociétés</caption>
      <tr>
      <th>nom</th>
      <th>numéro de téléphone</th>
      <th>type</th>
      </tr>
        <?php foreach ($company as $key => $value) { ?>
          <tr>
            <td>"<a href="<?=$url?>?page=detailCompany&id=<?=$value['id']?>"><?= $value['name']?></a>"</td>
            <td>"<?= $value['phone']?>"</td>
            <td>"<?= $value['type']?>"</td>
          </tr>
        <?php } ?>
      </table>
    </div><div>
    <h1>Personnes</h1>
      <table border='1'>
      <caption>Liste des dernières personnes</caption>
      <tr>
      <th>nom prénom</th>
      <th>numéro de téléphone</th>
      <th>adresse e-mail</th>
      <th>société</th>
      </tr>
        <?php foreach ($person as $key => $value) { ?>
          <tr>
            <td>"<a href="<?=$url?>?page=detailPerson&id=<?=$value['id']?>"><?= $value['firstname']?> <?= $value['lastname']?></a>"</td>
            <td>"<?= $value['phone']?>"</td>
            <td>"<?= $value['email']?>"</td>
            <td>"<?= $value['name']?>"</td>
          </tr>
        <?php } ?>
      </table>
    </div>
    <div>
    <span>
      <button type="button" name="addBill">Ajouter une facture</button>
      <button type="button" name="addCompany">Ajouter une société</button>
      <button type="button" name="addPerson">Ajouter une personne</button>
    </span></div>
    <div class="logMessage">

    </div>
    </div></div>
    <?php
            require 'views/partials/footer.php';
        ?>
        
  </body>
</html>
