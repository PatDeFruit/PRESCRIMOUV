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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/portfolio-item.css" rel="stylesheet">
	<link rel="stylesheet" href="../CSS/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script type="text/javascript" src="../js/functions.js"></script>

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
		include("../BDD/variableSession.php");
		include("../BDD/connexionBDD.php");
		
		?>

</head>

<body>

    <?php include("header.php"); ?> 

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
								$datePrescription = $data['date_prescription'];
								$appLocomoteur = $data['appLocomoteur'];
								$sysCardio = $data['sysCardio'];
								$sysRespi = $data['sysRespi'];
								$autreReco = $data['autreReco'];
								
								$query->CloseCursor();
								
								// REQUETE ENTRETIEN1
									$query=$bdd->prepare('SELECT id_patient, id_entretien, taille, poids, FC_repos, SPO2_repos, m_grasse, m_hydrique, m_muscu, scoreCS, scoreAPL, scoreAPQ, score_RG, IMC, AP_anterieure, niveau_AP, activite_actuelle, niveau_AP_souhaite, niveau_CS, date_entretien, id_type_entretien, type_entretien FROM patients JOIN entretiens USING(id_patient) JOIN type_entretien USING(id_type_entretien) WHERE id_patient = :idPatient AND type_entretien = "Entretien initial"');
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
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien1 AND pieds = 0 AND yeux_ouverts = 0');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPDYO1 = $data['temps'];
									$query->CloseCursor();
									// REQUETE TESTEQPDYF1
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien1 AND pieds = 0 AND yeux_ouverts = 1');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPDYF1 = $data['temps'];
									$query->CloseCursor();
								// REQUETE TESTEQPGYF1
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien1 AND pieds = 1 AND yeux_ouverts = 0');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPGYO1 = $data['temps'];
									$query->CloseCursor();
									// REQUETE TESTEQPGYF1
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien1 AND pieds = 1 AND yeux_ouverts = 1');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPGYF1 = $data['temps'];
									$query->CloseCursor();
									
									// REQUETE TEST AD1
									$query=$bdd->prepare('SELECT id_test_assis, nb_repet, FC_fin, FC_2min, id_entretien FROM test_assis JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$nbRepet = $data['nb_repet'];
									$FCfinAD = $data['FC_fin'];
									$FC2minAD = $data['FC_2min'];
									$query->CloseCursor();
									
									// REQUETE WHOQOL1
									$query=$bdd->prepare('SELECT id_entretien, id_whoqol, score_qdv, score_phy, score_psy, score_relation, score_env FROM whoqol JOIN entretiens USING(id_whoqol) WHERE id_entretien = :id_entretien1');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
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
									$query=$bdd->prepare('SELECT id_patient, id_entretien, taille, poids, FC_repos, SPO2_repos, m_grasse, m_hydrique, m_muscu, scoreCS, scoreAPL, scoreAPQ, score_RG, IMC, niveau_AP, niveau_CS, date_entretien, commentaire, solutions_freins, ressenti_positif, ressenti_negatif, AP_envisagee_apres, id_type_entretien, type_entretien FROM patients JOIN entretiens USING(id_patient) JOIN type_entretien USING(id_type_entretien) WHERE id_patient = :idPatient AND type_entretien = "Entretien final"');
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
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien3 AND pieds = 0 AND yeux_ouverts = 0');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPDYO2 = $data['temps'];
									$query->CloseCursor();
									// REQUETE TESTEQPDYF2
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien3 AND pieds = 0 AND yeux_ouverts = 1');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPDYF2 = $data['temps'];
									$query->CloseCursor();
								// REQUETE TESTEQPGYF2
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien3 AND pieds = 1 AND yeux_ouverts = 0');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPGYO2 = $data['temps'];
									$query->CloseCursor();
									// REQUETE TESTEQPGYF2
									$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien3 AND pieds = 1 AND yeux_ouverts = 1');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$tempsPGYF2 = $data['temps'];
									$query->CloseCursor();
									
									// REQUETE TEST AD2
									$query=$bdd->prepare('SELECT id_test_assis, nb_repet, FC_fin, FC_2min, id_entretien FROM test_assis JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien3');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$nbRepet2 = $data['nb_repet'];
									$FCfinAD2 = $data['FC_fin'];
									$FC2minAD2 = $data['FC_2min'];
									$query->CloseCursor();
									
									// REQUETE WHOQOL2
									$query=$bdd->prepare('SELECT id_entretien, id_whoqol, score_qdv, score_phy, score_psy, score_relation, score_env FROM whoqol JOIN entretiens USING(id_whoqol) WHERE id_entretien = :id_entretien3');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
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
								</div>
								<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#bilan"><i class="fa fa-bar-chart fa-3x"></i></button>
								 <p><small>Bilan</small></p>
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
								} else if($statutPatient=="Archivé"){
									echo'<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#ficheResume"><i class="fa fa-info fa-3x"></i></button>
								 <p><small>Fiche<br />résumé</small></p>
								</div>
								<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#bilan"><i class="fa fa-bar-chart fa-3x"></i></button>
								 <p><small>Bilan</small></p>
								</div>';
								}
								?>
								
								
							   </div>
							  </div>
							  
							  <div class="tab-content">
							   <div id="ficheResume" class="tab-pane fade active in">
								<h3>Fiche Résumé    
								<?php
								if($statutPatient == "Actif - Entretien initial"){
								echo'<a class=\'btn btn-success btn-xs\' href="ListePatient.php"><span class="glyphicon glyphicon-ok"></span>  Passer à l\'entretien intermédiaire</a>';
								} else if($statutPatient == "Actif - Entretien intermédiaire"){
								echo'<a class=\'btn btn-success btn-xs\' href="ListePatient.php"><span class="glyphicon glyphicon-ok"></span>  Passer à l\'entretien final</a>';
								} else if($statutPatient == "Actif - Entretien final"){
								echo'<a class=\'btn btn-success btn-xs\' href="ListePatient.php"><span class="glyphicon glyphicon-ok"></span>  Terminer le programme / Archiver le patient</a>';
								}
								?> </h3> 
								<form class="form-horizontal" method="POST" action="<?php 
								if($statutPatient=="Actif - Entretien initial"){
								 $query=$bdd->prepare('UPDATE patients SET id_statut = 2 WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								$query->CloseCursor();
								} else if($statutPatient=="Actif - Entretien intermédiaire"){
								 $query=$bdd->prepare('UPDATE patients SET id_statut = 3 WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								$query->CloseCursor();
								} else if($statutPatient=="Actif - Entretien final"){
								 $query=$bdd->prepare('UPDATE patients SET id_statut = 5 WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								$query->CloseCursor();
								}
								?>">
								<fieldset>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="firstname">Nom</label>  
								  <div class="col-md-5">
								  <?php
									echo '<input id="firstname" name="firstname" value="'.$nomPatient.'" class="form-control input-md" required="" disabled="disabled" type="text">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="lastname">Prénom</label>  
								  <div class="col-md-5">
								  <?php
								  echo'<input id="lastname" name="lastname" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="med">Médecin prescripteur</a></label>  
								  <div class="col-md-5">
								  <?php
								  echo'<input id="med" name="med" value="'.$nomMedecin.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="datePre">Date de prescription</label>  
								  <div class="col-md-5">
								  <?php
								  echo'<input id="datePre" name="datePre" value="'.$datePrescription.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="dim">Dimension bioclinique</a></label>  
								  <div class="col-md-2">
								  <?php
								  $query=$bdd->prepare('SELECT id_patient, pathologie, id_pathologie FROM patients JOIN est_diagnostique USING(id_patient) JOIN pathologies USING(id_pathologie) WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['pathologie'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="histo">Informations complémentaires</a></label>  
								  <div class="col-md-9">
								  <?php
								  echo'<input id="histo" name="histo" value="'.$histoPatient.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="appLoco">Appareil locomoteur et ostéo-articulaire</a></label>  
								  <div class="col-md-9">
								  <?php
								  echo'<input id="appLoco" name="appLoco" value="'.$appLocomoteur.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="sysCardio">Système cardio-respiratoire et endocrinien</a></label>  
								  <div class="col-md-9">
								  <?php
								  echo'<input id="sysCardio" name="sysCardio" value="'.$sysCardio.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="sysResp">Système nerveux et cognitif</a></label>  
								  <div class="col-md-9">
								  <?php
								  echo'<input id="sysResp" name="sysResp" value="'.$sysRespi.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="other">Autres recommandations</a></label>  
								  <div class="col-md-9">
								  <?php
								  echo'<input id="other" name="other" value="'.$autreReco.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								</table>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt1">Date de l'entretien initial</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="dateEnt1" name="dateEnt1" value="'.$dateEntretien1.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt2">Date de l'entretien intermédiaire</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="dateEnt2" name="dateEnt2" value="'.$dateEntretien2.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt3">Date de l'entretien final</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="dateEnt3" name="dateEnt3" value="'.$datePrescription.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								</table>
								
								</fieldset>
								</form>
								
							   </div>
							   <div id="infoPatient" class="tab-pane fade">
								<h3>Informations Patient </h3> 
								<form class="form-horizontal" method="post">
								<fieldset>
								
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="firstname">Nom</label>  
								  <div class="col-md-5">
								  <?php
									echo '<input id="firstname" name="firstname" value="'.$nomPatient.'" class="form-control input-md" required="" disabled="disabled" type="text">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="lastname">Prénom</label>  
								  <div class="col-md-5">
								  <?php
								  echo'<input id="lastname" name="lastname" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
	
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="birthdate">Date de naissance</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="birthdate" name="birthdate" value="'.$dateNPatient.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="sexe">Sexe</label>  
								  <div class="col-md-4">
								  
								  <?php
								  if($sexePatient == 1){
									  echo'<input id="sexe" name="sexe" value="Femme" class="form-control input-md" disabled="disabled" required="" type="text">';
								  } else {
									  echo'<input id="sexe" name="sexe" value="Homme" class="form-control input-md" disabled="disabled" required="" type="text">';
								  }
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="street">Adresse</label>  
								  <div class="col-md-8">
								  <?php
								  echo'<input id="street" name="street" value="'.$adressePatient.'" class="form-control input-md" disabled="disabled" type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="city">Code postal</label>  
								  <div class="col-md-3">
								  <?php
								  echo'<input id="city" name="city" value="'.$cpPatient.'" class="form-control input-md" disabled="disabled" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
		
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="state">Ville</label>  
								  <div class="col-md-5">
								  <?php
								  echo'<input id="state" name="state" value="'.$villePatient.'" class="form-control input-md" disabled="disabled" type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="phone">Téléphone</label>  
								  <div class="col-md-5">
								 <?php
								  echo' <input id="phone" name="phone" value="'.$telPatient.'" class="form-control input-md" disabled="disabled" type="tel">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
							
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="email">Email</label>  
								  <div class="col-md-8">
								  <?php
								  echo'<input id="email" name="email" value="'.$mailPatient.'" class="form-control input-md" disabled="disabled" required="" type="email">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="situFamil">Situation familiale</label>  
								  <div class="col-md-3">
								  <?php
								  if($situationPatient == 0){
									  echo'<input id="situFamil" name="situFamil" value="Célibataire" class="form-control input-md" disabled="disabled" required="" type="text">';
								  } else if($situationPatient == 1){
									  echo'<input id="situFamil" name="situFamil" value="En couple" class="form-control input-md" disabled="disabled" required="" type="text">';
								  } else if($situationPatient == 2){
									  echo'<input id="situFamil" name="situFamil" value="Marié(e)"" class="form-control input-md" disabled="disabled" required="" type="text">';
								  } else if($situationPatient == 3){
									  echo'<input id="situFamil" name="situFamil" value="Divorcé(e)" class="form-control input-md" disabled="disabled" required="" type="text">';
								  } else if($situationPatient == 4){
									  echo'<input id="situFamil" name="situFamil" value="Veuf(ve)" class="form-control input-md" disabled="disabled" required="" type="text">';
								  }
								  ?>
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="nbEnfant">Nombre d'enfants</label>  
								  <div class="col-md-2">
								  <?php
								  echo'<input id="nbEnfant" name="nbEnfant" value="'.$enfantPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="profession">Profession</label>  
								  <div class="col-md-8">
								  <?php
								  echo'<input id="profession" name="profession" value="'.$profPatient.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">			
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="med">Médecin prescripteur   <a href="#"><span class="glyphicon glyphicon-eye-open"></span></a></label>  
								  <div class="col-md-5">
								  <?php
								  echo'<input id="med" name="med" value="'.$nomMedecin.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="datePre">Date de prescription</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="datePre" name="datePre" value="'.$datePrescription.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
						
								</table>
								</fieldset>
								</form>

							   </div>
							   <div id="entInitial" class="tab-pane fade">
							   <?php
									
									
							   ?>
								<h3>Entretien initial </h3> 
								<form class="form-horizontal" method="POST" action="<?php 
								if($statutPatient == "Actif - Entretien initial"){
								 $query=$bdd->prepare('UPDATE patients SET id_statut = 2 WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								$query->CloseCursor();
								}
								?>">
								<fieldset>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt1">Date de l'entretien initial</label>  
								  <div class="col-md-3">
								  <?php
								  echo'<input id="dateEnt1" name="dateEnt1" value="'.$dateEntretien1.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
									
								  </div>
								</div>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="taille1">Taille</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="taille1" name="taille1" value="'.$taille1.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="poids1">Poids</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="poids1" name="poids1" value="'.$poids1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="IMC1">IMC</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="IMC1" name="IMC1" value="'.$imc1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="massH1">%Masse hydrique</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="massH1" name="massH1" value="'.$mhydrique1.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="massG1">%Masse grasse</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="massG1" name="massG1" value="'.$mgrasse1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="massM1">%Masse musculaire</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="massM1" name="massM1" value="'.$mmuscu1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="FCrepos1">FC Repos</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="FCrepos1" name="FCrepos1" value="'.$FC_repos1.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="satuRepos1">Saturation O2 Repos</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="satuRepos1" name="satuRepos1" value="'.$SPO2_repos1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								</td>
								</tr>
								
								</table>
								<h4>Evaluation Ricci & Gagnon </h4> 
								<!-- <p>Comportements sédentaires</p> -->
								
								<table class="table">
								<tr>
								<td>
								<!-- <div class="form-group">
								  <label class="col-md-4 control-label" >Combien de temps passez-vous en position assise par jour (loisirs, télé, ordinateur, travail, etc…)</label>  
								<div class="col-md-8">
									<label for="default" class="btn btn-default"><input type="checkbox" id="CS1-1" name="CS1-1" class="badgebox" disabled="disabled"> + 5h </label>
									<label for="default" class="btn btn-default"><input type="checkbox" id="CS2-1" name="CS2-1" class="badgebox" disabled="disabled"> 4 à 5h </label>
									<label for="default" class="btn btn-default"><input type="checkbox" id="CS3-1" name="CS3-1" class="badgebox" disabled="disabled"> 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="checkbox" id="CS4-1" name="CS4-1" class="badgebox" disabled="disabled"> 2 à 3h </label>
									<label for="default" class="btn btn-default"><input type="checkbox" id="CS5-1" name="CS5-1" class="badgebox" disabled="disabled"> < 2h </label>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								-->
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreCS1">Score Comportements Sédentaires</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreCS1" name="scoreCS1" value="'.$scoreCS1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreAPL1">Score Activités Physiques de Loisirs</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreAPL1" name="scoreAPL1" value="'.$scoreAPL1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreAPQ1">Score Activités Physiques Quotidiennes</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreAPQ1" name="scoreAPQ1" value="'.$scoreAPQ1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreRG1">Score Total Ricci & Gagnon</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreRG1" name="scoreRG1" value="'.$scoreRG1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								</table>
								</br>
								<h4>Test de marche</h4> 
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="dateTM1">Date</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="dateTM1" name="dateTM1" value="'.$dateTM.'" class="form-control input-md" disabled="disabled" required="" type="date">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="aideTM1">Aide</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="aideTM1" name="aideTM1" value="'.$aideMarche.'" class="form-control input-md" disabled="disabled" required="" type="text">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FCavantTM1">FC avant</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FCavantTM1" name="FCavantTM1" value="'.$FC_avant.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FCapresTM1">FC après</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FCapresTM1" name="FCapresTM1" value="'.$FC_fin.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FC1minTM1">FC 1 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FC1minTM1" name="FC1minTM1" value="'.$FC_1min.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FC2minTM1">FC 2 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FC2minTM1" name="FC2minTM1" value="'.$FC_2min.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="SPavantTM1">SpO2 avant</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="SPavantTM1" name="SPavantTM1" value="'.$SPO2_avant.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="SPapresTM1">SpO2 après</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="SPapresTM1" name="SPapresTM1" value="'.$SPO2_fin.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="SP1minTM1">SpO2 1 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="SP1minTM1" name="SP1minTM1" value="'.$SPO2_1min.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="SP2minTM1">SpO2 2 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="SP2minTM1" name="SP2minTM1" value="'.$SPO2_2min.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="BorgavantTM1">BOrg avant</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="BorgavantTM1" name="BorgavantTM1" value="'.$Borg_avant.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="BorgapresTM1">BOrg après</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="BorgapresTM1" name="BorgapresTM1" value="'.$Borg_fin.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="Borg1minTM1">BOrg 1 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="Borg1minTM1" name="Borg1minTM1" value="'.$Borg_1min.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="Borg2minTM1">BOrg 2 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="Borg2minTM1" name="Borg2minTM1" value="'.$Borg_2min.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DistTheoTM1">Distance Théorique</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DistTheoTM1" name="DistTheoTM1" value="'.$distTheo.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DistRelleTM1">Distance Réelle</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DistRelleTM1" name="DistRelleTM1" value="'.$distReelle.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PourcTheoTM1">Pourcentage Théorique</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PourcTheoTM1" name="PourcTheoTM1" value="'.$pourTheo.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>									
								</tr>
								</table>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="NbArretTM1">Nombre d'arrêts</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="NbArretTM1" name="NbArretTM1" value="'.$nbArret.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								</br>
								
								
								<h4>Test d'équilibre</h4>
								<p>Pied droit - Yeux Ouverts</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedDYO1">Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedDYO1" name="PiedDYO1" value="'.$tempsPDYO1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								
								<p>Pied droit - Yeux Fermés</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedDYF1">Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedDYF1" name="PiedDYF1" value="'.$tempsPDYF1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								<p>Pied gauche - Yeux Ouverts</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedGYO1">Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedGYO1" name="PiedGYO1" value="'.$tempsPGYO1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								
								<p>Pied gauche - Yeux Fermés</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedGYF1">Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedGYF1" name="PiedGYF1" value="'.$tempsPGYF1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								</br>
								
								<h4>Test Assis Debout</h4>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="NbRepet1">Nombre de répétitions</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="NbRepet1" name="NbRepet1" value="'.$nbRepet.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FreqCard1">Fréquence Cardiaque Fin</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FreqCard1" name="FreqCard1" value="'.$FCfinAD.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FreqCard2">Fréquence Cardiaque 2 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FreqCard2" name="FreqCard2" value="'.$FC2minAD.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								</br>
								<table class="table">
								<h4>Evaluation WHOQOL </h4> 
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreQDV">Score Qualité de Vie</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreQDV" name="scoreQDV" value="'.$scoreQDV1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreSP">Score Santé Physique</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreSP" name="scoreSP" value="'.$scorePHY1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreSPsy">Score Santé Psychologique</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreSPsy" name="scoreSPsy" value="'.$scorePSY1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreR">Score Relation</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreR" name="scoreR" value="'.$scoreREL1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreE">Score Environnement</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreE" name="scoreE" value="'.$scoreENV1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								</table>
								</br>
								
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivAPactu">Niveau d'activité physique actuel</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivAPactu" id="nivAPactu" min="0" max="10" value="'.$nivAP1.'"  class="form-control input-md" disabled="disabled" onchange="rangePrimary.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary2">'.$nivAP1.'</output>';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="activitePhys">Quelles activités/occupations</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="activitePhys" name="activitePhys" value="'.$apActuelle1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivCS">Niveau de comportements sédentaires</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivCS" id="nivCS" min="0" max="10" value="'.$nivCS1.'"  class="form-control input-md" disabled="disabled" onchange="rangePrimary3.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary2">'.$nivCS1.'</output>';
									  ?>
									  </div>
									</div>			
								</td>
								</tr>
								</table>
								
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="APante">Activité Physique Antérieure</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="APante" name="APante" value="'.$apAnterieure1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivAPenvisagee">Niveau d'AP envisagé à moyen terme</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivAPenvisagee" id="nivAPenvisagee" min="0" max="10" value="'.$nivAPvoulue1.'"  disabled="disabled" class="form-control input-md" onchange="rangePrimary2.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary2">'.$nivAPvoulue1.'</output>';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="freins">Freins</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_frein, frein, id_entretien FROM freins JOIN a_pour_frein USING(id_frein) JOIN entretien USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['frein'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="motiv">Attentes et motivations</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_motivation, motivation, id_entretien FROM motivations JOIN a_pour_motivation USING(id_motivation) JOIN entretien USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['motivation'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="goal">Objectifs généraux</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_objectif, objectif, id_entretien FROM objectifs JOIN a_pour_objectif USING(id_objectif) JOIN entretien USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['objectif'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>			
								</td>
								</tr>
								</table>
								</br>
								
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
								  <?php
								 echo'<input id="centre" name="centre" value="'.$data['nom_centre'].'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="typeAct">Type d'activité</label>  
								  <div class="col-md-4">
								  <?php
								 echo'
								  <input id="typeAct" name="typeAct" value="'.$data['type_activite'].'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="creneau">Créneau</label>  
								  <div class="col-md-3">
								  <?php
								 echo'<input id="creneau" name="creneau" value="'.$data['jour_creneau'].' de '.$data['heure_creneau_debut'].' à '.$data['heure_creneau_fin'].'" class="form-control input-md" disabled="disabled" required="" type="text">';
								?>
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
								 echo'<input id="freq" name="freq" value="'.$data['frequence'].'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
								 echo'<input id="intensite" name="intensite" value="'.$data['intensite'].'" class="form-control input-md" disabled="disabled" required="" type="text">';
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
								 echo'<input id="duree" name="duree" value="'.$data['duree'].'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
								 echo'<input id="nbseanceAFaire" name="nbseanceAFaire" value="'.$data['nb_seances_prevues'].'" class="form-control input-md" disabled="disabled" required="" type="number">';
								 ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<?php
									}
								?>
								</table>
								<?php
								if($statutPatient == "Actif - Entretien initial"){
								echo'<a class=\'btn btn-success btn-xs\' href="ListePatient.php"><span class="glyphicon glyphicon-ok"></span>  Passer à l\'entretien intermédiaire</a>';
								}
								?> 
								</br>
								</br>
								
								</fieldset>
								</form>
							   </div>
							   <div id="entInter" class="tab-pane fade">
								<h3>Entretien intermédiaire </h3> 
								<form class="form-horizontal" method="POST" action="<?php 
								if($statutPatient == "Actif - Entretien intermédiaire"){
								 $query=$bdd->prepare('UPDATE patients SET id_statut = 3 WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								$query->CloseCursor();
								}
								?>">
								<fieldset>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt2">Date de l'entretien intermédiaire</label>  
								  <div class="col-md-3">
								  <?php
								  echo'<input id="dateEnt2" name="dateEnt2" value="'.$dateEntretien2.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
								  </div>
								</div>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivAP3mois">Niveau d'AP actuel</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivAP3mois" id="nivAP3mois" min="0" max="10" value="'.$nivAP2.'"  disabled="disabled" class="form-control input-md" onchange="rangePrimary3.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary3">'.$nivAP2.'</output>';
									  ?>
									  </div>
									</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="comm">Commentaires</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="comm" name="comm" value="'.$commentaire.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivCS3mois">Comportements sédentaires</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivCS3mois" id="nivCS3mois" min="0" max="10" value="'.$nivCS2.'"  disabled="disabled" class="form-control input-md" onchange="rangePrimary4.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary4">'.$nivCS2.'</output>';
									  ?>
									  </div>
									</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="freinsInit">Rappel des freins initiaux</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_frein, frein, id_entretien FROM freins JOIN a_pour_frein USING(id_frein) JOIN entretien USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['frein'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="freins3mois">Etat des freins à 3 mois</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_frein, frein, id_entretien FROM freins JOIN a_pour_frein USING(id_frein) JOIN entretien USING(id_entretien) WHERE id_entretien = :id_entretien2');
								$query->bindValue(':id_entretien2',$id_entretien2, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['frein'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="solu">Solutions</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="solu" name="solu" value="'.$solutions.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								</table>
								<p>Ressenti général</p>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="positif">Positifs</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="positif" name="positif" value="'.$positif.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="negatif">Negatifs</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="negatif" name="negatif" value="'.$negatif.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="goalInit">Rappel des objectifs</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_objectif, objectif, id_entretien FROM objectifs JOIN a_pour_objectif USING(id_objectif) JOIN entretien USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['objectif'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="goal3mois">Objectifs pour les 3 prochains mois</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_objectif, objectif, id_entretien FROM objectifs JOIN a_pour_objectif USING(id_objectif) JOIN entretien USING(id_entretien) WHERE id_entretien = :id_entretien2');
								$query->bindValue(':id_entretien2',$id_entretien2, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['objectif'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="APapresProg">AP envisagée après le programme</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="APapresProg" name="APapresProg" value="'.$APenvisagee.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								</table>
								<?php
								if($statutPatient == "Actif - Entretien intermédiaire"){
								echo'<a class=\'btn btn-success btn-xs\' href="ListePatient.php"><span class="glyphicon glyphicon-ok"></span>  Passer à l\'entretien final</a>';
								}
								?> 
								</br>
								</br>
								</fieldset>
								</form>
							   </div>
							   <div id="entFinal" class="tab-pane fade">
								<h3>Entretien final</h3> 
								<form class="form-horizontal" method="POST" action="<?php 
								if($statutPatient=="Actif - Entretien final"){
								 $query=$bdd->prepare('UPDATE patients SET id_statut = 5 WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								$query->CloseCursor();
								}
								?>">
								<fieldset>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt3">Date de l'entretien final</label>  
								  <div class="col-md-3">
								  <?php
								  echo'<input id="dateEnt3" name="dateEnt3" value="'.$dateEntretien3.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
								  </div>
								</div>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivAP6mois">Niveau d'AP actuel</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivAP6mois" id="nivAP6mois" min="0" max="10" value="'.$nivAP3.'"  disabled="disabled" class="form-control input-md" onchange="rangePrimary5.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary5">'.$nivAP3.'</output>';
									  ?>
									  </div>
									</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="comm2">Commentaires</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="comm2" name="comm2" value="'.$commentaire3.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivCS6mois">Comportements sédentaires</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivCS6mois" id="nivCS6mois" min="0" max="10" value="'.$nivCS3.'"  disabled="disabled" class="form-control input-md" onchange="rangePrimary6.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary6">'.$nivCS3.'</output>';
									  ?>
									  </div>
									</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="freinsInit2">Rappel des freins initiaux</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_frein, frein, id_entretien FROM freins JOIN a_pour_frein USING(id_frein) JOIN entretien USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['frein'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="freins6mois">Etat des freins à 6 mois</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_frein, frein, id_entretien FROM freins JOIN a_pour_frein USING(id_frein) JOIN entretien USING(id_entretien) WHERE id_entretien = :id_entretien3');
								$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['frein'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="solu2">Solutions</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="solu2" name="solu2" value="'.$solutions3.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								</table>
								<p>Ressenti général</p>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="positif2">Positifs</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="positif2" name="positif2" value="'.$positif3.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="negatif2">Negatifs</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="negatif2" name="negatif2" value="'.$negatif3.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="goalInit2">Rappel des objectifs</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_objectif, objectif, id_entretien FROM objectifs JOIN a_pour_objectif USING(id_objectif) JOIN entretien USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['objectif'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="goal6mois">Objectifs pour les 3 prochains mois</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_objectif, objectif, id_entretien FROM objectifs JOIN a_pour_objectif USING(id_objectif) JOIN entretien USING(id_entretien) WHERE id_entretien = :id_entretien3');
								$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['objectif'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="APapresProg2">AP envisagée après le programme</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="APapresProg2" name="APapresProg2" value="'.$APenvisagee3.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								</table>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="taille2">Taille</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="taille2" name="taille2" value="'.$taille3.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="poids2">Poids</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="poids2" name="poids2" value="'.$poids3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="IMC2">IMC</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="IMC2" name="IMC2" value="'.$imc3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="massH2">%Masse hydrique</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="massH2" name="massH2" value="'.$mhydrique3.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="massG2">%Masse grasse</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="massG2" name="massG2" value="'.$mgrasse3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="massM2">%Masse musculaire</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="massM2" name="massM2" value="'.$mmuscu3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="FCrepos2">FC Repos</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="FCrepos2" name="FCrepos2" value="'.$FC_repos3.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="satuRepos2">Saturation O2 Repos</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="satuRepos2" name="satuRepos2" value="'.$SPO2_repos3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								</td>
								</tr>
								
								</table>
								<h4>Evaluation Ricci & Gagnon </h4> 
								<!-- <p>Comportements sédentaires</p> -->
								
								<table class="table">
								<tr>
								<td>
								<!-- <div class="form-group">
								  <label class="col-md-4 control-label" >Combien de temps passez-vous en position assise par jour (loisirs, télé, ordinateur, travail, etc…)</label>  
								<div class="col-md-8">
									<label for="default" class="btn btn-default"><input type="checkbox" id="CS1-1" name="CS1-1" class="badgebox" disabled="disabled"> + 5h </label>
									<label for="default" class="btn btn-default"><input type="checkbox" id="CS2-1" name="CS2-1" class="badgebox" disabled="disabled"> 4 à 5h </label>
									<label for="default" class="btn btn-default"><input type="checkbox" id="CS3-1" name="CS3-1" class="badgebox" disabled="disabled"> 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="checkbox" id="CS4-1" name="CS4-1" class="badgebox" disabled="disabled"> 2 à 3h </label>
									<label for="default" class="btn btn-default"><input type="checkbox" id="CS5-1" name="CS5-1" class="badgebox" disabled="disabled"> < 2h </label>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								-->
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreCS2">Score Comportements Sédentaires</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreCS2" name="scoreCS2" value="'.$scoreCS3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreAPL2">Score Activités Physiques de Loisirs</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreAPL2" name="scoreAPL2" value="'.$scoreAPL3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreAPQ2">Score Activités Physiques Quotidiennes</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreAPQ2" name="scoreAPQ2" value="'.$scoreAPQ3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreRG2">Score Total Ricci & Gagnon</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreRG2" name="scoreRG2" value="'.$scoreRG3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								</table>
								</br>
								<h4>Test de marche</h4> 
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="dateTM2">Date</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="dateTM2" name="dateTM2" value="'.$dateTM2.'" class="form-control input-md" disabled="disabled" required="" type="date">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="aideTM2">Aide</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="aideTM2" name="aideTM2" value="'.$aideMarche2.'" class="form-control input-md" disabled="disabled" required="" type="text">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FCavantTM2">FC avant</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FCavantTM2" name="FCavantTM2" value="'.$FC_avant2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FCapresTM2">FC après</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FCapresTM2" name="FCapresTM2" value="'.$FC_fin2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FC1minTM2">FC 1 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FC1minTM2" name="FC1minTM2" value="'.$FC_1min2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FC2minTM2">FC 2 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FC2minTM2" name="FC2minTM2" value="'.$FC_2min2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="SPavantTM2">SpO2 avant</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="SPavantTM2" name="SPavantTM2" value="'.$SPO2_avant2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="SPapresTM2">SpO2 après</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="SPapresTM2" name="SPapresTM2" value="'.$SPO2_fin2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="SP1minTM2">SpO2 1 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="SP1minTM2" name="SP1minTM2" value="'.$SPO2_1min2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="SP2minTM2">SpO2 2 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="SP2minTM2" name="SP2minTM2" value="'.$SPO2_2min2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="BorgavantTM2">BOrg avant</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="BorgavantTM2" name="BorgavantTM2" value="'.$Borg_avant2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="BorgapresTM2">BOrg après</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="BorgapresTM2" name="BorgapresTM2" value="'.$Borg_fin2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="Borg1minTM2">BOrg 1 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="Borg1minTM2" name="Borg1minTM2" value="'.$Borg_1min2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="Borg2minTM2">BOrg 2 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="Borg2minTM2" name="Borg2minTM2" value="'.$Borg_2min2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DistTheoTM2">Distance Théorique</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DistTheoTM2" name="DistTheoTM2" value="'.$distTheo2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DistRelleTM2">Distance Réelle</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DistRelleTM2" name="DistRelleTM2" value="'.$distReelle2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PourcTheoTM2">Pourcentage Théorique</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PourcTheoTM2" name="PourcTheoTM2" value="'.$pourTheo2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>									
								</tr>
								</table>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="NbArretTM2">Nombre d'arrêts</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="NbArretTM2" name="NbArretTM2" value="'.$nbArret2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								</br>
								
								
								<h4>Test d'équilibre</h4>
								<p>Pied droit - Yeux Ouverts</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedDYO2">Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedDYO2" name="PiedDYO2" value="'.$tempsPDYO2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								
								<p>Pied droit - Yeux Fermés</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedDYF2">Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedDYF2" name="PiedDYF2" value="'.$tempsPDYF2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								<p>Pied gauche - Yeux Ouverts</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedGYO2">Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedGYO2" name="PiedGYO2" value="'.$tempsPGYO2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								
								<p>Pied gauche - Yeux Fermés</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedGYF2">Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedGYF2" name="PiedGYF2" value="'.$tempsPGYF2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								</br>
								
								<h4>Test Assis Debout</h4>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="NbRepet2">Nombre de répétitions</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="NbRepet2" name="NbRepet2" value="'.$nbRepet2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FreqCardF">Fréquence Cardiaque Fin</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FreqCardF" name="FreqCardF" value="'.$FCfinAD2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FreqCard2min">Fréquence Cardiaque 2 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FreqCard2min" name="FreqCard2min" value="'.$FC2minAD2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								</br>
								<table class="table">
								<h4>Evaluation WHOQOL </h4> 
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreQDV2">Score Qualité de Vie</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreQDV2" name="scoreQDV2" value="'.$scoreQDV2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreSP2">Score Santé Physique</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreSP2" name="scoreSP2" value="'.$scorePHY2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreSPsy2">Score Santé Psychologique</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreSPsy2" name="scoreSPsy2" value="'.$scorePSY2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreR2">Score Relation</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreR2" name="scoreR2" value="'.$scoreREL2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="scoreE2">Score Environnement</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="scoreE2" name="scoreE2" value="'.$scoreENV2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								</table>
								</br>
								
								<?php
								if($statutPatient == "Actif - Entretien final"){

								echo'<a class=\'btn btn-success btn-xs\' href="ListePatient.php"><span class="glyphicon glyphicon-ok"></span>  Terminer le programme / Archiver le patient</a>';

								}
								?> 
								</br>
								</br>
								</fieldset>
								</form>
							   </div>
							   
							   <div id="bilan" class="tab-pane fade">
								<h3>Bilan</h3> 
								<p>Evolution</p>
								<form class="form-horizontal">
								<fieldset>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="Deltataille">&#916 Taille</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="Deltataille" name="Deltataille" value="'.$deltaTaille.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaPoids">&#916 Poids</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="DeltaPoids" name="DeltaPoids" value="'.$deltaPoids.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaIMC">&#916 IMC</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="DeltaIMC" name="DeltaIMC" value="'.$deltaIMC.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaMH">&#916 %Masse hydrique</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="DeltaMH" name="DeltaMH" value="'.$deltaMH.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaMG">&#916 %Masse grasse</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="DeltaMG" name="DeltaMG" value="'.$deltaMG.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaMM">&#916 %Masse musculaire</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="DeltaMM" name="DeltaMM" value="'.$deltaMM.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaFC">&#916 FC Repos</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="DeltaFC" name="DeltaFC" value="'.$deltaFC.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaSP">&#916 Saturation O2 Repos</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="DeltaSP" name="DeltaSP" value="'.$deltaSP.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								</td>
								</tr>
								
								</table>
								</br>
								<h4>Niveau d'activité physique</h4> 
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaAP">&#916 Niveau d'Activité Physique</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaAP" name="deltaAP" value="'.$deltaAP.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaCS">&#916 Comportements sédentaires</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaCS" name="deltaCS" value="'.$deltaCS.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								</table>
								
								<h4>Evaluation Ricci & Gagnon </h4> 
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaRG">&#916 Score Ricci & Gagnon</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="DeltaRG" name="DeltaRG" value="'.$deltaRG.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								</table>
								</br>
								<h4>Test de marche</h4> 
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaDistRelleTM">&#916 Distance Réelle</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaDistRelleTM" name="DeltaDistRelleTM" value="'.$deltaTDMDist.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaPourcTheoTM">&#916 Pourcentage Théorique</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaPourcTheoTM" name="DeltaPourcTheoTM" value="'.$deltaTDMPour.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>									
								</tr>
								</table>
								</br>
								
								
								<h4>Test d'équilibre</h4>
								<p>Pied droit - Yeux Ouverts</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaPiedDYO">&#916 Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaPiedDYO" name="DeltaPiedDYO" value="'.$deltaPDYO.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								
								<p>Pied droit - Yeux Fermés</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaPiedDYF">&#916 Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaPiedDYF" name="DeltaPiedDYF" value="'.$deltaPDYF.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								<p>Pied gauche - Yeux Ouverts</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaPiedGYO">&#916 Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaPiedGYO" name="DeltaPiedGYO" value="'.$deltaPGYO.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								
								<p>Pied gauche - Yeux Fermés</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaPiedGYF">&#916 Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaPiedGYF" name="DeltaPiedGYF" value="'.$deltaPGYF.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								</br>
								
								<h4>Test Assis Debout</h4>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaNbRepet">&#916 Nombre de répétitions</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaNbRepet" name="DeltaNbRepet" value="'.$deltaADrepet.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								</br>
								<table class="table">
								<h4>Evaluation WHOQOL </h4> 
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaQDV">&#916 Score Qualité de Vie</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaQDV" name="deltaQDV" value="'.$deltaQDV.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaSP">&#916 Score Santé Physique</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaSP" name="deltaSP" value="'.$deltaPhy.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaSPsy">&#916 Score Santé Psychologique</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaSPsy" name="deltaSPsy" value="'.$deltaPsy.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaR">&#916 Score Relation</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaR" name="deltaR" value="'.$deltaRel.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaEnv">&#916 Score Environnement</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaEnv" name="deltaEnv" value="'.$deltaEnvi.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								</table>
								</br>
									<a class=\'btn btn-info btn-xs\' href="ListePatient.php"><span class="glyphicon glyphicon-save-file"></span>  Générer le bilan</a>
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
	
    <?php include("footer.php"); 
		?> 
    </div>
    <!-- /content -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
	<script src="../js/functions.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
