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


        <!-------------------------- Container --------------------------------->

        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">		
					
					</br>
					<center>

							  
					<div class="tab-content">
						<div id="ficheResume" class="tab-pane fade active in">				
							<h3>Informations Medecin </h3> 
							<form method="POST" action="EnregistrerMed.php" class="form-horizontal">
								<fieldset>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="firstname">Nom</label>  
											<div class="col-md-5">
												<?php
													echo '<input id="firstname" name="firstname" value=" " class="form-control input-md" required=" " type="text">';
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
													echo'<input id="lastname" name="lastname" value=" " class="form-control input-md" required="" type="text">';
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
											<label class="col-md-4 control-label" for="numAdeli">Numéro Adeli</label>  
											<div class="col-md-5">
												<?php
													echo '<input id="numAdeli" name="numAdeli" value=" " class="form-control input-md" required="" type="text">';
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
													echo '<input id="adresseMedecin" name="adresseMedecin"  class="form-control input-md"  type="text">';
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
													echo'<input id="city" name="city" class="form-control input-md"  type="number">';
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
												echo'<input id="state" name="state" class="form-control input-md"  type="text">';
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
								  echo' <input id="phone" name="phone" class="form-control input-md" type="tel">';
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
								  echo'<input id="email" name="email" value="" class="form-control input-md" required="" type="email">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
					
								</table>
								<input type="submit" value="Enregistrer" onClick="Enregistrer" name="valid-entInitial" class="btn btn-success btn-xs">
								<br/><br/>
							</form>	
					</center>			
				</fieldset>
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
