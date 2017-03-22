<?php
/**
 * HTML2PDF Library - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2016 Laurent MINGUET
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */
    // get the HTML
    ob_start();
	include("../../BDD/connexionBDD.php");
	$idPatient = $_GET['idPatient'];
	$today = date("d-m-Y"); 
	
	
	// Récupération des infos du patient choisi
	$query=$bdd->prepare('SELECT id_patient, nom_patient, prenom_patient, DATEDIFF(CURRENT_DATE, date_naissance)/365.2425 AS age, id_coordinateur, id_statut FROM patients WHERE id_patient = :idPatient');
	$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
	$query->execute();
	$data = $query->fetch();
	$nomPatient = $data['nom_patient'];
	$prenomPatient = $data['prenom_patient'];
	$agePatient = round($data['age']);
	$idCoord = $data['id_coordinateur'];
	$query->CloseCursor();
								
	// Récupération des infos du coordinateur en charge
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
								
	// Récupération des infos du médecin
	$query=$bdd->prepare('SELECT id_patient, id_medecin, nom_medecin, prenom_medecin, date_prescription FROM patients JOIN est_soigne_par USING(id_patient) JOIN medecins USING(id_medecin) WHERE id_patient = :idPatient');
	$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
	$query->execute();
	$data = $query->fetch();
	$nomMedecin = $data['nom_medecin'];
	$prenomMedecin = $data['prenom_medecin'];
	$datePrescription = $data['date_prescription'];
	$query->CloseCursor();
								
	// Récupération des infos du premier entretien
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
	
	// Récupération des infos concernant les statistiques du patient
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
		

		// Récupération des infos du premier test de marche
			$query=$bdd->prepare('SELECT id_test_marche, dist_reelle, pour_theo, id_entretien FROM test_marche JOIN entretiens USING(id_test_marche) WHERE id_entretien = :id_entretien1');
			$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			$distReelle = $data['dist_reelle'];
			$pourTheo = $data['pour_theo'];
			$query->CloseCursor();
								
		// Récupération des infos du premier test d'équilibre
			$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien1 AND pied = 0 AND yeux_ouverts = 0');
			$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			$tempsPDYO1 = $data['temps'];
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien1 AND pied = 0 AND yeux_ouverts = 1');
			$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			$tempsPDYF1 = $data['temps'];
			$query->CloseCursor();
		
			$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien1 AND pied = 1 AND yeux_ouverts = 0');
			$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			$tempsPGYO1 = $data['temps'];
			$query->CloseCursor();

			$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien1 AND pied = 1 AND yeux_ouverts = 1');
			$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			$tempsPGYF1 = $data['temps'];
			$query->CloseCursor();
			
			//Récupération des infos du test assis debout
			$query=$bdd->prepare('SELECT id_test_assis, nb_repet, id_entretien FROM test_assis JOIN entretiens USING(id_test_assis) WHERE id_entretien = :id_entretien1');
			$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			$nbRepet = $data['nb_repet'];
			$query->CloseCursor();
			
			//Récupération des infos du premier whoqol 
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
			
			// Récupération des infos du deuxième entretien 
			$query=$bdd->prepare('SELECT id_patient, id_entretien, date_entretien, id_type_entretien, type_entretien FROM patients JOIN entretiens USING(id_patient) JOIN type_entretien USING(id_type_entretien) WHERE id_patient = :idPatient AND type_entretien = "Entretien intermédiaire"');
			$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			$id_entretien2 = $data['id_entretien'];
			$dateEntretien2 = $data['date_entretien'];
			$query->CloseCursor();

		// Récupération des infos du dernier entretien
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

		// Récupération des infos du deuxième test de marche
			$query=$bdd->prepare('SELECT id_test_marche, dist_reelle, pour_theo, id_entretien FROM test_marche JOIN entretiens USING(id_test_marche) WHERE id_entretien = :id_entretien3');
			$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			$distReelle2 = $data['dist_reelle'];
			$pourTheo2 = $data['pour_theo'];
			$query->CloseCursor();

		// Récupération des infos du deuxième test d'équilibre
			$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien3 AND pieds = 0 AND yeux_ouverts = 0');
			$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			$tempsPDYO2 = $data['temps'];
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien3 AND pieds = 0 AND yeux_ouverts = 1');
			$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			$tempsPDYF2 = $data['temps'];
			$query->CloseCursor();
		
			$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien3 AND pieds = 1 AND yeux_ouverts = 0');
			$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			$tempsPGYO2 = $data['temps'];
			$query->CloseCursor();
			
			$query=$bdd->prepare('SELECT id_test_equilibre, temps, pied, yeux_ouverts, id_entretien FROM test_equilibre JOIN a_pour_result USING(id_test_equilibre) WHERE id_entretien = :id_entretien3 AND pieds = 1 AND yeux_ouverts = 1');
			$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			$tempsPGYF2 = $data['temps'];
			$query->CloseCursor();
			
			//Récupération des infos du deuxième test assis debout
			$query=$bdd->prepare('SELECT id_test_assis, nb_repet, id_entretien FROM test_assis JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien3');
			$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
			$query->execute();
			$data = $query->fetch();
			$nbRepet2 = $data['nb_repet'];
			$query->CloseCursor();
			
			// Récupération des infos du deuxième whoqol
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
			
			//CREATION DES GRAPHIQUES
			// Inclusions des bibliothèques
			include("pChart/pData.class");  
			include("pChart/pChart.class");  
			  /*------------COMPOSITION CORPORELLE ----------------*/
			// On défini l'ensemble de données et les séries  
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
			  
			// On initialise le graphique
			$Test = new pChart(700,250); 
			$Test->setColorPalette(0,0,0,255); 
			$Test->setFontProperties("Fonts/tahoma.ttf",10);  
			$Test->setGraphArea(40,30,500,200);  
			$Test->drawGraphArea(252,252,252);  
			$Test->drawScale($DataSet->GetData(),$DataSet->GetDataDescription(),SCALE_NORMAL,150,150,150,TRUE,0,2);  
			$Test->drawGrid(4,TRUE,230,230,230,255);  
			  
			//Dessiner les lignes du graphique
			$Test->drawLineGraph($DataSet->GetData(),$DataSet->GetDataDescription());  
			$Test->drawPlotGraph($DataSet->GetData(),$DataSet->GetDataDescription(),3,2,255,255,255);  
			  
			//Etablire le graphique  
			$Test->setFontProperties("Fonts/tahoma.ttf",8);  
			$Test->drawLegend(525,25,$DataSet->GetDataDescription(),255,255,255);  
			$Test->setFontProperties("Fonts/tahoma.ttf",10);  
			$Test->Render("compoCorporelle.png"); 

			/*--------------EVOLUTION AP-----------*/

			
			$DataSet2 = new pData;  
			$DataSet2->AddPoint(array($nivAP1, $nivAP3), "Serie1");
			$DataSet2->AddPoint(array($nivCS1, $nivCS3), "Serie2");
			$DataSet2->AddAllSeries();    
			$DataSet2->SetSerieName("Niveau AP","Serie1");  
			$DataSet2->SetSerieName("Niveau CS","Serie2"); 
			  
			
			$Test2 = new pChart(700,250); 
			$Test2->setColorPalette(1,0,0,255); 
			$Test2->setFontProperties("Fonts/tahoma.ttf",10);  
			$Test2->setGraphArea(40,30,500,200);  
			$Test2->drawGraphArea(252,252,252);  
			$Test2->drawScale($DataSet2->GetData(),$DataSet2->GetDataDescription(),SCALE_NORMAL,150,150,150,TRUE,0,2);  
			$Test2->drawGrid(4,TRUE,230,230,230,255);  
			  
			
			$Test2->drawLineGraph($DataSet2->GetData(),$DataSet2->GetDataDescription());  
			$Test2->drawPlotGraph($DataSet2->GetData(),$DataSet2->GetDataDescription(),3,2,255,255,255);  
			  
			
			$Test2->setFontProperties("Fonts/tahoma.ttf",8);  
			$Test2->drawLegend(525,25,$DataSet2->GetDataDescription(),255,255,255);  
			$Test2->setFontProperties("Fonts/tahoma.ttf",10);  
			$Test2->Render("evolAPCS.png"); 
			
			//Infos nb seances 
			$nbSeancesEffectTotal=0;
			$nbSeancesTotal =0;
			$query=$bdd->prepare('SELECT nb_seances_prevues, nb_seances_effect FROM doit_pratiquer WHERE id_patient ="'.$idPatient.'"');
			$query->execute();
			while($data=$query->fetch()){
				$nbSeancesEffectTotal = $nbSeancesEffectTotal + $data['nb_seances_effect'];
				$nbSeancesTotal = $nbSeancesTotal + $data['nb_seances_prevues'];
			}
			$query->CloseCursor();
			
			//Infos ressenti 
			$query = $bdd->prepare('SELECT ressenti_positif, AP_envisagee_apres FROM entretiens WHERE id_patient ="'.$idPatient.'" AND id_type_entretien = 3');
			$query->execute();
			$data = $query->fetch();
			$ressentiPositif = $data['ressenti_positif'];
			$APenvisagee = $data['AP_envisagee_apres'];
			$query->CloseCursor();
			
			/*--------------EVOLUTION NB SEANCES-----------*/		
			$diffSeances = $nbSeancesTotal-$nbSeancesEffectTotal;
			 $DataSet3 = new pData;  
			 $DataSet3->AddPoint(array($nbSeancesEffectTotal, $diffSeances),"Serie1");  
			 $DataSet3->AddPoint(array("Réalisées","Totales"),"Serie2");  
			 $DataSet3->AddAllSeries();  
			 $DataSet3->SetAbsciseLabelSerie("Serie2");  
			  
			 // Initialise the graph  
			 $Test3 = new pChart(300,200);  
			 //$Test3->drawFilledRoundedRectangle(7,7,293,193,5,240,240,240);  
			 //$Test3->drawRoundedRectangle(5,5,295,195,5,230,230,230);  
			  
			 // This will draw a shadow under the pie chart  
			 $Test3->drawFilledCircle(122,102,70,200,200,200);  
			  
			 // Draw the pie chart  
			 $Test3->setFontProperties("Fonts/tahoma.ttf",8);  
			 $Test3->drawBasicPieGraph($DataSet3->GetData(),$DataSet3->GetDataDescription(),120,100,70,PIE_PERCENTAGE,255,255,218);  
			$Test3->drawPieLegend(100,15,$DataSet3->GetData(),$DataSet3->GetDataDescription(),250,250,250);  
			  
			 $Test3->Render("example14.png");  
				
