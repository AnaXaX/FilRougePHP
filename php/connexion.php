<?php

//ob_start();
require_once('hostix.php');
if (!isset($_SESSION)) {
    session_start();
}
/* Déconnexion */
if (isset($_GET['stateCo'])) {
    unset($_SESSION['email'], $_SESSION['id']);
    ob_end_flush();
    echo "<script>location='../index.php'</script>";
    exit();
}
/* Fin Déconnexion */

if (isset($_GET['log'])) {
    if (isset($_POST['email-connexion'], $_POST['password-connexion'])) {
        if ($mysqli) {
            /* Requête "Select" retourne un jeu de résultats */
            foreach ($mysqli->query("SELECT * from Client WHERE emailClient='" . $_POST['email-connexion'] . "' and motDePasseClient='"
                    . sha1($_POST["password-connexion"]) . "'") as $row) {
                $_SESSION['email'] = $row["emailClient"];
                $_SESSION['id'] = $row["codeClient"];
                $_SESSION['nomClient'] = $row["nomClient"];
                $_SESSION['prenomClient'] = $row["prenomClient"];
            }
            if (isset($_SESSION['id']))
                echo "<script>location='../index.php?reussi=1'</script>";
            else
                echo "<script>location='../index.php?error=0'</script>";
            exit();
        }
    }
}
/* Fin Connexion */

/* Début modification */
if (isset($_GET['modif'])) {
    if (isset($_POST['dateDeNaissanceMod'], $_POST['adresseMod'], $_POST['villeMod'], $_POST['telMod'])) {
        /* Convert ON NULL Checkbox value to 0/1 for DB */
        $news = 0;
        if (isset($_POST['newsletterClient']))
            $news = 1;
        $dateDeNaissance = date('Y-m-d', strtotime($_POST['dateDeNaissanceMod']));
        if ($mysqli->query("UPDATE Client SET `dateNaissanceClient`='" . $dateDeNaissance . "', `adresseClient`='" . $_POST['adresseMod'] . "', `villeClient`='" . $_POST['villeMod'] . "', `telClient`='" . $_POST['telMod'] . "', `newsletterClient`=" . $news . " WHERE codeClient=" . $_SESSION['id']) == TRUE)
            echo "<script>location='../formModifInfoClient.php?reussi=1'</script>";
        else
            echo "<script>location='../formModifInfoClient.php?error=0'</script>";
    }
    exit();
}

// Gestion entree classiques
if (isset($_SESSION['id'])) {
    if (isset($_POST['nat'])) {
        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['DateEntree'])) {

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $age = $_POST['age'];
            $DateEntree = $_POST['DateEntree'];
            $donneesvalides = false;
            for ($i = 0; $i < count($nom); $i++) {
                if (!empty($nom[$i]) && !empty($prenom[$i]) && !empty($age[$i]) && !empty($DateEntree[$i])) {
                    $donneesvalides = true;
                } else
                    echo "<script>location='../FormEntreeClassique.php?err=1'</script>";
            }
            if ($donneesvalides) {
                $reservationInseree = false;
                $idReservation;
                if ($mysqli) {
                    //Creer la reservation : recuperer la derniere cle primaire
                    foreach ($mysqli->query('SELECT CODERESERVATION from RESERVATION order by CODERESERVATION DESC LIMIT 1') as $row) {
                        $idReservation = $row["CODERESERVATION"] + 1;
                    }
                    //Creer la reservation : insertion de l'id et du client
                    if (isset($idReservation)) {
                        $idClient = $_SESSION['id'];
                        $qry = "insert into RESERVATION (CODERESERVATION, CODECLIENT,ANNULABLE) values ($idReservation, $idClient ,0)";
                        if ($mysqli->query($qry) === FALSE) {
                            //Erreur lors de la création
                            echo "<script>location='../FormEntreeClassique.php?err=2'</script>";
                            exit;
                        } else
                            $reservationInseree = true;
                    }
                }
                if ($reservationInseree) {
                    $prixTotal = 0;
                    for ($i = 0; $i < count($nom); $i++) {

                        if ($mysqli) {
                            //recuperer le prix
                            $idprix;
                            $prix;
                            $idEntreeVisiteur;
                            foreach ($mysqli->query('SELECT * from PRIX where ACTIVITE=0 and ' . $age[$i] . ' >= AGEMINPRIX and ' . $age[$i] . ' < AGEMAXPRIX') as $row) {
                                $idprix = $row["CODEPRIX"];
                                $prix = $row["PRIX"];
                            }
                            if (isset($idprix)) {
                                //Isertion de l'entree visiteur : recuperer le derniere cle primaire
                                foreach ($mysqli->query('SELECT CODEENTREEVISITEUR from ENTREEVISITEUR order by CODEENTREEVISITEUR DESC LIMIT 1') as $row) {
                                    $idEntreeVisiteur = $row["CODEENTREEVISITEUR"] + 1;
                                }
                                //Isertion de l'entree visiteur
                                if (isset($idEntreeVisiteur)) {
                                    $qry = "INSERT INTO ENTREEVISITEUR (CODEENTREEVISITEUR, CODERESERVATION, CODEPRIX, NOMVISITEUR, AGEVISITEUR, DATEENTREE) VALUES (";
                                    $qry = $qry . "'$idEntreeVisiteur',";
                                    $qry = $qry . "'$idReservation',";
                                    $qry = $qry . "'$idprix',";
                                    $nomPrenom = $nom[$i] . " " . $prenom[$i];
                                    $qry = $qry . "'$nomPrenom',";
                                    $qry = $qry . "'$age[$i]',";
                                    $qry = $qry . "'$DateEntree[$i]'";
                                    $qry = $qry . ")";
                                    $prixTotal = $prixTotal + $prix;
                                    if ($mysqli->query($qry) === FALSE) {
                                        //Erreur lors de la création
                                        echo "<script>location='../FormEntreeClassique.php?err=2'</script>";
                                        exit;
                                    }
                                } else
                                    echo "<script>location='../FormEntreeClassique.php?err=3'</script>";
                            } else
                                echo "<script>location='../FormEntreeClassique.php?err=4prix'</script>";
                        }
                    }
                    echo "<script>location='../FormEntreeClassique.php?prix=$prixTotal'</script>";
                }
            }
        } else
            echo "<script>location='../FormEntreeClassique.php?err=1'</script>";
    }

