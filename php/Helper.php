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
if (isset($_SESSION['id'])) {
    if ($mysqli) {
        foreach ($mysqli->query("SELECT CODERESERVATION FROM RESERVATION 
            where CODECLIENT=" . $_SESSION['id'] . " and TOTALPAYE IS NULL") as $row) {
            $reservationsNp[] = $row;
        }
    }
}
if (isset($_SESSION['id'], $_POST["reservation"])) {
    if ($mysqli) {
        foreach ($mysqli->query("SELECT * FROM ENTREEVISITEUR 
            where CODERESERVATION=" . $_POST["reservation"]) as $row) {
            $visiteur[] = $row;
        }
    }
}
if (isset($_SESSION['id'], $_POST["visiteur"], $_GET["id"])) {
    if ($mysqli) {
        foreach ($mysqli->query("Select * from ENTREEVISITEUR where CODEENTREEVISITEUR=" . $_POST["visiteur"]) as $row) {
            $visiteurActivite = $row;
        }
        foreach ($mysqli->query("Select * from ACTIVITE where CODEACTIVITE=" . $_GET["id"]) as $row) {
            $activiteVisiteur = $row;
        }
    }
}

if ($mysqli && !isset($_GET["id"])) {
    foreach ($mysqli->query("Select *,DATEDIFF(CURRENT_DATE,DATEFINACTIVITE)as DIFF, PRIX.PRIX As PRIX,DATE_FORMAT(DATEDEBUTACTIVITE, '%d/%m/%Y') as Du,DATE_FORMAT(DATEFINACTIVITE, '%d/%m/%Y') as Au from ACTIVITE inner join PRIX on ACTIVITE.CODEPRIX=PRIX.CODEPRIX order by DATEFINACTIVITE desc") as $row) {
        $activites[] = $row;
    }
}
?>