?>
<style type="text/css">
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
		height: 15px;}		

		.table-res th {							 
		text-align: center;					
		background-color: #e8503a;	
		height: 15px;
		color: white;		}		

		.table-res tr {	
		height: 15px;	}

		.ligne-impaire{		     
			 background-color: #eee;		}
			 
		.colonne-synthese{
			background-color: #E1E3E3;
			color: #3B3B3B;
			text-align: center;
		}
			.table-synth.one {									 
		margin-bottom: 3em;	
		border-collapse:collapse;
		border: 1px;	}	

		.table-synth td {							
		
		height: 15px;}		

		.table-synth th {							 					
		height: 15px;
		}		

		.table-synth tr {	
		height: 15px;	}
		
		.table-insert.one {									 
		margin-bottom: 3em;	
		border-collapse:collapse;
		border: 1px;	}	

		.table-insert td {							
		
		height: 15px;}		

		.table-insert th {	
			background-color:#FE9EA1;
		height: 15px;
		}		

		.table-insert tr {	
		height: 15px;	}
	</style>
	
<page format="210x297" orientation="P" style="font: arial;" backtop="10mm" backbottom="10mm" backleft="10mm" backright="15mm">

	<page_footer>
	<div class="div-footer">
			<?php  echo''.$prenomCoor.' '.$nomCoord.' : coordinateur Prescrimouv\' - Bouger sur ordonnance 
			<br/>
			Territoire de '.$territoire.'<br/>
			Tél : 0'.$telCoord.' - Mail : '.$emailCoord.'';?>
			<br /><br />
			   
		</div>
	</page_footer>
	<table style="width: 99%;border: none;" cellspacing="4mm" cellpadding="0">
			<tr >
				<td>
					<img src="../../images/prescrimouv_bandeau.jpg" width="50%"/>
				</td>
				<td>
				</td>
				<td style="text-align: center;">
					 <h1>Synthèse finale</h1>
					 <h2> <?php echo ''.$nomPatient.' '.$prenomPatient.''; ?></h2>
				</td>
			</tr>
	</table>
		<br /><br /><br /><br /><br /><br /><br /><br />
		<div class="a-lattention">
			A l'attention du Dr <?php echo $nomMedecin;?>
		</div>
		<div class="date-jour">
			Poitiers le <?php echo $today;?>
		</div>
		<br />
	
		<div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Depuis le <?php echo $dateEntretien1;?>, le bénéficiaire <?php echo $prenomPatient;?> <?php echo $nomPatient;?> pratique dans le dispositif Prescrimouv' : Bouger sur Ordonnance.
			<br/>
			Le programme proposé à pris fin le <?php echo $dateEntretien3;?> et les tableaux suivant vous propose une synthèse. 
			<br />
			Il rapporte des données provenant des évaluations effectuées ainsi que des aspects déclaratifs rapportés.
			<br />
			<br /><br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Je reste disponible pour plus d'informations
			<br />
			<br /><br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Je vous adresse, Docteur, mes sincères salutations.<br />
			<br /><br />
		</div>
		<div class="date-jour">
		<?php echo $prenomCoor;?><?php echo $nomCoord;?>
		<br />
		Coordinateur Prescrimouv du territoire de <?php echo $territoire;?>
		</div>
			
</page>
<page format="210x297" orientation="P" style="font: arial;" backtop="10mm" backbottom="10mm" backleft="10mm" backright="15mm">		
<page_footer>
	<div class="div-footer">
			<?php  echo''.$prenomCoor.' '.$nomCoord.' : coordinateur Prescrimouv\' - Bouger sur ordonnance 
			<br/>
			Territoire de '.$territoire.'<br/>
			Tél : 0'.$telCoord.' - Mail : '.$emailCoord.'';?>
			<br /><br />
			   
		</div>
	</page_footer>	

	<div>
			<br /><br /><br />
			<h3>Evolution du bénéficiaire</h3>
			<table style="width: 100%;" class="table-synth">
			<tr>
				<td style="width: 25%" class="colonne-synthese">INFORMATION
					<br />D’UTILISATION
					<br />DU
					<br />PROGRAMME
					<br/><br />
					<img src="../../images/calendar.png" width="50%"/></td>
				<td style="width: 40%">
				Date de début du programme <br/> <?php echo $dateEntretien1;?> <br/>
				Date entretien final <br/> <?php echo $dateEntretien3;?><br/>
				
				<p style="color:#6086E1">Nombre de séances effectuées : <br/></p>
				<p style="font-size:24; color:#6086E1;"><?php echo $nbSeancesEffectTotal;?> <br/></p>
				Sur un total possible de <br/>
				<?php echo $nbSeancesTotal;?>
				</td>
				<td style="width: 35%">
				<img src="example14.png"/>
				</td>
			</tr>
			<tr>
				<td style="width: 25%" class="colonne-synthese">EFFETS<br/> BENEFIQUES<br/> PERCUS<br/><br/>
					<img src="../../images/increase.png" width="50%"/></td>
				<td style="width: 70%" colspan="2">
				Voici ce que rapporte <?php echo $prenomPatient;?> <?php echo $nomPatient;?> suite au programme d’APA
						<ul>
						<?php
							echo'<li>'.$ressentiPositif.' </li>';
						?>	
						</ul>
				</td>
			</tr>
			<tr>
				<td style="width: 25%" class="colonne-synthese">PERSPECTIVES<br/> DE<br/> POURSUITE<br/><br/>
					<img src="../../images/sport.png" width="50%"/></td>
				<td style="width: 70%" colspan="2">
				Activités libres 
						<ul>
						<?php
							echo'<li>'.$APenvisagee.' </li>';
						?>
						</ul>

				</td>
			</tr>
			<tr>
				<td style="width: 25%" class="colonne-synthese">EVOLUTION<br/> CORPORELLE<br/><br/>
					<img src="../../images/corps.png" width="50%"/></td>
				<td style="width: 70%" colspan="2">
				<table style="width: 100%; text-align: center;" class="table-insert">
						<tr>
							<th style="width: 25%">Nom de la variable
							</th>
							<th style="width: 25%">Avant programme
							</th>
							<th style="width: 25%">Après programme
							</th>
							<th style="width: 10%">Delta
							</th>
						</tr>
						<tr>
							<td>
							<p style="color: #B95356"><i>Taille</i></p>
							</td>
							<td>
							<p><?php echo $taille1;?></p>
							</td>
							<td>
							<p><?php echo $taille3;?></p>
							</td>
							<td>
							<p><?php echo $deltaTaille;?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p style="color: #B95356"><i>Poids</i></p>
							</td>
							<td><p><?php echo $poids1;?></p>
							</td>
							<td><p><?php echo $poids3;?></p>
							</td>
							<td><p><?php echo $deltaPoids;?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p style="color: #B95356"><i>IMC</i></p>
							</td>
							<td><p><?php echo $imc1;?></p>
							</td>
							<td><p><?php echo $imc3;?></p>
							</td>
							<td><p><?php echo $deltaIMC;?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p style="color: #B95356"><i>Masse Hydrique</i></p>
							</td>
							<td><p><?php echo $mhydrique1;?></p>
							</td>
							<td><p><?php echo $mhydrique3;?></p>
							</td>
							<td><p><?php echo $deltaMH;?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p style="color: #B95356"><i>Masse Grasse</i></p>
							</td>
							<td><p><?php echo $mgrasse1;?></p>
							</td>
							<td><p><?php echo $mgrasse3;?></p>
							</td>
							<td><p><?php echo $deltaMG;?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p style="color: #B95356"><i>Masse Musculaire</i></p>
							</td>
							<td><p><?php echo $mmuscu1;?></p>
							</td>
							<td><p><?php echo $mmuscu3;?></p>
							</td>
							<td><p><?php echo $deltaMM;?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p style="color: #B95356"><i>Fréquence cardiaque</i></p>
							</td>
							<td><p><?php echo $FC_repos1;?></p>
							</td>
							<td><p><?php echo $FC_repos3;?></p>
							</td>
							<td><p><?php echo $deltaFC;?></p>
							</td>
						</tr>
						<tr>
							<td>
							<p style="color: #B95356"><i>Saturation en O2</i></p>
							</td>
							<td><p><?php echo $SPO2_repos1;?></p>
							</td>
							<td><p><?php echo $SPO2_repos3;?></p>
							</td>
							<td><p><?php echo $deltaSP;?></p>
							</td>
						</tr>
					</table>
					<br/>
					Récapitulatif<br/>
					<img src="compoCorporelle.png" style="width: 500px"/>
					
				</td>
			</tr>
			<tr>
				<td style="width: 25%" class="colonne-synthese">EVOLUTION<br/> SPORTIVE<br/><br/>
					<img src="../../images/shoes.png" width="50%"/></td>
				<td style="width: 70%" colspan="2">
				<img src="evolAPCS.png"  style="width: 500px"/>
				</td>
			</tr>
			<tr>
				<td style="width: 25%" class="colonne-synthese">TESTS<br/> ET<br/> EVALUATIONS<br/><br/>
					<img src="../../images/tests.png" width="50%"/></td>
				<td style="width: 70%" colspan="2">
					<table style="width: 100%; text-align: center;" class="table-insert">
						<tr>
							<th style="width: 25%">Nom du test
							</th>
							<th style="width: 25%">Avant programme
							</th>
							<th style="width: 25%">Après programme
							</th>
							<th style="width: 10%">Delta
							</th>
						</tr>
						<tr>
							<td><b>Test de marche 6 min</b><br/>
							<p style="color: #B95356"><i>Distance réelle</i><br />
							<i>Pourcentage théorique</i></p><br/>
							</td>
							<td><br/>
							<p><?php echo $distReelle ?><br/>
							<?php echo $pourTheo ?></p>
							</td>
							<td><br/>
							<p><?php echo $distReelle2 ?><br/>
							<?php echo $pourTheo2 ?></p>
							</td>
							<td><br/>
							<p><?php echo $deltaTDMDist ?><br/>
							<?php echo $deltaTDMPour ?></p>
							</td>
						</tr>
						<tr>
							<td><b>Test d'aérobie</b><br/>
							<p style="color: #B95356"><i>Capacité d'aérobie</i><br />
							<i>Pourcentage METs-Santé</i></p><br/>
							</td>
							<td><br/>
							<p><?php echo $capacite_aerobie ?><br/>
							<?php echo $pourc_mets ?></p>
							</td>
							<td><br/>
							<p><?php echo $capacite_aerobie2 ?><br/>
							<?php echo $pourc_mets2 ?></p>
							</td>
							<td><br/>
							<p><?php echo $deltaAero ?><br/>
							<?php echo $deltaMETS ?></p>
							</td>
						</tr>
						<tr>
							<td><b>Test d'équilibre</b><br/>
							<p style="color: #B95356"><i>Pied Droit Fermés</i><br />
							<i>Pied Droit Ouverts</i><br />
							<i>Pied Gauche Fermés</i><br />
							<i>Pied Gauche Ouverts</i><br /></p><br/>
							</td>
							<td><br/>
							<p><?php echo $tempsPDYF1 ?><br/>
							<?php echo $tempsPDYO1 ?><br/>
							<?php echo $tempsPGYF1 ?><br/>
							<?php echo $tempsPGYO1 ?></p>
							</td>
							<td><br/>
							<p><?php echo $tempsPDYF2 ?><br/>
							<?php echo $tempsPDYO2 ?><br/>
							<?php echo $tempsPGYF2 ?><br/>
							<?php echo $tempsPGYO2 ?></p>
							</td>
							<td><br/>
							<p><?php echo $deltaPDYF ?><br/>
							<?php echo $deltaPDYO ?><br/>
							<?php echo $deltaPGYF ?><br/>
							<?php echo $deltaPGYO ?></p>
							</td>
						</tr>
						<tr>
							<td><b>Test Assis-Debout</b><br/>
							<p style="color: #B95356"><i>Nombre de répétitions</i></p><br/>
							</td>
							<td><br/>
							<p><?php echo $nbRepet ?></p>
							</td>
							<td><br/>
							<p><?php echo $nbRepet2 ?></p>
							</td>
							<td><br/>
							<p><?php echo $deltaADrepet ?></p>
							</td>
						</tr>
						<tr>
							<td><b>Evaluation Ricci Gagnon</b><br/>
							<p style="color: #B95356"><i>Score total</i></p><br/>
							</td>
							<td><br/>
							<p><?php echo $scoreRG1 ?></p>
							</td>
							<td><br/>
							<p><?php echo $scoreRG3 ?></p>
							</td>
							<td><br/>
							<p><?php echo $deltaRG ?></p>
							</td>
						</tr>
						<tr>
							<td><b>Evaluation WHOQOL</b><br/>
							<p style="color: #B95356"><i>Qualité de vie</i><br />
							<i>Santé physique</i><br />
							<i>Santé psychologique</i><br />
							<i>Relations</i><br />
							<i>Environnement</i><br /></p><br/>
							</td>
							<td><br/>
							<p><?php echo $scoreQDV1 ?><br/>
							<?php echo $scorePHY1 ?><br/>
							<?php echo $scorePSY1 ?><br/>
							<?php echo $scoreREL1 ?><br/>
							<?php echo $scoreENV1 ?></p>
							</td>
							<td><br/>
							<p><?php echo $scoreQDV2 ?><br/>
							<?php echo $scorePHY2 ?><br/>
							<?php echo $scorePSY2 ?><br/>
							<?php echo $scoreREL2 ?><br/>
							<?php echo $scoreENV2 ?></p>
							</td>
							<td><br/>
							<p><?php echo $deltaQDV ?><br/>
							<?php echo $deltaPhy ?><br/>
							<?php echo $deltaPsy ?><br/>
							<?php echo $deltaRel ?><br/>
							<?php echo $deltaEnvi ?></p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			</table>
</div>
</page>
<?php
     $content = ob_get_clean();

    // convert
    require_once(dirname(__FILE__).'/html2pdf/vendor/autoload.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', 0);
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('syntheseEntretienFinal.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

