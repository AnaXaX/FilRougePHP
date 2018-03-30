<?php
require_once 'header.php';
include_once 'php/Helper.php';
$page = 2;
?>

<div class="container">
    <div class="jumbotron MinOpacity">
        <center><h2><b> Découvrez nos offres ! </b></h2>
            <p><i> Entrées classiques à 10 euros, 5 euros pour les mineurs (-18 ans) </i></p>
            <p><i><h5> * Un ticket d'entrée au parc est requis pour chaque ticket d'activité</h5> </i></p>
            <p><a class="btn btn-primary btn-large" href="FormEntreeClassique.php">Achetez vos entrées !</a></p>
        </center>
    </div>

    <?php 
    foreach ($activites as $a):
    ?>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">


            <div class="panel price panel-red">
                <div class="panel-heading  text-center">
                    <h2><?= $a["TYPEACTIVITE"]." :"; ?></h2>
                    <h3><?= $a["LIBELLEACTIVITE"]; ?></h3>
                </div>
                <div class="panel-body text-center">
                    <p class="lead" style="font-size:40px"><strong> <?= $a["PRIX"]; ?> € </strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><b> Du : <?= $a["Du"]; ?></b> </li>
                    <li class="list-group-item"><b> Au : <?= $a["Au"]; ?></b> </li>
                    <li class="list-group-item"><b> > <?= $a["AGEMINACTIVITE"]; ?> ans </b></li>
                </ul>
                <div class="panel-footer">
                    <?php if($a["DIFF"]<0): ?>
                    <a class="btn btn-lg btn-block btn-success" href="ajoutActivitePanier.php?id=<?= $a["CODEACTIVITE"]; ?>" >Ajouter au panier</a>
                    <?php else:?>
                    <a class="btn btn-lg btn-block btn-default" disabled>Expiré !</a>
                    <?php endif;?>
                    
                </div>
            </div>



        </div>

    <?php endforeach; ?>

</div>    



<?php
require_once 'footer.php';
?>