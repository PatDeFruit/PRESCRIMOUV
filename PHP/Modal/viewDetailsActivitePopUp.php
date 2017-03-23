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
</head>
<body>
<div class="container">
<?php
//Cette fonction doit être appelée avant tout code html
		session_start();

		//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
		include("../../BDD/variableSession.php");
		include("../../BDD/connexionBDD.php");
		if($id==0){ erreur2(ERR_IS_CO); }
	$idPatient = $_GET['idPatient'];
	$idActivite = $_GET['idAct'];
?>
<!-- line modal -->
			
            <!-- content goes here -->
			<center>
			<legend><h3>Détails de l'activité    </h3> </legend>
			<!-- content goes here -->
												<?php
													$query2=$bdd->prepare('SELECT * FROM doit_pratiquer WHERE id_patient = "'.$idPatient.'" AND id_activite = "'.$idActivite.'"');
													$query2->execute();
													$data2 = $query2->fetch();
												?>
												<form>
												  <div class="form-group">
													<label for="freqAct">Fréquence</label>
													<?php echo'<input type="number" class="form-control" id="freqAct" disabled="disabled" value="'.$data2['frequence'].'">'; ?>
												  </div>
												  <div class="form-group">
													<label for="dureeAct">Durée</label>
													<?php echo'<input type="text" class="form-control" id="dureeAct" disabled="disabled" value="'.$data2['duree'].'">'; ?>
												  </div>
												  <div class="form-group">
													<label for="intAct">Intensité</label>
													<?php echo'<input type="number" class="form-control" id="intAct" disabled="disabled" value="'.$data2['intensite'].'">'; ?>
												  </div>
												  <div class="form-group">
													<label for="seanceAct">Ratio séances effectuées/prévues</label>
													<br/>
													<div class="progress">
														<?php 
														$perc = ($data2['nb_seances_effect']*100)/$data2['nb_seances_prevues'];
														echo'<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="'.$data2['nb_seances_effect'].'" aria-valuemin="0" aria-valuemax="'.$data2['nb_seances_prevues'].'" style="width: '.$perc.'%">
															<span class="sr-only">'.$data2['nb_seances_effect'].' séances effectuées"</span>
															<span class="progress-completed">'.$perc.'%</span>
														</div>
													</div>';
													?>
												</div>
												</form>
												<?php 
												$query2->CloseCursor();
												?>
		
	</div>
  </div>
</div>
</center>
</body>

								