<?php
require_once 'header.php';
require_once 'php/Helper.php';

$reduction = 0;

if ($mysqli) {
    foreach ($mysqli->query("Select * from REDUCTION where CODEPROMO='" . $_POST["codePromo"] . "';") as $row) 
        $preduction = $row["POURCENTAGEPROMO"];
    
    $totalAPayer = 0;
    foreach ($mysqli->query("CALL calculPrixResa(" . $_POST['cr'] . ") ") as $row)
        $totalAPayer += $row['prixTotal'];
}
?>

<div class="container ">
    <div class="jumbotron MinOpacity">
        <center>
            <h2><b> Dernière étape <?php
                    if (isset($_SESSION['email']))
                        echo $_SESSION['prenomClient'];
                    ?> ! </b>
            </h2>
        </center>
    </div>
    <div class="panel panel-default MinOpacity <?php
    if (isset($_GET['reussi']))
        echo'animated bounce';
    if (isset($_GET['error']))
        echo'animated shake';
    ?>" id="forms">
        <div class="panel-heading">Finalisation de la commande
        </div>
        <div class="panel-body">
            <form action="php/connexion.php" method="post" role="form"> 
                <fieldset>
                    <legend>Finalisez votre commande !</legend>
                    <div class="form-group">
                        <?php
                        $reduction=$totalAPayer*$preduction;
                        echo "Vous bénéficiez d'une réduction de <b>" . $reduction." Euros</b>";
                        $totalAPayer=$totalAPayer-$reduction;
                        echo '<br>Total à payer : <b>' . $totalAPayer . ' Euros</b>';
                        ?>
                    </div>
                    <input type="hidden" name="codePromo" value="<?php echo $_POST["codePromo"]; ?>">
                    <input type='hidden' value="<?= $_POST['cr'] ?>" name="cresa">
                    <div class="form-group">
                        <label for="inputVille">Moyen de paiement</label>
                        <input type="text" class="form-control" id="MP" placeholder="Moyen de paiement" name="MP" value="PAYPAL">
                    </div>
                    <div class="form-group">
                        <label for="inputVille">Détail de paiement</label>
                        <input type="text" class="form-control">
                    </div>

                    <center>
                        <button type="submit" class="btn btn-default">Payer</button>

                    </center>
                </fieldset>
            </form>
        </div>
    </div>


</div>

<?php
require_once 'footer.php';
?>
