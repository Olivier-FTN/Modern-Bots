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
    <div class="form-cnx2">
        <article>
            <h1>Identifiez-vous</h1>
                <form action="index.php?action=connexion" method="post">
                    <label>Email :</label>
                    <input type="email" name="mail" id="mail" placeholder="Email"><br><br>
                    <label>Mot de passe :</label>
                    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe"><br><br>
                                      
                    <input type="submit" name="action" value="connexion">
                    
                </form>
        </article>
</br></br>
        <div style="color:white;">Nouveau chez Modern Bots ?</div>
      <a href = "view_inscription.php">Créer votre compte</a>
    </div>
                
        
    
  </body>
  <?php
    require_once('footer.php');
?>
</html>
