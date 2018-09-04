<?php require 'views/partials/header.php'; ?>
<section>
<div class="model">
  <div class="buttonAdd">
    <span>
      <button <?=$creat?> type="button" name="addBill"><a href="?page=admin&admin=addbill">Ajouter une facture</a></button>
      <button <?=$creat?> type="button" name="addCompany"><a href="?page=admin&admin=addcompany">Ajouter une société</a></button>
      <button <?=$creat?> type="button" name="addPerson"><a href="?page=admin&admin=addperson">Ajouter une personne</a></button>
    </span>
  </div>
  <div class="general">
    <div>
      <div class="typeCompany">
        <span>
          <button type="button" name="client"><a class="nav-link" href="?page=client">Client</a></button>
          <button type="button" name="provider"><a class="nav-link" href="?page=provider">Fournisseur</a></button>
        </span>
      </div>
      
      <h1><a href="?page=societe">Sociétés</a></h1>
      <table border='1'>
        <caption>Liste des cinq dernières sociétés</caption>
        <tr>
          <th>nom</th>
          <th>téléphone</th>
          <th>type</th>
          <th colspan="2" <?=$editDelet?>></th>
        </tr>
        <?php foreach ($company as $key => $value) { ?>
          <tr>
            <td>
              <a href="?page=detailCompany&id=<?=$value['id']?>"><?= $value['name']?></a>
            </td>
            <td><?= $value['phone']?></td>
            <td><?= $value['type']?></td>
            <td <?=$editDelet?>><a href="?page=admin&admin=updatecompany&id=<?=$value['id']?>"><i class="fas fa-edit"></i></a></td>
            <td <?=$editDelet?>><a href="?page=admin&admin=deletecompany&id=<?=$value['id']?>"><i class="fas fa-trash"></i></a></td>
          </tr>
        <?php } ?>
      </table>  
    </div>
    <div>
      <h1><a href="?page=bill">Factures</a></h1>
      <table border='1'>
        <caption>Liste des cinq dernières factures</caption>
          <tr>
            <th>numéro</th>
            <th>Date</th>
            <th>Sujet</th>
            <th>Société</th>
            <th colspan="2" <?=$editDelet?>></th>
          </tr>
        <?php foreach ($bill as $key => $value) { ?>
          <tr>
            <td><?= $value['number']?></td>
            <td><?= $value['date']?></td>
            <td>
              <a href="?page=detailbill&number=<?=$value['number']?>"><?= $value['object']?></a>
            </td>
            <td><?= $value['name']?></td>
            <td <?=$editDelet?>><a href="?page=admin&admin=updatebill&number=<?=$value['number']?>"><i class="fas fa-edit"></i></a></td>
            <td <?=$editDelet?>><a href="?page=admin&admin=deletebill&number=<?=$value['number']?>" target="blank" meta="refresh"><i class="fas fa-trash"></i></a></td>
          </tr>
        <?php } ?>
      </table>
    </div>
    <div>
      <h1><a href="?page=directory">Annulaire</a></h1>
        <table border='1'>
          <caption>Liste des cinq dernières personnes</caption>
          <tr>
            <th>numéro</th>
            <th>prénom nom</th>
            <th>téléphone</th>
            <th>adresse e-mail</th>
            <th>société</th>
            <th colspan="2" <?=$editDelet?>></th>
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
              <td <?=$editDelet?>><a href="?page=admin&admin=updateperson&id=<?=$value['id']?>"><i class="fas fa-edit"></i></a></td>
              <td <?=$editDelet?>><a href="?page=admin&admin=deleteperson&id=<?=$value['id']?>" target="blank" meta="refresh"><i class="fas fa-trash"></i></a></td>
            </tr>
          <?php } ?>
        </table>
    </div>
  </div>
</div></section>
<?php require 'views/partials/footer.php'; ?>
