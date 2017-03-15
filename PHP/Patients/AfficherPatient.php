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
	<script type="text/javascript" src="../../js/functions.js"></script>

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
					<?php echo'<center><legend> Bénéficiaire  n°'.$idPatient.' </center></legend>'; ?>
					
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
									$query=$bdd->prepare('SELECT id_patient, id_entretien, taille, poids, FC_repos, SPO2_repos, m_grasse, m_hydrique, m_muscu, scoreCS, scoreAPL, scoreAPQ, score_RG, IMC, AP_anterieure, niveau_AP, activite_actuelle, niveau_AP_souhaite, niveau_CS, date_entretien, id_type_entretien, type_entretien, dernier_palier, temps_palier_suiv, cote_difficulte, capacite_aerobie, pourc_mets, percentile, mets_sante, borg_fin_test, motif_fin_test FROM patients JOIN entretiens USING(id_patient) JOIN type_entretien USING(id_type_entretien) WHERE id_patient = :idPatient AND type_entretien = "Entretien initial"');
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
									$dernier_palier = $data['dernier_palier'];
									$temps_palier_suiv = $data['temps_palier_suiv'];
									$cote_difficulte = $data['cote_difficulte'];
									$capacite_aerobie = $data['capacite_aerobie'];
									$pourc_mets = $data['pourc_mets'];
									$percentile = $data['percentile'];
									$mets_sante = $data['mets_sante'];
									$borg_fin_test = $data['borg_fin_test'];
									$motif_fin_test = $data['motif_fin_test'];
									
									
									
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
									$query=$bdd->prepare('SELECT id_patient, id_entretien, taille, poids, FC_repos, SPO2_repos, m_grasse, m_hydrique, m_muscu, scoreCS, scoreAPL, scoreAPQ, score_RG, IMC, niveau_AP, niveau_CS, date_entretien, commentaire, solutions_freins, ressenti_positif, ressenti_negatif, AP_envisagee_apres, id_type_entretien, type_entretien, dernier_palier, temps_palier_suiv, cote_difficulte, capacite_aerobie, pourc_mets, percentile, mets_sante, borg_fin_test, motif_fin_test FROM patients JOIN entretiens USING(id_patient) JOIN type_entretien USING(id_type_entretien) WHERE id_patient = :idPatient AND type_entretien = "Entretien final"');
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
									$dernier_palier2 = $data['dernier_palier'];
									$temps_palier_suiv2 = $data['temps_palier_suiv'];
									$cote_difficulte2 = $data['cote_difficulte'];
									$capacite_aerobie2 = $data['capacite_aerobie'];
									$pourc_mets2 = $data['pourc_mets'];
									$percentile2 = $data['percentile'];
									$mets_sante2 = $data['mets_sante'];
									$borg_fin_test2 = $data['borg_fin_test'];
									$motif_fin_test2 = $data['motif_fin_test'];
									
									
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
									delta_D_YO, delta_D_YF, delta_G_YO, delta_G_YF, delta_assis_repet, delta_WHOQOL_qdv, delta_WHOQOL_phy, delta_WHOQOL_env, delta_WHOQOL_psy, delta_WHOQOL_relation, delta_CS, delta_AP, id_patient, deltaMETS, deltaAero FROM stats_perso WHERE id_patient = :idPatient');
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
									$deltaMETS = $data['deltaMETS'];
									$deltaAero = $data['deltaAero'];
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
							  
							  <?php
								include('../FicheResume/FicheConsultation.php');
								include('../InfosPatients/InfosConsultation.php');
								include('../EntInitial/InitialPart1Consult.php');
								include('../RicciGagnon/RicciGagnonInitialConsultation.php');
								include('../TestMarche/TestMarcheInitialConsultation.php');
								include('../TestEquilibre/TestEquilibreInitialConsultation.php');
								include('../TestAssisDebout/TestADInitialConsultation.php');
								include('../WHOQOL/WhoqolInitialConsultation.php');
								include('../EntInitial/InitialPart2Consult.php');
							  
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
								</table>
								<?php 
									}
								if($statutPatient == "Actif - Entretien initial"){
								echo'<input type="submit"  value="Passer à l\'entretien intermédiaire" class=\'btn btn-success btn-xs\' ">';
								}
								
								?>
								 
								</br>
								</br>
								
								</fieldset>
								</form>
							   </div>
							   
							   <?php
									include('../EntInter/IntermediaireConsultation.php');
									include('../EntFinal/FinalPart1Consult.php');
									include('../RicciGagnon/RicciGagnonFinalConsultation.php');
									include('../TestMarche/TestMarcheFinalConsultation.php');
									include('../TestEquilibre/TestEquilibreFinalConsultation.php');
									include('../TestAssisDebout/TestADFinalConsultation.php');
									include('../WHOQOL/WhoqolFinalConsultation.php');
									
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
							   
							   <?php
							  include('BilanConsultation.php');
							   ?>
							   
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

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>
	<script src="../../js/functions.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
