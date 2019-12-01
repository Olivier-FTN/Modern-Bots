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
    //echo $_REQUEST['cat'];
    foreach($prod->getSelect($_REQUEST['cat']) as $produits){
    echo "<div class ='prod'>";
      echo '<div class = "img_pos"><img class = "img_prod"'.$produits['img_prod'].'</div>';
      echo '<div class = "text_pos"><h2>'.$produits['lib_prod'].'</h2></br>'.$produits['descrip_prod'].'</br></br>
      Prix : '.$produits['prix_prod'].'</div></br></br>';
      echo '<div class ="btn_panier"><input type="submit" name="action" value="Ajouter au panier"></div>';
      echo '<div style = "clear:both;"></div>';
    echo "</div>";

    }


?>

  </body>
  <?php
    require_once('footer.php');
?>
</html>
