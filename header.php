<!DOCTYPE html>
<html>
<body>
    <div id="header">
    <img src="images/mb2.png"/>
        <div class = "session_cli">Bonjour,
        <?php
        if(isset($_SESSION["userId"])){
            echo $_SESSION["userNom"];
        }else{   
        echo '<a href = "view_connexion.php">Identifiez-vous</a>';
        }
        echo '</div>';
    echo '</div>';
    ?>
</body>
</html>
