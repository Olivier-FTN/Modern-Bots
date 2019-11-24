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
            <h1>Formulaire de connexion</h1>
                <form action="index.php?action=connexion" method="post">
                    <input type="email" name="mail" id="mail" placeholder="Email"><br><br>
                    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe"><br><br>
                    
                    
                    <input type="submit" name="action" value="connexion">
                </form>
        </article>
    </div>
  </body>
  <?php
    require_once('footer.php');
?>
</html>
