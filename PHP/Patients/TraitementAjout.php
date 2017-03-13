<!DOCTYPE html>
	
	 <?php 
	
	
		//Cette fonction doit être appelée avant tout code html
		session_start();

		//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
		include("../../BDD/variableSession.php");
		include("../../BDD/connexionBDD.php");
		
		?>
<html lang="en">

<head>

    <meta charset="utf-8">
		<META HTTP-EQUIV="Refresh" CONTENT="2;URL=../Accueil.php">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRESCRIMOUV</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/portfolio-item.css" rel="stylesheet">
	<link rel="stylesheet" href="../../CSS/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <?php include("../header.php"); ?> 
<!-- Page Content -->
    <div class="container">
	
	<?php 	
	
				$newNomPatient = $_POST['firstname'];
				$numSS = $_POST['numSS'];
				$newPrenomPatient = $_POST['lastname'];
				$newDateN = $_POST['birthdate'];
				$newSexeP = $_POST['idSexe'];
				$newAdress = $_POST['street'];
				$newCP = $_POST['city'];
				$newVille = $_POST['state'];
				$newTel = $_POST['phone'];
				$newEmail = $_POST['email'];
				$newSitu = $_POST['idSitu'];
				$newEnfant =$_POST['nbEnfant'];
				$newProf = $_POST['profession'];
				$newMed = $_POST['idMed'];
				$newdatePrescription = $_POST['datePre'];
				$newMutuelle = $_POST['idMut'];
				$numAffiliation = $_POST['numAffiliation'];
	
			$query=$bdd->prepare('INSERT INTO patients(nom_patient, prenom_patient, num_SS, sexe_patient, date_naissance, adresse_patient, CP_patient, ville_patient, email_patient, tel_patient, nb_enfant, profession, situation, id_coordinateur, id_statut) VALUES ("'.$newNomPatient.'", "'.$newPrenomPatient.'", "'.$numSS.'", "'.$newSexeP.'", "'.$newDateN.'", "'.$newAdress.'", "'.$newCP.'", "'.$newVille.'", "'.$newEmail.'", "'.$newTel.'", "'.$newEnfant.'", "'.$newProf.'", "'.$newSitu.'", "'.$id.'", "4")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_patient FROM patients WHERE num_SS = "'.$numSS.'"');
			$query->execute();
			$data = $query->fetch();
			$idPatient = $data['id_patient'];
			$query->CloseCursor();
			
			$query=$bdd->prepare('INSERT INTO est_soigne_par(id_medecin, id_patient, date_prescription, ordonnance) VALUES("'.$newMed.'", "'.$idPatient.'", "'.$newdatePrescription.'", "1")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('INSERT INTO est_affilie(id_mutuelle, id_patient, num_affiliation) VALUES("'.$newMutuelle.'", "'.$idPatient.'", "'.$numAffiliation.'")');
			$query->execute();
			$query->CloseCursor();
			
			// Test assis - initial
			$query=$bdd->prepare('INSERT INTO test_assis(idDuPatient, typeEntretien) VALUES("'.$idPatient.'", "0")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_assis FROM test_assis WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="0" ');
			$query->execute();
			$data = $query->fetch();
			$AD1 = $data['id_test_assis'];
			$query->CloseCursor();
			
			//Test assis - final
			$query=$bdd->prepare('INSERT INTO test_assis(idDuPatient, typeEntretien) VALUES("'.$idPatient.'", "1")');
			$query->execute();
			$query->CloseCursor();
			
						$query=$bdd->prepare('SELECT id_test_assis FROM test_assis WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="1" ');
			$query->execute();
			$data = $query->fetch();
			$AD2 = $data['id_test_assis'];
			$query->CloseCursor();
			
			//Test marche - initial
			$query=$bdd->prepare('INSERT INTO test_marche(idDuPatient, typeEntretien) VALUES("'.$idPatient.'", "0")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_marche FROM test_marche WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="0" ');
			$query->execute();
			$data = $query->fetch();
			$M1 = $data['id_test_marche'];
			$query->CloseCursor();
			
			//Test marche - final
			$query=$bdd->prepare('INSERT INTO test_marche(idDuPatient, typeEntretien) VALUES("'.$idPatient.'", "1")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_marche FROM test_marche WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="1" ');
			$query->execute();
			$data = $query->fetch();
			$M2 = $data['id_test_marche'];
			$query->CloseCursor();
			
			//Test WHOQOL - initial
			$query=$bdd->prepare('INSERT INTO whoqol(idDuPatient, typeEntretien) VALUES("'.$idPatient.'", "0")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_whoqol FROM whoqol WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="0" ');
			$query->execute();
			$data = $query->fetch();
			$W1 = $data['id_whoqol'];
			$query->CloseCursor();
			
			//Test WHOQOL - final
			$query=$bdd->prepare('INSERT INTO whoqol(idDuPatient, typeEntretien) VALUES("'.$idPatient.'", "1")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_whoqol FROM whoqol WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="1" ');
			$query->execute();
			$data = $query->fetch();
			$W2 = $data['id_whoqol'];
			$query->CloseCursor();
			
			//Test Equilibre PDYO - initial
			$query=$bdd->prepare('INSERT INTO test_equilibre(idDuPatient, typeEntretien, pied, yeux_ouverts) VALUES("'.$idPatient.'", "0", "0", "0")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_equilibre FROM test_equilibre WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="0" AND pied = "0" AND yeux_ouverts = "0"');
			$query->execute();
			$data = $query->fetch();
			$PDYO1 = $data['id_test_equilibre'];
			$query->CloseCursor();
			
			//Test Equilibre PDYO - final
			$query=$bdd->prepare('INSERT INTO test_equilibre(idDuPatient, typeEntretien, pied, yeux_ouverts) VALUES("'.$idPatient.'", "1", "0", "0")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_equilibre FROM test_equilibre WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="1" AND pied = "0" AND yeux_ouverts = "0"');
			$query->execute();
			$data = $query->fetch();
			$PDYO2 = $data['id_test_equilibre'];
			$query->CloseCursor();
			
			//Test Equilibre PDYF - initial
			$query=$bdd->prepare('INSERT INTO test_equilibre(idDuPatient, typeEntretien, pied, yeux_ouverts) VALUES("'.$idPatient.'", "0", "0", "1")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_equilibre FROM test_equilibre WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="0" AND pied = "0" AND yeux_ouverts = "1"');
			$query->execute();
			$data = $query->fetch();
			$PDYF1 = $data['id_test_equilibre'];
			$query->CloseCursor();
			
			//Test Equilibre PDYF - final
			$query=$bdd->prepare('INSERT INTO test_equilibre(idDuPatient, typeEntretien, pied, yeux_ouverts) VALUES("'.$idPatient.'", "1", "0", "1")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_equilibre FROM test_equilibre WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="1" AND pied = "0" AND yeux_ouverts = "1"');
			$query->execute();
			$data = $query->fetch();
			$PDYF2 = $data['id_test_equilibre'];
			$query->CloseCursor();
			
			//Test Equilibre PGYO - initial
			$query=$bdd->prepare('INSERT INTO test_equilibre(idDuPatient, typeEntretien, pied, yeux_ouverts) VALUES("'.$idPatient.'", "0", "1", "0")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_equilibre FROM test_equilibre WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="0" AND pied = "1" AND yeux_ouverts = "0"');
			$query->execute();
			$data = $query->fetch();
			$PGYO1 = $data['id_test_equilibre'];
			$query->CloseCursor();
			
			//Test Equilibre PGYO - final
			$query=$bdd->prepare('INSERT INTO test_equilibre(idDuPatient, typeEntretien, pied, yeux_ouverts) VALUES("'.$idPatient.'", "1", "1", "0")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_equilibre FROM test_equilibre WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="1" AND pied = "1" AND yeux_ouverts = "0"');
			$query->execute();
			$data = $query->fetch();
			$PGYO2 = $data['id_test_equilibre'];
			$query->CloseCursor();
			
			//Test Equilibre PGYF - initial
			$query=$bdd->prepare('INSERT INTO test_equilibre(idDuPatient, typeEntretien, pied, yeux_ouverts) VALUES("'.$idPatient.'", "0", "1", "1")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_equilibre FROM test_equilibre WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="0" AND pied = "1" AND yeux_ouverts = "1"');
			$query->execute();
			$data = $query->fetch();
			$PGYF1 = $data['id_test_equilibre'];
			$query->CloseCursor();
			
			//Test Equilibre PGYF - final
			$query=$bdd->prepare('INSERT INTO test_equilibre(idDuPatient, typeEntretien, pied, yeux_ouverts) VALUES("'.$idPatient.'", "1", "1", "1")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_equilibre FROM test_equilibre WHERE idDuPatient = "'.$idPatient.'" AND typeEntretien ="1" AND pied = "1" AND yeux_ouverts = "1"');
			$query->execute();
			$data = $query->fetch();
			$PGYF2 = $data['id_test_equilibre'];
			$query->CloseCursor();
			
			
			// Entretien initial 
			$query=$bdd->prepare('INSERT INTO entretiens(id_whoqol, id_test_marche, id_test_assis, id_type_entretien, id_patient) VALUES("'.$W1.'", "'.$M1.'", "'.$AD1.'", "1", "'.$idPatient.'")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_entretien FROM entretiens WHERE id_patient = "'.$idPatient.'" AND id_type_entretien ="1"');
			$query->execute();
			$data = $query->fetch();
			$entretien1 = $data['id_entretien'];
			$query->CloseCursor();
			
			
			// Entretien intermediaire 
			$query=$bdd->prepare('INSERT INTO entretiens(id_type_entretien, id_patient) VALUES("2", "'.$idPatient.'")');
			$query->execute();
			$query->CloseCursor();
			
			
			// Entretien final 
			$query=$bdd->prepare('INSERT INTO entretiens(id_whoqol, id_test_marche, id_test_assis, id_type_entretien, id_patient) VALUES("'.$W2.'", "'.$M2.'", "'.$AD2.'", "3", "'.$idPatient.'")');
			$query->execute();
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_entretien FROM entretiens WHERE id_patient = "'.$idPatient.'" AND id_type_entretien ="3"');
			$query->execute();
			$data = $query->fetch();
			$entretien3 = $data['id_entretien'];
			$query->CloseCursor();
			
			// A pour result Entretien initial 
			$query=$bdd->prepare('INSERT INTO a_pour_result(id_entretien, id_test_equilibre) VALUES("'.$entretien1.'", "'.$PDYO1.'")');
			$query->execute();
			$query->CloseCursor();
			$query=$bdd->prepare('INSERT INTO a_pour_result(id_entretien, id_test_equilibre) VALUES("'.$entretien1.'", "'.$PDYF1.'")');
			$query->execute();
			$query->CloseCursor();
			$query=$bdd->prepare('INSERT INTO a_pour_result(id_entretien, id_test_equilibre) VALUES("'.$entretien1.'", "'.$PGYO1.'")');
			$query->execute();
			$query->CloseCursor();
			$query=$bdd->prepare('INSERT INTO a_pour_result(id_entretien, id_test_equilibre) VALUES("'.$entretien1.'", "'.$PGYF1.'")');
			$query->execute();
			$query->CloseCursor();
			
			// A pour result Entretien initial 
			$query=$bdd->prepare('INSERT INTO a_pour_result(id_entretien, id_test_equilibre) VALUES("'.$entretien3.'", "'.$PDYO1.'")');
			$query->execute();
			$query->CloseCursor();
			$query=$bdd->prepare('INSERT INTO a_pour_result(id_entretien, id_test_equilibre) VALUES("'.$entretien3.'", "'.$PDYF1.'")');
			$query->execute();
			$query->CloseCursor();
			$query=$bdd->prepare('INSERT INTO a_pour_result(id_entretien, id_test_equilibre) VALUES("'.$entretien3.'", "'.$PGYO1.'")');
			$query->execute();
			$query->CloseCursor();
			$query=$bdd->prepare('INSERT INTO a_pour_result(id_entretien, id_test_equilibre) VALUES("'.$entretien3.'", "'.$PGYF1.'")');
			$query->execute();
			$query->CloseCursor();
		
			$query=$bdd->prepare('INSERT INTO stats_perso(id_patient) VALUES("'.$idPatient.'")');
			$query->execute();
			$query->CloseCursor();
			
			
	?>

	
	<?php echo'<center><div class="alert alert-success" role="alert"> Ajout effectué ! </div></center>';
	
	?>
	
	</div>
	</body>
	</html>
	