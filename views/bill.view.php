<?php require 'views/partials/header.php'; ?>
<div class="model">
  <div class="general">
    <div>
      <h1>Factures</h1>
      <table border='1'>
        <caption>Liste des dernières factures</caption>
        <tr>
          <th>Date</th>
          <th>Sujet</th>
          <th>personne</th>
        </tr>
        <?php foreach ($bill as $key => $value) { ?>
          <tr>
            <td><?=$value['date']?></td>
            <td><a href="?page=detailbill&number=<?=$value['number']?>"><?=$value['object']?></a></td>
            <td><?= $value['person'] ?></td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</div>
<?php require 'views/partials/footer.php'; ?>
