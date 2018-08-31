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
    elseif((filter_var($idCompany,FILTER_VALIDATE_INT))AND(empty($_GET['type']))){
        foreach ($company as $value) {
            if($value['id']==$idCompany)
            { 
                $idSociete=$idCompany;
                $pagesCompanyTrouver=true;
                detailCompanyPage();
            }
        }
        if($pagesCompanyTrouver==false){error404Page();}
    }
    elseif($_GET['type']=="client")
    {
        if(empty($_GET['id']))
        {
            companyClientPage();
        }
        elseif(filter_var($_GET['id'],FILTER_VALIDATE_INT))
        {
            foreach ($company as $value) {
                if(($value['id']==$_GET['id'])and($value['type']==2))
                    { 
                        $idSociete=$_GET['id'];
                        detailCompanyPage();
                    }
                elseif(($value['id']==$_GET['id'])and($value['type']==1))
                    {
                        error404Page();
                    }                
            }
        }
        else
        {
            error404Page();
        }
    }
    elseif($_GET['type']=="fournisseur")
    {
        if(empty($_GET['id'])){
            companyProviderPage();
        }
        elseif(filter_var($_GET['id'],FILTER_VALIDATE_INT))
        {
            foreach ($company as $value) {
                if(($value['id']==$_GET['id'])and($value['type']==1))
                    { $idSociete=$_GET['id'];
                        detailCompanyPage();
                    }
                elseif(($value['id']==$_GET['id'])and($value['type']==2))
                    {
                        error404Page();
                    }                
            }
        }
        else
        {
            error404Page();
        }
    }
    else
    {
        error404Page();
    }
}
elseif($pageCompany == 'annulaire'){
   
}
elseif($pageCompany == 'bill'){
    
}
else{
    error404Page();
}
?>
