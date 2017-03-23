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
<script>
    window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload()
		window.close();
    }
</script>
<div class="container">
<?php
//Cette fonction doit être appelée avant tout code html
		session_start();

		//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
		include("../../BDD/variableSession.php");
		include("../../BDD/connexionBDD.php");
		if($id==0){ erreur2(ERR_IS_CO); }
	$idPatient = $_GET['idPatient'];
?>
<!-- line modal -->
			
            <!-- content goes here -->
			<center>
			<legend><h3>Ajouter une activité    </h3> </legend>
			<form method="POST"  action ="<?php 	
			$activite = $_POST['act'];
			$frequence = $_POST['freq'];
			$duree = $_POST['duree'];
			$intensite = $_POST['intensite'];
			$nb_seance = $_POST['nb_seance'];
			
			$query = $bdd->prepare('INSERT INTO doit_pratiquer(id_patient, id_activite, frequence, duree, intensite, nb_seances_prevues) VALUES (:idPatient, :idAct, :freq, :duree, :intensite, :nbSeance)');
			$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
			$query->bindValue(':idAct',$activite, PDO::PARAM_STR);
			$query->bindValue(':freq',$frequence, PDO::PARAM_STR);
			$query->bindValue(':duree',$duree, PDO::PARAM_STR);
			$query->bindValue(':intensite',$intensite, PDO::PARAM_STR);
			$query->bindValue(':nbSeance',$nb_seance, PDO::PARAM_STR);
			$query->execute();
			$query->CloseCursor();

	?>">
              <div class="form-group">
                <label for="act">Activité choisie</label>
				<select name="act" id="act" class="form-control"  >
                <?php $query=$bdd->prepare('SELECT * FROM activites');
							$query->execute();
							while($data = $query->fetch()){
									echo'<option value="'.$data['id_activite'].'"> '.$data['activite'].' </option>';
							}
							$query->CloseCursor();
							?>
				</select>
              </div>
			  <div class="form-group">
                <label for="freq">Fréquence</label>
				<?php echo'<input type="number" class="form-control" id="freq" name="freq" value="">'; ?>
              </div>
			   <div class="form-group">
                <label for="duree">Durée</label>
				<?php echo'<input type="number" class="form-control" id="duree" name="duree" value="">'; ?>
              </div>
			   <div class="form-group">
                <label for="intensite">Intensité</label>
				<?php echo'<input type="text" class="form-control" id="intensite" name="intensite" value="">'; ?>
              </div>
			   <div class="form-group">
                <label for="nb_seance">Nombre de séances à réaliser</label>
				<?php echo'<input type="number" class="form-control" id="nb_seance" name="nb_seance" value="">'; ?>
              </div>
             
             
		  <input type="submit" value="Enregistrer" class="btn btn-success btn-xs">
            </form>
		</div>
		
	</div>
  </div>
</div>
</center>
</body>

								