<?php
include 'conection.php';
$ligneTest = $bdd->query('SELECT * FROM `Catégories` ');
$test = $ligneTest->fetchAll(PDO::FETCH_COLUMN, 1);
foreach($test as $tests['NomCatégorie']) {
}
echo json_encode($test);