<?php
//ob_start();
require_once('hostix.php');
if (!isset($_SESSION)) {
    session_start();
}
/*Déconnexion*/
if (isset($_GET['stateCo'])) {
    unset($_SESSION['email'], $_SESSION['id']);
    ob_end_flush();
    echo "<script>location='../index.php'</script>";
    exit();
}
/*Fin Déconnexion*/

if (isset($_GET['log'])) {
if (isset($_POST['email-connexion'], $_POST['password-connexion'])) {
        if ($mysqli){
            /* Requête "Select" retourne un jeu de résultats */
            foreach ($mysqli->query("SELECT * from Client WHERE emailClient='" . $_POST['email-connexion'] . "' and motDePasseClient='"
                    . sha1($_POST["password-connexion"]) . "'") as $row) {
                $_SESSION['email'] = $row["emailClient"];
                $_SESSION['id'] = $row["codeClient"];
                $_SESSION['nomClient'] = $row["nomClient"];
                $_SESSION['prenomClient'] = $row["prenomClient"];
            }
            if(isset($_SESSION['id']))
                echo "<script>location='../index.php?reussi=1'</script>";
            else
                echo "<script>location='../index.php?error=0'</script>";
            exit();
        }
    }
}
/*Fin Connexion*/

/*Début modification*/
if (isset($_GET['modif'])){
    if (isset($_POST['dateDeNaissanceMod'], $_POST['adresseMod'], $_POST['villeMod'], $_POST['telMod'])) {
        /*Convert ON NULL Checkbox value to 0/1 for DB*/
        $news=0;
        if(isset($_POST['newsletterClient']))
            $news=1;
        $dateDeNaissance=date('Y-m-d', strtotime($_POST['dateDeNaissanceMod']));
       if ($mysqli->query("UPDATE Client SET `dateNaissanceClient`='".$dateDeNaissance."', `adresseClient`='".$_POST['adresseMod']."', `villeClient`='".$_POST['villeMod']."', `telClient`='".$_POST['telMod']."', `newsletterClient`=".$news." WHERE codeClient=".$_SESSION['id'])==TRUE)
           echo "<script>location='../formModifInfoClient.php?reussi=1'</script>";
        else
            echo "<script>location='../formModifInfoClient.php?error=0'</script>";   
    }
    exit();
  
}

if (isset($_POST['nat'])) {
    
        $name_array = $_POST['nom'];
    for ($i = 0; $i < count($name_array); $i++) {
        $name = $name_array[$i];
        echo "<br>".$name;
    } 
}


?>
