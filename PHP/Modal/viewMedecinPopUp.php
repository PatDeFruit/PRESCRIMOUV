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
	$idMedecin = $_GET['idMedecin'];
?>
<!-- line modal -->
			
            <!-- content goes here -->
			<center>
			<legend><h3>Votre médecin    </h3> </legend>
			<!-- content goes here -->
			<?php
				$query=$bdd->prepare('SELECT * FROM medecins WHERE id_medecin = "'.$idMedecin.'"');
				$query->execute();
				$data = $query->fetch();
			?>
			<form >
              <div class="form-group">
                <label for="nameMed">Nom du médecin</label>
                <?php echo'<input type="text" class="form-control" id="nameMed" disabled="disabled" value="'.$data['nom_medecin'].'">'; ?>
              </div>
              <div class="form-group">
                <label for="firstnameMed">Prénom du médecin</label>
                <?php echo'<input type="text" class="form-control" id="firstnameMed" disabled="disabled" value="'.$data['prenom_medecin'].'">'; ?>
              </div>
			  <div class="form-group">
                <label for="numAdeli">Numéro Adeli</label>
                <?php echo'<input type="number" class="form-control" id="numAdeli" disabled="disabled" value="'.$data['num_adeli'].'">'; ?>
              </div>
			  <div class="form-group">
                <label for="telMed">Téléphone</label>
                <?php echo'<input type="tel" class="form-control" id="telMed" disabled="disabled" value="'.$data['tel_medecin'].'">'; ?>
              </div>
			  <div class="form-group">
                <label for="emailMed">Email</label>
                <?php echo'<input type="email" class="form-control" id="emailMed" disabled="disabled" value="'.$data['email_medecin'].'">'; ?>
              </div>

            </form>
			<?php 
			$query->CloseCursor();
			?>
		
	</div>
  </div>
</div>
</center>
</body>

								