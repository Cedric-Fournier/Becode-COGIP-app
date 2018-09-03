<?php
// require "controller/controller.php";
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
            require "controller/controller.php";
            companyPage();
            break;

    case 'detailCompany':
            require "controller/controller.php";
            detailCompanyPage();
            break;

    case 'client':
            require "controller/controller.php";
            companyClientPage();
            break;

    case 'provider':
            require "controller/controller.php";
            companyProviderPage();
            break;
    case 'dashboard':
            require "controller/controller.php";
            dashboard();
            break;

    default:
            echo "Home page";
            break;
    }

?>
