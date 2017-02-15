<?php

	include("../../BDD/connexionBDD.php");
		
	$idCreneau = $_POST['idCreneau']; 	
	$jour=$_POST['jour'];
	$heureDeb=$_POST['heureDeb'];
	$heureFin=$_POST['heureFin'];
	
	$query=$bdd->prepare('UPDATE creneaux SET jour_creneau=:jour,heure_creneau_debut=:heureDeb,heure_creneau_fin=:heureFin WHERE id_creneau=:idCreneau');
	$query->bindValue(':jour',$jour,PDO::PARAM_STR);
	$query->bindValue(':heureDeb',$heureDeb,PDO::PARAM_STR);
	$query->bindValue(':heureFin',$heureFin,PDO::PARAM_STR);
	$query->bindValue(':idCreneau',$idCreneau,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Creneaux/ListeCreneau.php');
?>