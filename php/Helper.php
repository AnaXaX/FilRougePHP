<?php
require_once('hostix.php');

if (!isset($_SESSION))
    session_start();

/* selectionner les valeurs clients from table en stockant dans un tableau (variable $clt)*/

    $clt = array();
    if (isset($_SESSION['id'])) {
        if ($mysqli) {
            foreach ($mysqli->query("SELECT * FROM Client WHERE codeClient=" . $_SESSION['id']) as $row) {
                $clt=$row;
            }
        }
    }

    $panier=array();
    
    if (isset($_SESSION['id'])) {
        if ($mysqli) {
            foreach ($mysqli->query("SELECT * FROM RESERVATION WHERE CODECLIENT=" . $_SESSION['id']." and TOTALPAYE is NULL") as $row) {
                $panier[]=$row;
            }
        }
    }
?>
