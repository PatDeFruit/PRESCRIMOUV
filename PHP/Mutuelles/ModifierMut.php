<?php

	include("../../BDD/connexionBDD.php");
	
	$idMutuelle = $_POST['idMutuelle']; 	
	$nomMutuelle=$_POST['firstname'];
	$adresse=$_POST['adresseMedecin'];
	$CP=$_POST['city'];
	$ville=$_POST['state'];
	$email=$_POST['email'];
	$tel=$_POST['phone'];
	
	if($adresse==""){
		$adresse=null;
	}
	
	if($CP==""){
		$CP=null;
	}
	
	if($ville==""){
		$ville=null;
	}
	
	if($tel==""){
		$tel=null;
	}

	
	$query=$bdd->prepare('UPDATE mutuelles SET nom_mutuelle=:nomMut,adresse_mutuelle=:adresse,CP_mutuelle=:CP,ville_mutuelle=:ville,email_mutuelle=:email,tel_mutuelle=:tel WHERE id_mutuelle=:idMut');
	$query->bindValue(':nomMut',$nomMutuelle,PDO::PARAM_STR);
	$query->bindValue(':adresse',$adresse,PDO::PARAM_STR);
	$query->bindValue(':CP',$CP,PDO::PARAM_STR);
	$query->bindValue(':ville',$ville,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	$query->bindValue(':idMut',$idMutuelle,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Mutuelles/ListeMutuelle.php');
?>