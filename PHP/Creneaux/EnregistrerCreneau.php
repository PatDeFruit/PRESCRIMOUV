<?php

	include("../../BDD/connexionBDD.php");
		
	$jour=$_POST['jour'];
	$heureDeb=$_POST['heureDeb'];
	$heureFin=$_POST['heureFin'];
	
	echo $jour;
	echo $heureDeb;
	echo $heureFin;
	
	$query=$bdd->prepare('INSERT INTO creneaux(jour_creneau, heure_creneau_debut, heure_creneau_fin) VALUES (:jour,:heureDeb,:heureFin)');
	$query->bindValue(':jour',$jour,PDO::PARAM_STR);
	$query->bindValue(':heureDeb',$heureDeb,PDO::PARAM_STR);
	$query->bindValue(':heureFin',$heureFin,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Creneaux/ListeCreneau.php');
?>