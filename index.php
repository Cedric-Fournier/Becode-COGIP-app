<?php
    switch ($_GET["page"]) {

        case 'directory':
            require "controller/controller.php";
            directoryPage();
            break;

        case 'detailPerson':
            require "controller/controller.php";
            detailPersonPage();
            break;

        case 'bill':
            require "controller/controller.php";
            billPage();
            break;

        case 'detailbill':
            require "controller/controller.php";
            detailBillPage();
            break;

        default:
            echo "Home page";
            break;
            
    }

?>
