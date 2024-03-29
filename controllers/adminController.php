<?php 
    // ADMIN CONTROLLER --------------------------------------------------
    // -------------------------------------------------------------------
    // ---- CE FICHIER SERT A AFFICHER L'ENSEMBLE DES PAGES DU PANEL ADMIN
    // ---- CHAQUE FONCTION REGARDE SI IL Y A UNE SESSION - ADMIN CONNECTÉ
    // ---- 


    // ACCUEIL ADMIN LOGGED - Dashboard
    function getAdmin(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RFooter = $infos->recupFooter();
            require './views/admin/adminView.php';            
        }
        else{
            if(isset($_SESSION['notif'])){
                $notif = $_SESSION['notif'];
            }
            else{
                $notif = NULL;
            }
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RFooter = $infos->recupFooter();
            require './views/admin/loginView.php';
            $notif = NULL;
            $_SESSION['notif'] = NULL;
        }
    }

    // CONFIGURATION -> SITE
    function getAdminConfigSite(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RFooter = $infos->recupFooter();
            if(isset($_SESSION['adminNotif'])){
                $adminNotif = '<div class="alert alert-success"><i class="fa fa-check-square"></i> ' . $_SESSION['adminNotif'] . '</div>';
            }
            else{
                $adminNotif = NULL;
            }
            require './views/admin/configSiteView.php';
            $adminNotif = NULL;
            $_SESSION['adminNotif'] = NULL;
        }
        else{
            header('Location: ./');
        }
    }

    // CONFIGURATION -> COORDONNEES
    function getAdminConfigCoordonnees(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RFooter = $infos->recupFooter();
            if(isset($_SESSION['adminNotif'])){
                $adminNotif = '<div class="alert alert-success"><i class="fa fa-check-square"></i> ' . $_SESSION['adminNotif'] . '</div>';
            }
            else{
                $adminNotif = NULL;
            }
            require './views/admin/configCoordonneesView.php';
            $adminNotif = NULL;
            $_SESSION['adminNotif'] = NULL;
        }
        else{
            header('Location: ./');
        }
    }

    // CONFIGURATION -> HORAIRES
    function getAdminConfigHoraires(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RFooter = $infos->recupFooter();
            if(isset($_SESSION['adminNotif'])){
                $adminNotif = '<div class="alert alert-success"><i class="fa fa-check-square"></i> ' . $_SESSION['adminNotif'] . '</div>';
            }
            else{
                $adminNotif = NULL;
            }
            require './views/admin/configHorairesView.php';
            $adminNotif = NULL;
            $_SESSION['adminNotif'] = NULL;
        }
        else{
            header('Location: ./');
        }
    }

    // MODIFICATIONS
    function getAdminHeader(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RHeader = $infos->recupHeader();
            $RFooter = $infos->recupFooter();
            if(isset($_SESSION['adminNotif'])){
                $adminNotif = '<div class="alert alert-success"><i class="fa fa-check-square"></i> ' . $_SESSION['adminNotif'] . '</div>';
            }
            else{
                $adminNotif = NULL;
            }
            require './views/admin/editHeaderView.php';
            $adminNotif = NULL;
            $_SESSION['adminNotif'] = NULL;
        }
        else{
            header('Location: ./');
        }
    }
    function getAdminLecabinet(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RCabinet = $infos->recupCabinet();
            $RFooter = $infos->recupFooter();
            if(isset($_SESSION['adminNotif'])){
                $adminNotif = '<div class="alert alert-success"><i class="fa fa-check-square"></i> ' . $_SESSION['adminNotif'] . '</div>';
            }
            else{
                $adminNotif = NULL;
            }
            require './views/admin/editPresentationView.php';
            $adminNotif = NULL;
            $_SESSION['adminNotif'] = NULL;
        }
        else{
            header('Location: ./');
        }
    }
    function getAdminExpertise(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RExpertise = $infos->recupExpertise();
            $RFooter = $infos->recupFooter();
            if(isset($_SESSION['adminNotif'])){
                $adminNotif = '<div class="alert alert-success"><i class="fa fa-check-square"></i> ' . $_SESSION['adminNotif'] . '</div>';
            }
            else{
                $adminNotif = NULL;
            }
            require './views/admin/editExpertiseView.php';
            $adminNotif = NULL;
            $_SESSION['adminNotif'] = NULL;
        }
        else{
            header('Location: ./');
        }
    }
    function getAdminServices(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RServices = $infos->recupServices();
            $RFooter = $infos->recupFooter();
            if(isset($_SESSION['adminNotif'])){
                $adminNotif = '<div class="alert alert-success"><i class="fa fa-check-square"></i> ' . $_SESSION['adminNotif'] . '</div>';
            }
            else{
                $adminNotif = NULL;
            }
            require './views/admin/editServicesView.php';
            $adminNotif = NULL;
            $_SESSION['adminNotif'] = NULL;
        }
        else{
            header('Location: ./');
        }
    }
    function getAdminContact(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RContact = $infos->recupContact();
            $RFooter = $infos->recupFooter();
            if(isset($_SESSION['adminNotif'])){
                $adminNotif = '<div class="alert alert-success"><i class="fa fa-check-square"></i> ' . $_SESSION['adminNotif'] . '</div>';
            }
            else{
                $adminNotif = NULL;
            }
            require './views/admin/editContactView.php';
            $adminNotif = NULL;
            $_SESSION['adminNotif'] = NULL;
        }
        else{
            header('Location: ./');
        }
    }
    function getAdminNewsletter(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RNewsletter = $infos->recupNewsletter();
            $RFooter = $infos->recupFooter();
            if(isset($_SESSION['adminNotif'])){
                $adminNotif = '<div class="alert alert-success"><i class="fa fa-check-square"></i> ' . $_SESSION['adminNotif'] . '</div>';
            }
            else{
                $adminNotif = NULL;
            }
            require './views/admin/editNewsletterView.php';
            $adminNotif = NULL;
            $_SESSION['adminNotif'] = NULL;
        }
        else{
            header('Location: ./');
        }
    }
    function getAdminFooter(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RFooter = $infos->recupFooter();
            $RFooter = $infos->recupFooter();
            if(isset($_SESSION['adminNotif'])){
                $adminNotif = '<div class="alert alert-success"><i class="fa fa-check-square"></i> ' . $_SESSION['adminNotif'] . '</div>';
            }
            else{
                $adminNotif = NULL;
            }
            require './views/admin/editFooterView.php';
            $adminNotif = NULL;
            $_SESSION['adminNotif'] = NULL;
        }
        else{
            header('Location: ./');
        }
    }

    // GESTION DE LA NEWSLETTER
    function adminNewsletter(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RFooter = $infos->recupFooter();
            require './views/admin/newsletterView.php';
        }
        else{
            header('Location: ./');
        }
    }

    // GESTION DE L'ACTUALITE
    function adminActualite(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RFooter = $infos->recupFooter();
            require './views/admin/actualiteView.php';
        }
        else{
            header('Location: ./');
        }
    }

    // CANDIDATURES RECUES
    function adminCandidatures(){
        if(isset($_SESSION['sessionToken'])){
            $infos = new InfosManager();
            $RConfig = $infos->recupConfig();
            $RFooter = $infos->recupFooter();
            require './views/admin/candidaturesView.php';
        }
        else{
            header('Location: ./');
        }
    }

    // SE DECONNECTER
    function adminLogout($_TOKEN){
        $AM = new AdminManager();
        $AM->unsetToken($_TOKEN);
        $_SESSION['sessionToken'] = NULL;
        session_destroy();
        session_start();
        $_SESSION['notif'] = '<div class="alert alert-info"><i class="fa fa-exclamation-circle"></i> Vous venez de vous déconnecter</div>';
        header('Location: ./?page=gk-admin');
    }
    
?>