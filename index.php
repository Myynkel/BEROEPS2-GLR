<?php
require("config.php");

$queryNieuw = $conn->prepare("SELECT * FROM `Recepten` WHERE receptCategorie = 'Nieuwe Recepten' ");
$queryNieuw->execute();
$resultatenNieuw = $queryNieuw->fetchAll(PDO::FETCH_ASSOC);

$queryOntbijt = $conn->prepare("SELECT * FROM `Recepten` WHERE receptCategorie = 'Ontbijt'");
$queryOntbijt->execute();
$resultatenOntbijt = $queryOntbijt->fetchAll(PDO::FETCH_ASSOC);

$queryLunch = $conn->prepare("SELECT * FROM `Recepten` WHERE receptCategorie = 'Lunch'");
$queryLunch->execute();
$resultatenLunch = $queryLunch->fetchAll(PDO::FETCH_ASSOC);

$queryDinner = $conn->prepare("SELECT * FROM `Recepten` WHERE receptCategorie = 'Dinner'");
$queryDinner->execute();
$resultatenDinner = $queryDinner->fetchAll(PDO::FETCH_ASSOC);



include 'index_view.php';