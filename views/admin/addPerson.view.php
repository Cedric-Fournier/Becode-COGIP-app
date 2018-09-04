<?php require 'views/partials/header.php';?>
  <section>
      <form method="post" action="?page=admin&admin=addperson">
        <label>Prénom :</label>
          <input type="text" name="firstname">
          <br>
        <label>Nom :</label>
          <input type="text" name="lastname">
          <br>
        <label>Téléphone :</label>
          <input type="text" name="phone">
          <br>
        <label>Mail :</label>
          <input type="text" name="email">
          <br>
        <label>Société :</label>
        <select name='company'>
          <?php foreach ($getCompany as $company) {
              echo "<option value='".$company['id']."'>".$company['name']."</option>";
           } ?>
        </select>
        <br>
        <input type="submit" name="submit" value="Ajouter">
      </form>
  </section>
  <?php require 'views/partials/footer.php';?>
