<?php

    function directoryPage(){
        require "models/person.model.php";
        $reponse = getDirectory();
        require "views/directory.view.php";
        $reponse->closeCursor();
    }
    function detailPersonPage(){
        require "models/person.model.php";
        $person = getDetailPerson();
        require "views/detailPerson.view.php";
    }

    function billPage(){
      require "models/model_bill.php";
      require "views/view_bill.php";
      $req->closeCursor();
    }
    function detailBillPage(){
      require "models/model_billDetail.php";
      require "views/view_billDetail.php";
      $req->closeCursor();
    }



    require "models/company.model.php";
    $url="http://localhost/COGIP-app/";
    function companyPage(){
        global $url;
        $company=companyView();
        require "views/company.view.php";
    }
    function detailCompanyPage(){
        $id=companyDetail($_GET['id']);
        $donnees=companyRead($id);
        $company=$donnees['0'];
        $person=$donnees['1'];
        $bill=$donnees['2'];
        require 'views/companyDetail.view.php';
    }
    function companyClientPage(){
        global $url;
        $company=companyClientView();
        require "views/client.view.php";
    }
    function companyProviderPage(){
        global $url;
        $company=companyProviderView();
        require "views/provider.view.php";  
    }
/*
            page home
*/
    // function homePage(){require 'views/home.view.php';}

?>