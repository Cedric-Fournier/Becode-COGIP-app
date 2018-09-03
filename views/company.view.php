<?php require 'views/partials/header.php';?>
<section>
  <div class="model">
    <div class="general">
      <h1>liste des société :</h1>
      <ul>
      <?php
        foreach ($company as $key => $value) { ?>
        <li>
          <a href="<?=$url?>?page=detailCompany&id=<?=$value['id']?>"><?=$value['name']?></a>
        </li>
      <?php } ?>
      </ul>
    </div>
  </div>
</section>
<?php require 'views/partials/footer.php';?>
