<?php
require "controller/controller.php";
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
              
    case 'societe':
            companyPage();
            break;
    
    case 'detailCompany':
            detailCompanyPage();
            break;

    case 'client':
            companyClientPage();
            break;
    
    case 'provider':
            companyProviderPage();
            break;

    default:
            echo "Home page";
            break;    
    }
    
?>