//Supression de reservation
    if (isset($_POST['cr'])) {
        if ($mysqli) {
            $qry = 'Delete from RESERVATION where CODERESERVATION=' . $_POST['cr'];
            if ($mysqli->query($qry) === TRUE)
                echo "<script>location='../panier.php'</script>";
        }
    }
} else
    echo "<script>location='../FormEntreeClassique.php?err=0'</script>";


//VALIDATION RESERVATION
if (isset($_POST['MP'])) {
    if ($mysqli) {
        $idReduction = 1;
        foreach ($mysqli->query("Select * from REDUCTION where CODEPROMO='" . $_POST["codePromo"] . "';") as $row) {
            $preduction = $row["POURCENTAGEPROMO"];
            $idReduction = $row["CODEREDUC"];
        }

        $totalAPayer = 0;
        foreach ($mysqli->query("CALL calculPrix(" . $_SESSION['id'] . ") ") as $row)
            $totalAPayer += $row['prixTotal'];

        $reduction = $totalAPayer * $preduction;
        $totalAPayer = $totalAPayer - $reduction;
        $now = date('Y-m-d H:i:s');
        $qry = "update RESERVATION set CODEREDUC=" . $idReduction . ", MOYENPAYEMENT ='" . $_POST["MP"] . "',DATEOPERATION='" . $now . "', TOTALPAYE=" . $totalAPayer . " Where ";
        $qry = $qry . "CODERESERVATION =" . $_POST["creduc"];
        echo $qry;
        if ($mysqli->query($qry) === TRUE){
            echo "<script>location='../mesReservations.php'</script>";
        }

        
    }
}

/* Début suppresion compte */
if (isset($_GET['supp'])) {
    if ($mysqli) {
        $qry = 'Delete from Client where codeClient=' . $_SESSION['id'];
        if ($mysqli->query($qry) === TRUE)
            echo "<script>location='connexion.php?stateCo=lhayat'</script>";
    }
}
if (isset($_POST['priceEntree'])) {
    if (isset($_POST['modif0'], $_POST['modif1'], $_POST['modif2'], $_POST['modif3'])) {
        $codePrix = $_POST['modif0'];
        $ageMinPrix = $_POST['modif1'];
        $ageMaxPrix = $_POST['modif2'];
        $prix = $_POST['modif3'];
        $numRowsUpd = $_POST['cl'];
        $donneesvalides = false;
        for ($i = 0; $i < count($codePrix); $i++) {
            if (!empty($codePrix[$i]) && !empty($ageMinPrix[$i]) && !empty($ageMaxPrix[$i]) && !empty($prix[$i]))
                $donneesvalides = true;
            else
                echo "<script>location='../adminPrice.php?error=1'</script>";
        }
        if ($donneesvalides) {
            for ($i = 0; $i < $numRowsUpd; $i++) {
                if ($mysqli) {
                    $qry = 'UPDATE PRIX SET CODEPRIX=' . $codePrix[$i] . ',AGEMINPRIX=' . $ageMinPrix[$i] . ', AGEMAXPRIX=' . $ageMaxPrix[$i] . ', PRIX=' . $prix[$i] . ' where CODEPRIX=' . $codePrix[$i];
                    if ($mysqli->query($qry) === FALSE) {
                        //Erreur lors de la création
                        echo "<script>location='../adminPrice.php?error=2'</script>";
                        exit;
                    }
                }
            }

            if (isset($numRowsUpd)) {
                $qry = "INSERT INTO PRIX (CODEPRIX, AGEMINPRIX, AGEMAXPRIX, PRIX) VALUES (";
                for ($i = $numRowsUpd; $i < count($codePrix); $i++) {
                    $qry = $qry . "'$codePrix[$i]',";
                    $qry = $qry . "'$ageMinPrix[$i]',";
                    $qry = $qry . "'$ageMaxPrix[$i]',";
                    $qry = $qry . "'$prix[$i]')";

                    if ($mysqli->query($qry) === FALSE) {
                        echo "<script>location='../adminPrice.php?error=3'</script>";
                    } else
                        echo "<script>location='../adminPrice.php?reussi=2'</script>";
                }
            }
        }
    }
}
?>