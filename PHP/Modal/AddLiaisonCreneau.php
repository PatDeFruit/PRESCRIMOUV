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
			<legend><h3>Les créneaux durant lesquels se pratique l'activité <?php echo $activite;?></h3> </legend>
			<form method="POST"  action ="<?php 	
			$creneauChoisi = $_POST['act'];
			
			$query=$bdd->prepare('SELECT id_creneau FROM se_fait_a WHERE id_activite = "'.$idActivite.'" AND id_creneau="'.$creneauChoisi.'"');
			$query->execute();
			$data= $query->fetch();
			$creneauExist = $data['id_creneau'];
			$query->CloseCursor();
			
			if($creneauExist == 0){
			$query = $bdd->prepare('INSERT INTO se_fait_a(id_activite, id_creneau) VALUES (:idAct, :idCreneau)');
			$query->bindValue(':idAct',$idActivite, PDO::PARAM_STR);
			$query->bindValue(':idCreneau',$creneauChoisi, PDO::PARAM_STR);
			$query->execute();
			$query->CloseCursor();
			} 
			
	?>">		
				<h4>Créneaux déjà disponibles pour cette activité</h4>
				<div class="form-group">
				<table class="table">
					<tr>
					<th>
						Jour
					</th>
					<th>
						Début
					</th>
					<th>
						Fin
					</th>
					</tr>
					<?php 
						$query=$bdd->prepare('SELECT * FROM creneaux WHERE id_creneau IN (SELECT id_creneau FROM se_fait_a WHERE id_activite = "'.$idActivite.'")');
						$query->execute();
						while($data = $query->fetch()){
							echo '<tr>
										<td> '.$data['jour_creneau'].' </td>
										<td> '.$data['heure_creneau_debut'].' </td>
										<td> '.$data['heure_creneau_fin'].' </td>
									</tr>';
						}
					$query->CloseCursor();
					?>
				</table>
				</div>
				<br />
				
				<h4>Choisir un créneau pour cette activité</h4>
              <div class="form-group">
				<select name="act" id="act" class="form-control"  >
                <?php $query=$bdd->prepare('SELECT * FROM creneaux WHERE id_creneau NOT IN (SELECT id_creneau FROM se_fait_a WHERE id_activite = "'.$idActivite.'")');
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

								