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
	
	//Récupération des infos du coordinateur connecté
    $query=$bdd->prepare('SELECT * FROM coordinateur WHERE id_coordinateur = 1');
	$query->execute();
	$data = $query->fetch();
	$nom_coordinateur = $data['nom_coordinateur'];
	$prenom_coordinateur = $data['prenom_coordinateur'];
	$tel_coordinateur = $data['tel_coordinateur'];
	$email_coordinateur = $data['email_coordinateur'];
	$territoire_coordinateur = $data['territoire'];
	$query->CloseCursor();
?>
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
			<?php  echo''.$prenom_coordinateur.' '.$nom_coordinateur.' : coordinateur Prescrimouv\' - Bouger sur ordonnance 
			<br/>
			Territoire de '.$territoire_coordinateur.'<br/>
			Tél : 0'.$tel_coordinateur.' - Mail : '.$email_coordinateur.'';?>
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
					 <h2> <?php echo $nom; ?></h2>
				</td>
			</tr>
		</table>
		
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
			Activité principale : 
			<br /><br />
			Ce programme se fera au sein de la structure $nom_centre le $jour_creneau de $heure_creneau_debut à $heure_creneau_fin.
			<br />			
			</div>
			<br /><br /><br />
			<br />
			<div>
			Je vous adresse, Docteur, mes sincères salutations.
		</div>
		<div class=\"date-jour\">
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
        $html2pdf->Output('ticket.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

