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
        </tr>
        <?php foreach ($bill as $key => $value) { ?>
          <tr>
            <td><?=$value['date']?></td>
<<<<<<< HEAD
            <td><a href="?page=detailbill&number=<?=$value['number']?>"><?=$value['object']?></a></td>
=======
            <td><a href="<?=$url?>?page=detailbill&number=<?=$value['number']?>"><?=$value['object']?></a></td>
>>>>>>> stephane
          </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</div>
<?php require 'views/partials/footer.php'; ?>
