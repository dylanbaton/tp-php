<?php

require_once ('bdd.php');



$requete='SELECT * FROM famille_tbl'; // écriture de la requête
$reponse=$bdd->query($requete); // réalisation de la requête

foreach ($reponse as $info) {
	echo "Nom : ".$info['nom']."<br>";
	echo "Prenom : ".$info['prenom']."<br>";
    echo "<br>";
}

?>

