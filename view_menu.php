<!doctype html>
<html lang="fr" class="no-js">
<head>
<?php
    require_once('header.php');
?>
    <meta charset="utf-8">
    <title>Modern Bots</title>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" href="annuaire.css">
</head>
  <body>
    <?php include "menu.php";?>

    <div class="container theme-showcase" role="main">
<!--<div id="corps">-->
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media block-div-image-accueil">
                        <div class="media-body">
                            <a href="view_prod.php?cat=electromenager"><div  class="badge badge-pill badge-primary badge-color">Electroménagers</div></a>
                            <div class="type-article-accueil">Retrouvez ici, toutes les nouveautés électroménager qui viendront compléter avec goût et efficacité, l'aménagement de votre maison</div>
                        </div>
                        <div class="media-right">
                            <a href="view_prod.php?cat=electromenager">
                                <img class="media-object" src="images/electrom.png" alt="..." width="150px;">                                
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media block-div-image-accueil">
                        <div class="media-body">
                          <a href="view_prod.php?cat=drone"> <div  class="badge badge-pill badge-primary badge-color">Drones</div></a>
                            <div class="type-article-accueil">Découvrez ici l'étendue de notre gamme dédiée aux drones : drones jouets, drones DIY, drone de loisir, sous-marins, ailes volantes etc ... </div>
                        </div>
                        <div class="media-right">
                            <a href="view_prod.php?cat=drone">
                                <img class="media-object" src="images/drones.png" alt="..." width="200px;">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media block-div-image-accueil">
                        <div class="media-body">
                           <a href="view_prod.php?cat=telephone"><div class="badge badge-pill badge-primary badge-color">Smartphones</div></a>
                            <div class="type-article-accueil">Il vous faut de la puissance. Un e-mail de temps à autre .Vous pouvez retrouver notre sélection des meilleurs smartphones Android et iOS.</div>
                        </div>
                        <div class="media-right">
                            <a href="view_prod.php?cat=telephone">
                                    <img class="media-object" src="images/smartphones.jpg" alt="..." height="125px;" width="205px;">
                            </a>
                            
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="media block-div-image-accueil">
                        <div class="media-body">
                           <a href="view_prod.php?cat=montre"> <div class="badge badge-pill badge-primary badge-color">Montres</div></a>
                            <div class="type-article-accueil">Vous recherchez une montre connectée, vous êtes au bon endroit...</div>
                        </div>
                        <div class="media-right">
                            <a href="view_prod.php?cat=montre">
                                <img class="media-object" src="images/montres.png" alt="..." height="125px;" width="120px;">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>




</div>
  </body>
  <?php
    require_once('footer.php');
?>
</html>
