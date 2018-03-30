<?php

if ($mysqli):
    //Creation d'un nouveau id bracelet

    $idBracelet;

    foreach ($mysqli->query("SELECT CODEBRACELET from BRACELET order by CODEBRACELET DESC LIMIT 1") as $b) {
        $idBracelet = $b["CODEBRACELET"] + 1;
    }

    echo $idBracelet;
    //Creation du bracelet
    
    if ($activiteVisiteur["TYPEACTIVITE"] == "Atelier") {
        $couleur = "Vert";
    } else if ($activiteVisiteur["TYPEACTIVITE"] == "Spectacle") {
        $couleur = "Rouge";
    } else
        $couleur = "Jaune";
    echo $couleur;
    $now = date('Y-m-d H:i:s');
    $qry = "INSERT INTO BRACELET VALUES (" . $idBracelet . ",'" . $now . "','" . $activiteVisiteur["TYPEACTIVITE"] . "','" . $activiteVisiteur["DATEDEBUTACTIVITE"] . "','" . $activiteVisiteur["DATEFINACTIVITE"] . "','" . $couleur . "'," . $activiteVisiteur["CODEACTIVITE"] . "," . $visiteurActivite["CODEENTREEVISITEUR"] . ")";
    echo $qry;
    if ($mysqli->query($qry) === TRUE) {
        echo "<script>location='panier.php'</script>";
    } else {
        echo "Erreur";
    }
endif;
?>

