<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
	<META HTTP-EQUIV="Refresh" CONTENT="2;URL=ListePatient.php"> <!-- --Redirection vers une autre page--- -->
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
			
			$idFormulaire = $_POST['idFormulaire'];
			// FORMULAIRE MODIFICATION FICHE RESUME - ModifierPatient.php			
			if($idFormulaire=="form-resume"){
			$idPatient = $_POST['idPat'];
			$newNomPatient = $_POST['firstname'];
			$newNomPatient = $_POST['firstname'];
			$newPrenomPatient = $_POST['lastname'];
			$newHistoPatient = $_POST['histo'];
			$query=$bdd->prepare('UPDATE patients SET nom_patient = "'.$newNomPatient.'", prenom_patient = "'.$newPrenomPatient.'", historique_patho = "'.$newHistoPatient.'" WHERE id_patient = "'.$idPatient.'"');
				//$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
				$query->execute();
				$query->CloseCursor();
				
			$newidMedecin = $_POST['idMed'];
			$newdatePrescription = $_POST['datePre'];
			$newappLocomoteur = $_POST['appLoco'];
			$newsysCardio = $_POST['sysCardio'];
			$newsysRespi = $_POST['sysResp'];
			$newautreReco = $_POST['other'];
			$query=$bdd->prepare('UPDATE est_soigne_par SET id_medecin = "'.$newidMedecin.'", date_prescription = "'.$newdatePrescription.'", appLocomoteur = "'.$newappLocomoteur.'", sysCardio = "'.$newsysCardio.'", sysRespi = "'.$newsysRespi.'", autreReco = "'.$newautreReco.'" WHERE id_patient = :idPatient');
				$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
				$query->execute();
				$query->CloseCursor();
				
				$checks=$_POST['check'];
				foreach($checks as $key=>$check){
					$query=$bdd->prepare('INSERT INTO est_diagnostique(id_patient, id_pathologie) VALUES (:idPatient, :idPatho)');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->bindValue(':idPatho',$check, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
				}
				
				echo'<center><div class="alert alert-success" role="alert"> Modification effectuée </div></center>';
					
			} else 
			//FORMULAIRE MODIFICATION INFORMATIONS PATIENTS - ModifierPatient.php
				if($idFormulaire=='form-info'){
					$idPatient = $_POST['idPat'];
					$numSS = $_POST['numSS'];
				$newNomPatient = $_POST['firstname'];
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
				
				$query=$bdd->prepare('UPDATE patients SET nom_patient = "'.$newNomPatient.'", prenom_patient = "'.$newPrenomPatient.'", num_SS = "'.$numSS.'" date_naissance ="'.$newDateN.'", sexe_patient ="'.$newSexeP.'", adresse_patient ="'.$newAdress.'", CP_patient ="'.$newCP.'", ville_patient ="'.$newVille.'", tel_patient ="'.$newTel.'", email_patient="'.$newEmail.'", situation = "'.$newSitu.'", nb_enfant ="'.$newEnfant.'", profession ="'.$newProf.'" WHERE id_patient = :idPatient');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
					
				$newidMedecin = $_POST['idMed'];
				$newdatePrescription = $_POST['datePre'];
				$newappLocomoteur = $_POST['appLoco'];
				$newsysCardio = $_POST['sysCardio'];
				$newsysRespi = $_POST['sysResp'];
				$newautreReco = $_POST['other'];
				$query=$bdd->prepare('UPDATE est_soigne_par SET id_medecin = "'.$newidMedecin.'", date_prescription = "'.$newdatePrescription.'", appLocomoteur = "'.$newappLocomoteur.'", sysCardio = "'.$newsysCardio.'", sysRespi = "'.$newsysRespi.'", autreReco = "'.$newautreReco.'" WHERE id_patient = :idPatient');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
					
					echo'<center><div class="alert alert-success" role="alert"> Modification effectuée </div></center>';
				} else 
			
			//FORMULAIRE MODIFICATION ENTRETIEN INITIAL - ModifierPatient.php
				if($idFormulaire=='form-entInitial'){
				$idPatient = $_POST['idPat'];
				$newTailleInit = $_POST['taille1'];
				$newPoidsInit = $_POST['poids1'];
				$newDateInit = $_POST['dateEnt1'];
				$newIMCinit = ($newPoidsInit / ($newTailleInit * $newTailleInit))*10000;
				
				$newMassH = $_POST['massH1'];
				$newMassG = $_POST['massG1'];
				$newMassM = $_POST['massM1'];
				$newFCInit = $_POST['FCrepos1'];
				$newSatuInit = $_POST['satuRepos1'];
				$newNivAPinit = $_POST['nivAPactu'];
				$actPhy = $_POST['activitePhys'];
				$newNivCSinit = $_POST['nivCS'];
				$APante = $_POST['APante'];
				$newNivAPVouluInit = $_POST['nivAPenvisagee'];
				
				$query=$bdd->prepare('SELECT id_entretien FROM entretiens WHERE id_patient = :idPatient AND id_type_entretien = 1');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$data = $query -> fetch();
					$idEntretien1 = $data['id_entretien'];
					$query->CloseCursor();
				
				//Score RG
				$CS1 = $_POST['CS1'];
				$APL1 = $_POST['APL1'];
				$APL2 = $_POST['APL2'];
				$APL3 = $_POST['APL3'];
				$APL4 = $_POST['APL4'];
				$APQ1 = $_POST['APQ1'];
				$APQ2 = $_POST['APQ2'];
				$APQ3 = $_POST['APQ3'];
				$APQ4 = $_POST['APQ4'];
				
				$scoreTotalAPL1 = $APL1 + $APL2 + $APL3 + $APL4;
				$scoreTotalAPQ1 = $APQ1 + $APQ2 + $APQ3 + $APQ4;
				$scoreTotalRG1 = $CS1 + $scoreTotalAPL1 + $scoreTotalAPQ1;
				
				//Test March
				$dateTM1 = $_POST['dateTM1'];
				$aideTM1 = $_POST['aideTM1'];
				$FCavantTM1 = $_POST['FCavantTM1'];
				$FCapresTM1 = $_POST['FCapresTM1'];
				$FC1minTM1 = $_POST['FC1minTM1'];
				$FC2minTM1 = $_POST['FC2minTM1'];
				$SPavantTM1 = $_POST['SPavantTM1'];
				$SPapresTM1 = $_POST['SPapresTM1'];
				$SP1minTM1 = $_POST['SP1minTM1'];
				$SP2minTM1 = $_POST['SP2minTM1'];
				$BorgavantTM1 = $_POST['BorgavantTM1'];
				$BorgapresTM1 = $_POST['BorgapresTM1'];
				$Borg1minTM1 = $_POST['Borg1minTM1'];
				$Borg2minTM1 = $_POST['Borg2minTM1'];
				$DistReelleTM1 = $_POST['DistRelleTM1'];
				$NbArretTM1 = $_POST['NbArretTM1'];
				
				$query=$bdd->prepare('SELECT DATEDIFF(CURRENT_DATE, date_naissance)/365.2425 AS age, sexe_patient FROM patients WHERE id_patient = :idPatient');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$data = $query -> fetch();
					$agePatient = $data['age'];
					$sexePat = $data['sexe_patient'];
					$query->CloseCursor();
					
					if($sexePat == 0){
						$distTheo1 = (7.57*$taille1) - (5.02*$agePatient) - (1.76* $poids1) - 309;
						$pourcTheo1 = $DistReelleTM1 - $distTheo1;
					} else if($sexePat == 1){
						$distTheo1 = (2.11*$taille1) - (5.78*$agePatient) - (2.99* $poids1) + 667;
						$pourcTheo1 = $DistReelleTM1 - $distTheo1;
					}
				
				//Test equilibre
				$PiedDYO1 = $_POST['PiedDYO1'];
				$PiedDYF1 = $_POST['PiedDYF1'];
				$PiedGYO1 = $_POST['PiedGYO1'];
				$PiedGYF1 = $_POST['PiedGYF1'];
				
				//Test AD
				$NbRepet1 = $_POST['NbRepet1'];
				$FreqCard1 = $_POST['FreqCard1'];
				$FreqCard2 = $_POST['FreqCard2'];
				
				//WHOQOL
				$QDV1 = $_POST['QDV1'];
				$QDV2 = $_POST['QDV2'];
				$SPhy1 = $_POST['SPhy1'];
				$SPhy2 = $_POST['SPhy2'];
				$SPhy3 = $_POST['SPhy3'];
				$SPhy4 = $_POST['SPhy4'];
				$SPhy5 = $_POST['SPhy5'];
				$SPhy6 = $_POST['SPhy6'];
				$SPhy7 = $_POST['SPhy7'];
				$SPsy1 = $_POST['SPsy1'];
				$SPsy2 = $_POST['SPsy2'];
				$SPsy3 = $_POST['SPsy3'];
				$SPsy4 = $_POST['SPsy4'];
				$SPsy5 = $_POST['SPsy5'];
				$SPsy6 = $_POST['SPsy6'];
				$SEnv1 = $_POST['SEnv1'];
				$SEnv2 = $_POST['SEnv2'];
				$SEnv3 = $_POST['SEnv3'];
				$SEnv4 = $_POST['SEnv4'];
				$SEnv5 = $_POST['SEnv5'];
				$SEnv6 = $_POST['SEnv6'];
				$SEnv7 = $_POST['SEnv7'];
				$SEnv8 = $_POST['SEnv8'];
				$SRel1 = $_POST['SRel1'];
				$SRel2 = $_POST['SRel2'];
				$SRel3 = $_POST['SRel3'];
				
				$scoreTotQDV1 = $QDV1 + $QDV2;
				$scoreTotPhy1 = $SPhy1 + $SPhy2 + $SPhy3 + $SPhy4 + $SPhy5 + $SPhy6 + $SPhy7;
				$scoreTotPsy1 = $SPsy1 + $SPsy2 + $SPsy3 + $SPsy4 + $SPsy5 + $SPsy6;
				$scoreTotEnv1 = $SEnv1 + $SEnv2 + $SEnv3 + $SEnv4 + $SEnv5 + $SEnv6 + $SEnv7 + $SEnv8;
				$scoreTotRel1 = $SRel1 + $SRel2 + $SRel3;
				
				//Obstackes/Freins
				$checkFrein=$_POST['checkFrein'];
				foreach($checkFrein as $key=>$checkFrein){
					$query=$bdd->prepare('INSERT INTO a_pour_obstacle(id_obstacle, id_entretien) VALUES (:id_obstacle, :id_entretien)');
					$query->bindValue(':id_entretien',$idEntretien1, PDO::PARAM_STR);
					$query->bindValue(':id_obstacle',$checkFrein, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
				}
				
				//Motivations
				$checkMotiv=$_POST['checkMotiv'];
				foreach($checkMotiv as $key=>$checkMotiv){
					$query=$bdd->prepare('INSERT INTO a_pour_motivation(id_motivation, id_entretien) VALUES (:id_motivation, :id_entretien)');
					$query->bindValue(':id_entretien',$idEntretien1, PDO::PARAM_STR);
					$query->bindValue(':id_motivation',$checkMotiv, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
				}
				
				//Objectifs
				$checkObj=$_POST['checkObj'];
				foreach($checkObj as $key=>$checkObj){
					$query=$bdd->prepare('INSERT INTO a_pour_objectif(id_objectif, id_entretien) VALUES (:id_objectif, :id_entretien)');
					$query->bindValue(':id_entretien',$idEntretien1, PDO::PARAM_STR);
					$query->bindValue(':id_objectif',$checkObj, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
				}
				
				//Programme
				
				$idCentre = $_POST['idCentre'];
				$idAct = $_POST['idAct'];
				$idCreneau = $_POST['idCreneau'];
				$freq = $_POST['freq'];
				$intensite = $_POST['intensite'];
				$duree = $_POST['duree'];
				$nbseanceAFaire = $_POST['nbseanceAFaire'];
				
				
				
				//Requete modification Entretien
				$query=$bdd->prepare('UPDATE entretiens SET taille = "'.$newTailleInit.'", poids ="'.$newPoidsInit.'", IMC ="'.$newIMCinit.'", m_hydrique ="'.$newMassH.'", m_grasse ="'.$newMassG.'", m_muscu ="'.$newMassM.'", FC_repos ="'.$newFCInit.'", SPO2_repos ="'.$newSatuInit.'", niveau_AP ="'.$newNivAPinit.'",activite_actuelle ="'.$actPhy.'", niveau_CS ="'.$newNivCSinit.'", AP_anterieure="'.$APante.'", niveau_AP_souhaite ="'.$newNivAPVouluInit.'", date_entretien ="'.$newDateInit.'", RG_CS ="'.$CS1.'", RG_APL1 ="'.$APL1.'", RG_APL2 ="'.$APL2.'", RG_APL3 ="'.$APL3.'", RG_APL4 ="'.$APL4.'", RG_APQ1 ="'.$APQ1.'", RG_APQ2 ="'.$APQ2.'", RG_APQ3 ="'.$APQ3.'", RG_APQ4 ="'.$APQ4.'", scoreCS="'.$CS1.'", scoreAPL ="'.$scoreTotalAPL1.'", scoreAPQ ="'.$scoreTotalAPQ1.'", score_RG ="'.$scoreTotalRG1.'" WHERE id_patient = :idPatient AND id_type_entretien = 1');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
					
				//Requete modification Test Marche
				$query=$bdd->prepare('UPDATE test_marche SET dateTM="'.$dateTM1.'", dist_theo="'.$distTheo1.'", dist_reelle="'.$DistReelleTM1.'", pour_theo="'.$pourcTheo1.'", aide_marche="'.$aideTM1.'", FC_avant ="'.$FCavantTM1.'", FC_fin = "'.$FCapresTM1.'", FC_1min = "'.$FC1minTM1.'", FC_2min ="'.$FC2minTM1.'", SPO2_avant ="'.$SPavantTM1.'", SPO2_fin ="'.$SPapresTM1.'", SPO2_1min ="'.$SP1minTM1.'", SPO2_2min ="'.$SP2minTM1.'", Borg_avant ="'.$BorgavantTM1.'", Borg_fin ="'.$BorgapresTM1.'", Borg_1min ="'.$Borg1minTM1.'", Borg_2min ="'.$Borg2minTM1.'", nb_arrets ="'.$NbArretTM1.'" WHERE id_test_marche IN (Select id_test_marche FROM entretiens WHERE id_entretien = :idEntretien1)');
					$query->bindValue(':idEntretien1',$idEntretien1, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();	
				
				//Requete modifications Test equilibre
				$query=$bdd->prepare('UPDATE test_equilibre SET temps ="'.$PiedDYO1.'" WHERE pied= "0" AND yeux_ouverts = "0" AND id_test_equilibre IN (Select id_test_equilibre FROM a_pour_result WHERE id_entretien = :idEntretien1)');
					$query->bindValue(':idEntretien1',$idEntretien1, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();	
				$query=$bdd->prepare('UPDATE test_equilibre SET temps ="'.$PiedDYF1.'" WHERE pied= "0" AND yeux_ouverts = "1" AND id_test_equilibre IN (Select id_test_equilibre FROM a_pour_result WHERE id_entretien = :idEntretien1)');
					$query->bindValue(':idEntretien1',$idEntretien1, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();	
				$query=$bdd->prepare('UPDATE test_equilibre SET temps ="'.$PiedGYO1.'" WHERE pied= "1" AND yeux_ouverts = "0" AND id_test_equilibre IN (Select id_test_equilibre FROM a_pour_result WHERE id_entretien = :idEntretien1)');
					$query->bindValue(':idEntretien1',$idEntretien1, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();	
				$query=$bdd->prepare('UPDATE test_equilibre SET temps ="'.$PiedGYF1.'" WHERE pied= "1" AND yeux_ouverts = "1" AND id_test_equilibre IN (Select id_test_equilibre FROM a_pour_result WHERE id_entretien = :idEntretien1)');
					$query->bindValue(':idEntretien1',$idEntretien1, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
				
				//Requete modification Test Assis Debout
				$query=$bdd->prepare('UPDATE test_assis SET nb_repet ="'.$NbRepet1.'", FC_fin ="'.$FreqCard1.'", FC_2min ="'.$FreqCard2.'" WHERE id_test_assis IN (Select id_test_assis FROM entretiens WHERE id_entretien = :idEntretien1)');
					$query->bindValue(':idEntretien1',$idEntretien1, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();	
					
				//Requete modification WHOQOL
				$query=$bdd->prepare('UPDATE whoqol SET eval_qualite_vie ="'.$QDV1.'", satisfaction_sante = "'.$QDV2.'", douleur_physique = "'.$SPhy1.'", traitement_quotidien ="'.$SPhy2.'", aimer_vie ="'.$SPsy1.'", sens_vie ="'.$SPsy2.'", concentration ="'.$SPsy3.'", securite_vie ="'.$SEnv1.'", environnement_sain ="'.$SEnv2.'", apparence ="'.$SPsy4.'", energie_vie ="'.$SPhy3.'", argent ="'.$SEnv3.'", acces_info_vie ="'.$SEnv4.'", pratique_loisir ="'.$SEnv5.'", deplacement ="'.$SPhy4.'", sommeil ="'.$SPhy5.'", taches_vie ="'.$SPhy6.'", act_pro ="'.$SPhy7.'", vous ="'.$SPsy5.'", relation ="'.$SRel1.'", vie_sexuelle ="'.$SRel2.'", amis_soutien ="'.$SRel3.'", lieu_vie ="'.$SEnv6.'", acces_service ="'.$SEnv7.'", moyen_transport ="'.$SEnv8.'", sentiment_negatif ="'.$SPsy6.'", score_qdv ="'.$scoreTotQDV1.'", score_phy ="'.$scoreTotPhy1.'", score_psy ="'.$scoreTotPsy1.'", score_relation ="'.$scoreTotRel1.'", score_env ="'.$scoreTotEnv1.'" WHERE id_test_assis IN (Select id_test_assis FROM entretiens WHERE id_entretien = :idEntretien1)');
					$query->bindValue(':idEntretien1',$idEntretien1, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();	
				
				//Requete modification Doit pratiquer 
				$query=$bdd->prepare('UPDATE doit_pratiquer SET id_activite ="'.$idAct.'", frequence ="'.$freq.'", duree ="'.$duree.'", intensite ="'.$intensite.'", nb_seances_prevues ="'.$nbseanceAFaire.'" WHERE id_patient = :idPatient');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();	
				
				//Requete modification Créneaux
				$query=$bdd->prepare('UPDATE se_fait_a SET id_activite ="'.$idAct.'", id_creneau ="'.$idCreneau.'" WHERE id_activite = "'.$idAct.'"');
					$query->execute();
					$query->CloseCursor();	
				
				//Requete modification Centre
				$query=$bdd->prepare('UPDATE se_fait_dans SET id_creneau ="'.$idCreneau.'", id_centre ="'.$idCentre.'" WHERE id_creneau = "'.$idCreneau.'"');
					$query->execute();
					$query->CloseCursor();		
				
				echo'<center><div class="alert alert-success" role="alert"> Modification effectuée </div></center>';
				
				} else if($idFormulaire=='form-entIntermediaire'){
					$idPatient = $_POST['idPat'];
					$query=$bdd->prepare('SELECT id_entretien FROM entretiens WHERE id_patient = :idPatient AND id_type_entretien = 2');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$data = $query -> fetch();
					$idEntretien2 = $data['id_entretien'];
					$query->CloseCursor();
					
					$dateEnt2 = $_POST['dateEnt2'];
					$nivAP3mois = $_POST['nivAP3mois'];
					$comm = $_POST['comm'];
					$nivCS3mois = $_POST['nivCS3mois'];
					$solu = $_POST['solu'];
					$positif = $_POST['positif'];
					$negatif = $_POST['negatif'];
					$APapresProg = $_POST['APapresProg'];
					
					//Obstackes/Freins
				$checkFrein2=$_POST['checkFrein2'];
				foreach($checkFrein2 as $key=>$checkFrein2){
					$query=$bdd->prepare('INSERT INTO a_pour_obstacle(id_obstacle, id_entretien) VALUES (:id_obstacle, :id_entretien)');
					$query->bindValue(':id_entretien',$idEntretien2, PDO::PARAM_STR);
					$query->bindValue(':id_obstacle',$checkFrein2, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
				}
				
				//Motivations
				$checkMotiv2=$_POST['checkMotiv2'];
				foreach($checkMotiv2 as $key=>$checkMotiv2){
					$query=$bdd->prepare('INSERT INTO a_pour_motivation(id_motivation, id_entretien) VALUES (:id_motivation, :id_entretien)');
					$query->bindValue(':id_entretien',$idEntretien2, PDO::PARAM_STR);
					$query->bindValue(':id_motivation',$checkMoti2, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
				}
					$query=$bdd->prepare('UPDATE entretiens SET niveau_AP="'.$nivAP3mois.'", niveau_CS="'.$nivCS3mois.'", date_entretien="'.$dateEnt2.'", commentaire="'.$comm.'", solutions_freins="'.$solu.'", ressenti_positif="'.$positif.'", ressenti_negatif="'.$negatif.'", AP_envisagee_apres="'.$APapresProg.'" WHERE id_patient = :idPatient AND id_type_entretien = 2');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
					
					echo'<center><div class="alert alert-success" role="alert"> Modification effectuée </div></center>';
					
				} else if($idFormulaire=='form-entFinal'){
				$idPatient = $_POST['idPat'];
				$taille2 = $_POST['taille2'];
				$poids2 = $_POST['poids2'];
				$dateEnt3 = $_POST['dateEnt3'];
				$newIMCFinal = ($poids2 / ($taille2 * $taille2))*10000;
				
				$massH2 = $_POST['massH2'];
				$massG2 = $_POST['massG2'];
				$massM2 = $_POST['massM2'];
				$FCrepos2 = $_POST['FCrepos2'];
				$satuRepos2 = $_POST['satuRepos2'];
				$nivAP6mois = $_POST['nivAP6mois'];
				$nivCS6mois = $_POST['nivCS6mois'];				
				$comm2 = $_POST['comm2'];
				$solu2 = $_POST['solu2'];
				$positif2 = $_POST['positif2'];
				$negatif2 = $_POST['negatif2'];
				$APapresProg2 = $_POST['APapresProg2'];
				
				
				$query=$bdd->prepare('SELECT id_entretien FROM entretiens WHERE id_patient = :idPatient AND id_type_entretien = 3');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$data = $query -> fetch();
					$idEntretien3 = $data['id_entretien'];
					$query->CloseCursor();
				
				//Score RG
				$CS12 = $_POST['CS1-2'];
				$APL12 = $_POST['APL1-2'];
				$APL22 = $_POST['APL2-2'];
				$APL32 = $_POST['APL3-2'];
				$APL42 = $_POST['APL4-2'];
				$APQ12 = $_POST['APQ1-2'];
				$APQ22 = $_POST['APQ2-2'];
				$APQ32 = $_POST['APQ3-2'];
				$APQ42 = $_POST['APQ4-2'];
				
				$scoreTotalAPL2 = $APL12 + $APL22 + $APL32 + $APL42;
				$scoreTotalAPQ2 = $APQ12 + $APQ22 + $APQ32 + $APQ42;
				$scoreTotalRG2 = $CS12 + $scoreTotalAPL2 + $scoreTotalAPQ2;
				
				//Test March
				$dateTM2 = $_POST['dateTM2'];
				$aideTM2 = $_POST['aideTM2'];
				$FCavantTM2 = $_POST['FCavantTM2'];
				$FCapresTM2 = $_POST['FCapresTM2'];
				$FC1minTM2 = $_POST['FC1minTM2'];
				$FC2minTM2 = $_POST['FC2minTM2'];
				$SPavantTM2 = $_POST['SPavantTM2'];
				$SPapresTM2 = $_POST['SPapresTM2'];
				$SP1minTM2 = $_POST['SP1minTM2'];
				$SP2minTM2 = $_POST['SP2minTM2'];
				$BorgavantTM2 = $_POST['BorgavantTM2'];
				$BorgapresTM2 = $_POST['BorgapresTM2'];
				$Borg1minTM2 = $_POST['Borg1minTM2'];
				$Borg2minTM2 = $_POST['Borg2minTM2'];
				$DistReelleTM2 = $_POST['DistRelleTM2'];
				$NbArretTM2 = $_POST['NbArretTM2'];
				
				$query=$bdd->prepare('SELECT DATEDIFF(CURRENT_DATE, date_naissance)/365.2425 AS age, sexe_patient FROM patients WHERE id_patient = :idPatient');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$data = $query -> fetch();
					$agePatient2 = $data['age'];
					$sexePat2 = $data['sexe_patient'];
					$query->CloseCursor();
					
					if($sexePat2 == 0){
						$distTheo2 = (7.57*$taille2) - (5.02*$agePatient2) - (1.76* $poids2) - 309;
						$pourcTheo2 = $DistReelleTM2 - $distTheo2;
					} else if($sexePat2 == 1){
						$distTheo2= (2.11*$taille2) - (5.78*$agePatient2) - (2.99* $poids2)+ 667;
						$pourcTheo2= $DistReelleTM2 - $distTheo2;
					}
				
				//Test equilibre
				$PiedDYO2 = $_POST['PiedDYO2'];
				$PiedDYF2 = $_POST['PiedDYF2'];
				$PiedGYO2 = $_POST['PiedGYO2'];
				$PiedGYF2 = $_POST['PiedGYF2'];
				
				//Test AD
				$NbRepet2 = $_POST['NbRepet2'];
				$FreqCardF = $_POST['FreqCardF'];
				$FreqCard2min = $_POST['FreqCard2min'];
				
				//WHOQOL
				$QDV12 = $_POST['QDV1-2'];
				$QDV22 = $_POST['QDV2-2'];
				$SPhy12 = $_POST['SPhy1-2'];
				$SPhy22 = $_POST['SPhy2-2'];
				$SPhy32 = $_POST['SPhy3-2'];
				$SPhy42 = $_POST['SPhy4-2'];
				$SPhy52 = $_POST['SPhy5-2'];
				$SPhy62 = $_POST['SPhy6-2'];
				$SPhy72 = $_POST['SPhy7-2'];
				$SPsy12 = $_POST['SPsy1-2'];
				$SPsy22 = $_POST['SPsy2-2'];
				$SPsy32 = $_POST['SPsy3-2'];
				$SPsy42 = $_POST['SPsy4-2'];
				$SPsy52 = $_POST['SPsy5-2'];
				$SPsy62 = $_POST['SPsy6-2'];
				$SEnv12 = $_POST['SEnv1-2'];
				$SEnv22 = $_POST['SEnv2-2'];
				$SEnv32 = $_POST['SEnv3-2'];
				$SEnv42 = $_POST['SEnv4-2'];
				$SEnv52 = $_POST['SEnv5-2'];
				$SEnv62 = $_POST['SEnv6-2'];
				$SEnv72 = $_POST['SEnv7-2'];
				$SEnv82 = $_POST['SEnv8-2'];
				$SRel12 = $_POST['SRel1-2'];
				$SRel22 = $_POST['SRel2-2'];
				$SRel32 = $_POST['SRel3-2'];
				
				$scoreTotQDV2 = $QDV12 + $QDV22;
				$scoreTotPhy2 = $SPhy12 + $SPhy22 + $SPhy32 + $SPhy42 + $SPhy52 + $SPhy62 + $SPhy72;
				$scoreTotPsy2 = $SPsy12 + $SPsy22 + $SPsy32 + $SPsy42 + $SPsy52 + $SPsy62;
				$scoreTotEnv2 = $SEnv12 + $SEnv22 + $SEnv32 + $SEnv42 + $SEnv52 + $SEnv62 + $SEnv72 + $SEnv82;
				$scoreTotRel2 = $SRel12 + $SRel22 + $SRel32;
				
				
				//FINIR LES REQUETES + OBSTACLES ET OBJECTIFS + TESTER ! 
				
				
				//Obstackes/Freins
				$checkFrein3=$_POST['checkFrein3'];
				foreach($checkFrein3 as $key=>$checkFrein3){
					$query=$bdd->prepare('INSERT INTO a_pour_obstacle(id_obstacle, id_entretien) VALUES (:id_obstacle, :id_entretien)');
					$query->bindValue(':id_entretien',$idEntretien3, PDO::PARAM_STR);
					$query->bindValue(':id_obstacle',$checkFrein3, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
				}
				
				
				//Objectifs
				$checkObj3=$_POST['checkObj3'];
				foreach($checkObj3 as $key=>$checkObj3){
					$query=$bdd->prepare('INSERT INTO a_pour_objectif(id_objectif, id_entretien) VALUES (:id_objectif, :id_entretien)');
					$query->bindValue(':id_entretien',$idEntretien3, PDO::PARAM_STR);
					$query->bindValue(':id_objectif',$checkObj3, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
				}
				
				
				
				//Requete modification Entretien
				$query=$bdd->prepare('UPDATE entretiens SET taille = "'.$taille2.'", poids ="'.$poids2.'", IMC ="'.$newIMCFinal.'", m_hydrique ="'.$massH2.'", m_grasse ="'.$massG2.'", m_muscu ="'.$massM2.'", FC_repos ="'.$FCrepos2.'", SPO2_repos ="'.$satuRepos2.'", RG_CS ="'.$CS12.'", RG_APL1 ="'.$APL12.'", RG_APL2 ="'.$APL22.'", RG_APL3 ="'.$APL32.'", RG_APL4 ="'.$APL42.'", RG_APQ1 ="'.$APQ12.'", RG_APQ2 ="'.$APQ22.'", RG_APQ3 ="'.$APQ32.'", RG_APQ4 ="'.$APQ42.'", scoreCS="'.$CS12.'", scoreAPL ="'.$scoreTotalAPL2.'", scoreAPQ ="'.$scoreTotalAPQ2.'", score_RG ="'.$scoreTotalRG2.'" WHERE id_patient = :idPatient AND id_type_entretien = 3');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
					
				//Requete modification Test Marche
				$query=$bdd->prepare('UPDATE test_marche SET dateTM="'.$dateTM2.'", dist_theo="'.$distTheo2.'", dist_reelle="'.$DistReelleTM2.'", pour_theo="'.$pourcTheo2.'", aide_marche="'.$aideTM2.'", FC_avant ="'.$FCavantTM2.'", FC_fin = "'.$FCapresTM2.'", FC_1min = "'.$FC1minTM2.'", FC_2min ="'.$FC2minTM2.'", SPO2_avant ="'.$SPavantTM2.'", SPO2_fin ="'.$SPapresTM2.'", SPO2_1min ="'.$SP1minTM2.'", SPO2_2min ="'.$SP2minTM2.'", Borg_avant ="'.$BorgavantTM2.'", Borg_fin ="'.$BorgapresTM2.'", Borg_1min ="'.$Borg1minTM2.'", Borg_2min ="'.$Borg2minTM2.'", nb_arrets ="'.$NbArretTM2.'" WHERE id_test_marche IN (Select id_test_marche FROM entretiens WHERE id_entretien = :idEntretien3)');
					$query->bindValue(':idEntretien3',$idEntretien3, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();	
				
				//Requete modifications Test equilibre
				$query=$bdd->prepare('UPDATE test_equilibre SET temps ="'.$PiedDYO2.'" WHERE pied= "0" AND yeux_ouverts = "0" AND id_test_equilibre IN (Select id_test_equilibre FROM a_pour_result WHERE id_entretien = :idEntretien3)');
					$query->bindValue(':idEntretien3',$idEntretien3, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();	
				$query=$bdd->prepare('UPDATE test_equilibre SET temps ="'.$PiedDYF2.'" WHERE pied= "0" AND yeux_ouverts = "1" AND id_test_equilibre IN (Select id_test_equilibre FROM a_pour_result WHERE id_entretien = :idEntretien3)');
					$query->bindValue(':idEntretien3',$idEntretien3, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();	
				$query=$bdd->prepare('UPDATE test_equilibre SET temps ="'.$PiedGYO2.'" WHERE pied= "1" AND yeux_ouverts = "0" AND id_test_equilibre IN (Select id_test_equilibre FROM a_pour_result WHERE id_entretien = :idEntretien3)');
					$query->bindValue(':idEntretien3',$idEntretien3, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();	
				$query=$bdd->prepare('UPDATE test_equilibre SET temps ="'.$PiedGYF2.'" WHERE pied= "1" AND yeux_ouverts = "1" AND id_test_equilibre IN (Select id_test_equilibre FROM a_pour_result WHERE id_entretien = :idEntretien3)');
					$query->bindValue(':idEntretien3',$idEntretien3, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
				
				//Requete modification Test Assis Debout
				$query=$bdd->prepare('UPDATE test_assis SET nb_repet ="'.$NbRepet2.'", FC_fin ="'.$FreqCardF.'", FC_2min ="'.$FreqCard2min.'" WHERE id_test_assis IN (Select id_test_assis FROM entretiens WHERE id_entretien = :idEntretien3)');
					$query->bindValue(':idEntretien3',$idEntretien3, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();	
					
				//Requete modification WHOQOL
				$query=$bdd->prepare('UPDATE whoqol SET eval_qualite_vie ="'.$QDV12.'", satisfaction_sante = "'.$QDV22.'", douleur_physique = "'.$SPhy12.'", traitement_quotidien ="'.$SPhy22.'", aimer_vie ="'.$SPsy12.'", sens_vie ="'.$SPsy22.'", concentration ="'.$SPsy32.'", securite_vie ="'.$SEnv12.'", environnement_sain ="'.$SEnv22.'", apparence ="'.$SPsy42.'", energie_vie ="'.$SPhy32.'", argent ="'.$SEnv32.'", acces_info_vie ="'.$SEnv42.'", pratique_loisir ="'.$SEnv52.'", deplacement ="'.$SPhy42.'", sommeil ="'.$SPhy52.'", taches_vie ="'.$SPhy62.'", act_pro ="'.$SPhy72.'", vous ="'.$SPsy52.'", relation ="'.$SRel12.'", vie_sexuelle ="'.$SRel22.'", amis_soutien ="'.$SRel32.'", lieu_vie ="'.$SEnv62.'", acces_service ="'.$SEnv72.'", moyen_transport ="'.$SEnv82.'", sentiment_negatif ="'.$SPsy62.'", score_qdv ="'.$scoreTotQDV2.'", score_phy ="'.$scoreTotPhy2.'", score_psy ="'.$scoreTotPsy2.'", score_relation ="'.$scoreTotRel2.'", score_env ="'.$scoreTotEnv2.'" WHERE id_test_assis IN (Select id_test_assis FROM entretiens WHERE id_entretien = :idEntretien3)');
					$query->bindValue(':idEntretien3',$idEntretien3, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();	
					
					
				$query=$bdd->prepare('UPDATE entretiens SET niveau_AP="'.$nivAP6mois.'", niveau_CS="'.$nivCS6mois.'", date_entretien="'.$dateEnt3.'", commentaire="'.$comm2.'", solutions_freins="'.$solu2.'", ressenti_positif="'.$positif2.'", ressenti_negatif="'.$negatif2.'", AP_envisagee_apres="'.$APapresProg2.'" WHERE id_patient = :idPatient AND id_type_entretien = 3');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
					
				//BILAN A GENERER !!!!!!!!!!!	
				
				// REQUETE ENTRETIEN1
									$query=$bdd->prepare('SELECT id_patient, id_entretien, taille, poids, FC_repos, SPO2_repos, m_grasse, m_hydrique, m_muscu, score_RG, IMC, niveau_AP, niveau_CS, id_type_entretien, type_entretien FROM patients JOIN entretiens USING(id_patient) JOIN type_entretien USING(id_type_entretien) WHERE id_patient = :idPatient AND type_entretien = "Entretien initial"');
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
									$scoreRG1 = $data['score_RG'];
									$imc1 = $data['IMC'];
									$nivAP1 = $data['niveau_AP'];
									$nivCS1 = $data['niveau_CS'];
									
									
									$query->CloseCursor();
								
								// REQUETE TESTMARCHE1
									$query=$bdd->prepare('SELECT id_test_marche, dist_theo, dist_reelle, pour_theo, id_entretien FROM test_marche JOIN entretiens USING(id_test_marche) WHERE id_entretien = :id_entretien1');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									
									
									$distTheo = $data['dist_theo'];
									$distReelle = $data['dist_reelle'];
									$pourTheo = $data['pour_theo'];
								
									
									
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
									
									// REQUETE ENTRETIEN3
									$query=$bdd->prepare('SELECT id_patient, id_entretien, taille, poids, FC_repos, SPO2_repos, m_grasse, m_hydrique, m_muscu, score_RG, IMC, niveau_AP, niveau_CS, id_type_entretien, type_entretien FROM patients JOIN entretiens USING(id_patient) JOIN type_entretien USING(id_type_entretien) WHERE id_patient = :idPatient AND type_entretien = "Entretien final"');
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
									$scoreRG3 = $data['score_RG'];
									$imc3 = $data['IMC'];
									$nivAP3 = $data['niveau_AP'];
									$nivCS3 = $data['niveau_CS'];
									
									$query->CloseCursor();
								
								// REQUETE TESTMARCHE2
									$query=$bdd->prepare('SELECT id_test_marche, dist_theo, dist_reelle, pour_theo, id_entretien FROM test_marche JOIN entretiens USING(id_test_marche) WHERE id_entretien = :id_entretien3');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									
									
									$distTheo2 = $data['dist_theo'];
									$distReelle2 = $data['dist_reelle'];
									$pourTheo2 = $data['pour_theo'];						
									
									
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
				
				
								$deltaTaille = $taille3 - $taille1;
								$deltaPoids = $poids3 - $poids1;
								$deltaIMC = $imc3 - $imc1;
								$deltaMH = $mhydrique3 - $mhydrique1;
								$deltaMG = $mgrasse3 - $mgrasse1;
								$deltaMM = $mmuscu3 - $mmuscu1;
								$deltaFC = $FC_repos3 - $FC_repos1;
								$deltaSP = $SPO2_repos3 - $SPO2_repos1;
								$deltaAP = $nivAP3 - $nivAP1;
								$deltaCS = $nivCS3 - $nivCS1;
								$deltaRG = $scoreRG3 - $scoreRG1;
								$deltaTDMDist = $distReelle2 - $distReelle1;
								$deltaTDMPour = $pourTheo2 - $pourTheo1;
								$deltaPDYO = $tempsPDYO2 - $tempsPDYO1;
								$deltaPDYF = $tempsPDYF2 - $tempsPDYF1;
								$deltaPGYO = $tempsPGYO2 - $tempsPGYO1;
								$deltaPGYF = $tempsPGYF2 - $tempsPGYF1;
								$deltaADrepet = $nbRepet2 - $nbRepet1;
								$deltaQDV = $scoreQDV2 - $scoreQDV1;
								$deltaPhy = $scorePHY2 - $scorePHY1;
								$deltaPsy = $scorePSY2 - $scorePSY1;
								$deltaRel = $scoreREL2 - $scoreREL1;
								$deltaEnv = $scoreENV2 - $scoreENV1;
								
								
								
								$query=$bdd->prepare('UPDATE stats_perso SET delta_poids ="'.$deltaPoids.'", delta_taille ="'.$deltaTaille.'", delta_IMC ="'.$deltaIMC.'", delta_m_grasse ="'.$deltaMG.'", delta_m_hydrique ="'.$deltaMH.'", delta_m_muscu ="'.$deltaMM.'",
								delta_FC_repos ="'.$deltaFC.'", delta_SPO2_repos ="'.$deltaSP.'", delta_RG ="'.$deltaRG.'", delta_TDM_distance ="'.$deltaTDMDist.'", delta_TDM_theo ="'.$deltaTDMPour.'", delta_D_YO ="'.$deltaPDYO.'", 
								delta_D_YF ="'.$deltaPDYF.'", delta_G_YO ="'.$deltaPGYO.'", delta_G_YF ="'.$deltaPGYF.'", delta_assis_repet ="'.$deltaADrepet.'", delta_WHOQOL_qdv ="'.$deltaQDV.'", delta_WHOQOL_phy ="'.$deltaPhy.'", 
								delta_WHOQOL_psy ="'.$deltaPsy.'", delta_WHOQOL_relation ="'.$deltaRel.'", delta_WHOQOL_env ="'.$deltaEnv.'", delta_CS ="'.$deltaCS.'", delta_AP ="'.$deltaAP.'" WHERE id_patient ="'.$idPatient.'"');
								$query->execute();
								$query->CloseCursor();
				
				
				
				echo'<center><div class="alert alert-success" role="alert"> Modification effectuée </div></center>';	
					
				} else {
					
				echo'<center><div class="alert alert-danger" role="alert"> Impossible d\'effectuer les changements </div></center>';
				}

			// test pour commit
							
								?>
		</div>
	</body>
</html>