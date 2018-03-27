<?php

ob_start();
require_once('hostix.php');
if (!isset($_SESSION)) {
    session_start();
}
// verif isset
if (isset($_POST['name-register'], $_POST['pname-register'], $_POST['email-register'], $_POST['password-register'])) {
    // verif si les variables ne sont pas vides
    if (!empty($_POST['name-register']) && !empty($_POST['pname-register']) && !empty($_POST['email-register']) && !empty($_POST['password-register'])) {
        //Verif que le mot de passe comporte 6 caractères
        if (strlen($_POST['password-register']) >= 6) {
            if ($mysqli) {
                if ($result = $mysqli->query("SELECT codeClient from Client order by codeClient DESC LIMIT 1")) {
                    $finfo = $result->fetch_fields();
                    if ($result->num_rows == 1) {
                        foreach ($finfo as $val) {
                            $row = $result->fetch_array(MYSQLI_ASSOC);
                            $codeClient = $row["codeClient"] + 1;
                        }
                        $result->close();
                    }
                }
                $qry = "Insert into Client (codeClient,nomClient,prenomClient,emailClient,motDePasseClient) values (";
                $qry = $qry . " '" . $codeClient . "',";
                $qry = $qry . " '" . $_POST['name-register'] . "',";
                $qry = $qry . " '" . $_POST['pname-register'] . "',";
                $qry = $qry . " '" . $_POST['email-register'] . "',";
                $qry = $qry . " '" . sha1($_POST['password-register']) . "')";
                if ($mysqli->query($qry) === TRUE) {
                    //printf("Compte créé avec succès.\n");

                    foreach ($mysqli->query("SELECT * from Client WHERE emailClient='" . $_POST['email-register'] . "' and motDePasseClient='" . sha1($_POST['password-register']) . "'") as $row) {
                        $_SESSION['email'] = $row["emailClient"];
                        $_SESSION['id'] = $row["codeClient"];
                        $_SESSION['nomClient'] = $row["nomClient"];
                        $_SESSION['prenomClient'] = $row["prenomClient"];
                        //session_write_close();
                    }
                    echo "<script type='text/javascript'>window.top.location='../index.php?reussi=1';</script>";
                    exit;
                } else {
                    echo "<script type='text/javascript'>window.top.location='../index.php?error=0';</script>";
                    exit;
                }
            }
        }
    }
}
ob_end_flush();
?>