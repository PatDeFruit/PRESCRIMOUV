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

    <div class="container">
	<?php 
		$idCentre = $_GET['idCentre']; 
	?>

        <!-------------------------- Container --------------------------------->
		

		
		
        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">
					
					<?php echo'<center><legend><a href="#" onClick="confirmFunction()" style="color: white; margin-right: 50px;"><span class="glyphicon glyphicon-arrow-left"></span></a> Structure  n°'.$idCentre.' </center></legend>'; ?>
					<script>
						function confirmFunction() {
							var txt;
							var r = confirm("Êtes-vous sûr ?");
							if (r == true) {
								txt = "OK!";
								window.location.assign("ListeCentre.php");
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
								// REQUETE LIEU DE PRATIQUE
								$query=$bdd->prepare('SELECT id_centre, nom_centre, adresse_centre, CP_centre, ville_centre, tel_centre, email_centre, type_centre FROM centres');
								$query->bindValue(':idCentre',$idCentre, PDO::PARAM_STR);
								$query->execute();
								$data = $query->fetch();
								
								$nomCentre = $data['nom_centre'];
								$adresseCentre = $data['adresse_centre'];
								$cpCentre = $data['CP_centre'];
								$villeCentre = $data['ville_centre'];
								$telCentre = $data['tel_centre'];
								$mailCentre = $data['email_centre'];
								$typeCentre = $data['type_centre'];
								
								
								$query->CloseCursor();
								
					?>		
					</br>
					<center>

							

					
					<div class="tab-content">
						<div id="ficheResume" class="tab-pane fade active in">				
							<h3>Modifier la structure</h3> 
							
							<form method="POST" action="ModifierCentre.php" class="form-horizontal">
							
							<?php
						
								echo '<input class="hidden" id="idCentre" name="idCentre" value="'.$idCentre.'" placeholder="" class="form-control input-md" type="text">';
							?>
								<fieldset>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="nom">Nom <span style="color: red">*</span></label>  
											<div class="col-md-5">
												<?php
													echo '<input id="nom" name="nom" value="'.$nomCentre.'" class="form-control input-md" required=" " type="text">';
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
											<label class="col-md-4 control-label" for="adresse">Adresse <span style="color: red">*</span></label>  
											<div class="col-md-5">
												<?php
													echo '<input id="adresse" name="adresse" value="'.$adresseCentre.'" class="form-control input-md"  required=" " type="text">';
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
											<label class="col-md-4 control-label" for="CP">Code Postal <span style="color: red">*</span></label>  
											<div class="col-md-5">
												<?php
													echo '<input id="CP" name="CP" value="'.$cpCentre.'" class="form-control input-md"  required=" " type="number" maxlength="5">';
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
											<label class="col-md-4 control-label" for="ville">Ville <span style="color: red">*</span></label>  
											<div class="col-md-5">
												<?php
													echo '<input id="ville" name="ville" value="'.$villeCentre.'" class="form-control input-md"  required=" " type="text">';
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
											<label class="col-md-4 control-label" for="tel">Telephone</label>  
											<div class="col-md-5">
												<?php
													echo '<input id="tel" name="tel" value="'.$telCentre.'" class="form-control input-md"  type="text" maxlength="10" >';
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
											<label class="col-md-4 control-label" for="email">Email</label>  
											<div class="col-md-5">
												<?php
													echo '<input id="email" name="email" value="'.$mailCentre.'" class="form-control input-md"   type="text">';
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
											<label class="col-md-4 control-label" for="typeCentre">Type de structure <span style="color: red">*</span></label>  
											<div class="col-md-5">
											<select name="typeCentre" id="typeCentre" class="form-control"  required="" >
											<?php
											 echo'<option value="Privé" ';
											 if($typeCentre == "Privé"){
												 echo 'selected = "selected"';
											 }
											 echo' >Privé</option>';
											 echo'<option value="Association fédérale" ';
											 if($typeCentre == "Association fédérale"){
												 echo 'selected = "selected"';
											 }
											 echo'>Association fédérale</option>';
											  echo'<option value="Comité" ';
											 if($typeCentre == "Comité"){
												 echo 'selected = "selected"';
											 }
											 echo'>Comité</option>';
											  echo'<option value="Association patients" ';
											 if($typeCentre == "Association patients"){
												 echo 'selected = "selected"';
											 }
											 echo'>Association patients</option>';
										 
										  ?>
										</select>		
											</div>
										</div>
									</td>
								</tr>
								</table>
						
								<input type="submit" value="Enregistrer"  name="valid-entInitial" class="btn btn-success btn-xs">'
								
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
