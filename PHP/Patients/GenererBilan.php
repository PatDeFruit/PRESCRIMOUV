<?php
//Cette fonction doit être appelée avant tout code html
		session_start();

		//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
		include("../../BDD/variableSession.php");
		include("../../BDD/connexionBDD.php");
		

//Récupération des variables
$idPatient = $_GET['idPatient'];
$today = date("d-m-Y"); 

//Requêtes
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
		

		// REQUETE PATIENT
								$query=$bdd->prepare('SELECT id_patient, nom_patient, prenom_patient, DATEDIFF(CURRENT_DATE, date_naissance)/365.2425 AS age, id_coordinateur, id_statut FROM patients WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								$data = $query->fetch();
								
								$nomPatient = $data['nom_patient'];
								$prenomPatient = $data['prenom_patient'];
								$agePatient = round($data['age']);
								$idCoord = $data['id_coordinateur'];
								
								$query->CloseCursor();
								
								// REQUETE COORDINATEUR
								$query=$bdd->prepare('SELECT id_coordinateur, nom_coordinateur, prenom_coordinateur, email_coordinateur, tel_coordinateur, territoire FROM coordinateur WHERE id_coordinateur = :idCoord');
								$query->bindValue(':idCoord',$idCoord, PDO::PARAM_STR);
								$query->execute();
								$data = $query->fetch();
								
								$nomCoord = $data['nom_coordinateur'];
								$prenomCoor = $data['prenom_coordinateur'];
								$emailCoord = $data['email_coordinateur'];
								$telCoord = $data['tel_coordinateur'];
								$territoire = $data['territoire'];
								
								$query->CloseCursor();
								
								// REQUETE MEDECIN
								$query=$bdd->prepare('SELECT id_patient, id_medecin, nom_medecin, prenom_medecin, date_prescription FROM patients JOIN est_soigne_par USING(id_patient) JOIN medecins USING(id_medecin) WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								$data = $query->fetch();
								
								$nomMedecin = $data['nom_medecin'];
								$prenomMedecin = $data['prenom_medecin'];
								$datePrescription = $data['date_prescription'];
								
								
								$query->CloseCursor();
								
								// REQUETE ENTRETIEN1
									$query=$bdd->prepare('SELECT id_patient, id_entretien, taille, poids, FC_repos, SPO2_repos, m_grasse, m_hydrique, m_muscu, score_RG, IMC, niveau_AP, niveau_AP_souhaite, niveau_CS, date_entretien, id_type_entretien, type_entretien, capacite_aerobie, pourc_mets FROM patients JOIN entretiens USING(id_patient) JOIN type_entretien USING(id_type_entretien) WHERE id_patient = :idPatient AND type_entretien = "Entretien initial"');
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
									$nivAPvoulue1 = $data['niveau_AP_souhaite'];
									$nivCS1 = $data['niveau_CS'];
									$dateEntretien1 = $data['date_entretien'];
									$capacite_aerobie = $data['capacite_aerobie'];
									$pourc_mets = $data['pourc_mets'];

									$query->CloseCursor();
								
								// REQUETE TESTMARCHE1
									$query=$bdd->prepare('SELECT id_test_marche, dist_reelle, pour_theo, id_entretien FROM test_marche JOIN entretiens USING(id_test_marche) WHERE id_entretien = :id_entretien1');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									
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
									$query=$bdd->prepare('SELECT id_test_assis, nb_repet, id_entretien FROM test_assis JOIN entretiens USING(id_test_assis) WHERE id_entretien = :id_entretien1');
									$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$nbRepet = $data['nb_repet'];
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
									$query=$bdd->prepare('SELECT id_patient, id_entretien, date_entretien, id_type_entretien, type_entretien FROM patients JOIN entretiens USING(id_patient) JOIN type_entretien USING(id_type_entretien) WHERE id_patient = :idPatient AND type_entretien = "Entretien intermédiaire"');
									$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									
									$id_entretien2 = $data['id_entretien'];
									$dateEntretien2 = $data['date_entretien'];
									
									$query->CloseCursor();
		
		
		// REQUETE ENTRETIEN3
									$query=$bdd->prepare('SELECT id_patient, id_entretien, taille, poids, FC_repos, SPO2_repos, m_grasse, m_hydrique, m_muscu, score_RG, IMC, niveau_AP, niveau_CS, date_entretien, id_type_entretien, type_entretien, capacite_aerobie, pourc_mets FROM patients JOIN entretiens USING(id_patient) JOIN type_entretien USING(id_type_entretien) WHERE id_patient = :idPatient AND type_entretien = "Entretien final"');
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
									$dateEntretien3 = $data['date_entretien'];
									$capacite_aerobie2 = $data['capacite_aerobie'];
									$pourc_mets2 = $data['pourc_mets'];
									
									
									$query->CloseCursor();
								
								// REQUETE TESTMARCHE2
									$query=$bdd->prepare('SELECT id_test_marche, dist_reelle, pour_theo, id_entretien FROM test_marche JOIN entretiens USING(id_test_marche) WHERE id_entretien = :id_entretien3');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									
									
									$distReelle2 = $data['dist_reelle'];
									$pourTheo2 = $data['pour_theo'];
									
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
									$query=$bdd->prepare('SELECT id_test_assis, nb_repet, id_entretien FROM test_assis JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien3');
									$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
									$query->execute();
									$data = $query->fetch();
									$nbRepet2 = $data['nb_repet'];
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

								//OBSTACLES
								$query=$bdd->prepare('SELECT id_obstacle, obstacle, id_entretien FROM obstacles JOIN a_pour_obstacle USING(id_obstacle) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								while($data = $query->fetch()){
										$arrayObs[]=$data;
								}
								for($i=0; $i<sizeof($arrayObs); $i++){
									${'frein'.$i} = $arrayObs[$i]['obstacle'];
								}
								$query->CloseCursor();
							
									//OBJECTIFS
								$query=$bdd->prepare('SELECT id_objectif, objectif, id_entretien FROM objectifs JOIN a_pour_objectif USING(id_objectif) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								while($data = $query->fetch()){
										$arrayObj[]=$data;
								}
								for($i=0; $i<sizeof($arrayObj); $i++){
									${'objectif'.$i} = $arrayObj[$i]['objectif'];
								}
								$query->CloseCursor();

								
								// REQUETE ACTIVITE
									$query=$bdd->prepare('SELECT id_patient, id_activite, activite, id_creneau, jour_creneau, heure_creneau_debut, heure_creneau_fin, id_centre, nom_centre FROM doit_pratiquer JOIN activites USING(id_activite) JOIN se_fait_a USING(id_activite) JOIN creneaux USING(id_creneau) JOIN se_fait_dans USING(id_creneau) JOIN centres USING(id_centre) WHERE id_patient = :idPatient');
									$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
									$query->execute();                  
									$data = $query->fetch();
									$activite = $data['activite'];
									$jour_creneau = $data['jour_creneau'];
									$heure_creneau_debut = $data['heure_creneau_debut'];
									$heure_creneau_fin = $data['heure_creneau_fin'];
									$nom_centre = $data['nom_centre'];
								

// Standard inclusions     
include("pChart/pData.class");  
include("pChart/pChart.class");  
  /*------------COMPOSITION CORPORELLE ----------------*/
// Dataset definition   
$DataSet = new pData;  
$DataSet->AddPoint(array($taille1, $taille3), "Serie1");
$DataSet->AddPoint(array($poids1, $poids3), "Serie2"); 
$DataSet->AddPoint(array($imc1, $imc3), "Serie3"); 
$DataSet->AddPoint(array($mgrasse1, $mgrasse3), "Serie4"); 
$DataSet->AddPoint(array($mhydrique1, $mhydrique3), "Serie5"); 
$DataSet->AddPoint(array($mmuscu1, $mmuscu3), "Serie6"); 
$DataSet->AddAllSeries();    
$DataSet->SetSerieName("Taille","Serie1");  
$DataSet->SetSerieName("Poids","Serie2");  
$DataSet->SetSerieName("IMC","Serie3");  
$DataSet->SetSerieName("%Masse Grasse","Serie4");  
$DataSet->SetSerieName("%Masse Hydrique","Serie5");  
$DataSet->SetSerieName("%Masse Musculaire","Serie6");  
  
// Initialise the graph  
$Test = new pChart(700,250); 
$Test->setColorPalette(0,0,0,255); 
$Test->setFontProperties("Fonts/tahoma.ttf",10);  
$Test->setGraphArea(40,30,500,200);  
$Test->drawGraphArea(252,252,252);  
$Test->drawScale($DataSet->GetData(),$DataSet->GetDataDescription(),SCALE_NORMAL,150,150,150,TRUE,0,2);  
$Test->drawGrid(4,TRUE,230,230,230,255);  
  
// Draw the line graph  
$Test->drawLineGraph($DataSet->GetData(),$DataSet->GetDataDescription());  
$Test->drawPlotGraph($DataSet->GetData(),$DataSet->GetDataDescription(),3,2,255,255,255);  
  
// Finish the graph  
$Test->setFontProperties("Fonts/tahoma.ttf",8);  
$Test->drawLegend(525,25,$DataSet->GetDataDescription(),255,255,255);  
$Test->setFontProperties("Fonts/tahoma.ttf",10);  
$Test->Render("compoCorporelle.png"); 

/*--------------EVOLUTION AP-----------*/

// Dataset definition   
$DataSet2 = new pData;  
$DataSet2->AddPoint(array($nivAP1, $nivAP3), "Serie1");
$DataSet2->AddAllSeries();    
$DataSet2->SetSerieName("Niveau AP","Serie1");  
  
// Initialise the graph  
$Test2 = new pChart(700,250); 
$Test2->setColorPalette(1,0,0,255); 
$Test2->setFontProperties("Fonts/tahoma.ttf",10);  
$Test2->setGraphArea(40,30,500,200);  
$Test2->drawGraphArea(252,252,252);  
$Test2->drawScale($DataSet2->GetData(),$DataSet2->GetDataDescription(),SCALE_NORMAL,150,150,150,TRUE,0,2);  
$Test2->drawGrid(4,TRUE,230,230,230,255);  
  
// Draw the line graph  
$Test2->drawLineGraph($DataSet2->GetData(),$DataSet2->GetDataDescription());  
$Test2->drawPlotGraph($DataSet2->GetData(),$DataSet2->GetDataDescription(),3,2,255,255,255);  
  
// Finish the graph  
$Test2->setFontProperties("Fonts/tahoma.ttf",8);  
$Test2->drawLegend(525,25,$DataSet2->GetDataDescription(),255,255,255);  
$Test2->setFontProperties("Fonts/tahoma.ttf",10);  
$Test2->Render("evolAP.png"); 

/*--------------EVOLUTION CS-----------*/

// Dataset definition   
$DataSet3 = new pData;  
$DataSet3->AddPoint(array($nivCS1, $nivCS3), "Serie1");
$DataSet3->AddAllSeries();    
$DataSet3->SetSerieName("Niveau AP","Serie1");  
  
// Initialise the graph  
$Test3 = new pChart(700,250); 
$Test3->setColorPalette(0,255,0,0); 
$Test3->setFontProperties("Fonts/tahoma.ttf",10);  
$Test3->setGraphArea(40,30,500,200);  
$Test3->drawGraphArea(252,252,252);  
$Test3->drawScale($DataSet3->GetData(),$DataSet3->GetDataDescription(),SCALE_NORMAL,150,150,150,TRUE,0,2);  
$Test3->drawGrid(4,TRUE,230,230,230,255);  
  
// Draw the line graph  
$Test3->drawLineGraph($DataSet3->GetData(),$DataSet3->GetDataDescription());  
$Test3->drawPlotGraph($DataSet3->GetData(),$DataSet3->GetDataDescription(),3,2,255,255,255);  
  
// Finish the graph  
$Test3->setFontProperties("Fonts/tahoma.ttf",8);  
$Test3->drawLegend(525,25,$DataSet3->GetDataDescription(),255,255,255);  
$Test3->setFontProperties("Fonts/tahoma.ttf",10);  
$Test3->Render("evolCS.png"); 

    $content = "
	<style type=\"text/css\">
		.div-footer{
			color: #4C8AD3;
			text-align: center;
			font-size: 10px;
		}
		.a-lattention{
			text-align: left;
		}
		.date-jour{
			text-align: right;
		}
		.tableau-recap td, tr{
			border: 0.5px;
			border-color: #D0D0D0;
		}

		.table-res.one {									 
		margin-bottom: 3em;	
		border-collapse:collapse;	}	

		.table-res td {							
		text-align: center;
		height: 20px;}		

		.table-res th {							 
		text-align: center;					
		background-color: #e8503a;	
		height: 30px;
		color: white;		}		

		.table-res tr {	
		height: 30px;	}

		.ligne-impaire{		     
			 background-color: #eee;		}
	</style>
<page backtop=\"30mm\" backbottom=\"20mm\" backleft=\"10mm\" backright=\"10mm\">
	<page_header>
	<table>
		<tr>
			<td>
				<img src=\"../../images/prescrimouv.png\"/>
			</td>
			<td>
				<h3>Bilan du Programme pour le patient $prenomPatient $nomPatient </h3>
			</td>
		</tr>
	</table>
	</page_header>
	
	<page_footer>
	<div class=\"div-footer\">
		$prenomCoor $nomCoord: coordinateur Prescrimouv' - Bouger sur ordonnance.
		<br>
		Tél : 0$telCoord - Mail : $emailCoord
	</div>
	</page_footer>
		<div class=\"a-lattention\">
			A l'attention du Dr $nomMedecin
			</div>
			<div class=\"date-jour\">
			Poitiers le $today
		</div>
		<br />
	
		<div>
			Merci d’avoir orienté $prenomPatient $nomPatient, $agePatient ans, vers le dispositif « Prescrimouv’ - Bouger sur ordonnance ». Suite à votre prescription établie le $datePrescription, le bénéficiaire $prenomPatient $nomPatient a bénéficié d'un premier entretien le $dateEntretien1, centré sur l'activité physique (AP), incluant l'exploration du niveau d'activité physique et des comportements sédentaires, les barrières perçus à l'engagement dans l'AP, un test de marche de 6 minutes, un test d'aérobe et l'élaboration d'un programme d'AP tenant compte des motivations, des capacités, des objectifs et des besoins en AP de $prenomPatient $nomPatient.
			<br />
			<br />
			A la suite de cet entretien, un rendez-vous intermédiaire a été réalisé le $dateEntretien2 pendant lequel un bilan des bénéfices perçu de l'atteinte est objectifs et de la poursuite et ajustements du programme ont été évalués.
			<br /><br />
			Pour conclure ce programme, un dernier entretien, réalisé le $dateEntretien3, suivant la même trame que le premier entretien a été effectué. 
			<br />
			<br />
			Vous trouverez ci-dessous, les points essentiels du premier entretien ainsi qu'un bilan complet de l'évolution du bénéficiaire pendant le programme.
			</div>
			<h4> Synthèse Entretien n° 1 - $dateEntretien1 </h4>
			<table style=\"width: 100%\" class=\"tableau-recap\">
				<tr>
					<td style=\"width: 50%\">
					<i>Echelles perception de l’Activité Physique (AP) :</i>
					<br/><br/><br/>
						Niveau d'Activité Physique perçu
						<br/><br/>
						$nivAP1/10
						<br/><br/><br/>
						Niveau d'Activité Physique souhaité
						<br/><br/>
						$nivAPvoulue1/10
						<br/><br/>
					</td>
					<td style=\"width: 50%\">
					<i>Le décalage entre l’AP perçue et l’AP souhaitée est expliqué par $prenomPatient $nomPatient par les barrières suivantes :</i>
						<ul>
							<li>$frein0</li>
							<li>$frein1</li>
							<li>$frein2</li>
							<li>$frein3</li>
							<li>$frein4</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td style=\"width: 50%\">
					<i>Les objectifs à atteindre exprimées par $prenomPatient $nomPatient dans le cadre de cette mise en pratique sont les suivants : </i>
						<ul>
							<li>$objectif0</li>
							<li>$objectif1</li>
							<li>$objectif2</li>
							<li>$objectif3</li>
							<li>$objectif4</li>
						</ul>
					</td>
					<td style=\"width: 50%\">
					<i>Résultats des tests et questionnaires</i>
						<br/><br/><br/>
						Comportements sédentaire : CS heures/jour
						<br/><br/>
						Ricci & Gagnon : $scoreRG1
						<br/><br/>
						WHOQOL - Qualité de Vie : $scoreQDV1
						<br/><br/>
						WHOQOL - Santé Physique : $scorePHY1
						<br/><br/>
						WHOQOL - Santé Psychologique : $scorePSY1
						<br/><br/>
						WHOQOL - Relations Sociales : $scoreREL1
						<br/><br/>
						WHOQOL - Environnement : $scoreENV1
						<br/><br/>
					</td>
				</tr>
			</table>
			<div>
			<i>Le programme </i>
			<br /><br />
			Activité principale : $activite
			<br /><br />
			Ce programme se fera au sein de la structure $nom_centre le $jour_creneau de $heure_creneau_debut à $heure_creneau_fin.
			<br />			
			</div>
			<br /><br /><br />
			<h3>Evolution du bénéficiaire</h3>
			<br />
			<h4>Données générales</h4>
			<br />
			<table style=\"width: 100%; text-align: center;\" class=\"table-res\">
			<tr class=\"ligne-impaire\">
				<th style=\"width: 25%\"></th>
				<th style=\"width: 25%\">A l'entretien initial</th>
				<th style=\"width: 25%\">A l'entretien final</th>
				<th style=\"width: 25%\">Evolution</th>
			</tr>
			<tr>
				<td style=\"width: 25%\">Taille</td>
				<td style=\"width: 25%\">$taille1 m</td>
				<td style=\"width: 25%\">$taille3 m</td>
				<td style=\"width: 25%\">$deltaTaille m</td>
			</tr>
			<tr class=\"ligne-impaire\">
				<td style=\"width: 25%\">Poids</td>
				<td style=\"width: 25%\">$poids1 kg</td>
				<td style=\"width: 25%\">$poids3 kg</td>
				<td style=\"width: 25%\">$deltaPoids kg</td>
			</tr>
			<tr>
				<td style=\"width: 25%\">IMC</td>
				<td style=\"width: 25%\">$imc1 kg/m²</td>
				<td style=\"width: 25%\">$imc3 kg/m²</td>
				<td style=\"width: 25%\">$deltaIMC kg/m²</td>
			</tr>
			<tr class=\"ligne-impaire\">
				<td style=\"width: 25%\">Masse Hydrique</td>
				<td style=\"width: 25%\">$mhydrique1 %</td>
				<td style=\"width: 25%\">$mhydrique3 %</td>
				<td style=\"width: 25%\">$deltaMH %</td>
			</tr>
			<tr>
				<td style=\"width: 25%\">Masse Grasse</td>
				<td style=\"width: 25%\">$mgrasse1 %</td>
				<td style=\"width: 25%\">$mgrasse3 %</td>
				<td style=\"width: 25%\">$deltaMG %</td>
			</tr>
			<tr class=\"ligne-impaire\">
				<td style=\"width: 25%\">Masse Musculaire</td>
				<td style=\"width: 25%\">$mmuscu1 %</td>
				<td style=\"width: 25%\">$mmuscu3 %</td>
				<td style=\"width: 25%\">$deltaMM %</td>
			</tr>
			</table>
			<br />
			<h4>Evolution de la composition corporelle</h4>
				<img src=\"compoCorporelle.png\" />
			<br />
			<table style=\"width: 100%; text-align: center;\" class=\"table-res\">
			<tr class=\"ligne-impaire\">
				<th style=\"width: 25%\"></th>
				<th style=\"width: 25%\">A l'entretien initial</th>
				<th style=\"width: 25%\">A l'entretien final</th>
				<th style=\"width: 25%\">Evolution</th>
			</tr>
			<tr>
				<td style=\"width: 25%\">Fréquence Cardiaque au repos</td>
				<td style=\"width: 25%\">$FC_repos1 bpm</td>
				<td style=\"width: 25%\">$FC_repos3 bpm</td>
				<td style=\"width: 25%\">$deltaFC bpm</td>
			</tr>
			<tr class=\"ligne-impaire\">
				<td style=\"width: 25%\">Saturation en Oxygène au repos</td>
				<td style=\"width: 25%\">$SPO2_repos1 %</td>
				<td style=\"width: 25%\">$SPO2_repos3 %</td>
				<td style=\"width: 25%\">$deltaSP %</td>
			</tr>
			</table>
			<br/>
			<h4>Evolution du niveau d'Activité Physique perçu</h4>
				<img src=\"evolAP.png\" />
			<br />
			<h4>Evolution du niveau de Comportements Sédentaires</h4>
				<img src=\"evolCS.png\" />
			<br />
			<h4>Résultats des tests de qualité de vie</h4>
			<br />
			<table style=\"width: 100%; text-align: center;\" class=\"table-res\">
			<tr >
				<th style=\"width: 25%\"></th>
				<th style=\"width: 25%\">A l'entretien initial</th>
				<th style=\"width: 25%\">A l'entretien final</th>
				<th style=\"width: 25%\">Evolution</th>
			</tr>
			<tr>
				<td style=\"width: 25%\">Score Ricci & Gagnon </td>
				<td style=\"width: 25%\">$scoreRG1</td>
				<td style=\"width: 25%\">$scoreRG3</td>
				<td style=\"width: 25%\">$deltaRG</td>
			</tr>
			<tr class=\"ligne-impaire\">
				<td style=\"width: 25%\">WHOQOL - Qualité de vie</td>
				<td style=\"width: 25%\">$scoreQDV1</td>
				<td style=\"width: 25%\">$scoreQDV2</td>
				<td style=\"width: 25%\">$deltaQDV</td>
			</tr>
			<tr>
				<td style=\"width: 25%\">WHOQOL - Santé Physique</td>
				<td style=\"width: 25%\">$scorePHY1</td>
				<td style=\"width: 25%\">$scorePHY2</td>
				<td style=\"width: 25%\">$deltaPhy</td>
			</tr>
			<tr class=\"ligne-impaire\">
				<td style=\"width: 25%\">WHOQOL - Santé Psychologique</td>
				<td style=\"width: 25%\">$scorePSY1</td>
				<td style=\"width: 25%\">$scorePSY2</td>
				<td style=\"width: 25%\">$deltaPsy</td>
			</tr>
			<tr>
				<td style=\"width: 25%\">WHOQOL - Relations sociales</td>
				<td style=\"width: 25%\">$scoreREL1</td>
				<td style=\"width: 25%\">$scoreREL2</td>
				<td style=\"width: 25%\">$deltaRel</td>
			</tr>
			<tr class=\"ligne-impaire\">
				<td style=\"width: 25%\">WHOQOL - Environnement</td>
				<td style=\"width: 25%\">$scoreENV1</td>
				<td style=\"width: 25%\">$scoreENV2</td>
				<td style=\"width: 25%\">$deltaEnvi</td>
			</tr>
			</table>
			<br />
			<h4>Résultats du test de marche</h4>
			<br />
			<table style=\"width: 100%; text-align: center;\" class=\"table-res\">
			<tr >
				<th style=\"width: 25%\"></th>
				<th style=\"width: 25%\">A l'entretien initial</th>
				<th style=\"width: 25%\">A l'entretien final</th>
				<th style=\"width: 25%\">Evolution</th>
			</tr>
			<tr>
				<td style=\"width: 25%\">Distance réelle parcourue</td>
				<td style=\"width: 25%\">$distReelle m</td>
				<td style=\"width: 25%\">$distReelle2 m</td>
				<td style=\"width: 25%\">$deltaTDMDist m</td>
			</tr>
			<tr class=\"ligne-impaire\">
				<td style=\"width: 25%\">Pourcentage théorique</td>
				<td style=\"width: 25%\">$pourTheo %</td>
				<td style=\"width: 25%\">$pourTheo2 %</td>
				<td style=\"width: 25%\">$deltaTDMPour %</td>
			</tr>
			</table>
			<br />
			<h4>Résultats du test d'aérobie</h4>
			<br />
			<table style=\"width: 100%; text-align: center;\" class=\"table-res\">
			<tr >
				<th style=\"width: 25%\"></th>
				<th style=\"width: 25%\">A l'entretien initial</th>
				<th style=\"width: 25%\">A l'entretien final</th>
				<th style=\"width: 25%\">Evolution</th>
			</tr>
			<tr>
				<td style=\"width: 25%\">Capacité aérobie</td>
				<td style=\"width: 25%\">$capacite_aerobie METs</td>
				<td style=\"width: 25%\">$capacite_aerobie2 METs</td>
				<td style=\"width: 25%\">$deltaAero METs</td>
			</tr>
			<tr class=\"ligne-impaire\">
				<td style=\"width: 25%\">Pourcentage METs-Santé</td>
				<td style=\"width: 25%\">$pourc_mets %</td>
				<td style=\"width: 25%\">$pourc_mets2 %</td>
				<td style=\"width: 25%\">$deltaMETS %</td>
			</tr>
			</table>
			<br />
			<h4>Résultats du test d'équilibre</h4>
			<br />
			<table style=\"width: 100%; text-align: center;\" class=\"table-res\">
			<tr >
				<th style=\"width: 25%\"></th>
				<th style=\"width: 25%\">A l'entretien initial</th>
				<th style=\"width: 25%\">A l'entretien final</th>
				<th style=\"width: 25%\">Evolution</th>
			</tr>
			<tr>
				<td style=\"width: 25%\">Temps Pied Droit Yeux Ouverts</td>
				<td style=\"width: 25%\">$tempsPDYO1 s</td>
				<td style=\"width: 25%\">$tempsPDYO2 s</td>
				<td style=\"width: 25%\">$deltaPDYO s</td>
			</tr>
			<tr class=\"ligne-impaire\">
				<td style=\"width: 25%\">Temps Pied Droit Yeux Fermés</td>
				<td style=\"width: 25%\">$tempsPDYF1 s</td>
				<td style=\"width: 25%\">$tempsPDYF2 s</td>
				<td style=\"width: 25%\">$deltaPDYF s</td>
			</tr>
			<tr>
				<td style=\"width: 25%\">Temps Pied Gauche Yeux Ouverts</td>
				<td style=\"width: 25%\">$tempsPGYO1 s</td>
				<td style=\"width: 25%\">$tempsPGYO2 s</td>
				<td style=\"width: 25%\">$deltaPGYO s</td>
			</tr>
			<tr class=\"ligne-impaire\">
				<td style=\"width: 25%\">Temps Pied Gauche Yeux Fermés</td>
				<td style=\"width: 25%\">$tempsPGYF1 s</td>
				<td style=\"width: 25%\">$tempsPGYF2 s</td>
				<td style=\"width: 25%\">$deltaPGYF s</td>
			</tr>
			</table>
			<br />
			<h4>Résultats du test Assis/Debout</h4>
			<br />
			<table style=\"width: 100%; text-align: center;\" class=\"table-res\">
			<tr >
				<th style=\"width: 25%\"></th>
				<th style=\"width: 25%\">A l'entretien initial</th>
				<th style=\"width: 25%\">A l'entretien final</th>
				<th style=\"width: 25%\">Evolution</th>
			</tr>
			<tr>
				<td style=\"width: 25%\">Nombre de répétitions</td>
				<td style=\"width: 25%\">$nbRepet s</td>
				<td style=\"width: 25%\">$nbRepet2 s</td>
				<td style=\"width: 25%\">$deltaADrepet s</td>
			</tr>
			</table>
			<br />
			<div>
			Je vous adresse, Docteur, mes sincères salutations.
		</div>
		<div class=\"date-jour\">
		$prenomCoor $nomCoord
		<br />
		Coordinateur Prescrimouv du territoire de $territoire
		</div>
</page>";
    
     ob_end_clean();
    require_once(__DIR__ . '/html2pdf/vendor/autoload.php'); //donner ici le chemin de autoload.php
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('BilanPrescrimouv.pdf');
?>