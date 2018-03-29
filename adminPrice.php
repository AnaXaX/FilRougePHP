<?php
require_once 'header.php';
$prix = array();
$num_rows=0;
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
            
            echo '<tbody>';
            foreach ($results=$mysqli->query("SELECT CODEPRIX, AGEMINPRIX, AGEMAXPRIX, PRIX FROM PRIX ") as $row) {$x=0;$num_rows = $results->num_rows;
                echo '<tr>';
                foreach($row as $clmn){
                    echo'<td><center><input min="1" name="modif'.$x.'[]" style="text-align:center" type="text" value="'.$clmn.'"';
                    if($x==0)
                     echo 'readonly ></center></td>';
                    else
                        echo '></center></td>';
                    $x++;
                }
                echo '</tr>';
            } 
        }
    
?>
</table>
<div class="container">
    <div class="row">
        <center><input type="submit" class="btn btn-default btn-success " value="Confirmer modifications">
        <a id="add_rowP" class="btn btn-default btn-primary ">Ajouter un champ</a><a id='delete_row' style="margin-left:15px;margin-right:15px;" class="btn-warning btn btn-default">Supprimer un champ</a>
            <input type="hidden" name="cl" value="<?=$num_rows?>">
        </center>
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
