<?php
require_once 'header.php';
require_once 'php/Helper.php';

?>       
<div class="container ">
    <div class="jumbotron MinOpacity">
        <center>
        <h1><?php
            echo $clt['nomClient'].' '.$clt['prenomClient'] ?></h1>
        <p><?php echo $_SESSION['email'] ?></p>
        </center>
    </div>
    <div class="panel panel-default MinOpacity <?php if(isset($_GET['reussi']))echo'animated bounce'; if(isset($_GET['error']))echo'animated shake'; ?>" id="forms">
        <div class="panel-heading">Données personnelles
        </div>
        <div class="panel-body">
            <form action="php/connexion.php?modif=lhayat" method="post" role="form"> 
                <fieldset>
                    <legend>Modifiez vous données personnelles</legend>
                    <label for="inputDateDeNaissance">Date de naissance</label>
                    <div class='input-group date' id='datetimepicker'>
                        <input type='text' class="form-control" placeholder="AAAA/MM/JJ" id="DateDeNaissance" name="dateDeNaissanceMod" value="<?php if (!empty($clt['dateNaissanceClient'])){ echo $clt['dateNaissanceClient'];}?>" readonly><!-- Change value by php code -->
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputAdresse">Adresse</label>
                        <input type="text" class="form-control" id="adresse" placeholder="Adresse" name="adresseMod" value="<?php if (!empty($clt['adresseClient'])){echo $clt['adresseClient'];} ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputVille">Ville</label>
                        <input type="text" class="form-control" id="ville" placeholder="Ville" name="villeMod" value="<?php if (!empty($clt['villeClient'])){echo $clt['villeClient'];} ?>">
                    </div>
                    <div class="form-group">
                        <label for="InputTel">Numéro de téléphone</label>
                        <input type="text" class="form-control" id="telephone" placeholder="Numéro de téléphone" name="telMod" value="<?php if (!empty($clt['telClient'])){echo $clt['telClient'];} ?>">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="newsletterClient" <?php if(!empty($clt['newsletterClient'])){ if ($clt['newsletterClient']=1){echo "checked";}} ?>>Recevoir les actualités du parc</label>
                    </div>
                    <center>
                    <button type="submit" class="btn btn-default">Enregistrer</button>
                    <button type="reset" class="btn btn-primary">Rénisialiser</button>
                    </center>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php
require_once 'footer.php';
?>