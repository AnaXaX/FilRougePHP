<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

ob_start();//session_start work
include('php/hostix.php'); 

if (isset($_POST["cr"])) {
    if (isset($_SESSION['id'])) {
        if ($mysqli) {
            foreach ($mysqli->query("SELECT r.CODERESERVATION,ev.CODEENTREEVISITEUR, ev.CODEPRIX, ev.NOMVISITEUR, ev.AGEVISITEUR,a.LIBELLEACTIVITE,(Select px.PRIX FROM PRIX px WHERE px.CODEPRIX=ev.CODEPRIX ) as prixEV, (Select px.PRIX FROM PRIX px WHERE px.CODEPRIX=a.CODEPRIX ) as prixA, ev.DATEENTREE
            , r.DATEOPERATION,r.TOTALPAYE,r.MOYENPAYEMENT FROM RESERVATION r
            RIGHT JOIN ENTREEVISITEUR ev on ev.CODERESERVATION = r.CODERESERVATION
            LEFT JOIN  BRACELET b on b.CODEENTREEVISITEUR=ev.CODEENTREEVISITEUR
            LEFT JOIN  ACTIVITE a on a.CODEACTIVITE=b.CODEACTIVITE
            where r.CODERESERVATION=" . $_POST['cr'] . "") as $row) {
                
                $reservation[] = $row;
                
            }
            
        }
    }
}
?>

<html>
    <head>
        <title>Confirmation de réservation</title>
        <style type="text/css">
            <!--
            body,td,th {
                font-size: medium;
                color: #000000;
            }
            body {
                background-color: #ffdead;
            }
            .style3 {
                font-size: 18px;
                font-weight: bold;
            }
            .style4 {
                font-size: small;
                font-weight: bold;
            }
            .style5 {font-size: small}
            -->
        </style>
    </head>
    <body style="background-color: #FFDEAD;">
        <div align="center">
            <table width="600" border="1" bordercolor="99CCFF">
                <tbody>
                    <tr>
                        <td colspan="5" bordercolor="99CCFF" bgcolor="99CCFF"><img src="img/thezoo.jpeg" alt="Header" width="100%" height="25%" longdesc="https://qt7hhq.dm1.livefilestore.com/y2pDJs-GHos35inDJBFRa9oltST_jn-fVpZMBewP-Qp5StrXMkOZVuIxKMCfB_6rnHAD0rdd0dzIdjfbYOelVEdQYZWVkoudm0teMf24Cb7UE4/Navajo%20header%20new.jpg?psid=1"></td>
                    </tr>
                    <tr>
                        <td colspan="5" bordercolor="99CCFF" bgcolor="99CCFF"><div align="left"><strong>Cher <?php echo $_SESSION['nomClient']." ".$_SESSION['prenomClient']; ?>, </strong><br>
                                <br>
                                Merci d'avoir choisi ZooPark. Nous sommes ravis de confirmer la réservation suivante. Si vous avez besoin d'aide supplémentaire, veuillez contacter notre service de réservations par e-mail ou en appelant le numéro indiqué ci-dessous.<br>
                            </div></td>
                    </tr>
                    <tr>
                        <td colspan="5" bordercolor="99CCFF" bgcolor="#FFC977"><div align="left"><strong>Détails de la résérvation:</strong></div></td>
                    </tr>
                    <tr>
                        <td width="121" bordercolor="99CCFF" bgcolor="99CCFF"><div align="left"><span class="style4">Nom du client</span></div></td>
                        <td width="473" colspan="4" bordercolor="99CCFF" bgcolor="99CCFF"><?php echo $_SESSION['nomClient']." ".$_SESSION['prenomClient']; ?></td>
                    </tr>
                    <tr>
                        <td bordercolor="99CCFF" bgcolor="99CCFF"><div align="left"><span class="style4">Numéro de réservation</span></div></td>
                        <td colspan="4" bordercolor="99CCFF" bgcolor="99CCFF"><?php echo $reservation[0]['CODERESERVATION']; ?></td>
                    </tr>
                    <tr>
                        <td bordercolor="99CCFF" bgcolor="99CCFF"><div align="left"><span class="style4">Date de paiement</span></div></td>
                        <td colspan="4" bordercolor="99CCFF" bgcolor="99CCFF"><?php echo $reservation[0]['DATEOPERATION']; ?></td>
                    </tr>

                    <tr>
                        <td colspan="5" bordercolor="99CCFF" bgcolor="#FFC977"><div align="left"><strong>Autorisations d'accés facturées:</strong></div></td>
                    </tr>
                    
                    <?php foreach ($reservation as $res){
                        $activite="";
                        if(isset($res["LIBELLEACTIVITE"])){
                            $activite="+ l'activité '".$res["LIBELLEACTIVITE"]."' au ".$res["DATEENTREE"];
                        }
                    echo '<tr>
                        <td bordercolor="99CCFF" bgcolor="99CCFF"><div align="left"><span class="style4">'.$res['NOMVISITEUR'].'</span></div></td>
                        <td colspan="4" bordercolor="99CCFF" bgcolor="99CCFF"><span class="style5"> Entree classique '.$activite.'</span></td>
                    </tr>';
                    }
                    ?>
                    <tr>
                        <td colspan="5" bordercolor="99CCFF" bgcolor="#FFC977"><div align="left"><strong>Total facturé : <?php echo $res['TOTALPAYE'] ?> euros payés via <?php echo $res['MOYENPAYEMENT'] ?></strong></div></td>
                    </tr>


                    <tr>
                        <td colspan="5" bordercolor="99CCFF" bgcolor="99CCFF"><div align="left">
                                <p align="left">Zoo park, Inc. <a href="http://www.zoopark.fr" target="_self">http://www.zoopark.fr</a> | +33 (0) 6 49 29 62 67</p>
                            </div></td>
                    </tr>
                </tbody></table>
        </div>


    </body></html>