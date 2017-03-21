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

	include("../../BDD/connexionBDD.php");
	$idIntervenant = $_GET['idIntervenant'];
?>
<!-- line modal -->
			
            <!-- content goes here -->
			<center>
			<legend><h3>Votre intervenant    </h3> </legend>
			<!-- content goes here -->
			<?php
				$query2=$bdd->prepare('SELECT * FROM intervenants JOIN diplomes USING(id_diplome) WHERE id_intervenant = "'.$idIntervenant.'"');
				$query2->execute();
				$data2 = $query2->fetch();
			?>
			<form>
			  <div class="form-group">
				<label for="nameInt">Nom de l'intervenant</label>
				<?php echo'<input type="text" class="form-control" id="nameInt" disabled="disabled" value="'.$data2['nom_intervenant'].'">'; ?>
			  </div>
			  <div class="form-group">
				<label for="firstnameInt">Prénom de l'intervenant</label>
				<?php echo'<input type="text" class="form-control" id="firstnameInt" disabled="disabled" value="'.$data2['prenom_intervenant'].'">'; ?>
			  </div>
			  <div class="form-group">
				<label for="telInt">Téléphone</label>
				<?php echo'<input type="tel" class="form-control" id="telInt" disabled="disabled" value="'.$data2['tel_intervenant'].'">'; ?>
			  </div>
			  <div class="form-group">
				<label for="emailInt">Email</label>
				<?php echo'<input type="email" class="form-control" id="emailInt" disabled="disabled" value="'.$data2['email_intervenant'].'">'; ?>
			  </div>
			  <div class="form-group">
				<label for="diplInt">Diplôme de l'intervenant</label>
				<?php echo'<input type="text" class="form-control" id="diplInt" disabled="disabled" value="'.$data2['nom_diplome'].'">'; ?>
			  </div>
				<?php 
				$query2->CloseCursor();
			
				?>
			</form>
		
	</div>
  </div>
</div>
</center>
</body>

								