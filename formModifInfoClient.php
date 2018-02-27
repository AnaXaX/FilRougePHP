<?php
$page=2;
require_once 'header.php';
require_once 'php/Helper.php';

?>       
<div class="container ">
    <div class="jumbotron MinOpacity">
        <center>
        <h1><?php
            echo $clt['nomClient'].' '.$clt['prenomClient'] ?></h1>
        <p><?php echo $clt['email'] ?></p>
        </center>
    </div>
    <div class="panel panel-default <?php if(isset($_GET['reussi']))echo'animated bounce'; if(isset($_GET['error']))echo'animated shake'; ?>" id="forms">
        <div class="panel-heading">Données personnelles
        </div>
        <div class="panel-body">
            <form action="php/connexion.php?modif=lhayat" method="post" role="form"> 
                <fieldset>
                    <legend>Modifiez vous données personnelles</legend>
                    <label for="exampleInputEmail">Date de naissance</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" placeholder="Date de naissance" name="dateDeNaissanceMod" value="<?php if (!empty($clt['dateNaissanceClient'])){echo $clt['dateNaissanceClient'];} ?>"/><!-- Change value by php code --> 
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputEmail">Adresse</label>
                        <input type="text" class="form-control" id="adresse" placeholder="Adresse" name="adresseMod" value="<?php if (!empty($clt['AdresseClient'])){echo $clt['AdresseClient'];} ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Ville</label>
                        <input type="text" class="form-control" id="ville" placeholder="Ville" name="villeMod" value="<?php if (!empty($clt['villeClient'])){echo $clt['villeClient'];} ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Numéro de téléphone</label>
                        <input type="number" class="form-control" id="telephone" placeholder="Numéro de téléphone" name="telMod" value="<?php if (!empty($clt['telClient'])){echo $clt['telClient'];} ?>">
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
require_once 'footer.php';/*
<?php if (!empty($clt['dateNaissanceClient'])){echo date('d-m-Y',strtotime($_POST['dateNaissanceClient']));}?>*/
?>