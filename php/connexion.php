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

    if (isset($_POST['nat']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['DateEntree'])) {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $DateEntree = $_POST['DateEntree'];
        $donneesvalides = false;
        for ($i = 0; $i < count($nom); $i++) {
            if (!empty($nom[$i]) && !empty($prenom[$i]) && !empty($age[$i]) && !empty($DateEntree[$i])) {
                $donneesvalides = true;
            } else {
                echo "<script>location='../FormEntreeClassique.php?err=1'</script>";
            }
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
                    }else
                        $reservationInseree = true;        
                }
            }
            if ($reservationInseree) {
                $prixTotal=0;
                for ($i = 0; $i < count($nom); $i++) {

                    if ($mysqli) {
                        //recuperer le prix
                        $idprix;
                        $prix;
                        $idEntreeVisiteur;
                        foreach ($mysqli->query('SELECT * from PRIX where ACTIVITE=0 and '.$age[$i].' >= AGEMINPRIX and '.$age[$i].' < AGEMAXPRIX') as $row) {
                                $idprix = $row["CODEPRIX"];
                                $prix = $row["PRIX"];
                        }
                        if (isset($idprix)) {
                            //Isertion de l'entree visiteur : recuperer le derniere cle primaire
                            foreach ($mysqli->query('SELECT CODEENTREEVISITEUR from ENTREEVISITEUR order by CODEENTREEVISITEUR DESC LIMIT 1') as $row) {
                                $idEntreeVisiteur = $row["CODEENTREEVISITEUR"] + 1;
                            }
                            //Isertion de l'entree visiteur
                            if (isset($idEntreeVisiteur)){
                                $qry = "INSERT INTO ENTREEVISITEUR (CODEENTREEVISITEUR, CODERESERVATION, CODEPRIX, NOMVISITEUR, AGEVISITEUR, DATEENTREE) VALUES (";
                                $qry = $qry."'$idEntreeVisiteur',";
                                $qry = $qry."'$idReservation',";
                                $qry = $qry."'$idprix',";
                                $nomPrenom=$nom[$i]." ".$prenom[$i];
                                $qry = $qry."'$nomPrenom',";
                                $qry = $qry."'$age[$i]',";
                                $qry = $qry."'$DateEntree[$i]'";
                                $qry = $qry.")";
                                $prixTotal=$prixTotal+$prix;
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
} else 
    echo "<script>location='../FormEntreeClassique.php?err=0'</script>";
?>
