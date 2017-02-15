<?php

	include("../../BDD/connexionBDD.php");
		
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	
	$query=$bdd->prepare('INSERT INTO intervenants(nom_intervenant, prenom_intervenant, email_intervenant, tel_intervenant) VALUES (:nom,:prenom,:email,:tel)');
	$query->bindValue(':nom',$nom,PDO::PARAM_STR);
	$query->bindValue(':prenom',$prenom,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Intervenants/ListeIntervenant.php');
?>