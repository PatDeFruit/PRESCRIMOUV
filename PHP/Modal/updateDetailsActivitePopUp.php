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
<script>
    window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload()
		window.close();
    }
</script>
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
	$nbSeancesRealisee = $_GET['nbSeanceDejaEffect'];
	$nbSeancesPrevues = $_GET['nbSeancePrevues'];
?>
<!-- line modal -->
			
            <!-- content goes here -->
			<center>
			<legend><h3>Détails de l'activité    </h3> </legend>
			<!-- content goes here -->
							
			<form method="POST"  action ="<?php 	
					$nb_seance = $_POST['nbSeancesRealisee'];
					$query = $bdd->prepare('UPDATE doit_pratiquer SET nb_seances_effect="'.$nb_seance.'" WHERE id_patient = "'.$idPatient.'" AND id_activite = "'.$idActivite.'"');
					$query->execute();
					$query->CloseCursor();

			?>">
			
			  <div class="form-group">
				<label for="nbSeancesRealisee">Nombre de séances réalisées</label>
				<?php 				
				echo'<input type="number" class="form-control" id="nbSeancesRealisee" name="nbSeancesRealisee" value="'.$nbSeancesRealisee.'" max="'.$nbSeancesPrevues.'">'; 
				?>
			  </div>
			  
			  <input type="submit" value="Mettre à jour" class="btn btn-success btn-xs">
			</form>
		
	</div>
  </div>
</div>
</center>
</body>

								