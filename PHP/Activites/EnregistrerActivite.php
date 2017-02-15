<?php

	include("../../BDD/connexionBDD.php");
		
	$activite=$_POST['activite'];
	$typeActivite=$_POST['typeActivite'];
	
	$query=$bdd->prepare('INSERT INTO activites(activite,type_activite) VALUES (:activite,:typeActivite)');
	$query->bindValue(':activite',$activite,PDO::PARAM_STR);
	$query->bindValue(':typeActivite',$typeActivite,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Activites/ListeActivite.php');
?>