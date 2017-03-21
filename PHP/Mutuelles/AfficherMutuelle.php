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
		
		?>

</head>

<body>

    <?php include("../header.php"); ?> 

    <!-- Page Content -->
    <div class="container">
	<?php 
		$idMutuelle = $_GET['idMutuelle'];

	?>

        <!-------------------------- Container --------------------------------->
		

		
		
        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">
					
					<?php echo'<center><legend> <a href="ListeMutuelle.php" style="color: white; margin-right: 50px;"><span class="glyphicon glyphicon-arrow-left"></span></a><a href="ModifMutuelle.php?idMutuelle='.$idMutuelle.'" style="color: white; margin-right: 50px;"><span class="glyphicon glyphicon-pencil"></span></a> Mutuelle  n°'.$idMutuelle.' </center></legend>'; ?>
					</br>
					
					</br>
					<div id="afficherInfosPatient">
					<center>
					<?php
								// REQUETE PATIENT
								$query=$bdd->prepare('SELECT id_mutuelle, nom_mutuelle, adresse_mutuelle, CP_mutuelle, ville_mutuelle, email_mutuelle, tel_mutuelle FROM mutuelles WHERE id_mutuelle = :idMutuelle');
								$query->bindValue(':idMutuelle',$idMutuelle, PDO::PARAM_STR);
								$query->execute();
								$data = $query->fetch();
								
								$nomMutuelle = $data['nom_mutuelle'];
								$adresseMutuelle = $data['adresse_mutuelle'];
								$cpMutuelle = $data['CP_mutuelle'];
								$villeMutuelle = $data['ville_mutuelle'];
								$mailMutuelle = $data['email_mutuelle'];
								$telMutuelle = $data['tel_mutuelle'];
								
								$query->CloseCursor();
								
					?>			
					
					<div class="tab-content">
						<div id="ficheResume" class="tab-pane fade active in">				
							<h3>Informations Mutuelle </h3> 
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
													echo '<input id="firstname" name="firstname" value="'.$nomMutuelle.'" class="form-control input-md" required="" disabled="disabled" type="text">';
												?>
									
											</div>
										</div>
									</td>

								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="adresseMutuelle">Adresse</label>  
											<div class="col-md-5">
												<?php
													echo '<input id="adresseMutuelle" name="adresseMutuelle" value="'.$adresseMutuelle.'" class="form-control input-md" required="" disabled="disabled" type="text">';
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
								  <label class="col-md-4 control-label" for="city">Code postal</label>  
								  <div class="col-md-3">
								  <?php
								  echo'<input id="city" name="city" value="'.$cpMutuelle.'" class="form-control input-md" disabled="disabled" type="number">';
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
								  echo'<input id="state" name="state" value="'.$villeMutuelle.'" class="form-control input-md" disabled="disabled" type="text">';
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
								  echo' <input id="phone" name="phone" value="'.$telMutuelle.'" class="form-control input-md" disabled="disabled" type="tel">';
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
								  echo'<input id="email" name="email" value="'.$mailMutuelle.'" class="form-control input-md" disabled="disabled" required="" type="email">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>

									
								 
						
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
