<?php require 'views/partials/header.php'; ?>
<div class="model">
  <div class="general">
    <div>
      <h1>Factures</h1>
      <table border='1'>
        <caption>Liste des dernières factures</caption>
          <tr>
            <th>numéro</th>
            <th>Date</th>
            <th>Sujet</th>
            <th>Société</th>
            <th colspan="2"></th>
          </tr>
        <?php foreach ($bill as $key => $value) { ?>
          <tr>
            <td><?= $value['number']?></td>
            <td><?= $value['date']?></td>
            <td>
              <a href="?page=detailbill&number=<?=$value['number']?>"><?= $value['object']?></a>
            </td>
            <td><?= $value['name']?></td>
            <td><a href="?page=admin&admin=updatebill&number=<?=$value['number']?>"><i class="fas fa-edit"></i></a></td>
            <td><a href="?page=admin&admin=deletebill&number=<?=$value['number']?>" target="blank" meta="refresh"><i class="fas fa-trash"></i></a></td>
          </tr>
        <?php } ?>
      </table>
    </div>
    <div>
      <h1>Sociétés</h1>
      <table border='1'>
        <caption>Liste des dernières sociétés</caption>
        <tr>
          <th>id</th>
          <th>nom</th>
          <th>numéro de téléphone</th>
          <th>type</th>
          <th colspan="2"></th>
        </tr>
        <?php foreach ($company as $key => $value) { ?>
          <tr>
            <td><?=$value['nbr']?></td>
            <td>
              <a href="?page=detailCompany&id=<?=$value['nbr']?>"><?= $value['name']?></a>
            </td>
            <td><?= $value['phone']?></td>
            <td><?= $value['type']?></td>
            <td><a href="?page=admin&admin=updatecompany&id=<?=$value['nbr']?>"><i class="fas fa-edit"></i></a></td>
            <td><a href="?page=admin&admin=deletecompany&id=<?=$value['nbr']?>" target="blank" meta="refresh"><i class="fas fa-trash"></i></a></td>
          </tr>
        <?php } ?>
      </table>
    </div>
    <div>
      <h1>Personnes</h1>
        <table border='1'>
          <caption>Liste des dernières personnes</caption>
          <tr>
            <th>id</th>
            <th>nom prénom</th>
            <th>numéro de téléphone</th>
            <th>adresse e-mail</th>
            <th>société</th>
            <th colspan="2"></th>
          </tr>
          <?php foreach ($person as $key => $value) { ?>
            <tr>
              <td><?=$value['id']?></td>
              <td>
                <a href="?page=detailPerson&id=<?=$value['id']?>"><?= $value['firstname']?> <?= $value['lastname']?></a>
              </td>
              <td><?= $value['phone']?></td>
              <td><?= $value['email']?></td>
              <td><?= $value['name']?></td>
              <td><a href="?page=admin&admin=updateperson&id=<?=$value['id']?>"><i class="fas fa-edit"></i></a></td>
              <td><a href="?page=admin&admin=deleteperson&id=<?=$value['id']?>" target="blank" meta="refresh"><i class="fas fa-trash"></i></a></td>
            </tr>
          <?php } ?>
        </table>
    </div>
    <div>
      <span class="buttonAdd">
        <button type="button" name="addBill"><a href="?page=admin&admin=addbill">Ajouter une facture</a></button>
        <button type="button" name="addCompany"><a href="?page=admin&admin=addcompany">Ajouter une société</a></button>
        <button type="button" name="addPerson"><a href="?page=admin&admin=addperson">Ajouter une personne</a></button>
      </span>
    </div>
  </div>
</div>
<?php require 'views/partials/footer.php'; ?>
