<?php

	include("../../BDD/connexionBDD.php");
		
	$idCentre = $_POST['idCentre']; 	
	$nom=$_POST['nom'];
	$adresse=$_POST['adresse'];
	$CP=$_POST['CP'];
	$ville=$_POST['ville'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];
	$typeCentre=$_POST['typeCentre'];
	
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
	
	$query=$bdd->prepare('UPDATE centres SET nom_centre=:nomCentre,adresse_centre=:adresse,CP_centre=:CP,ville_centre=:ville,tel_centre=:tel,email_centre=:email, type_centre=:typeCentre WHERE id_centre=:idCentre');
	$query->bindValue(':nomCentre',$nom,PDO::PARAM_STR);
	$query->bindValue(':adresse',$adresse,PDO::PARAM_STR);
	$query->bindValue(':CP',$CP,PDO::PARAM_STR);
	$query->bindValue(':ville',$ville,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':typeCentre',$typeCentre,PDO::PARAM_STR);
	$query->bindValue(':idCentre',$idCentre,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Centres/ListeCentre.php');
?>