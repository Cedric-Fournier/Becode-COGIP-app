<?php
    $url="http://localhost/COGIP-app/";
?>
<?php
    require 'views/partials/header.php';
    ?>
    <section>
        <div>
            <ul>
                <?php
                    foreach ($company as $key => $value) { ?>
                        <li><a href="<?=$url?>?page=societe&id=<?=$value['id']?>"><?=$value['name']?></a></li>
                <?php } ?>
                
            </ul>
        </div>
        </section>
        <?php
    require 'views/partials/footer.php';
    ?>