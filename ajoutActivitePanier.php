<?php
require_once 'header.php';

include_once 'php/Helper.php';
if (isset($_SESSION['id'], $_GET["id"])):

    if ($mysqli) {
        foreach ($mysqli->query("Select *,DATEDIFF(CURRENT_DATE,DATEFINACTIVITE)as DIFF, "
                . "PRIX.PRIX As PRIX,DATE_FORMAT(DATEDEBUTACTIVITE, '%d/%m/%Y') as Du,"
                . "DATE_FORMAT(DATEFINACTIVITE, '%d/%m/%Y') as Au "
                . "from ACTIVITE "
                . "inner join PRIX on ACTIVITE.CODEPRIX=PRIX.CODEPRIX where CODEACTIVITE=" . $_GET["id"]
                . " order by DATEFINACTIVITE desc") as $row) {
            $activites = $row;
        }
    }
    ?> 
    <div class="container ">
        <div class="jumbotron MinOpacity">
            <center>
                <h1><?= $activites["LIBELLEACTIVITE"]; ?></h1>

            </center>
        </div>

        <?php
        //Selectionner une reservation
        if (!isset($_POST["reservation"]) && !isset($_POST["visiteur"])):
            ?>
            <div class="panel panel-default MinOpacity" id="forms">
                <div class="panel-heading">Selectionnez le visiteur de l'activité
                </div>
                <div class="panel-body">
                    <form action="#" method="post" role="form"> 
                        <fieldset>
                            <legend>Selectionnez un visiteur</legend>
                            <label for="reservation">Selectionnez le numéro de votre reservation</label>
                            <select name="reservation" class="form-control" id="adresse">
                                <?php foreach ($reservationsNp as $r): ?>
                                    <option value="<?= $r["CODERESERVATION"] ?>"><?= $r["CODERESERVATION"] ?></option>
        <?php endforeach; ?>
                            </select>
                            <br>
                            <center>
                                <button type="submit" class="btn btn-default">Suivant</button>
                            </center>
                        </fieldset>
                    </form>
                </div>
            </div>
        <?php endif; ?>
        <?php
        //Selectionner un visiteur
        if (isset($_POST["reservation"])):
            ?>
            <div class="panel panel-default MinOpacity" id="forms">
                <div class="panel-heading">Selectionnez le visiteur de l'activité
                </div>
                <div class="panel-body">
                    <form action="#" method="post" role="form"> 
                        <fieldset>
                            <legend>Selectionnez un visiteur</legend>
                            <label for="reservation">Selectionnez un visiteur</label>
                            <select name="visiteur" class="form-control" id="visiteur">
                                <?php foreach ($visiteur as $r): ?>
                                    <option value="<?= $r["CODEENTREEVISITEUR"] ?>"><?= $r["NOMVISITEUR"] ?></option>
        <?php endforeach; ?>
                            </select>
                            <input type="hidden" name="resa" value="<?= $_POST["reservation"]; ?>">
                            <br>
                            <center>
                                <button type="submit" class="btn btn-default">Selectionner</button>
                            </center>
                        </fieldset>
                    </form>
                </div>
            </div>
    <?php endif; ?> 
    <?php if (isset($_POST["visiteur"], $_POST["resa"])): ?>
            <div class="panel panel-default MinOpacity" id="forms">
                <div class="panel-heading">Selectionnez le visiteur de l'activité
                </div>
                <div class="panel-body">
                    <?php if ($visiteurActivite["AGEVISITEUR"] < $activiteVisiteur["AGEMINACTIVITE"] || !(strtotime($visiteurActivite["DATEENTREE"]) >= strtotime($activiteVisiteur["DATEDEBUTACTIVITE"]) && strtotime($visiteurActivite["DATEENTREE"]) <= strtotime($activiteVisiteur["DATEFINACTIVITE"]))): ?>
                        <?php
                        echo $_POST["visiteur"] . " code <br>";
                        echo 'Age du visiteur ' . $visiteurActivite["AGEVISITEUR"];
                        echo '<br>Age min activite ' . $activiteVisiteur["AGEMINACTIVITE"];
                        echo '<br>Date entree visiteur ' . $visiteurActivite["DATEENTREE"];
                        echo '<br>Date debut : ' . $activiteVisiteur["DATEDEBUTACTIVITE"];
                        echo '<br>Date fin : ' . $activiteVisiteur["DATEFINACTIVITE"];
                        ?>
                        <h2>L'age ou la date d'entree du visiteur choisi est incompatible avec l'activité</h2>
                        <form action="#" method="post">
                            <input type="hidden" name="reservation" value="<?= $_POST["resa"]; ?>">
                            <button type="submit" class="btn btn-default">Retour</button>
                        </form>
                    <?php
                    else: 
                        include "reserverActivite.php";
                    endif;
                    ?>
                </div>
            </div>
    <?php endif; ?>    
    </div>
    <?php
endif;
require_once 'footer.php';
?>

