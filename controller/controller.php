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

?>