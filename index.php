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
                    
        default:            
            echo "Home page";
            break;
            
    }

?>