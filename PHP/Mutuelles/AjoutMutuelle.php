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

    <!-- Page Content -->
    <div class="container">


        <!-------------------------- Container --------------------------------->

        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">		
					<?php echo'<center><legend><a href="#" onClick="confirmFunction()" style="color: white; margin-right: 50px;"><span class="glyphicon glyphicon-arrow-left"></span></a> Ajouter une mutuelle </center></legend>'; ?>
					<script>
						function confirmFunction() {
							var txt;
							var r = confirm("Êtes-vous sûr ?");
							if (r == true) {
								txt = "OK!";
								window.location.assign("ListeMutuelle.php");
							} else {
								txt = "Annuler!";
							}
							document.getElementById("demo").innerHTML = txt;
						}
						</script>
					</br>
					<center>

							  <div id="afficherInfosPatient">
					<div class="tab-content">
						<div id="ficheResume" class="tab-pane fade active in">				
							<h3> Ajout Mutuelle </h3> 
							<form method="POST" action="EnregistrerMutuelle.php" class="form-horizontal">
								<fieldset>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="firstname">Nom <span style="color: red">*</span></label>  
											<div class="col-md-5">
												<?php
													echo '<input id="firstname" name="firstname" value="" class="form-control input-md" required=" " type="text">';
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
											<label class="col-md-4 control-label" for="adresseMutuelle">Adresse</label>  
											<div class="col-md-5">
												<?php
													echo '<input id="adresseMutuelle" name="adresseMutuelle" value="" class="form-control input-md"    type="text">';
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
													echo'<input id="city" name="city" value="" class="form-control input-md"   type="number" maxlength="5">';
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
												echo'<input id="state" name="state" value="" class="form-control input-md" type="text">';
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
								  echo' <input id="phone" name="phone" value="" class="form-control input-md" type="tel" maxlength="10">';
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
								  echo'<input id="email" name="email" value="" class="form-control input-md" required="" type="email">';
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
