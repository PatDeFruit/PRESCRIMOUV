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
	<script type="text/javascript" src="../../js/functions.js"></script>

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
		if($id==0){ erreur2(ERR_IS_CO); }
		?>

</head>

<body>

    <?php include("../header.php"); ?> 

    <div class="container">
	<?php 
		$idMedecin = $_GET['idMedecin']; 
	?>

        <!-------------------------- Container --------------------------------->
		

		
		
        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">
					<?php echo'<center><legend><a href="#" onClick="confirmFunction()" style="color: white; margin-right: 50px;"><span class="glyphicon glyphicon-arrow-left"></span></a> Médecin  n°'.$idMedecin.'</center></legend>'; ?>
					<script>
						function confirmFunction() {
							var txt;
							var r = confirm("Êtes-vous sûr ?");
							if (r == true) {
								txt = "OK!";
								window.location.assign("ListeMedecin.php");
							} else {
								txt = "Annuler!";
							}
							document.getElementById("demo").innerHTML = txt;
						}
						</script>
					</br>
					<div id="afficherInfosPatient">
					<center>
					<?php
								// REQUETE MEDECINS
								$query=$bdd->prepare('SELECT id_medecin, nom_medecin, prenom_medecin, num_adeli, adresse_medecin, CP_medecin, ville_medecin, email_medecin, tel_medecin FROM medecins WHERE id_medecin = :idMedecin');
								$query->bindValue(':idMedecin',$idMedecin, PDO::PARAM_STR);
								$query->execute();
								$data = $query->fetch();
								
								$nomMedecin = $data['nom_medecin'];
								$prenomMedecin = $data['prenom_medecin'];
								$numAdeli = $data['num_adeli'];
								$adresseMedecin = $data['adresse_medecin'];
								$cpMedecin = $data['CP_medecin'];
								$villeMedecin = $data['ville_medecin'];
								$mailMedecin = $data['email_medecin'];
								$telMedecin = $data['tel_medecin'];
								
								
								$query->CloseCursor();
								
					?>		
					</br>
					<center>

							

					
					<div class="tab-content">
						<div id="ficheResume" class="tab-pane fade active in">				
							<h3>Modifier Medecin </h3> 
							
							<form method="POST" action="ModifierMed.php" class="form-horizontal">
							
							<?php
						
								echo '<input class="hidden" id="idMedecin" name="idMedecin" value="'.$idMedecin.'" placeholder="" class="form-control input-md" type="text">';
							?>
								<fieldset>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="firstname">Nom <span style="color: red">*</span></label>  
											<div class="col-md-5">
												<?php
													echo '<input id="firstname" name="firstname" value="'.$nomMedecin.'"  class="form-control input-md" required=" " type="text">';
												?>
									
											</div>
										</div>
									</td>

									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="lastname">Prénom <span style="color: red">*</span> </label>  
											<div class="col-md-5">
												<?php
													echo'<input id="lastname" name="lastname" value="'.$prenomMedecin.'" " class="form-control input-md" required="" type="text">';
												?>
									
											</div>
										</div>
									</td>
								</tr>

								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="numAdeli">Numéro Adeli </label>  
											<div class="col-md-5">
												<?php
													echo '<input id="numAdeli" name="numAdeli" value="'.$numAdeli.'"  class="form-control input-md" type="text" maxlength="10">';
												?>
									
											</div>
										</div>
									</td>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="adresseMedecin">Adresse</label>  
											<div class="col-md-5">
												<?php
													echo '<input id="adresseMedecin" name="adresseMedecin" value="'.$adresseMedecin.'" placeholder="" class="form-control input-md"  type="text">';
												?>
									
											</div>
										</div>
									</td>
																	
								<table class="table">								
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="city">Code postal</label>  
											<div class="col-md-3">
												<?php
													echo'<input id="city" name="city" value="'.$cpMedecin.'" placeholder="" class="form-control input-md"  type="number" maxlength="5">';
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
												echo'<input id="state" name="state" value="'.$villeMedecin.'" placeholder="" class="form-control input-md"  type="text">';
											?>
									
											</div>
										</div>
									</td>
								</tr>
								
								<table class="table">								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="phone">Téléphone</label>  
								  <div class="col-md-5">
								 <?php
								  echo' <input id="phone" name="phone" value="'.$telMedecin.'" placeholder="" class="form-control input-md" type="tel" maxlength="10">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
							
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="email">Email <span style="color: red">*</span></label>  
								  <div class="col-md-8">
								  <?php
								  echo'<input id="email" name="email" placeholder="" value="'.$mailMedecin.'" class="form-control input-md" required="" type="email">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
					
								</table>
						
								<input type="submit" value="Enregistrer"  name="valid-entInitial" class="btn btn-success btn-xs">
								
								<br/><br/>
							</form>	
					</center>			
				</fieldset>
			</div>
		</div>
		</div>
		
        <!-------------------------- /Container --------------------------------->
	
    <?php include("../footer.php"); 
		?> 
    </div>
    <!-- /content -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>
	<script src="../../js/functions.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
