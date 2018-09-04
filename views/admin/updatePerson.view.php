<?php require 'views/partials/header.php';?>
  <section>
    <form method="post" action="">
      <label>Prénom :</label>
        <input type="text" name="firstname" value="<?= $getPerson['firstname']; ?>">
        <br>
      <label>Nom :</label>
        <input type="text" name="lastname" value="<?= $getPerson['lastname']; ?>">
        <br>
      <label>Téléphone :</label>
        <input type="text" name="phone" value="<?= $getPerson['phone']; ?>">
        <br>
      <label>Mail :</label>
        <input type="text" name="email" value="<?= $getPerson['email']; ?>">
        <br>
      <label>Société :</label>
        <select name='company'>
          <?php foreach ($getCompany as $company) { ?>
             <option value="<?= $company['id']; ?>"<?php if($company['id']==$getPerson['company']){echo 'selected';} ?>><?= $company['name']; ?></option>
           <?php } ?>
        </select>
      <br>
      <input type="submit" name="submit" value="Modifier">
    </form>
  </section>
<?php require 'views/partials/footer.php';?>
