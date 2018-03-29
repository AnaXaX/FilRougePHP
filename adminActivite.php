<?php
require_once 'header.php';
$prix = array();
?>
    <div class="container ">
        <div class="jumbotron MinOpacity">
            <center>
                <h2><b><?php if (isset($_SESSION['email']))
                                echo $_SESSION['nomClient'].' '. $_SESSION['prenomClient'].',' ;?> ici vous aller pouvoir changer les prix des Entrées classiques </b></h2>
            </center>
        </div>
    </div>

    <div class="container <?php if (isset($_GET['reussi']))
    echo'animated bounce';
if (isset($_GET['error']))
    echo'animated shake';
?>">
        <div class="panel panel-default MinOpacity">
            <div class="panel-heading">Gestions Des Prix
            </div>
            <div class=" panel-body row clearfix">
                <div class="col-md-12 column">
                    <form action="php/connexion.php" method="post" role="form">
                        <input type="hidden" name="activite" value="activite">
                        <table class="table table-bordered table-hover" id="tab_logic">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        CODEACTIVITE
                                    </th>
                                    <th class="text-center">
                                        CODEPRIX
                                    </th>
                                    <th class="text-center">
                                        LIBELLEACTIVITE
                                    </th>
                                    <th class="text-center">
                                        DATEDEBUTACTIVITE
                                    </th>
                                    <th class="text-center">
                                        DATEFINACTIVITE
                                    </th>
                                    <th class="text-center">
                                        AGEMINACTIVITE
                                    </th>
                                    <th class="text-center">
                                        ACCES
                                    </th>
                                </tr>
                            </thead>

                            <?php 
    if (isset($_SESSION['id']) && $_SESSION['id']==0) { //$_SESSION['admin'] seule admin pour le moment c Anas
        
            echo '<tbody>';$compteurModif=0;
            foreach ($mysqli->query("SELECT * FROM ACTIVITE ") as $row) {
           
                echo '<td><center><input  name="CODEACTIVITE[]" style="text-align:center" type="text" value="'.$row['CODEACTIVITE'].'" readonly></td>';
                echo '<td><input  name="CODEPRIX[]" style="text-align:center" type="text" value="'.$row['CODEPRIX'].'"</td>';
                echo '<td><input  name="LIBELLEACTIVITE[]" style="text-align:center" type="text" value="'.$row['LIBELLEACTIVITE'].'"></td>';
                echo '<td><div class="input-group date" id="datetimepicker"><input  name="DATEDEBUTACTIVITE[]" style="text-align:center" type="text" value="'.$row['DATEDEBUTACTIVITE'].'"></div></td>';
                echo '<td><div class="input-group date" id="datetimepicker"><input  name="DATEFINACTIVITE[]" style="text-align:center" type="text" value="'.$row['DATEFINACTIVITE'].'"></div></td>';
                echo '<td><input  name="AGEMINACTIVITE[]" style="text-align:center" type="text" value="'.$row['AGEMINACTIVITE'].'"></td>';
                echo '<td><input  name="ACCES[]" style="text-align:center" type="text" value="'.$row['ACCES'].'"></td></tr>';
                $compteurModif++;
            } 
        }
    
?>
                    </table>
                    <div class="container">
                            <div class="row">
                            <center> <a id="add_rowA" class="btn btn-default btn-primary ">Ajouter une activité</a><a id='delete_row' style="margin-left:15px;margin-right:15px;" class="btn-warning btn btn-default">Supprimer une activité</a>
                            <input type="submit" class="btn btn-default btn-success " value="Confirmer modifications"></center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
//if (isset($_POST['priceEntree'])) {}
require_once 'footer.php';
?>
