<?php

require_once("modele.php");

class Employes extends DB {

  function getSelect(){

    $strSQL = "SELECT * FROM produits";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }

  function getSelectUser(){
    $strSQL = "SELECT * FROM clients where mail_cli = ?";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }

  function setDelete($id){

    $strSQL = "DELETE FROM tbl_employe WHERE emp_id = ?";
    $tabValeur = array($id);
    $del = $this->Requete($strSQL, $tabValeur);
    return $del;
  }

  function setAdd($tblemp){
    $strSQL = "INSERT INTO clients (nom_cli, prenom_cli, num_tel_cli, cp_cli, vil_cli, mail_cli, mdp_cli) 
    VALUES (?, ?, ?, ?, ?, ?, ?)";
    $tabValeur = array(
      $tblemp['nom'],
      $tblemp['prenom'],
      $tblemp['tel'],
      $tblemp['cp'],
      $tblemp['vil'],
      $tblemp['mail'],
      $tblemp['mdp']       
    );
    $ins = $this->Requete($strSQL, $tabValeur);  
    return $ins;
}

  function setUpdate($tblemp){

    $strSQL = "UPDATE tbl_employe SET emp_pnom = :pnom, emp_nom = :nom, emp_tel = :tel WHERE emp_id = :ide;";

    $tabValeur = array(
      'pnom'  => $tblemp['prenom'], 
      'nom'   => $tblemp['nom'], 
      'tel'   => $tblemp['tel'],
      'ide'   => $tblemp['ide'],
    );
    
    $upd = $this->Requete($strSQL, $tabValeur);
    return $upd;
  }

  function Search($tblemp){

    $strSQL = "SELECT * FROM tbl_employe 
                WHERE emp_pnom LIKE  :pnom 
                OR emp_nom     LIKE  :nom 
                OR emp_tel     LIKE  :tel 
              ";

    empty($tblemp['prenom'])  ? $tblemp['prenom'] = '*' : $tblemp['prenom']; 
    empty($tblemp['nom'])     ? $tblemp['nom']    = '*' : $tblemp['nom']; 
    empty($tblemp['tel'])     ? $tblemp['tel']    = '*' : $tblemp['tel']; 

    $tabValeur = array(
          'pnom'  => "%".$tblemp['prenom']."%", 
          'nom'   => "%".$tblemp['nom']."%", 
          'tel'   => "%".$tblemp['tel']."%"
        );

    $sch = $this->Requete($strSQL, $tabValeur);
    return $sch;
    }
}
?>
