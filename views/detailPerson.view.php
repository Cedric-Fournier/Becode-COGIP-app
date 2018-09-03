<?php require 'views/partials/header.php';?>
<section>
  <div class="model">
    <div class="general">
      <div>
        <table border='1'>
          <tr>
            <th>Nom/Prénom</th>
            <th>Téléphone</th>
            <th>Mail</th>
            <th>Société</th>
            <th>Adresse de la sociétés</th>
            <th>Facture</th>
          </tr>
          <tr>
            <td><?= $person[0]['lastname'] . " " . $person[0]['firstname'] . ' '; ?></td>
            <td><?= $person[0]['phone'] . '<br />'; ?></td>
            <td><?= $person[0]['email'] . '<br />'; ?></td>
            <td><?= $person[0]['name'] . '<br />';?></td>
            <td><?= $person[0]['adress'] . '<br />';?></td>
            <td>
              <ul>
                <?php foreach ($person as $bills) { ?>
              <li>
                <?= $bills['billList']; ?>
              </li>
                <?php } ?>
              </ul>
            </td>
          </tr>
        </table>
        <a href="./?page=directory">Retour à la liste des personnes</a>
        <a href="./?page=directory">Retour à l'accueil</a>
      </div>
    </div>
  </div>
</section>
<?php require 'views/partials/footer.php';?>
