<?php

	include("../../BDD/connexionBDD.php");
		
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$pswd=$_POST['password'];
	
	echo $nom;
	echo $prenom;
	echo $email;
	echo $tel;
	echo $pswd;
	
	$query=$bdd->prepare('INSERT INTO coordinateur(nom_coordinateur,prenom_coordinateur,email_coordinateur,tel_coordinateur,pswd) VALUES (:nom,:prenom,:email,:tel,:pswd)');
	$query->bindValue(':nom',$nom,PDO::PARAM_STR);
	$query->bindValue(':prenom',$prenom,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	$query->bindValue(':pswd',$pswd,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Settings/ListeCoordinateur.php');
?>