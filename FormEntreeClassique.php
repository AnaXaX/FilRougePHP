<?php
require_once 'header.php';
require_once 'php/Helper.php';
?>

<!--
<div class="container">
    <div class="panel panel-default MinOpacity">
        <div class="panel-heading">Entrée
        </div>
        <div class="panel-body">
            <form>
                <div class="form-group">
                    <label for="nomVisiteur">Prénom et nom du visiteur</label>
                    <input type="text" id="nomVisiteur" class="form-control" placeholder="Prénom et nom ">
                </div>
                <div class="form-group">
                    <label for="ageVisiteur">Age du visiteur</label>
                    <input type="number_format" id="nomVisiteur" class="form-control" placeholder="Age ">
                </div>
                <div class="form-group">
                    <label for="DateEntree">Date de visite</label>
                    <div class='input-group date' class='datetimepicker'>
                        <input type='text' class="form-control" placeholder="Date de visite" id="DateEntree" name="DateEntree" readonly>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter une entrée</button>
            </form>
        </div>
    </div>
</div>
-->
<div class="container ">
    <div class="jumbotron MinOpacity">
        <h2><b> Réserve tes entrées visiteurs <?php
                if (isset($_SESSION['email']))
                    echo $_SESSION['nomClient'] . ' ' . $_SESSION['prenomClient'];
                ?>  </b></h2>
        <p><i> N'oublie pas, les entrées classiques à 10 euros, 5 euros pour les mineurs (-18 ans) </i></p>
        <p><a class="btn btn-primary btn-large" href="FormEntreeClassique.php">Achetez vos entrées !</a></p>
    </div>
</div>
<div class="container">
    <div class="panel panel-default MinOpacity">
        <div class="panel-heading">Entrée Visiteur
        </div>
        <div class=" panel-body row clearfix">
            <div class="col-md-12 column">
                <form action="php/connexion.php" method="post" role="form">
                    <input type="hidden" name="nat" value="entreeVisiteur">
                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    #
                                </th>
                                <th class="text-center">
                                    Nom
                                </th>
                                <th class="text-center">
                                    Prénom
                                </th>
                                <th class="text-center">
                                    Age
                                </th>
                                <th class="text-center">
                                    Date de visite
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id='addr0'>
                                <td>
                                    1
                                </td>
                                <td>
                                    <input type="text" name='nom[]' placeholder='Nom' class="form-control" />
                                </td>
                                <td>
                                    <input type="text" name='prenom[]' placeholder='Prenom' class="form-control" />
                                </td>
                                <td>
                                    <input type="number" name='age[]' placeholder='Age' class="form-control" />
                                </td>
                                <td>
                                    <div class='input-group date' id="datetimepicker">
                                        <input type='text' class="form-control" placeholder="Date de visite" class="DateEntree" name="DateEntree[]" readonly>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>

                                </td>
                            </tr>
                            <tr id='addr1'></tr>
                        </tbody>
                    </table>


                    <div class="container">
                        <div class="row">
                            <center> <a id="add_row" class="btn btn-default btn-success ">Ajouter une entrée</a><a id='delete_row' style="margin-left:15px;" class="btn-warning btn btn-default">Supprimer une entrée</a>
                                <br><br><input type="submit" class="btn btn-default btn-success " value="Ajouter au panier"></center>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_GET["err"])) {
                    if ($_GET["err"] = 0) {
                        echo '<p style="color:red;">Veuillez vous connecter !</p>';
                    }
                    if ($_GET["err"] = 1) {
                        echo '<center><p style="color:red;">Veuillez completer toutes les donnees !</p></center>';
                    }
                    if ($_GET["err"] = 2) {
                        echo '<center><p style="color:red;">Une erreur est survenue, veuillez réessayer !</p></center>';
                    }
                    if (isset($_GET["prix"])) {
                        echo '<center><p style="color:green;">Vos entrées ont été ajoutés à votre panier ! Le prix total est de <b>'.$_GET["prix"].' Euros</b> </p></center>';
                    }
                }
                ?>
            </div>

        </div>

    </div>

</div>
<?php
require_once 'footer.php';
?>
