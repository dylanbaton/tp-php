<?php

require_once ('bdd.php');

$nom='Dupont';
$prenom='Andrea';
$query="INSERT INTO famille_tbl(Nom, prenom) VALUES('$nom','$prenom')";

$execution=$bdd->exec($query);

?>

