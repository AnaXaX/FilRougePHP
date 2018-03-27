<?php
    #Connexion shit
    $host = 'zoopark.fr' ;   
    $user = 'u142208db1' ;
    $bdd = 'u142208db1' ;
    $password  = 'xperia33110' ;
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