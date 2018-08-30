<?php

    switch ($_GET["page"]) {
        case 'directory':
            require "controllers/controller.php";
            directoryPage();
            break;

        case 'detailPerson':
            require "controllers/controller.php";
            detailPersonPage();
            break;
                    
        default:            
            echo "Home page";
            break;
    }

?>