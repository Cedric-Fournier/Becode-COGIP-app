<?php

function billFiveLatest() {
    require "assets/config/php/config.php";
    $requestSQL="SELECT bill.*,company.name
    FROM bill,company
    WHERE bill.company=company.id
    ORDER BY date DESC
    LIMIT 5";
    $requete = $pdo->prepare($requestSQL);
    $requete->execute();
    $bill = $requete->fetchAll();
    $requete->closeCursor();
    return $bill;
}

function companyFiveLatest() {
    require "assets/config/php/config.php";
    $requestSQL="SELECT company.*,type.*
    FROM company,type
    WHERE company.type=type.id ORDER BY company.id DESC
    LIMIT 5";
    $requete = $pdo->prepare($requestSQL);
    $requete->execute();
    $company = $requete->fetchAll();
    $requete->closeCursor();
    return $company;
}

function personFiveLatest() {
    require "assets/config/php/config.php";
    $requestSQL="SELECT person.*,company.name
    FROM person,company
    WHERE person.company=company.id
    ORDER BY lastname DESC
    LIMIT 5";
    $requete = $pdo->prepare($requestSQL);
    $requete->execute();
    $person = $requete->fetchAll();
    $requete->closeCursor();
    return $person;
}

?>