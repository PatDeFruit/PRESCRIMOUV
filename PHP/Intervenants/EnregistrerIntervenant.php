<?php

	include("../../BDD/connexionBDD.php");
		
	$nom=$_POST['nom'];
	$nom = strtoupper($nom);
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$idDiplome=$_POST['diplome'];
	$cartePro=$_POST['cartePro'];
	
	$query=$bdd->prepare('INSERT INTO intervenants(nom_intervenant, prenom_intervenant, email_intervenant, tel_intervenant, id_diplome, cartePro) VALUES (:nom,:prenom,:email,:tel, :idDiplome, :cartePro)');
	$query->bindValue(':nom',$nom,PDO::PARAM_STR);
	$query->bindValue(':prenom',$prenom,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	$query->bindValue(':idDiplome',$idDiplome,PDO::PARAM_STR);
	$query->bindValue(':cartePro',$cartePro,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Intervenants/ListeIntervenant.php');
?>