<?php

	include("../../BDD/connexionBDD.php");
		
	$nom=$_POST['nom'];
	$adresse=$_POST['adresse'];
	$CP=$_POST['CP'];
	$ville=$_POST['ville'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];
	$typeCentre=$_POST['typeCentre'];
	
	$query=$bdd->prepare('INSERT INTO centres(nom_centre, adresse_centre, CP_centre, ville_centre, tel_centre, email_centre, type_centre) VALUES (:nom,:adresse,:CP,:ville,:tel,:email,:typeCentre)');
	$query->bindValue(':nom',$nom,PDO::PARAM_STR);
	$query->bindValue(':adresse',$adresse,PDO::PARAM_STR);
	$query->bindValue(':CP',$CP,PDO::PARAM_STR);
	$query->bindValue(':ville',$ville,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':typeCentre',$typeCentre,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Centres/ListeCentre.php');
?>