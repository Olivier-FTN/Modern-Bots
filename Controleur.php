<?php

require_once("modele.php");

class Employes extends DB {
  function getSelectCat($categorie){

    $strSQL = "SELECT * FROM produits where cat_prod = '".$categorie."';";
    
    $tabValeur = array("*");
    //$tabValeur = array($categorie);
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }


  function getSelect($cat){
  
    $strSQL = "SELECT * FROM produits where cat_prod = ?";
    //$tabValeur = array("*");
    $tabValeur = array($cat);
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }

  function getSelectCli(){
    $strSQL = "SELECT * FROM clients";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }

  /*function setDelete($id){

    $strSQL = "DELETE FROM tbl_employe WHERE emp_id = ?";
    $tabValeur = array($id);
    $del = $this->Requete($strSQL, $tabValeur);
    return $del;
  }*/

  function setAdd(){
    $strSQL = "INSERT INTO clients (nom_cli, prenom_cli, num_tel_cli, cp_cli, vil_cli, mail_cli, mdp_cli) 
    VALUES (?, ?, ?, ?, ?, ?, ?)";
    $tabValeur = array(
      $_POST['nom'],
      $_POST['prenom'],
      $_POST['tel'],
      $_POST['cp'],
      $_POST['vil'],
      $_POST['mail'],
      sha1($_POST['mdp'])       
    );
    $ins = $this->Requete($strSQL, $tabValeur);  
    return $ins;
}

  /*function setUpdate($tblemp){

    $strSQL = "UPDATE tbl_employe SET emp_pnom = :pnom, emp_nom = :nom, emp_tel = :tel WHERE emp_id = :ide;";

    $tabValeur = array(
      'pnom'  => $tblemp['prenom'], 
      'nom'   => $tblemp['nom'], 
      'tel'   => $tblemp['tel'],
      'ide'   => $tblemp['ide'],
    );
    
    $upd = $this->Requete($strSQL, $tabValeur);
    return $upd;
  }*/

  function Search($tblemp){

    $strSQL = "SELECT * FROM produits 
                WHERE lib_prod LIKE  :libProd";

    empty($tblemp['lib_prod'])  ? $tblemp['lib_prod'] = '*' : $tblemp['lib_prod']; 

    $tabValeur = array('libProd'  => "%".$tblemp['lib_prod']."%");

    $sch = $this->Requete($strSQL, $tabValeur);
    return $sch;
    }
}
?>
