<?php
require '../config.php';

$recepten_naam = 'Nieuw Recept';
$ingredienten  = ['Zout','Peper','Olijfolie'];
$sql_recept = 'INSERT into Recepten (ReceptNaam) VALUES(:naam)';



