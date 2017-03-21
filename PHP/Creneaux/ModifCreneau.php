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
		$idCreneau = $_GET['idCreneau']; 
	?>

        <!-------------------------- Container --------------------------------->
		

		
		
        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">
					
					<?php echo'<center><legend><a href="#" onClick="confirmFunction()" style="color: white; margin-right: 50px;"><span class="glyphicon glyphicon-arrow-left"></span></a>Creneau  n°'.$idCreneau.' </center></legend>'; ?>
					<script>
						function confirmFunction() {
							var txt;
							var r = confirm("Êtes-vous sûr ?");
							if (r == true) {
								txt = "OK!";
								window.location.assign("ListeCreneau.php");
							} else {
								txt = "Annuler!";
							}
							document.getElementById("demo").innerHTML = txt;
						}
						</script>
					</br>
					<center>
					<?php
								// REQUETE LIEU DE PRATIQUE
								$query=$bdd->prepare('SELECT id_creneau, jour_creneau, heure_creneau_debut, heure_creneau_fin FROM creneaux');
								$query->bindValue(':idCreneau',$idCreneau, PDO::PARAM_STR);
								$query->execute();
								$data = $query->fetch();
								
								$jour = $data['jour_creneau'];
								$heureDeb = $data['heure_creneau_debut'];
								$heureFin = $data['heure_creneau_fin'];								
								
								$query->CloseCursor();
								
					?>		
					</br>
					<center>

							

					
					<div class="tab-content">
						<div id="ficheResume" class="tab-pane fade active in">				
							<h3>Modifier Creneau</h3> 
							
							<form method="POST" action="ModifierCreneau.php" class="form-horizontal">
							
							<?php
						
								echo '<input class="hidden" id="idCreneau" name="idCreneau" value="'.$idCreneau.'" placeholder="" class="form-control input-md" type="text">';
							?>
								<fieldset>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="jour">Jour <span style="color: red">*</span></label>  
											<div class="col-md-5">
												<select name="jour" id="jour" class="form-control"  >
												<?php
												$query= $bdd->prepare('SELECT * FROM jours');
												$query->execute();
												while($data = $query->fetch()){
													echo '<option value="'.$data['nom_jour'].'"';
													if($data['nom_jour']==$jour){
														echo'selected="selected"';
													}	
													echo '>'.$data['nom_jour'].' </option>';
												}
												$query->CloseCursor();
												?>
											</select>
											</div>
										</div>
									</td>
								</tr>

								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="heureDeb">Heure Debut <span style="color: red">*</span></label>  
											<div class="col-md-5">
												<select name="heureDeb" id="heureDeb" class="form-control"  >
												<?php
												$query= $bdd->prepare('SELECT * FROM heures');
												$query->execute();
												while($data = $query->fetch()){
													echo '<option value="'.$data['heure'].'" ';
													if($data['heure']==$heureDeb){
														echo'selected="selected"';
													}
													echo'>'.$data['heure'].' </option>';
												}
												$query->CloseCursor();
												?>
											</select>
									
											</div>
										</div>
									</td>
								</tr>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="heureFin">Heure Fin <span style="color: red">*</span></label>  
											<div class="col-md-5">
												<select name="heureFin" id="heureFin" class="form-control"  >
												<?php
												$query= $bdd->prepare('SELECT * FROM heures');
												$query->execute();
												while($data = $query->fetch()){
													echo '<option value="'.$data['heure'].'" ';
													if($data['heure']==$heureFin){
														echo'selected="selected"';
													}
													echo'>'.$data['heure'].' </option>';
												}
												$query->CloseCursor();
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
