<?php

	include("../../BDD/connexionBDD.php");
		
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
	
	
	$query=$bdd->prepare('INSERT INTO mutuelles(nom_mutuelle,adresse_mutuelle,CP_mutuelle,ville_mutuelle,email_mutuelle,tel_mutuelle) VALUES (:nomMutuelle,:adresse,:CP,:ville,:email,:tel)');
	$query->bindValue(':nomMutuelle',$nomMutuelle,PDO::PARAM_STR);
	$query->bindValue(':adresse',$adresse,PDO::PARAM_STR);
	$query->bindValue(':CP',$CP,PDO::PARAM_STR);
	$query->bindValue(':ville',$ville,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Mutuelles/ListeMutuelle.php');
?>