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
					<?php echo'<center><legend> Patient  n°'.$idPatient.' <a href="#"><span class="glyphicon glyphicon-pencil text-center"></span></a> </legend></center>'; ?>
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
								$query=$bdd->prepare('SELECT id_patient, id_medecin, nom_medecin, prenom_medecin, date_prescription FROM patients JOIN est_soigne_par USING(id_patient) JOIN medecins USING(id_medecin) WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								$data = $query->fetch();
								
								$nomMedecin = $data['nom_medecin'];
								$prenomMedecin = $data['prenom_medecin'];
								$datePrescription = $data['date_prescription'];
								
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
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#entInitial"><i class="fa fa-star-o fa-3x"></i></button>
								 <p><small>Entretien<br />initial</small></p>
								</div>
								<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#entInter"><i class="fa fa-star-half-o fa-3x"></i></button>
								 <p><small>Entretien<br />intermédiaire</small></p>
								</div>';
								} else if($statutPatient=="Actif - Final"){
									echo'<div class="process-step">
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
								} else if($statutPatient=="Archivé"){
									echo'<div class="process-step">
								 <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#ficheResume"><i class="fa fa-info fa-3x"></i></button>
								 <p><small>Fiche<br />résumé</small></p>
								</div>';
								}
								?>
								
								
							   </div>
							  </div>
							  
							  <div class="tab-content">
							   <div id="ficheResume" class="tab-pane fade active in">
								<h3>Fiche Résumé </h3> 
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
								  <label class="col-md-4 control-label" for="med">Médecin prescripteur></a></label>  
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
							   </div>
							   <div id="infoPatient" class="tab-pane fade">
								<h3>Informations Patient </h3> 
								<form class="form-horizontal">
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
			
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="street">Adresse</label>  
								  <div class="col-md-8">
								  <?php
								  echo'<input id="street" name="street" value="'.$adressePatient.'" class="form-control input-md" disabled="disabled" type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
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
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="phone">Téléphone</label>  
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
								  <label class="col-md-4 control-label" for="email">Email</label>  
								  <div class="col-md-8">
								  <?php
								  echo'<input id="email" name="email" value="'.$mailPatient.'" class="form-control input-md" disabled="disabled" required="" type="email">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
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
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="profession">Profession</label>  
								  <div class="col-md-8">
								  <?php
								  echo'<input id="profession" name="profession" value="'.$profPatient.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
						
								
								
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
								<h3>Entretien initial </h3> 
								<p>Some content.</p>
							   </div>
							   <div id="entInter" class="tab-pane fade">
								<h3>Entretien intermédiaire </h3> 
								<p>Some content.</p>
							   </div>
							   <div id="entFinal" class="tab-pane fade">
								<h3>Entretien final</h3> 
								<p>Some content.</p>
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

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
