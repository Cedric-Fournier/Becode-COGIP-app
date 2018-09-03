<?php require 'views/partials/header.php';?>
<section>
  <form action="#" method="post">
    <label for="date">La date de la Facture : </label><input type="date" name="date" id="date" value="<?=$bill['date']?>"><br>
    <label for="object">L'object de la Facture : </label><input type="text" name="object" id="object" value="<?=$bill['object']?>"><br>
    <label for="company">Quel société : </label>
    <select name="company" id="company">
      <?php foreach ($company as $key => $value) { ?>
        <option value="<?=$value['id']?>" <?=$selectCompany[$value['id']]?>><?=$value['name']?></option>
      <?php } ?>
    </select>
      <br>
    <label for="person">Quel personne : </label>
    <select name="person" id="person">
      <?php foreach ($person as $key => $value) { ?>
        <option value="<?=$value['id']?>" <?=$selectPerson[$value['id']]?>><?=$value['nom']?></option>
      <?php } ?>
    </select>
      <br>
    <button type="submit" name="modifier">modifier la Facture</button>
  </form>
  <?=$message;?>
</section>
<?php require 'views/partials/footer.php';?>
