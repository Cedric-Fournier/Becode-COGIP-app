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
        $reponse->closeCursor();
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

?>
