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

    <?php include("header-accueil.php"); 
	// STATISTIQUE 1 : Nombre de personnes en actiivté avec nombre Homme/Femme et répartition par tranche d'âge
	$query=$bdd->prepare('SELECT count(id_patient), sexe_patient AS Genre, FLOOR((YEAR(CURDATE( )) - YEAR(date_naissance) - IF(RIGHT(CURDATE( ),5) < RIGHT(date_naissance,5),1,0))/5)*5 AS Tranche_age FROM patients GROUP BY Tranche_age, Genre');
	$query->execute();
	while($data = $query->fetch()){
			$arrayStat1[]=$data;
	}
	$nbHommeMoins20 = 0;
	$nbHomme2035 = 0;
	$nbHomme3550 = 0;
	$nbHomme5065 = 0;
	$nbHomme6580 = 0;
	$nbHommePlus80 = 0;
	$nbFemmeMoins20 = 0;
	$nbFemme2035 = 0;
	$nbFemme3550 = 0;
	$nbFemme5065 = 0;
	$nbFemme6580 = 0;
	$nbFemmePlus80 = 0;
	for($i=0; $i<sizeof($arrayStat1); $i++){
		if($arrayStat1[$i]['Genre']==0){
			if($arrayStat1[$i]['Tranche_age'] == 0 ||  $arrayStat1[$i]['Tranche_age'] == 5 || $arrayStat1[$i]['Tranche_age'] == 10 || $arrayStat1[$i]['Tranche_age'] == 15 || $arrayStat1[$i]['Tranche_age'] == 20){
				$nbHommeMoins20 = $nbHommeMoins20 + $arrayStat1[$i]['count(id_patient)'];
			} else if ($arrayStat1[$i]['Tranche_age'] == 25 || $arrayStat1[$i]['Tranche_age'] == 30 || $arrayStat1[$i]['Tranche_age'] == 35){
				$nbHomme2035 = $nbHomme2035 + $arrayStat1[$i]['count(id_patient)'];
			} else if ($arrayStat1[$i]['Tranche_age'] == 40 || $arrayStat1[$i]['Tranche_age'] == 45 || $arrayStat1[$i]['Tranche_age'] == 50){
				$nbHomme3550 = $nbHomme3550 + $arrayStat1[$i]['count(id_patient)'];
			}else if ($arrayStat1[$i]['Tranche_age'] == 55 || $arrayStat1[$i]['Tranche_age'] == 60 || $arrayStat1[$i]['Tranche_age'] == 65){
				$nbHomme5065 = $nbHomme5065 + $arrayStat1[$i]['count(id_patient)'];
			}else if ($arrayStat1[$i]['Tranche_age'] == 65 || $arrayStat1[$i]['Tranche_age'] == 70 || $arrayStat1[$i]['Tranche_age'] == 80){
				$nbHomme6580 = $nbHomme6580 + $arrayStat1[$i]['count(id_patient)'];
			}else if ($arrayStat1[$i]['Tranche_age'] == 80 || $arrayStat1[$i]['Tranche_age'] == 85 || $arrayStat1[$i]['Tranche_age'] == 90 || $arrayStat1[$i]['Tranche_age'] == 95 || $arrayStat1[$i]['Tranche_age'] == 100){
				$nbHommePlus80 = $nbHommePlus80 + $arrayStat1[$i]['count(id_patient)'];
			}
		} else if($arrayStat1[$i]['Genre']==1){
			if($arrayStat1[$i]['Tranche_age'] == 0 ||  $arrayStat1[$i]['Tranche_age'] == 5 || $arrayStat1[$i]['Tranche_age'] == 10 || $arrayStat1[$i]['Tranche_age'] == 15 || $arrayStat1[$i]['Tranche_age'] == 20){
				$nbFemmeMoins20 = $nbFemmeMoins20 + $arrayStat1[$i]['count(id_patient)'];
			} else if ($arrayStat1[$i]['Tranche_age'] == 25 || $arrayStat1[$i]['Tranche_age'] == 30 || $arrayStat1[$i]['Tranche_age'] == 35){
				$nbFemme2035 = $nbFemme2035 + $arrayStat1[$i]['count(id_patient)'];
			} else if ($arrayStat1[$i]['Tranche_age'] == 40 || $arrayStat1[$i]['Tranche_age'] == 45 || $arrayStat1[$i]['Tranche_age'] == 50){
				$nbFemme3550 = $nbFemme3550 + $arrayStat1[$i]['count(id_patient)'];
			}else if ($arrayStat1[$i]['Tranche_age'] == 55 || $arrayStat1[$i]['Tranche_age'] == 60 || $arrayStat1[$i]['Tranche_age'] == 65){
				$nbFemme5065 = $nbFemme5065 + $arrayStat1[$i]['count(id_patient)'];
			}else if ($arrayStat1[$i]['Tranche_age'] == 65 || $arrayStat1[$i]['Tranche_age'] == 70 || $arrayStat1[$i]['Tranche_age'] == 80){
				$nbFemme6580 = $nbFemme6580 + $arrayStat1[$i]['count(id_patient)'];
			}else if ($arrayStat1[$i]['Tranche_age'] == 80 || $arrayStat1[$i]['Tranche_age'] == 85 || $arrayStat1[$i]['Tranche_age'] == 90 || $arrayStat1[$i]['Tranche_age'] == 95 || $arrayStat1[$i]['Tranche_age'] == 100){
				$nbFemmePlus80 = $nbFemmePlus80 + $arrayStat1[$i]['count(id_patient)'];
			}
		}

	}
	$query->CloseCursor();
	
	
	//select count(id_patient), pathologie, statut from patients join statuts using(id_statut) join est_diagnostique using(id_patient) join pathologies using(id_pathologie) group by pathologie, statut

	// STATISTIQUE 2 : % de personnes par pathologie par tranche statuts
	$query=$bdd->prepare('select count(id_patient) AS nbPers, pathologie, statut from patients join statuts using(id_statut) join est_diagnostique using(id_patient) join pathologies using(id_pathologie) where id_statut = 1 group by pathologie, statut');
	$query->execute();
	while($data = $query->fetch()){
			$arrayStat2[]=$data;
	}
	$query->CloseCursor();
	$query=$bdd->prepare('select count(id_patient) AS nbPers, pathologie, statut from patients join statuts using(id_statut) join est_diagnostique using(id_patient) join pathologies using(id_pathologie) where id_statut = 2 group by pathologie, statut');
	$query->execute();
	while($data = $query->fetch()){
			$arrayStat3[]=$data;
	}
	$query->CloseCursor();
	
	$query=$bdd->prepare('select count(id_patient) AS nbPers, pathologie, statut from patients join statuts using(id_statut) join est_diagnostique using(id_patient) join pathologies using(id_pathologie) where id_statut = 3 group by pathologie, statut');
	$query->execute();
	while($data = $query->fetch()){
			$arrayStat4[]=$data;
	}
	$query->CloseCursor();
	$query=$bdd->prepare('select count(id_patient) AS nbPers, pathologie, statut from patients join statuts using(id_statut) join est_diagnostique using(id_patient) join pathologies using(id_pathologie) where id_statut = 4 group by pathologie, statut');
	$query->execute();
	while($data = $query->fetch()){
			$arrayStat5[]=$data;
	}
	$query->CloseCursor();
	$query=$bdd->prepare('select count(id_patient) AS nbPers, pathologie, statut from patients join statuts using(id_statut) join est_diagnostique using(id_patient) join pathologies using(id_pathologie) where id_statut = 5 group by pathologie, statut');
	$query->execute();
	while($data = $query->fetch()){
			$arrayStat6[]=$data;
	}
	$query->CloseCursor();
	?> 

    <!-- Page Content -->
    <div class="container">

        <!-------------------------- Container --------------------------------->
		
        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">
					<center><legend> Statistiques détaillées </legend></center>
					<br/><center>
					<div id="afficherInfosPatient">
						<?php  
							 // Standard inclusions     
							 include("pChart/pData.class");  
							 include("pChart/pChart.class");  
							  
							 // Dataset definition   
							 $DataSet = new pData;  
							  $DataSet->AddPoint(array($nbHommeMoins20, $nbHomme2035, $nbHomme3550, $nbHomme5065, $nbHomme6580, $nbHommePlus80),"Serie1");  
							 $DataSet->AddPoint(array($nbFemmeMoins20, $nbFemme2035, $nbFemme3550, $nbFemme5065, $nbFemme6580, $nbFemmePlus80),"Serie2");  
							 $DataSet->AddPoint(array("Moins de 20 ans", "20-35 ans", "35-50 ans", "50-65 ans", "65-80 ans", "Plus de 80 ans"), "Serie3");
							 $DataSet->AddAllSeries();  
							 $DataSet->SetAbsciseLabelSerie("Serie3");  
							 $DataSet->SetSerieName("Homme","Serie1");  
							 $DataSet->SetSerieName("Femme","Serie2");    
							 $DataSet->SetSerieName("Tranche d'âge","Serie3");  
 
							  
							 // Initialise the graph  
							 $Graph1 = new pChart(700,300);  
							 $Graph1->setFontProperties("Fonts/tahoma.ttf",8);  
							 
							 $Graph1->setGraphArea(50,30,680,250);  
							// $Graph1->drawFilledRoundedRectangle(7,7,693,223,5,240,240,240);  
							 //$Graph1->drawRoundedRectangle(5,5,695,225,5,230,230,230);  
							 $Graph1->drawGraphArea(255,255,255,TRUE);  
							 $Graph1->drawScale($DataSet->GetData(),$DataSet->GetDataDescription(),SCALE_ADDALL,150,150,150,TRUE,0,2,TRUE);  
							 $Graph1->drawGrid(4,TRUE,230,230,230,50);  
							  
							 // Draw the 0 line  
							 $Graph1->setFontProperties("Fonts/tahoma.ttf",6);  
							 $Graph1->drawTreshold(0,143,55,72,TRUE,TRUE);  
							  
							 // Draw the bar graph  
							 $Graph1->drawStackedBarGraph($DataSet->GetData(),$DataSet->GetDataDescription(),TRUE);  

							  
							 // Finish the graph  
							 $Graph1->setFontProperties("Fonts/tahoma.ttf",8);  
							 $Graph1->drawLegend(596,150,$DataSet->GetDataDescription(),255,255,255);  
							 $Graph1->setFontProperties("Fonts/tahoma.ttf",10);  
							 $Graph1->drawTitle(50,22,"Nombre de bénéficiaires par sexe et par âge",50,50,50,585);  
							 $Graph1->Render("benefAgeSexe.png");  
							?>  
							
								<img src="benefAgeSexe.png" />
								<br /><br />
							
							<?php 
							if($arrayStat5!= array()){
								// Dataset definition   
							 $DataSet2 = new pData;  
							 for($i=0; $i<sizeof($arrayStat5); $i++){
								${nbPersAttente.$i} = $arrayStat5[$i]['nbPers'];
								$DataSet2->AddPoint(${nbPersAttente.$i}, "Serie1");
							}
							for($i=0; $i<sizeof($arrayStat5); $i++){
								${nbPersAttente.$i} = $arrayStat5[$i]['pathologie'];
								$DataSet2->AddPoint(${nbPersAttente.$i}, "Serie2");
							}							
							 $DataSet2->AddAllSeries();  
							 $DataSet2->SetAbsciseLabelSerie("Serie2");  
							  
							 // Initialise the graph  
							 $Graph2 = new pChart(700, 300);   
							  
							 // Draw the pie chart  
							 $Graph2->setFontProperties("Fonts/tahoma.ttf",8);  
							 $Graph2->setShadowProperties(2,2,200,200,200);  
							 $Graph2->drawFlatPieGraphWithShadow($DataSet2->GetData(),$DataSet2->GetDataDescription(),175,125,75,PIE_PERCENTAGE,10);  
							 $Graph2->drawPieLegend(300,30,$DataSet2->GetData(),$DataSet2->GetDataDescription(),250,250,250);  
							 $Graph2->drawTitle(50,22,"Bénéficiaires en attente",50,50,50,585);  
							 $Graph2->Render("benefAttentePatho.png");
							 echo'<img src="benefAttentePatho.png" />';
							}
							if($arrayStat2!= array()){
								// Dataset definition   
							 $DataSet3 = new pData;  
							 for($i=0; $i<sizeof($arrayStat2); $i++){
								${nbPersAttente.$i} = $arrayStat2[$i]['nbPers'];
								$DataSet3->AddPoint(${nbPersAttente.$i}, "Serie1");
							}
							for($i=0; $i<sizeof($arrayStat2); $i++){
								${nbPersAttente.$i} = $arrayStat2[$i]['pathologie'];
								$DataSet3->AddPoint(${nbPersAttente.$i}, "Serie2");
							}							
							 $DataSet3->AddAllSeries();  
							 $DataSet3->SetAbsciseLabelSerie("Serie2");  
							  
							 // Initialise the graph  
							 $Graph3 = new pChart(700, 300);   
							  
							 // Draw the pie chart  
							 $Graph3->setFontProperties("Fonts/tahoma.ttf",8);  
							 $Graph3->setShadowProperties(2,2,200,200,200);  
							 $Graph3->drawFlatPieGraphWithShadow($DataSet3->GetData(),$DataSet3->GetDataDescription(),175,125,75,PIE_PERCENTAGE,10);  
							 $Graph3->drawPieLegend(300,30,$DataSet3->GetData(),$DataSet3->GetDataDescription(),250,250,250);  
							 $Graph3->drawTitle(50,22,"Bénéficiaires en entretien initial",50,50,50,585);  
							 $Graph3->Render("benefInitPatho.png");
							 echo'<img src="benefInitPatho.png" />';
							}
							if($arrayStat3!= array()){
								// Dataset definition   
							 $DataSet4 = new pData;  
							 for($i=0; $i<sizeof($arrayStat3); $i++){
								${nbPersAttente.$i} = $arrayStat3[$i]['nbPers'];
								$DataSet4->AddPoint(${nbPersAttente.$i}, "Serie1");
							}
							for($i=0; $i<sizeof($arrayStat3); $i++){
								${nbPersAttente.$i} = $arrayStat3[$i]['pathologie'];
								$DataSet4->AddPoint(${nbPersAttente.$i}, "Serie2");
							}							
							 $DataSet4->AddAllSeries();  
							 $DataSet4->SetAbsciseLabelSerie("Serie2");  
							  
							 // Initialise the graph  
							 $Graph4 = new pChart(700, 300);   
							  
							 // Draw the pie chart  
							 $Graph4->setFontProperties("Fonts/tahoma.ttf",8);  
							 $Graph4->setShadowProperties(2,2,200,200,200);  
							 $Graph4->drawFlatPieGraphWithShadow($DataSet4->GetData(),$DataSet4->GetDataDescription(),175,125,75,PIE_PERCENTAGE,10);  
							 $Graph4->drawPieLegend(300,30,$DataSet4->GetData(),$DataSet4->GetDataDescription(),250,250,250);  
							 $Graph4->drawTitle(50,22,"Bénéficiaires en entretien intermédiaire",50,50,50,585);  
							 $Graph4->Render("benefInterPatho.png");
							 echo'<img src="benefInterPatho.png" />';
							}
							if($arrayStat4!= array()){
								// Dataset definition   
							 $DataSet5 = new pData;  
							 for($i=0; $i<sizeof($arrayStat4); $i++){
								${nbPersAttente.$i} = $arrayStat4[$i]['nbPers'];
								$DataSet5->AddPoint(${nbPersAttente.$i}, "Serie1");
							}
							for($i=0; $i<sizeof($arrayStat4); $i++){
								${nbPersAttente.$i} = $arrayStat4[$i]['pathologie'];
								$DataSet5->AddPoint(${nbPersAttente.$i}, "Serie2");
							}							
							 $DataSet5->AddAllSeries();  
							 $DataSet5->SetAbsciseLabelSerie("Serie2");  
							  
							 // Initialise the graph  
							 $Graph5 = new pChart(700, 300);   
							  
							 // Draw the pie chart  
							 $Graph5->setFontProperties("Fonts/tahoma.ttf",8);  
							 $Graph5->setShadowProperties(2,2,200,200,200);  
							 $Graph5->drawFlatPieGraphWithShadow($DataSet5->GetData(),$DataSet5->GetDataDescription(),175,125,75,PIE_PERCENTAGE,10);  
							 $Graph5->drawPieLegend(300,30,$DataSet5->GetData(),$DataSet5->GetDataDescription(),250,250,250);  
							 $Graph5->drawTitle(50,22,"Bénéficiaires en entretien final",50,50,50,585);  
							 $Graph5->Render("benefFinalPatho.png");
							 echo'<img src="benefFinalPatho.png" />';
							}
							if($arrayStat6!= array()){
								// Dataset definition   
							 $DataSet6 = new pData;  
							 for($i=0; $i<sizeof($arrayStat6); $i++){
								${nbPersAttente.$i} = $arrayStat6[$i]['nbPers'];
								$DataSet6->AddPoint(${nbPersAttente.$i}, "Serie1");
							}
							for($i=0; $i<sizeof($arrayStat6); $i++){
								${nbPersAttente.$i} = $arrayStat6[$i]['pathologie'];
								$DataSet6->AddPoint(${nbPersAttente.$i}, "Serie2");
							}							
							 $DataSet6->AddAllSeries();  
							 $DataSet6->SetAbsciseLabelSerie("Serie2");  
							  
							 // Initialise the graph  
							 $Graph6 = new pChart(700, 300);   
							  
							 // Draw the pie chart  
							 $Graph6->setFontProperties("Fonts/tahoma.ttf",8);  
							 $Graph6->setShadowProperties(2,2,200,200,200);  
							 $Graph6->drawFlatPieGraphWithShadow($DataSet6->GetData(),$DataSet6->GetDataDescription(),175,125,75,PIE_PERCENTAGE,10);  
							 $Graph6->drawPieLegend(300,30,$DataSet6->GetData(),$DataSet6->GetDataDescription(),250,250,250);  
							 $Graph6->drawTitle(50,22,"Bénéficiaires ayant terminé le programme",50,50,50,585);  
							 $Graph6->Render("benefArchivePatho.png");
							 echo'<img src="benefArchivePatho.png" />';
							}
							?>  
							
								
								</div></center>
								
							
				</fieldset>
			</div>
		</div>
		
        <!-------------------------- /Container --------------------------------->
	
    <?php include("footer.php"); ?> 
    </div>
    <!-- /content -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
