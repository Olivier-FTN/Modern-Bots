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
    <div class="form-cnx">
      <article>
          <h1>Formulaire d'inscription</h1>
              <form action="index.php?action=Menu" method="post">
                <input type="text" name="nom" id="nom" placeholder="Nom"> <br><br>
                <input type="text" name="prenom" id="prenom" placeholder="Prénom"><br><br>
                <input type="text" name="tel" id="tel" placeholder="Téléphone"><br><br>
                <input type="text" name="cp" id="cp" placeholder="Code Postal"><br><br>
                <input type="text" name="vil" id="vil" placeholder="Ville"><br><br>
                <input type="email" name="mail" id="mail" placeholder="Email"><br><br>
                <input type="password" name="mdp" id="mdp" placeholder="Mot de passe"><br><br>
                
                
                <input type="submit" name="action" value="Ajouter">
              </form>
      </article>
    </div>
  </body>
  <?php
    require_once('footer.php');
?>
</html>
