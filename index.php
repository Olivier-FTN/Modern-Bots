<?php 
  // Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");
  
  
  try {
    if (isset($_REQUEST['action'])) {
      require "controleur.php";
      $employe = new Employes();

      if ($_POST['action'] == 'Supprimer') {
        $employe->setdelete(intval($_POST['ide']));
      } 

      if ($_POST['action'] == 'Ajouter') {
        $employe->setAdd($_POST);
      } 

      if ($_POST['action'] == 'connexion') {
        //echo "lulu";
        $employe->getSelectUser($_POST['mail']);
      } 

      if ($_POST['action'] == 'Modifier') {
        $_POST['ide']=intval($_POST['ide']);
        $employe->setUpdate($_POST);
      } 

      if ($_POST['action'] == 'Rechercher') {
        $tblEmp = $employe->Search($_POST);
        include "vue.php";
      }

      if ($_GET['action'] == 'Admin') {
        header('Location: ./admin/index.php');  
      }
      
      if ($_GET['action'] == 'Menu') {
        header('Location: ./view_menu.php');
        $tblEmp = $employe->getSelect();
        $employes = new Employes(); 
      }

      if ($_GET['action'] == 'Deconnexion'){
        session_start();
        session_destroy();
        include "./view_inscription.php";
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
  
  /*if ($_POST ) {
    echo "";

    if (!isset($_POST['nom']) or !isset($_POST['prenom']) or !isset($_POST['tel']) or !isset($_POST['cp']) or !isset($_POST['vil']) or !isset($_POST['mail']) or !isset($_POST['mdp'])   ) {
        echo "erreurs";
        //var_dump($_POST);
    }
  }*/
  
?>
