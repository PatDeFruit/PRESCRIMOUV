<?php

	include("../../BDD/connexionBDD.php");
		
	$idMedecin = $_POST['idMedecin']; 	
	$nomMed=$_POST['firstname'];
	$prenomMed=$_POST['lastname'];
	$numAdeli=$_POST['numAdeli'];
	$adresse=$_POST['adresseMedecin'];
	$CP=$_POST['city'];
	$ville=$_POST['state'];
	$tel=$_POST['phone'];
	$email=$_POST['email'];
	
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
	
	$query=$bdd->prepare('UPDATE medecins SET nom_medecin=:nomMed,prenom_medecin=:prenomMed,num_adeli=:numAdeli,adresse_medecin=:adresse,CP_medecin=:CP,ville_medecin=:ville,email_medecin=:email,tel_medecin=:tel WHERE id_medecin=:idMed');
	$query->bindValue(':nomMed',$nomMed,PDO::PARAM_STR);
	$query->bindValue(':prenomMed',$prenomMed,PDO::PARAM_STR);
	$query->bindValue(':numAdeli',$numAdeli,PDO::PARAM_STR);
	$query->bindValue(':adresse',$adresse,PDO::PARAM_STR);
	$query->bindValue(':CP',$CP,PDO::PARAM_STR);
	$query->bindValue(':ville',$ville,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	$query->bindValue(':idMed',$idMedecin,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Medecins/ListeMedecin.php');
?>