<?php

	include("../../BDD/connexionBDD.php");
	
	$idInt=$_POST['idIntervenant'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$idDiplome = $_POST['diplome2'];       
	$cartePro=$_POST['cartePro'];

	echo $idInt;
	echo $nom;
	echo $prenom;
	echo $email;
	echo $tel;
	
	$query=$bdd->prepare('UPDATE intervenants SET nom_intervenant=:nom,prenom_intervenant=:prenom,email_intervenant=:email,tel_intervenant=:tel, id_diplome=:idDiplome, cartePro=:cartePro WHERE id_intervenant=:idInt');
	$query->bindValue(':nom',$nom,PDO::PARAM_STR);
	$query->bindValue(':prenom',$prenom,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	$query->bindValue(':idInt',$idInt,PDO::PARAM_STR);
	$query->bindValue(':idDiplome',$idDiplome,PDO::PARAM_STR);
	$query->bindValue(':cartePro',$cartePro,PDO::PARAM_STR);
	
	$query->execute();
	

	header('Location: http://localhost/prescrimouv/PHP/Intervenants/ListeIntervenant.php');
?>