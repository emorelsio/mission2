<?php

header('Content-Type: application/json');
include("db_connect.php");


$request = $conn->prepare("SELECT * FROM recherche");
$request->execute();

$resultat = $request->fetchAll();

$retour["message"] = "Voici votre recherche";
$retour["resultats"]["recherche"] = $resultat;

echo json_encode($retour);

?>
