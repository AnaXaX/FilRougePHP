<?php
    #Connexion shit
    $host = 'localhost' ;   
    $user = 'root' ;
    $bdd = 'zoopark' ;
    $password  = 'root' ;
    $mysqli = new mysqli($host, $user, $password, $bdd);
	if (!isset($_SESSION)) {
      session_start();
    }
    /* Vérification de la connexion */
    if ($mysqli->connect_errno) {
        printf("Échec de la connexion : %s\n", $mysqli->connect_error);
        exit();
    }
?>