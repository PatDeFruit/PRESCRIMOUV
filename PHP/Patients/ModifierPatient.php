<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	
	
    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>
	<script src="../../js/functions.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	 <?php 
	
	
		//Cette fonction doit être appelée avant tout code html
		session_start();

		//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
		include("../../BDD/variableSession.php");
		include("../../BDD/connexionBDD.php");
		
		?>

</head>

<body>

    <?php include("../header.php"); ?> 

    <!-- Page Content -->
    <div class="container">
	<?php 
		$idPatient = $_GET['idPatient']; 
		$statutPatient = $_GET['statutPatient'];
	?>

        <!-------------------------- Container --------------------------------->
		

		
		
        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">
					<?php echo'<center><legend> Patient  n°'.$idPatient.' </center></legend>'; ?>
					
					</br>
					<center>
					<?php
								// REQUETE PATIENT
								$query=$bdd->prepare('SELECT id_patient, nom_patient, prenom_patient, num_SS, sexe_patient, date_naissance, adresse_patient, CP_patient, ville_patient, email_patient, tel_patient, nb_enfant, profession, historique_patho, situation, id_coordinateur, id_statut FROM patients WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								$data = $query->fetch();
								
								$nomPatient = $data['nom_patient'];
								$prenomPatient = $data['prenom_patient'];
								$numSecu = $data['num_SS'];
								$sexePatient = $data['sexe_patient'];
								$dateNPatient = $data['date_naissance'];
								$adressePatient = $data['adresse_patient'];
								$cpPatient = $data['CP_patient'];
								$villePatient = $data['ville_patient'];
								$mailPatient = $data['email_patient'];
								$enfantPatient = $data['nb_enfant'];
								$telPatient = $data['tel_patient'];
								$profPatient = $data['profession'];
								$histoPatient = $data['historique_patho'];
								$situationPatient = $data['situation'];
								
								$query->CloseCursor();
								
								// REQUETE MEDECIN
								$query=$bdd->prepare('SELECT id_patient, id_medecin, nom_medecin, prenom_medecin, date_prescription, appLocomoteur, sysCardio, sysRespi, autreReco FROM patients JOIN est_soigne_par USING(id_patient) JOIN medecins USING(id_medecin) WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								$data = $query->fetch();
								
								$nomMedecin = $data['nom_medecin'];
								$prenomMedecin = $data['prenom_medecin'];
								$idMedecin = $data['id_medecin'];
								$datePrescription = $data['date_prescription'];
								$appLocomoteur = $data['appLocomoteur'];
								$sysCardio = $data['sysCardio'];
								$sysRespi = $data['sysRespi'];
								$autreReco = $data['autreReco'];
								
								$query->CloseCursor();
								
								// REQUETE MUTUELLE
								$query=$bdd->prepare('SELECT id_patient, id_mutuelle, nom_mutuelle, num_affiliation FROM patients JOIN est_affilie USING(id_patient) JOIN mutuelles USING(id_mutuelle) WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								$data = $query->fetch();
								
								$idMutuelle = $data['id_mutuelle'];
								$mutuelle = $data['nom_mutuelle'];
								$numAffiliation = $data['num_affiliation'];
							
								
								$query->CloseCursor();
								
								// REQUETE ENTRETIEN1
									$query=$bdd->prepare('SELECT id_patient, id_entretien, taille, poids, FC_repos, SPO2_repos, m_grasse, m_hydrique, m_muscu, RG_CS, RG_APL1, RG_APL2, RG_APL3, RG_APL4, RG_APQ1, RG_APQ2, RG_APQ3, RG_APQ4, scoreCS, scoreAPL, scoreAPQ, score_RG, IMC, AP_anterieure, niveau_AP, activite_actuelle, niveau_AP_souhaite, niveau_CS, date_entretien, id_type_entretien, type_entretien FROM patients JOIN entretiens USING(id_patient) JOIN type_entretien USING(id_type_entretien) WHERE id_patient = :idPatient AND type_entretien = "Entretien initial"');
									$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									
									$id_entretien1 = $data['id_entretien'];
									$type_entretien1 = $data['type_entretien'];
									$taille1 = $data['taille'];
									$poids1 = $data['poids'];
									$FC_repos1 = $data['FC_repos'];
									$SPO2_repos1 = $data['SPO2_repos'];
									$mgrasse1 = $data['m_grasse'];
									$mhydrique1 = $data['m_hydrique'];
									$mmuscu1 = $data['m_muscu'];
									$RG_CS = $data['RG_CS'];
									$RG_APL1 = $data['RG_APL1'];
									$RG_APL2 = $data['RG_APL2'];
									$RG_APL3 = $data['RG_APL3'];
									$RG_APL4 = $data['RG_APL4'];
									$RG_APQ1 = $data['RG_APQ1'];
									$RG_APQ2 = $data['RG_APQ2'];
									$RG_APQ3 = $data['RG_APQ3'];
									$RG_APQ4 = $data['RG_APQ4'];
									$scoreCS1 = $data['scoreCS'];
									$scoreAPL1 = $data['scoreAPL'];
									$scoreAPQ1 = $data['scoreAPQ'];
									$scoreRG1 = $data['score_RG'];
									$imc1 = $data['IMC'];
									$apAnterieure1 = $data['AP_anterieure'];
									$nivAP1 = $data['niveau_AP'];
									$apActuelle1 = $data['activite_actuelle'];
									$nivAPvoulue1 = $data['niveau_AP_souhaite'];
									$nivCS1 = $data['niveau_CS'];
									$dateEntretien1 = $data['date_entretien'];
									
									
									$query->CloseCursor();
								
								// REQUETE TESTMARCHE1
									$query=$bdd->prepare('SELECT id_test_marche, dateTM, dist_theo, dist_reelle, pour_theo, aide_marche, FC_avant, FC_fin, FC_1min, FC_2min, SPO2_avant, SPO2_fin, SPO2_1min, SPO2_2min, Borg_avant, Borg_fin, Borg_1min, Borg_2min, nb_arrets, id_entretien FROM test_marche JOIN entretiens USING(id_test_marche) WHERE id_entretien = :id_entretien1');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									
									$dateTM = $data['dateTM'];
									$distTheo = $data['dist_theo'];
									$distReelle = $data['dist_reelle'];
									$pourTheo = $data['pour_theo'];
									$aideMarche = $data['aide_marche'];
									$FC_avant = $data['FC_avant'];
									$FC_fin = $data['FC_fin'];
									$FC_1min = $data['FC_1min'];
									$FC_2min = $data['FC_2min'];
									$SPO2_avant = $data['SPO2_avant'];
									$SPO2_fin = $data['SPO2_fin'];
									$SPO2_1min = $data['SPO2_1min'];
									$SPO2_2min = $data['SPO2_2min'];
									$Borg_avant = $data['Borg_avant'];
									$Borg_fin = $data['Borg_fin'];
									$Borg_1min = $data['Borg_1min'];
									$Borg_2min = $data['Borg_2min'];
									$nbArret = $data['nb_arrets'];
								
									
									
									$query->CloseCursor();
								
									// REQUETE TESTEQPDYO1
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien1 AND pied = 0 AND yeux_ouverts = 0');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPDYO1 = $data['temps'];
									$query->CloseCursor();
									// REQUETE TESTEQPDYF1
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien1 AND pied = 0 AND yeux_ouverts = 1');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPDYF1 = $data['temps'];
									$query->CloseCursor();
									// REQUETE TESTEQPGYF1
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien1 AND pied = 1 AND yeux_ouverts = 0');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPGYO1 = $data['temps'];
									$query->CloseCursor();
									// REQUETE TESTEQPGYF1
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien1 AND pied = 1 AND yeux_ouverts = 1');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPGYF1 = $data['temps'];
									$query->CloseCursor();
									
									// REQUETE TEST AD1
									$query=$bdd->prepare('SELECT id_test_assis, nb_repet, FC_fin, FC_2min, id_entretien FROM test_assis JOIN entretiens USING(id_test_assis) WHERE id_entretien = :id_entretien1');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$nbRepet = $data['nb_repet'];
									$FCfinAD = $data['FC_fin'];
									$FC2minAD = $data['FC_2min'];
									$query->CloseCursor();
									
									// REQUETE WHOQOL1
									$query=$bdd->prepare('SELECT id_entretien, id_whoqol, eval_qualite_vie, satisfaction_sante, douleur_physique, traitement_quotidien, aimer_vie, sens_vie, concentration, securite_vie, environnement_sain, apparence, 
									energie_vie, argent, acces_info_vie, pratique_loisir, deplacement, sommeil, taches_vie, act_pro, vous, relation, vie_sexuelle, amis_soutien, lieu_vie, acces_service, moyen_transport, sentiment_negatif, 
									score_qdv, score_phy, score_psy, score_relation, score_env FROM whoqol JOIN entretiens USING(id_whoqol) WHERE id_entretien = :id_entretien1');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$eval_qualite_vie = $data['eval_qualite_vie'];
									$satisfaction_sante = $data['satisfaction_sante'];
									$douleur_physique = $data['douleur_physique'];
									$traitement_quotidien = $data['traitement_quotidien'];
									$aimer_vie = $data['aimer_vie'];
									$sens_vie = $data['sens_vie'];
									$concentration = $data['concentration'];
									$securite_vie = $data['securite_vie'];
									$environnement_sain = $data['environnement_sain'];
									$apparence = $data['apparence'];
									$energie_vie = $data['energie_vie'];
									$argent = $data['argent'];
									$acces_info_vie = $data['acces_info_vie'];
									$pratique_loisir = $data['pratique_loisir'];
									$deplacement = $data['deplacement'];
									$sommeil = $data['sommeil'];
									$taches_vie = $data['taches_vie'];
									$act_pro = $data['act_pro'];
									$vous = $data['vous'];
									$relation = $data['relation'];
									$vie_sexuelle = $data['vie_sexuelle'];
									$amis_soutien = $data['amis_soutien'];
									$lieu_vie = $data['lieu_vie'];
									$acces_service = $data['acces_service'];
									$moyen_transport = $data['moyen_transport'];
									$sentiment_negatif = $data['sentiment_negatif'];
									$scoreQDV1 = $data['score_qdv'];
									$scorePHY1 = $data['score_phy'];
									$scorePSY1 = $data['score_psy'];
									$scoreREL1 = $data['score_relation'];
									$scoreENV1 = $data['score_env'];
									$query->CloseCursor();
									

									// REQUETE ENTRETIEN2
									$query=$bdd->prepare('SELECT id_patient, id_entretien, niveau_AP, niveau_CS, date_entretien, commentaire, solutions_freins, ressenti_positif, ressenti_negatif, AP_envisagee_apres, id_type_entretien, type_entretien FROM patients JOIN entretiens USING(id_patient) JOIN type_entretien USING(id_type_entretien) WHERE id_patient = :idPatient AND type_entretien = "Entretien intermédiaire"');
									$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									
									$id_entretien2 = $data['id_entretien'];
									$type_entretien2 = $data['type_entretien'];
									$nivAP2 = $data['niveau_AP'];
									$nivCS2 = $data['niveau_CS'];
									$dateEntretien2 = $data['date_entretien'];
									$commentaire = $data['commentaire'];
									$solutions = $data['solutions_freins'];
									$positif = $data['ressenti_positif'];
									$negatif = $data['ressenti_negatif'];
									$APenvisagee = $data['AP_envisagee_apres'];
									
									$query->CloseCursor();
									
									// REQUETE ENTRETIEN3
									$query=$bdd->prepare('SELECT id_patient, id_entretien, taille, poids, FC_repos, SPO2_repos, m_grasse, m_hydrique, m_muscu, RG_CS, RG_APL1, RG_APL2, RG_APL3, RG_APL4, RG_APQ1, RG_APQ2, RG_APQ3, RG_APQ4, scoreCS, scoreAPL, scoreAPQ, score_RG, IMC, AP_anterieure, niveau_AP, activite_actuelle, niveau_AP_souhaite, niveau_CS, date_entretien, id_type_entretien, type_entretien FROM patients JOIN entretiens USING(id_patient) JOIN type_entretien USING(id_type_entretien) WHERE id_patient = :idPatient AND type_entretien = "Entretien final"');
									$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									
									$id_entretien3 = $data['id_entretien'];
									$type_entretien3 = $data['type_entretien'];
									$taille3 = $data['taille'];
									$poids3 = $data['poids'];
									$FC_repos3 = $data['FC_repos'];
									$SPO2_repos3 = $data['SPO2_repos'];
									$mgrasse3 = $data['m_grasse'];
									$mhydrique3 = $data['m_hydrique'];
									$mmuscu3 = $data['m_muscu'];
									$RG_CS2 = $data['RG_CS'];
									$RG_APL12 = $data['RG_APL1'];
									$RG_APL22 = $data['RG_APL2'];
									$RG_APL32 = $data['RG_APL3'];
									$RG_APL42 = $data['RG_APL4'];
									$RG_APQ12 = $data['RG_APQ1'];
									$RG_APQ22 = $data['RG_APQ2'];
									$RG_APQ32 = $data['RG_APQ3'];
									$RG_APQ42 = $data['RG_APQ4'];
									$scoreCS3 = $data['scoreCS'];
									$scoreAPL3 = $data['scoreAPL'];
									$scoreAPQ3 = $data['scoreAPQ'];
									$scoreRG3 = $data['score_RG'];
									$imc3 = $data['IMC'];
									$nivAP3 = $data['niveau_AP'];
									$nivCS3 = $data['niveau_CS'];
									$dateEntretien3 = $data['date_entretien'];
									$commentaire3 = $data['commentaire'];
									$solutions3 = $data['solutions_freins'];
									$positif3 = $data['ressenti_positif'];
									$negatif3 = $data['ressenti_negatif'];
									$APenvisagee3 = $data['AP_envisagee_apres'];
									
									
									$query->CloseCursor();
								
								// REQUETE TESTMARCHE2
									$query=$bdd->prepare('SELECT id_test_marche, dateTM, dist_theo, dist_reelle, pour_theo, aide_marche, FC_avant, FC_fin, FC_1min, FC_2min, SPO2_avant, SPO2_fin, SPO2_1min, SPO2_2min, Borg_avant, Borg_fin, Borg_1min, Borg_2min, nb_arrets, id_entretien FROM test_marche JOIN entretiens USING(id_test_marche) WHERE id_entretien = :id_entretien3');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									
									$dateTM2 = $data['dateTM'];
									$distTheo2 = $data['dist_theo'];
									$distReelle2 = $data['dist_reelle'];
									$pourTheo2 = $data['pour_theo'];
									$aideMarche2 = $data['aide_marche'];
									$FC_avant2 = $data['FC_avant'];
									$FC_fin2 = $data['FC_fin'];
									$FC_1min2 = $data['FC_1min'];
									$FC_2min2 = $data['FC_2min'];
									$SPO2_avant2 = $data['SPO2_avant'];
									$SPO2_fin2 = $data['SPO2_fin'];
									$SPO2_1min2 = $data['SPO2_1min'];
									$SPO2_2min2 = $data['SPO2_2min'];
									$Borg_avant2 = $data['Borg_avant'];
									$Borg_fin2 = $data['Borg_fin'];
									$Borg_1min2 = $data['Borg_1min'];
									$Borg_2min2 = $data['Borg_2min'];
									$nbArret2 = $data['nb_arrets'];
								
									
									
									$query->CloseCursor();
								
								// REQUETE TESTEQPDYO2
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien3 AND pied = 0 AND yeux_ouverts = 0');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPDYO2 = $data['temps'];
									$query->CloseCursor();
									// REQUETE TESTEQPDYF2
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien3 AND pied = 0 AND yeux_ouverts = 1');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPDYF2 = $data['temps'];
									$query->CloseCursor();
								// REQUETE TESTEQPGYF2
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien3 AND pied = 1 AND yeux_ouverts = 0');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPGYO2 = $data['temps'];
									$query->CloseCursor();
									// REQUETE TESTEQPGYF2
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien3 AND pied = 1 AND yeux_ouverts = 1');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPGYF2 = $data['temps'];
									$query->CloseCursor();
									
									// REQUETE TEST AD2
									$query=$bdd->prepare('SELECT id_test_assis, nb_repet, FC_fin, FC_2min, id_entretien FROM test_assis JOIN entretiens USING(id_test_assis) WHERE id_entretien = :id_entretien3');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$nbRepet2 = $data['nb_repet'];
									$FCfinAD2 = $data['FC_fin'];
									$FC2minAD2 = $data['FC_2min'];
									$query->CloseCursor();
									
									// REQUETE WHOQOL2
									$query=$bdd->prepare('SELECT id_entretien, id_whoqol, eval_qualite_vie, satisfaction_sante, douleur_physique, traitement_quotidien, aimer_vie, sens_vie, concentration, securite_vie, environnement_sain, apparence, 
									energie_vie, argent, acces_info_vie, pratique_loisir, deplacement, sommeil, taches_vie, act_pro, vous, relation, vie_sexuelle, amis_soutien, lieu_vie, acces_service, moyen_transport, sentiment_negatif, 
									score_qdv, score_phy, score_psy, score_relation, score_env FROM whoqol JOIN entretiens USING(id_whoqol) WHERE id_entretien = :id_entretien3');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$eval_qualite_vie2 = $data['eval_qualite_vie'];
									$satisfaction_sante2 = $data['satisfaction_sante'];
									$douleur_physique2 = $data['douleur_physique'];
									$traitement_quotidien2 = $data['traitement_quotidien'];
									$aimer_vie2 = $data['aimer_vie'];
									$sens_vie2 = $data['sens_vie'];
									$concentration2 = $data['concentration'];
									$securite_vie2 = $data['securite_vie'];
									$environnement_sain2 = $data['environnement_sain'];
									$apparence2 = $data['apparence'];
									$energie_vie2 = $data['energie_vie'];
									$argent2 = $data['argent'];
									$acces_info_vie2 = $data['acces_info_vie'];
									$pratique_loisir2 = $data['pratique_loisir'];
									$deplacement2 = $data['deplacement'];
									$sommeil2 = $data['sommeil'];
									$taches_vie2 = $data['taches_vie'];
									$act_pro2 = $data['act_pro'];
									$vous2 = $data['vous'];
									$relation2 = $data['relation'];
									$vie_sexuelle2 = $data['vie_sexuelle'];
									$amis_soutien2 = $data['amis_soutien'];
									$lieu_vie2 = $data['lieu_vie'];
									$acces_service2 = $data['acces_service'];
									$moyen_transport2 = $data['moyen_transport'];
									$sentiment_negatif2 = $data['sentiment_negatif'];
									$scoreQDV2 = $data['score_qdv'];
									$scorePHY2 = $data['score_phy'];
									$scorePSY2 = $data['score_psy'];
									$scoreREL2 = $data['score_relation'];
									$scoreENV2 = $data['score_env'];
									$query->CloseCursor();
									
									// REQUETE STAT PATIENTS
									$query=$bdd->prepare('SELECT id_stats, delta_poids, delta_taille, delta_IMC, delta_m_grasse, delta_m_hydrique, delta_m_muscu, delta_FC_repos, delta_SPO2_repos, delta_RG, delta_TDM_distance, delta_TDM_theo, 
									delta_D_YO, delta_D_YF, delta_G_YO, delta_G_YF, delta_assis_repet, delta_WHOQOL_qdv, delta_WHOQOL_phy, delta_WHOQOL_env, delta_WHOQOL_psy, delta_WHOQOL_relation, delta_CS, delta_AP, id_patient FROM stats_perso WHERE id_patient = :idPatient');
									$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$deltaPoids = $data['delta_poids'];
									$deltaTaille = $data['delta_taille'];
									$deltaIMC = $data['delta_IMC'];
									$deltaMG = $data['delta_m_grasse'];
									$deltaMH = $data['delta_m_hydrique'];
									$deltaMM = $data['delta_m_muscu'];
									$deltaFC =$data['delta_FC_repos'];
									$deltaSP = $data['delta_SPO2_repos'];
									$deltaRG = $data['delta_RG'];
									$deltaTDMDist =$data['delta_TDM_distance'];
									$deltaTDMPour = $data['delta_TDM_theo'];
									$deltaPDYO = $data['delta_D_YO'];
									$deltaPDYF = $data['delta_D_YF'];
									$deltaPGYO = $data['delta_G_YO'];
									$deltaPGYF = $data['delta_G_YF'];
									$deltaADrepet = $data['delta_assis_repet'];
									$deltaQDV = $data['delta_WHOQOL_qdv'];
									$deltaPhy = $data['delta_WHOQOL_phy'];
									$deltaPsy = $data['delta_WHOQOL_psy'];
									$deltaEnvi = $data['delta_WHOQOL_env'];
									$deltaRel =$data['delta_WHOQOL_relation'];
									$deltaCS = $data['delta_CS'];
									$deltaAP = $data['delta_AP'];
									$query->CloseCursor();
									
		
							?>
						
					
					
						<div id="afficherInfosPatient">
							 <div class="row">
							  <div class="process">
							   <div class="process-row nav nav-tabs">
								
								<?php
								if($statutPatient=="Actif - Entretien initial"){
								echo'<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#ficheResume"><i class="fa fa-info fa-3x"></i></button>
								 <p><small>Fiche<br />résumé</small></p>
								</div>
								<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#infoPatient"><i class="fa fa-user fa-3x"></i></button>
								 <p><small>Informations<br />personnelles</small></p>
								</div>
								<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#entInitial"><i class="fa fa-star-o fa-3x"></i></button>
								 <p><small>Entretien<br />initial</small></p>
								</div>'; 
								} else if($statutPatient=="Actif - Entretien intermédiaire"){
									echo'<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#ficheResume"><i class="fa fa-info fa-3x"></i></button>
								 <p><small>Fiche<br />résumé</small></p>
								</div>
								<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#infoPatient"><i class="fa fa-user fa-3x"></i></button>
								 <p><small>Informations<br />personnelles</small></p>
								</div>
								<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#entInitial"><i class="fa fa-star-o fa-3x"></i></button>
								 <p><small>Entretien<br />initial</small></p>
								</div>
								<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#entInter"><i class="fa fa-star-half-o fa-3x"></i></button>
								 <p><small>Entretien<br />intermédiaire</small></p>
								</div>';
								} else if($statutPatient=="Actif - Entretien final"){
									echo'<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#ficheResume"><i class="fa fa-info fa-3x"></i></button>
								 <p><small>Fiche<br />résumé</small></p>
								</div>
								<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#infoPatient"><i class="fa fa-user fa-3x"></i></button>
								 <p><small>Informations<br />personnelles</small></p>
								</div>
								<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#entInitial"><i class="fa fa-star-o fa-3x"></i></button>
								 <p><small>Entretien<br />initial</small></p>
								</div>
								<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#entInter"><i class="fa fa-star-half-o fa-3x"></i></button>
								 <p><small>Entretien<br />intermédiaire</small></p>
								</div>
								<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#entFinal"><i class="fa fa-star fa-3x"></i></button>
								 <p><small>Entretien<br />final</small></p>
								</div>';
								} else if($statutPatient=="En attente"){
									echo'<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#ficheResume"><i class="fa fa-info fa-3x"></i></button>
								 <p><small>Fiche<br />résumé</small></p>
								</div>
								<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#infoPatient"><i class="fa fa-user fa-3x"></i></button>
								 <p><small>Informations<br />personnelles</small></p>
								</div>';
								}
								?>
								
								
							   </div>
							  </div>
							  
							  <?php
								include('../FicheResume/FicheModification.php');
								include('../InfosPatients/InfosModification.php');
								include('../EntInitial/InitialPart1Modif.php');
								include('../RicciGagnon/RicciGagnonInitialModification.php');
								include('../TestMarche/TestMarcheInitialModification.php');
								include('../TestEquilibre/TestEquilibreInitialModification.php');
								include('../TestAssisDebout/TestADInitialModification.php');
								include('../Whoqol/WhoqolInitialModification.php');
								include('../EntInitial/InitialPart2Modif.php');
							  ?>
							  
								
								
								<table class="table">
								<h4>Programme proposé </h4> 

								<?php
									// REQUETE ACTIVITE
									$query=$bdd->prepare('SELECT id_patient, id_activite, frequence, duree, intensite, nb_seances_prevues, activite, type_activite, id_creneau, jour_creneau, heure_creneau_debut, heure_creneau_fin, id_centre, nom_centre FROM doit_pratiquer JOIN activites USING(id_activite) JOIN se_fait_a USING(id_activite) JOIN creneaux USING(id_creneau) JOIN se_fait_dans USING(id_creneau) JOIN centres USING(id_centre) WHERE id_patient = :idPatient');
									$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
									$query->execute();
									while($data = $query->fetch()){
										?>
								<tr>
								<td>		

									<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="centre">Structure</label>  
								  <div class="col-md-4">
										 <select name="idCentre" id="idCentre" class="form-control">
										
										  <?php 
										  $query2=$bdd->prepare('SELECT id_centre, nom_centre FROM centres');
										$query2->execute();
										while($data2 = $query2->fetch()){
											 echo'<option value="'.$data2['id_centre'].'" ';
											 if($data2['nom_centre'] == $data['nom_centre']){
												 echo 'selected = "selected"';
											 }
											 echo'>'.$data2['nom_centre'].'</option>';
										}
										$query->CloseCursor();
										 
										  ?>
										</select>						  
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="typeAct">Structure</label>  
								  <div class="col-md-4">
										 <select name="idAct" id="idAct" class="form-control">
										
										  <?php 
										  $query2=$bdd->prepare('SELECT id_activite, activite FROM activites');
										$query2->execute();
										while($data2 = $query2->fetch()){
											 echo'<option value="'.$data2['id_activite'].'" ';
											 if($data2['activite'] == $data['activite']){
												 echo 'selected = "selected"';
											 }
											 echo'>'.$data2['activite'].'</option>';
										}
										$query->CloseCursor();
										 
										  ?>
										</select>						  
								  </div>
								</div>								
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="creneau">Créneau</label>  
								  <div class="col-md-4">
										 <select name="idCreneau" id="idCreneau" class="form-control">
										
										  <?php 
										  $query2=$bdd->prepare('SELECT id_creneau, jour_creneau, heure_creneau_debut, heure_creneau_fin FROM creneaux');
										$query2->execute();
										while($data2 = $query2->fetch()){
											 echo'<option value="'.$data2['id_creneau'].'" ';
											 if($data2['jour_creneau'] == $data['jour_creneau'] && $data2['heure_creneau_debut'] == $data['heure_creneau_debut'] && $data2['heure_creneau_fin'] == $data['heure_creneau_fin']){
												 echo 'selected = "selected"';
											 }
											 echo'>'.$data2['jour_creneau'].' de '.$data2['heure_creneau_debut'].' à '.$data2['heure_creneau_fin'].'</option>';
										}
										$query->CloseCursor();
										 
										  ?>
										</select>						  
								  </div>
								</div>	
								
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="freq">Fréquence</label>  
								  <div class="col-md-4">
								  <?php
								 echo'<input id="freq" name="freq" value="'.$data['frequence'].'" class="form-control input-md"   required="" type="number">';
								 ?>
								  
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="intensite">Intensité</label>  
								  <div class="col-md-4">
								  <?php
								 echo'<input id="intensite" name="intensite" value="'.$data['intensite'].'" class="form-control input-md"   required="" type="text">';
								 ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="duree">Durée</label>  
								  <div class="col-md-4">
								  <?php
								 echo'<input id="duree" name="duree" value="'.$data['duree'].'" class="form-control input-md"   required="" type="number">';
								 ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="nbseanceAFaire">Nombre de séances à faire</label>  
								  <div class="col-md-4">
								 <?php
								 echo'<input id="nbseanceAFaire" name="nbseanceAFaire" value="'.$data['nb_seances_prevues'].'" class="form-control input-md"   required="" type="number">';
								 ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								
								<?php
									}
								?>
								</table>
								
								
								</fieldset>
								<?php
								echo'<input type="submit" value="Enregistrer" name="valid-entInitial" class=\'btn btn-success btn-xs\' ">';
								?>
								</br>
								</br>
								</form>
							   </div>
							   <div id="entInter" class="tab-pane fade">
							   <?php
									include('../EntInter/IntermediaireModification.php');
									
									include('../EntFinal/FinalPart1Modif.php');
									include('../RicciGagnon/RicciGagnonFinalModification.php');
									include('../TestMarche/TestMarcheFinalModification.php');
									include('../TestEquilibre/TestEquilibreFinalModification.php');
									include('../TestAssisDebout/TestADFinalModification.php');
									include('../WHOQOL/WhoqolFinalModification.php');
							   ?>
							   
						
								
								
								
								
								<?php
								if($statutPatient == "Actif - Entretien final"){

								echo'<input type="submit" value="Terminer le programme" class=\'btn btn-success btn-xs\' ">';

								}
								?> 
								</br>
								</br>
								</fieldset>
								</form>
							   </div>
							   
							   
							  </div>
							 </div>
							</div>
						
						
					</center>
				</fieldset>
			</div>
		</div>
		
        <!-------------------------- /Container --------------------------------->
	
    <?php include("../footer.php"); 
		?> 
    </div>
    <!-- /content -->


</body>

</html>
