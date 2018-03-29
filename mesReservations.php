<?php
require_once 'header.php';
require_once 'php/Helper.php';
?>

<div class="container ">
    <div class="jumbotron MinOpacity">
        <center>
            <h2><b> Imprimez votre confirmation de réservation <?php
                    if (isset($_SESSION['email']))
                        echo $_SESSION['prenomClient'];
                    ?>  </b>
            </h2>
        </center>
    </div>

    <div class="panel panel-default MinOpacity">
        <div class="panel-heading">Réservations confirmées</div>
        <div class=" panel-body row clearfix">
            <div class="col-md-12 column">

                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:70%">Entrées</th>
                            <th style="width:20%">Prix</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>

                    <?php if (isset($_SESSION['id'])): ?>
                        <tbody>
                            <?php
                            $reservation = array();
                            $r = $reservations[0];
                            $i = 0;
                            foreach ($reservations as $p) {
                                if ($p["CODERESERVATION"] == $r["CODERESERVATION"]) {
                                    $reservation[$i][] = $p;
                                } else {
                                    $i++;
                                    $r = $p;
                                    $reservation[$i][] = $p;
                                }
                            }
                            ?>

                            <?php foreach ($reservation as $res): ?>
                            <?php $prixE = 0; ?>
                            <form method="post" action="confirmationReservation.php">
                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <h4 class="nomargin">Réservation n°: <?= $res[0]['CODERESERVATION'] ?></h4>
                                                <p>
                                                    <?php foreach ($res as $r): ?>
                                                        Visite au <?= date('d/m/Y', strtotime(str_replace('-', '/', $r['DATEENTREE']))) ?> par 
                                                        <?= $r['NOMVISITEUR'] ?>,
                                                        <?= $r['AGEVISITEUR'] . ' Ans : <b>' . $r['prixEV'] . ' €</b>' ?>
                                                        <?php
                                                        $prixE += $r['prixEV'];
                                                        if (isset($r['prixA'])) {
                                                            echo'<br><div class="alert alert-success" role="alert">          Activité "' . $r['LIBELLEACTIVITE'] . '" incluse : <b>' . $r['prixA'] . ' €</b> </div>';
                                                            $prixE += $r['prixA'];
                                                        } else {
                                                            echo '<br>';
                                                        }
                                                        ?>

                                                    <?php endforeach; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </td>

                                    <td data-th="Price">
                                        <?= '<b>' . $prixE . ' €</b>' ?>
                                    </td>
                                    <td class="actions" data-th="">
                                        <input type='hidden' value="<?= $r['CODERESERVATION'] ?>" name="cr">
                                        <button type="submit" class="btn btn-default btn-sm" name="bImpression" ><span class="glyphicon glyphicon-print" aria-hidden="true"></span></button>
                                    </td>
                                </tr>
                            </form>
                            <?php endforeach; ?>
                        </tbody>

                        <tfoot>

                            <tr>
                                <td><a href="index.php" class="btn btn-warning"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Continuer la visite</a></td>
                                <td colspan="2" class="hidden-xs"></td>

                            </tr>
                        </tfoot>
<?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>
