<?php
$url="http://challenge-sql:8888/";//http://localhost/COGIP-app/ //http://challenge-sql:8888/
    function directoryPage(){
        global $url;
        require "models/person.model.php";
        $reponse = getDirectory();
        require "views/directory.view.php";
        $reponse->closeCursor();
    }
    function detailPersonPage(){
        global $url;
        require "models/person.model.php";
        $person = getDetailPerson();
        require "views/detailPerson.view.php";
    }

    function billPage(){
        global $url;
      require "models/bill.model.php";
      $bill=lireBill();
      require "views/bill.view.php";
    }
    function detailBillPage(){
        global $url;
      require "models/bill.model.php";
      $detailBill=detailBill();
      require "views/billDetail.view.php";
    }

    function dashboard(){
        global $url;
        require "models/dashboard.model.php";
        $bill=billFiveLatest();
        $company=companyFiveLatest();
        $person=personFiveLatest();
        require "views/dashboard.view.php";
    }

    
    function companyPage(){
        require "models/company.model.php";
        global $url;
        $company=companyView();
        require "views/company.view.php";
    }
    function detailCompanyPage(){
        global $url;
        require "models/company.model.php";
        $id=companyDetail($_GET['id']);
        $donnees=companyRead($id);
        $company=$donnees['0'];
        $person=$donnees['1'];
        $bill=$donnees['2'];
        require 'views/companyDetail.view.php';
    }
    function companyClientPage(){
        require "models/company.model.php";
        global $url;
        $company=companyClientView();
        require "views/client.view.php";
    }
    function companyProviderPage(){
        require "models/company.model.php";
        global $url;
        $company=companyProviderView();
        require "views/provider.view.php";
    }
    function billAddPage(){
        require "models/bill.model.php";
        global $url;
        $message=billCreate();
        $typeDataBill=typeDataBill();
        $company=$typeDataBill['0'];
        $person=$typeDataBill['1'];
        require "views/CRUD/facture/create.php";
    }
    function companyAddPage(){
        require "models/company.model.php";
        global $url;
        $message=companyCreate();
        $donneesInfoType=lireTypeCompany();
        $type=$donneesInfoType['0'];
        $checkType=$donneesInfoType['1'];
        require "views/CRUD/company/create.php";
    }

    function companyDeletePage(){
        require "models/company.model.php";
        global $url;
        $message=companyDelete($_GET['id']);
        require "views/CRUD/company/delete.php";
    }
    function billDeletePage(){
            require "models/bill.model.php";
            global $url;
            $message=deleteBill($_GET['number']);
            require "views/CRUD/facture/delete.php";
        }
    function companyUpdatePage(){
        require "models/company.model.php";
        global $url;
        $donneesCompanyModife=companyUpdate();
        $company=$donneesCompanyModife['0'];
            $checkType=$donneesCompanyModife['1'];
            $type=$donneesCompanyModife['2'];
            $message=$donneesCompanyModife['3'];
        require "views/CRUD/company/modife.php";
    }
    function billUpdatePage(){
        require "models/bill.model.php";
        global $url;
        $donneesBillModife=billUpdate();
        
        $bill=$donneesBillModife['0'];
        $company=$donneesBillModife['1'];
        $person=$donneesBillModife['2'];
        $selectCompany=$donneesBillModife['3'];
        $selectPerson=$donneesBillModife['4'];
        $message=$donneesBillModife['5'];
        require "views/CRUD/facture/modife.php";
        
    }
    function loginPage(){
        global $url;
        require "views/login.php";
    }
/*
            page home
*/
    // function homePage(){require 'views/home.view.php';}

?>
