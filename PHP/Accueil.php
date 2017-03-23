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
		
		if($id==0){ erreur2(ERR_IS_CO); }
		?>

</head>

<body>

    <?php include("header-accueil.php"); ?> 

    <!-- Page Content -->
    <div class="container">

        <!-------------------------- Container --------------------------------->
		
        <div id="conteneurPrincipale">
		
		


			<div id = "conteneurGauche">
				<fieldset id="conteneurPatient">
					<center><legend> Bénéficiaires </legend></center>
					<input type="button" id="boutonPatient" value="Bénéficiaires" onclick="self.location.href='Patients/ListePatient.php'">
					<input type="button" id="boutonPatient" value="Ajout bénéficaire" onclick="self.location.href='Patients/AjoutPatient.php'">
				</fieldset>
				
				
				<div id = "conteneurGaucheBas">
					<fieldset id="conteneurMedecin">
						<center><legend> Médecins </legend></center>
						<input type="button" id="boutonSante" value="Liste Médecins" onclick="self.location.href='Medecins/ListeMedecin.php'">
						<input type="button" id="boutonSante" value="Ajout Médecin" onclick="self.location.href='Medecins/AjoutMedecin.php'">
					</fieldset>
					<fieldset id="conteneurMutuelle">
						<center><legend> Mutuelles </legend></center>
						<input type="button" id="boutonSante" value="Liste Mutuelles" onclick="self.location.href='Mutuelles/ListeMutuelle.php'">
						<input type="button" id="boutonSante" value="Ajout Mutuelle" onclick="self.location.href='Mutuelles/AjoutMutuelle.php'">
					</fieldset>
				</div>
			</div>
			
			<div id = "ConteneurDroit">
				<fieldset id="conteneurStat">
					<center><legend> Statistiques </legend></center>
					<table width="100%">
						<tr>
							<td>
							<img style="margin-left : 20px; margin-top : 17px;" src="Statistiques/benefAgeSexe.png" width="400px"/>
							</td>
							<td>
							<input style="float : right; margin-right : 70px; margin-bottom : 10px; margin-top:135px;" type="button" id="boutonAutre" value="Plus de statistiques" onclick="self.location.href='Statistiques/AfficherStatistiques.php'">
							</td>
						</tr>
						<tr>
							<td colspan="2">
							<?php 
							$graphInitialPatho = "Statistiques/SmallGraphInitialPatho.png";
							$graphInterPatho = "Statistiques/SmallGraphInterPatho.png";
							$graphFinalPatho = "Statistiques/SmallGraphFinalPatho.png";
							$graphArchivePatho = "Statistiques/SmallGraphArchivePatho.png";
							if(file_exists($graphInitialPatho)){
								echo '<img style="margin-left : 50px; margin-top : 17px;" src="'.$graphInitialPatho.'" />';
							}
							if(file_exists($graphInterPatho)){
								echo '<img style="margin-left : 50px; margin-top : 17px;" src="'.$graphInterPatho.'" />';
							} 
							if(file_exists($graphFinalPatho)){
								echo '<img style="margin-left : 50px; margin-top : 17px;" src="'.$graphFinalPatho.'" />';
							}
							if(file_exists($graphArchivePatho)){
								echo '<img style="margin-left : 50px; margin-top : 17px;" src="'.$graphArchivePatho.'" />';
							} 
							//Si Initial existe 
							
							?>
							</td>
						</tr>
					</table>
					
					
				</fieldset>
				<fieldset id="conteneurAutre">
					<center><legend>  Autres </legend></center>
						<input style="margin-top : 0px" type="button" id="boutonAutre" value="Activités" onclick="self.location.href='Activites/ListeActivite.php'">
						<input type="button" id="boutonAutre" value="Intervenants" onclick="self.location.href='Intervenants/ListeIntervenant.php'">
						<input type="button" id="boutonAutre" value="Structures" onclick="self.location.href='Centres/ListeCentre.php'">
						<input type="button" id="boutonAutre" value="Créneaux" onclick="self.location.href='Creneaux/ListeCreneau.php'">
				</fieldset>
			</div>
		</div>
		
        <!-------------------------- /Container --------------------------------->
	
    <?php include("footer.php"); ?> 
    </div>
    <!-- /content -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
	<script src="../js/functions.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
