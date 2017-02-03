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
					<?php echo'<center><legend><a href="#"><span class="glyphicon glyphicon-arrow-left text-center navbar-nav"></span></a><a href="#"><span class="glyphicon glyphicon-pencil navbar-nav"></span></a> Patient  n°'.$idPatient.' </center></legend>'; ?>
					
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
								
								</fieldset>
								</form>
								
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
								<h3>Entretien initial </h3> 
								<form class="form-horizontal">
								<fieldset>
								
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="taille1">Taille</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="taille1" name="taille1" value="'.$nomPatient.'" class="form-control input-md" required="" disabled="disabled" type="number">';
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
								  echo'<input id="poids1" name="poids1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
								  echo'<input id="IMC1" name="IMC1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									echo '<input id="massH1" name="massH1" value="'.$nomPatient.'" class="form-control input-md" required="" disabled="disabled" type="number">';
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
								  echo'<input id="massG1" name="massG1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
								  echo'<input id="massM1" name="massM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									echo '<input id="FCrepos1" name="FCrepos1" value="'.$nomPatient.'" class="form-control input-md" required="" disabled="disabled" type="number">';
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
								  echo'<input id="satuRepos1" name="satuRepos1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								</td>
								</tr>
								
								</table>
								<h4>Evaluation Ricci & Gagnon </h4> 
								<!-- <p>Comportements sédentaires</p>
								
								<table class="table">
								<tr>
								<td>
								<div class="form-group">
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
								  echo'<input id="scoreCS1" name="scoreCS1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
								  echo'<input id="scoreAPL1" name="scoreAPL1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
								  echo'<input id="scoreAPQ1" name="scoreAPQ1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
								  echo'<input id="scoreRG1" name="scoreRG1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								</table>
								</br>
								<h4>Test de marche 1</h4> 
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="dateTM1">Date</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="dateTM1" name="dateTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="date">';
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
									  echo'<input id="aideTM1" name="aideTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="text">';
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
									  echo'<input id="FCavantTM1" name="FCavantTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="FCapresTM1" name="FCapresTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="FC1minTM1" name="FC1minTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="FC2minTM1" name="FC2minTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="SPavantTM1" name="SPavantTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="SPapresTM1" name="SPapresTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="SP1minTM1" name="SP1minTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="SP2minTM1" name="SP2minTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="BorgavantTM1" name="BorgavantTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="BorgapresTM1" name="BorgapresTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="Borg1minTM1" name="Borg1minTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="Borg2minTM1" name="Borg2minTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="DistTheoTM1" name="DistTheoTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="DistRelleTM1" name="DistRelleTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="PourcTheoTM1" name="PourcTheoTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="NbArretTM1" name="NbArretTM1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								</br>
								<h4>Test de marche 2</h4> 
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="dateTM2">Date</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="dateTM2" name="dateTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="date">';
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
									  echo'<input id="aideTM2" name="aideTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="text">';
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
									  echo'<input id="FCavantTM2" name="FCavantTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="FCapresTM2" name="FCapresTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="FC1minTM2" name="FC1minTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="FC2minTM2" name="FC2minTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="SPavantTM2" name="SPavantTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="SPapresTM2" name="SPapresTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="SP1minTM2" name="SP1minTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="SP2minTM2" name="SP2minTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="BorgavantTM2" name="BorgavantTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="BorgapresTM2" name="BorgapresTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="Borg1minTM2" name="Borg1minTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="Borg2minTM2" name="Borg2minTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="DistTheoTM2" name="DistTheoTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="DistRelleTM2" name="DistRelleTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="PourcTheoTM2" name="PourcTheoTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
									  echo'<input id="NbArretTM2" name="NbArretTM2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								
								<h4>Test d'équilibre</h4>
								<p>Pied droit - Yeux Ouverts</p>
								<table>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedDYO1">Temps 1</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedDYO1" name="PiedDYO1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedDYO2">Temps 2</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedDYO2" name="PiedDYO2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedDYO3">Temps 3</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedDYO3" name="PiedDYO3" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								
								<p>Pied droit - Yeux Fermés</p>
								<table>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedDYF1">Temps 1</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedDYF1" name="PiedDYF1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedDYF2">Temps 2</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedDYF2" name="PiedDYF2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedDYF3">Temps 3</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedDYF3" name="PiedDYF3" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								<p>Pied gauche - Yeux Ouverts</p>
								<table>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedGYO1">Temps 1</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedGYO1" name="PiedGYO1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedGYO2">Temps 2</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedGYO2" name="PiedGYO2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedGYO3">Temps 3</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedGYO3" name="PiedGYO3" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								
								<p>Pied gauche - Yeux Fermés</p>
								<table>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedGYF1">Temps 1</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedGYF1" name="PiedGYF1" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedGYF2">Temps 2</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedGYF2" name="PiedGYF2" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="PiedGYF3">Temps 3</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="PiedGYF3" name="PiedGYF3" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								
								
								</fieldset>
								</form>
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
	<script src="../js/functions.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
