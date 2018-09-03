<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    <table border='1'>
      <tr>
      <th> Numéro</th>
      <th>Date</th>
      <th>sujet</th>
      <th>Société</th>
      <th>Personne en charge</th>
      </tr>
      <tr>
        <td><?=$detailBill['number']?></td>
        <td><?=$detailBill['date']?></td>
        <td><?=$detailBill['object']?></td>
        <td><?=$detailBill['name']?></td>
        <td><?=$detailBill['firstname']?> <?=$detailBill['lastname']?></td>
      </tr>

    </table>
    </div></div></div>
    <?php
            require 'views/partials/footer.php';
        ?>
  </body>
</html>
