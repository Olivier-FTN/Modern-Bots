<!doctype html>
<html lang="fr" class="no-js">
<head>
<?php
    require_once('header.php');
    unset($_SESSION["userId"]);
?>
    <meta charset="utf-8">
    <title>Modern Bots</title> 
    
    <link rel="stylesheet" href="annuaire.css">
</head>

<body>
    <div id="contenue">
        

            <a class="bloc_lien" href = "view_inscription.php">
                <h3>Créer un compte</h3>
                <p>Vous devez vous inscrire pour accéder aux contenus du site.</p>
            </a>
        
            <a class="bloc_lien" href = "view_connexion.php">
                <h3>Connexion</h3>
                <p>Déjà inscrit ? Connectez-vous pour accéder à votre session.</p>
            </a>
        
    </div>
</html>
</body>

<?php
    require_once('footer.php');
?>
</html>
