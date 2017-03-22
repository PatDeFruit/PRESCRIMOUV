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
	$scoreRG1 = $data['score_RG'];
	$nivAP1 = $data['niveau_AP'];
	$nivAPvoulue1 = $data['niveau_AP_souhaite'];
	$nivCS1 = $data['niveau_CS'];
	$dateEntretien1 = $data['date_entretien'];
	$query->CloseCursor();
	
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
	</style>
<page format="210x297" orientation="P" style="font: arial;" backtop="10mm" backbottom="10mm" backleft="10mm" backright="10mm">

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
					 <h1>Bilan du premier entretien</h1>
					 <h2> <?php echo ''.$nomPatient.' '.$prenomPatient.''; ?></h2>
				</td>
			</tr>
		</table>
		
		<div class="a-lattention">
			A l'attention du Dr <?php echo $nomMedecin;?>
			</div>
			<div class="date-jour">
			Poitiers le <?php echo $today;?>
		</div>
		<br />
	
		<div>
			Merci d’avoir orienté <?php echo''.$prenomPatient.' '.$nomPatient.', '.$agePatient.''; ?> ans, vers le dispositif « Prescrimouv’ - Bouger sur ordonnance ». 
			Suite à votre prescription établie le <?php echo $datePrescription;?> et avant d'intégrer le programme d'activité physique adaptée, <?php echo''.$prenomPatient.' '.$nomPatient.' a bénéficié le '.$dateEntretien1.'';?> d'un entretien
			centré sur l'activité physique (AP), incluant l'exploration du niveau d'activité physique et des comportements sédentaires, les barrières perçues à l'engagement dans l'AP, un test de marche de 6 minutes et l'élaboration d'un 
			programme d'AP tenant compte des motivations, des capacités, des objectifs et des besoins en AP de <?php echo''.$prenomPatient.' '.$nomPatient.''; ?>.
			<br />
			<br />
			Vous trouverez ci-dessous, les points essentiels du premier entretien.
			</div>
			<h4> Synthèse Entretien n° 1 - <?php  echo $dateEntretien1;?> </h4>
			<table style="width: 100%" class="tableau-recap">
				<tr>
					<td style="width: 50%">
					<i>Echelles perception de l’Activité Physique (AP) :</i>
					<br/><br/><br/>
						Niveau d'Activité Physique perçu
						<br/><br/>
						<?php  echo $nivAP1;?>/10
						<br/><br/><br/>
						Niveau d'Activité Physique souhaité
						<br/><br/>
						<?php  echo $nivAPvoulue1;?>/10
						<br/><br/>
					</td>
					<td style="width: 50%">
					<i>Le décalage entre l’AP perçue et l’AP souhaitée est expliqué par <?php echo''.$prenomPatient.' '.$nomPatient.''; ?> par les barrières suivantes :</i>
						<ul>
						<?php 
							$query=$bdd->prepare('SELECT obstacle FROM obstacles JOIN a_pour_obstacle USING(id_obstacle) WHERE id_patient = "'.$idPatient.'"');
							$query->execute();
							while($data=$query->fetch()){
								echo '<li>'.$data['obstacle'].'</li>';
							}
							$query->CloseCursor();
						?>
						</ul>
					</td>
				</tr>
				<tr>
					<td style="width: 50%">
					<i>Les objectifs à atteindre exprimées par <?php echo''.$prenomPatient.' '.$nomPatient.''; ?> dans le cadre de cette mise en pratique sont les suivants : </i>
						<ul>
							<?php 
							$query=$bdd->prepare('SELECT motivation FROM motivations JOIN a_pour_motivation USING(id_motivation) WHERE id_patient = "'.$idPatient.'"');
							$query->execute();
							while($data=$query->fetch()){
								echo '<li>'.$data['motivation'].'</li>';
							}
							$query->CloseCursor();
						?>
						</ul>
					</td>
					<td style="width: 50%">
					<i>Résultats des tests et questionnaires</i>
						<br/><br/><br/>
						Comportements sédentaire : <?php  echo $nivCS1;?>/10
						<br/><br/>
						Ricci & Gagnon : <?php echo $scoreRG1;?>
						<br/><br/>
						WHOQOL - Qualité de Vie : <?php echo $scoreQDV1;?>
						<br/><br/>
						WHOQOL - Santé Physique : <?php echo $scorePHY1;?>
						<br/><br/>
						WHOQOL - Santé Psychologique : <?php echo $scorePSY1;?>
						<br/><br/>
						WHOQOL - Relations Sociales : <?php echo $scoreREL1;?>
						<br/><br/>
						WHOQOL - Environnement : <?php echo $scoreENV1;?>
						<br/><br/>
					</td>
				</tr>
			</table>
			<div>
			<i>Le programme </i>
			<br /><br />
			Liste des activités proposées au bénéficiaire avec les créneaux et lieux de pratique :
				<ul>
					<?php 
							$query=$bdd->prepare('SELECT activite, jour_creneau, heure_creneau_debut, heure_creneau_fin, nom_centre FROM se_fait_a JOIN creneaux USING(id_creneau) JOIN se_fait_dans USING(id_creneau) JOIN centres USING(id_centre) JOIN activites USING(id_activite) JOIN doit_pratiquer USING(id_activite) WHERE id_patient="'.$idPatient.'"');
							$query->execute();
							while($data=$query->fetch()){
								echo '<li><b>'.$data['activite'].'</b> le '.$data['jour_creneau'].' de '.$data['heure_creneau_debut'].' à '.$data['heure_creneau_fin'].' à '.$data['nom_centre'].'
										</li>';
							}?>
				</ul>
			<br />			
			</div>
			<br /><br /><br />
			<br />
			<div>
			
			
			
			
			Je vous adresse, Docteur, mes sincères salutations.
		</div>
		<div class="date-jour">
		$prenomCoor $nomCoord
		<br />
		Coordinateur Prescrimouv du territoire de $territoire
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
        $html2pdf->Output('syntheseEntretienInitial.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

