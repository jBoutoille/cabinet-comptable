<?php 

    // variable globale de la BDD
    $dbObject = new AdminManager();

    // ACCUEIL ADMIN LOGGED - Dashboard
    function getAdmin(){
        if(isset($_SESSION['sessionToken'])){
            require './views/admin/adminView.php';            
        }
        else{
            require './views/admin/loginView.php';
        }
    }

    // CONFIGURATION DU SITE
    function adminConfigInfos(){
        
    }
    function adminConfigSEO(){

    }

    // MODIFICATIONS
    function adminModifHeader(){

    }
    function adminModifPresentation(){
        
    }
    function adminModifExpertise(){
        
    }
    function adminModifServices(){
        
    }
    function adminModifContact(){
        
    }
    function adminModifNewsletter(){
        
    }
    function adminModifFooter(){
        
    }

    // GESTION DE LA NEWSLETTER
    function adminNewsletter(){

    }

    // GESTION DE L'ACTUALITE
    function adminActualite(){

    }

    // CANDIDATURES RECUES
    function adminCandidatures(){

    }

    // SE DECONNECTER
    function adminLogout(){
        unsetToken($_TOKEN);
        header('Location: ./');
    }

?>