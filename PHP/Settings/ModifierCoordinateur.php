<?php

	include("../../BDD/connexionBDD.php");
	
	$idCoordinateur = $_POST['idCoordinateur']; 	
	$nom=$_POST['nom'];
	$nom=strtoupper($nom);
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$pswd=$_POST['password'];
	
	echo $idCoordinateur;
	echo $nom;
	echo $prenom;
	echo $email;
	echo $tel;
	echo $pswd;
	$pswdMD5 = md5($pswd);

	if($pswd==""){
		$query=$bdd->prepare('UPDATE coordinateur SET nom_coordinateur=:nom, prenom_coordinateur=:prenom, email_coordinateur=:email, tel_coordinateur=:tel WHERE id_coordinateur=:idCoordinateur');
	$query->bindValue(':nom',$nom,PDO::PARAM_STR);
	$query->bindValue(':prenom',$prenom,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	$query->bindValue(':idCoordinateur',$idCoordinateur,PDO::PARAM_STR);
	
	$query->execute();
	} else {
		$query=$bdd->prepare('UPDATE coordinateur SET nom_coordinateur=:nom, prenom_coordinateur=:prenom, email_coordinateur=:email, tel_coordinateur=:tel, pswd=:pswd WHERE id_coordinateur=:idCoordinateur');
	$query->bindValue(':nom',$nom,PDO::PARAM_STR);
	$query->bindValue(':prenom',$prenom,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	$query->bindValue(':pswd',$pswdMD5,PDO::PARAM_STR);
	$query->bindValue(':idCoordinateur',$idCoordinateur,PDO::PARAM_STR);
	
	$query->execute();
	}
	
	
	

	header('Location: http://localhost/prescrimouv/PHP/Settings/ListeCoordinateur.php');
?>