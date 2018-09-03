<?php require 'views/partials/header.php';?>
  <section>
    <div class="model">
      <div class="general">
        <h1>liste des société qui sont de type fournisseur :</h1>
        <ul>
          <?php
            foreach ($company as $key => $value) { ?>
              <li>
                <a href="<?=$url?>?page=detailCompany&id=<?=$value['id']?>"><h3><?=$value['name']?></h3></a>
              </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </section>
<?php require 'views/partials/footer.php';?>
