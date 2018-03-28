<?php
require_once 'header.php';
$prix = array();
?>
    <div class="container ">
        <div class="jumbotron MinOpacity">
            <center>
                <h2><b><?php if (isset($_SESSION['email']))
                                echo $_SESSION['nomClient'].' '. $_SESSION['prenomClient'] ;?>, ici vous aller pouvoir changer les prix des Entrées classiques </b></h2>
            </center>
        </div>
    </div>

    <div class="container ">
        <div class="panel panel-default MinOpacity">
            <div class="panel-heading">Gestions prix des Entrées classiques
            </div>
            <div class=" panel-body row clearfix">
                <div class="col-md-12 column">
                    <form action="php/connexion.php" method="post" role="form">
                        <input type="hidden" name="priceEntree" value="priceEntree">
                        <table class="table table-bordered table-hover" id="tab_logic">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        CodePrix
                                    </th>
                                    <th class="text-center">
                                        AgeMinPrix
                                    </th>
                                    <th class="text-center">
                                        AgeMaxPrix
                                    </th>
                                    <th class="text-center">
                                        Prix
                                    </th>
                                </tr>
                            </thead>

                            <?php 
    if (isset($_SESSION['id']) && $_SESSION['id']==0) { //$_SESSION['admin']
        if ($mysqli) {
            echo '<tbody>';
            foreach ($mysqli->query("SELECT CODEPRIX, AGEMINPRIX, AGEMAXPRIX, PRIX FROM PRIX WHERE ACTIVITE=0 ") as $row) {
                echo '<tr>';
                foreach($row as $clmn){
                    echo'<td><center><input style="text-align:center" type="text" value="'.$clmn.'"></center> </td>';
                }
                echo '</tr>';
            } 
        }
    }
?>
</table>
<div class="container">
    <div class="row">
        <center><input type="submit" class="btn btn-default btn-success " value="Confirmer modifications"></center>
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
