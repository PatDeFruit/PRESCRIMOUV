<?php

	include("../../BDD/connexionBDD.php");
		
	$nomMed=$_POST['firstname'];
	$nomMed = strtoupper($nomMed);
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
	
	echo $nomMed;
	echo $prenomMed;
	echo $numAdeli;
	echo $adresse;
	echo $CP;
	echo $ville;
	echo $tel;
	echo $email;
	
	$query=$bdd->prepare('INSERT INTO medecins(nom_medecin,prenom_medecin,num_adeli,adresse_medecin,CP_medecin,ville_medecin,email_medecin,tel_medecin) VALUES (:nomMed,:prenomMed,:numAdeli,:adresse,:CP,:ville,:email,:tel)');
	$query->bindValue(':nomMed',$nomMed,PDO::PARAM_STR);
	$query->bindValue(':prenomMed',$prenomMed,PDO::PARAM_STR);
	$query->bindValue(':numAdeli',$numAdeli,PDO::PARAM_STR);
	$query->bindValue(':adresse',$adresse,PDO::PARAM_STR);
	$query->bindValue(':CP',$CP,PDO::PARAM_STR);
	$query->bindValue(':ville',$ville,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Medecins/ListeMedecin.php');
?>