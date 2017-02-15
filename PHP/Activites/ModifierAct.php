<?php

	include("../../BDD/connexionBDD.php");
	
	$idAct = $_POST['idActivite']; 	
	$activite=$_POST['activite'];
	$typeActivite=$_POST['typeActivite'];

	
	$query=$bdd->prepare('UPDATE activites SET activite=:activite, type_activite=:typeActivite WHERE id_activite=:idAct');
	$query->bindValue(':activite',$activite,PDO::PARAM_STR);
	$query->bindValue(':typeActivite',$typeActivite,PDO::PARAM_STR);
	$query->bindValue(':idAct',$idAct,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Activites/ListeActivite.php');
?>