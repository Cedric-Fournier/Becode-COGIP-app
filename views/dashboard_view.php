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
    <table>

    </table>
    <span>
      <button type="button" name="addBill">Ajouter une facture</button>
      <button type="button" name="addCompany">Ajouter une société</button>
      <button type="button" name="addPerson">Ajouter une personne</button>
    </span>
    <div class="logMessage">

    </div>
    <?php
            require 'views/partials/footer.php';
        ?>
  </body>
</html>
