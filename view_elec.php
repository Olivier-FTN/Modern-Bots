<!doctype html>
<html lang="fr" class="no-js">
<head>
<?php
    require_once('header.php');
?>
    <meta charset="utf-8">
    <title>Modern Bots</title> 
    <link rel="stylesheet" href="annuaire.css">
</head>
  <body>
  <?php include "menu.php";?>
<?php
    require "modele.php";
    require "controleur.php";

    $prod = new Employes();
    foreach($prod->getSelect() as $produits){
    echo "<a class ='prod' href = 'view_descrip.php'>";
    echo "<img class = 'img_prod'" .$produits['img_prod'].$produits['lib_prod']." | Prix : ".$produits['prix_prod']." </img> ";
    echo "</a>";

    }


?>

  </body>
  <?php
    require_once('footer.php');
?>
</html>
