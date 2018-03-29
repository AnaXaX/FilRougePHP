<?php

require_once('hostix.php');

if (!isset($_SESSION))
    session_start();

/* selectionner les valeurs clients from table en stockant dans un tableau (variable $clt) */

$clt = array();
if (isset($_SESSION['id'])) {
    if ($mysqli) {
        foreach ($mysqli->query("SELECT * FROM Client WHERE codeClient=" . $_SESSION['id']) as $row) {
            $clt = $row;
        }
    }
}

$panier = array();

if (isset($_SESSION['id'])) {
    if ($mysqli) {
        foreach ($mysqli->query("SELECT r.CODERESERVATION,ev.CODEENTREEVISITEUR, ev.CODEPRIX, ev.NOMVISITEUR, ev.AGEVISITEUR,a.LIBELLEACTIVITE,(Select px.PRIX FROM PRIX px WHERE px.CODEPRIX=ev.CODEPRIX ) as prixEV, (Select px.PRIX FROM PRIX px WHERE px.CODEPRIX=a.CODEPRIX ) as prixA, ev.DATEENTREE
            FROM RESERVATION r
            RIGHT JOIN ENTREEVISITEUR ev on ev.CODERESERVATION = r.CODERESERVATION
            LEFT JOIN  BRACELET b on b.CODEENTREEVISITEUR=ev.CODEENTREEVISITEUR
            LEFT JOIN  ACTIVITE a on a.CODEACTIVITE=b.CODEACTIVITE
            where r.CODECLIENT=" . $_SESSION['id'] . " and r.TOTALPAYE is NULL") as $row) {
            $panier[] = $row;
        }
    }
}
if (isset($_SESSION['id'])) {
    if ($mysqli) {
        foreach ($mysqli->query("SELECT r.CODERESERVATION,ev.CODEENTREEVISITEUR, ev.CODEPRIX, ev.NOMVISITEUR, ev.AGEVISITEUR,a.LIBELLEACTIVITE,(Select px.PRIX FROM PRIX px WHERE px.CODEPRIX=ev.CODEPRIX ) as prixEV, (Select px.PRIX FROM PRIX px WHERE px.CODEPRIX=a.CODEPRIX ) as prixA, ev.DATEENTREE
            FROM RESERVATION r
            RIGHT JOIN ENTREEVISITEUR ev on ev.CODERESERVATION = r.CODERESERVATION
            LEFT JOIN  BRACELET b on b.CODEENTREEVISITEUR=ev.CODEENTREEVISITEUR
            LEFT JOIN  ACTIVITE a on a.CODEACTIVITE=b.CODEACTIVITE
            where r.CODECLIENT=" . $_SESSION['id'] . " and r.TOTALPAYE IS NOT NULL") as $row) {
            $reservations[] = $row;
        }
    }
}
?>
