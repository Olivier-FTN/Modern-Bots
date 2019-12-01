<?php

class Client 
{

    function __construct()
    {
        require_once "modele.php";
        $this->cnx = new DB();
    }

    function getClientById($idMembre)
    {
        $strSQL = "select * FROM clients WHERE code_cli = ?";
        $paramTab = array($idMembre);
        $membreResultat = $this->cnx->Requete($strSQL, $paramTab);
        return $membreResultat;
    }

    public function verifLogin($username, $password) {
        $passwordHash = sha1($password);
        $strSQL = "select * FROM clients WHERE mail_cli = ? AND mdp_cli = ?";
        $paramTab = array($username, $passwordHash);
        $membreResultat = $this->cnx->Requete($strSQL, $paramTab);
        if(!empty($membreResultat)) {
            $_SESSION["userId"] = $membreResultat[0]["code_cli"];
            $_SESSION["userNom"] = $membreResultat[0]["prenom_cli"].' '.$membreResultat[0]["nom_cli"];
            return true;
        }else{
            //$_SESSION["erreurMessage"]='erreur login ou mdp';
            return false;
        }
    }
    
    /*public function processLogin($username, $password) {
        $passwordHash = md5($password);
        $strSQL = "select * FROM clients WHERE mail_cli = ? AND mdp_cli = ?";
        $paramTab = array($username, $passwordHash);
        $membreResultat = $this->ds->Requete($strSQL, $paramTab);
        if(!empty($membreResultat)) {
            $_SESSION["userId"] = $membreResultat[0]["code_cli"];
            return true;
        }
    }*/
}
