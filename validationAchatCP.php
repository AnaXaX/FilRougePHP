<?php
require_once 'header.php';
require_once 'php/Helper.php';
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
    <div class="panel panel-default MinOpacity <?php if (isset($_GET['reussi'])) echo'animated bounce';
                    if (isset($_GET['error'])) echo'animated shake'; ?>" id="forms">
        <div class="panel-heading">Finalisation de la commande
        </div>
        <div class="panel-body">
            <form action="validationAchat.php" method="post" role="form"> 
                <fieldset>
                    <legend>Avez vous un code promo ?</legend>
                    <div class="form-group">
                        <label for="inputAdresse">Code promo</label>
                        <input type="text" class="form-control" id="codePromo" placeholder="Code promo" name="codePromo">
                        <input type='hidden' value="<?= $_GET['cr'] ?>" name="cr">
                    </div>

                    <center>
                        <button type="submit" class="btn btn-default">Suivant</button>

                    </center>
                </fieldset>
            </form>
        </div>
    </div>


</div>

<?php
require_once 'footer.php';
?>
