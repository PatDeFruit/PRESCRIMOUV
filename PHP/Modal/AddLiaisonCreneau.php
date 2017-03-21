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

	include("../../BDD/connexionBDD.php");
	$idActivite = $_GET['idActivite'];
	$query=$bdd->prepare('SELECT activite FROM activites WHERE id_activite ="'.$idActivite.'"');
	$query->execute();
	$data = $query->fetch();
	$activite = $data['activite'];
	$query->CloseCursor();
?>
<!-- line modal -->
			
            <!-- content goes here -->
			<center>
			<legend><h3>Choisir un créneau  pour l'activité <?php echo $activite;?></h3> </legend>
			<form method="POST"  action ="<?php 	
			$creneauChoisi = $_POST['act'];
			
			$query=$bdd->prepare('SELECT id_creneau, id_activite FROM se_fait_a WHERE id_activite = "'.$idActivite.'" AND id_creneau"'.$creneauChoisi.'"');
			$query->execute();
			$data= $query->fetch();
			$creneauExist = $data['id_creneau'];
			$query->CloseCursor();
			
			if($creneauExist == 0){
				$query = $bdd->prepare('INSERT INTO doit_pratiquer(id_patient, id_activite, frequence, duree, intensite, nb_seances_prevues) VALUES (:idPatient, :idAct, :freq, :duree, :intensite, :nbSeance)');
			$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
			$query->bindValue(':idAct',$activite, PDO::PARAM_STR);
			$query->bindValue(':freq',$frequence, PDO::PARAM_STR);
			$query->bindValue(':duree',$duree, PDO::PARAM_STR);
			$query->bindValue(':intensite',$intensite, PDO::PARAM_STR);
			$query->bindValue(':nbSeance',$nb_seance, PDO::PARAM_STR);
			$query->execute();
			$query->CloseCursor();
			} 
			
	?>">
              <div class="form-group">
				<select name="act" id="act" class="form-control"  >
                <?php $query=$bdd->prepare('SELECT * FROM creneaux');
							$query->execute();
							while($data = $query->fetch()){
									echo'<option value="'.$data['id_creneau'].'"> '.$data['jour_creneau'].' de '.$data['heure_creneau_debut'].' à '.$data['heure_creneau_fin'].' </option>';
							}
							$query->CloseCursor();
							?>
				</select>
              </div>
		  <input type="submit" value="Enregistrer" class="btn btn-success btn-xs">
            </form>
		</div>
		
	</div>
  </div>
</div>
</center>
</body>

								