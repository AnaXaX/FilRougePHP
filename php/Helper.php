<?php

require_once('hostix.php');
if (!isset($_SESSION)) {
    session_start();
}
/* selectionner les valeurs clients from table en stockant dans un tableau (variable $clt)*/

    $clt = array();
    if (isset($_SESSION['id'])) {
        if ($mysqli) {
            foreach ($mysqli->query("SELECT * FROM Client WHERE codeClient=" . $_SESSION['id']) as $row) {
                $clt['email'] = $row["emailClient"];
                $clt['nomClient'] = $row["nomClient"];
                $clt['prenomClient'] = $row["prenomClient"];
                $clt['dateNaissanceClient'] = $row["dateNaissanceClient"];
                $clt['AdresseClient'] = $row["AdresseClient"];
                $clt['villeClient'] = $row["villeClient"];
                $clt['telClient'] = $row["telClient"];
                $clt['newsletterClient'] = $row["newsletterClient"];
            }
        }
    }
  
?>