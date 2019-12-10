<?php

header('Content-Type: application/json');
include("db_connect.php");


function requestCommune($departement)
{
    $resultat = [];
    $bdd = connect();

    $sql = "SELECT DISTINCT commune FROM recherche WHERE identifiant LIKE '$departement%' ORDER BY commune";
    //var_dump($sql);
    $state = $bdd->query($sql);
    $i = 0;
    while($row = $state->fetch()) {
        $resultat[$i] = (array)$row;
        $i++;
    }

return $resultat;
}

$var = requestCommune(77);
