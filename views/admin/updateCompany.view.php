<?php require 'views/partials/header.php';?>
<section>
    <form action="#" method="post">
      <label for="id">L'id de la société : </label><input type="number" name="id" id="id" value="<?=$company['id']?>"><br>
      <label for="name">La désignation sociale de la société : </label><input type="text" name="name" id="name" value="<?=$company['name']?>"><br>
      <label for="street">Le nom de la rue : </label><input type="text" name="street" id="street" value="<?=$company['street']?>"><br>
      <label for="number">Le numéro de la rue : </label><input type="number" name="number" id="number" value="<?=$company['number']?>"><br>
      <label for="zip">Le code postale : </label><input type="number" name="zip" id="zip" value="<?=$company['zip']?>"><br>
      <label for="city">Le nom de la commune : </label><input type="text" name="city" id="city" value="<?=$company['city']?>"><br>
      <label for="country">Le nom du pays : </label><input type="text" name="country" id="country" value="<?=$company['country']?>"><br>
      <label for="VAT">Le numéro de TVA : </label><input type="number" name="VAT" id="VAT" value="<?=$company['VAT']?>"><br>
      <label for="phone">Le numéro de téléphone : </label><input type="tel" name="phone" id="phone" value="<?=$company['phone']?>"><br>
      Type de société : </label>
      <?php foreach ($type as $key => $value) { ?>
          <input type="radio" name="type" id="type<?=$value['id']?>" value='<?=$value['id']?>' <?=$checkType[$value['id']]?>><label for="type<?=$value['id']?>"><?=$value['type']?></label>
      <?php } ?>
      <br>
      <button type="submit" name="modifier">modifier la société</button>
    </form>
    <?=$message;?>
</section>
<?php require 'views/partials/footer.php';?>
