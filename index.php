<?php 
  // Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");
  
  session_start();

  try {
    if (isset($_REQUEST['action'])) {
      require "controleur.php";
      $employe = new Employes();

      if ($_REQUEST['action'] == 'Supprimer') {
        $employe->setdelete(intval($_POST['ide']));
      } 

      if ($_REQUEST['action'] == 'Ajouter') {
        $employe->setAdd($_POST);
      } 

      if ($_REQUEST['action'] == 'connexion') {
          $username = filter_var($_REQUEST["mail"], FILTER_SANITIZE_STRING);
          $password = filter_var($_REQUEST["mdp"], FILTER_SANITIZE_STRING);
          require_once "clients.php";
          require_once "controleur.php";
          $client = new Client();
          $employes = new Employes();
          
          $tblEmp = $employes->getSelectCli();
          
          $isLoggedIn = $client->verifLogin($username, $password);
          
          if(!$isLoggedIn) {
            //pas trouvé
            include "view_connexion.php";
            echo 'Les informations d\'identification sont invalides';
            exit();
          } else {
            //trouve
            include "view_menu.php";
          }
      }
      
      if ($_REQUEST['action'] == 'Deconnexion'){
        unset($_SESSION["userId"]);
        unset($_SESSION["userNom"]);
        include "./view_connexion.php";
      }

      if ($_REQUEST['action'] == 'Modifier') {
        $_POST['ide']=intval($_POST['ide']);
        $employe->setUpdate($_POST);
      } 

      if ($_REQUEST['action'] == 'Rechercher') {
        $tblEmp = $employe->Search($_POST);
        include "view_prod.php";
      }

      if ($_GET['action'] == 'Admin') {
        header('Location: ./admin/index.php');  
      }
      
      if ($_GET['action'] == 'Menu') {
        header('Location: ./view_connexion.php');
        $tblEmp = $employe->getSelect();
        $employes = new Employes(); 
      }

      

      if ($_GET['action'] == 'Accueil') {
        $tblEmp = $employe->getSelect();
        include "vue.php";
      }  
    }
    else {
      require "controleur.php";
      $employes = new Employes();
      $tblEmp = $employes->getSelect();
      include "vue.php";
    }

  }
  catch (Exception $e) {
      erreur($e->getMessage());
  }
?>
