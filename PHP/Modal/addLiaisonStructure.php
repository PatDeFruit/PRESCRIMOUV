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
	$idCreneau = $_GET['idCreneau'];
?>
<!-- line modal -->
			
            <!-- content goes here -->
			<center>
			<legend><h3>Centres permettant la pratique d'activité au créneau choisi</h3> </legend>
			<form method="POST"  action ="<?php 	
			$structure = $_POST['struct'];
			
			$query=$bdd->prepare('SELECT id_centre FROM se_fait_dans WHERE id_creneau = "'.$idCreneau.'" AND id_centre="'.$structure.'"');
			$query->execute();
			$data= $query->fetch();
			$structureExist = $data['id_centre'];
			$query->CloseCursor();
			
			if($structureExist == 0){
			$query = $bdd->prepare('INSERT INTO se_fait_dans(id_creneau, id_centre) VALUES (:idCreneau, :idCentre)');
			$query->bindValue(':idCreneau',$idCreneau, PDO::PARAM_STR);
			$query->bindValue(':idCentre',$structure, PDO::PARAM_STR);
			$query->execute();
			$query->CloseCursor();
			} 
			
	?>">		
				<h4>Structures pratiquant ces créneaux</h4>
				<div class="form-group">
				<table class="table">
					<tr>
					<th>
						Nom de la structure
					</th>
					<th>
						Adresse
					</th>
					<th>
						Ville
					</th>
					<th>
						Type
					</th>
					</tr>
					<?php 
						$query=$bdd->prepare('SELECT * FROM centres WHERE id_centre IN (SELECT id_centre FROM se_fait_dans WHERE id_creneau = "'.$idCreneau.'")');
						$query->execute();
						while($data = $query->fetch()){
							echo '<tr>
										<td> '.$data['nom_centre'].' </td>
										<td> '.$data['adresse_centre'].' </td>
										<td> '.$data['ville_centre'].' </td>
										<td> '.$data['type_centre'].' </td>
									</tr>';
						}
					$query->CloseCursor();
					?>
				</table>
				</div>
				<br />
				
				<h4>Choisir une structure pour ce créneau</h4>
              <div class="form-group">
				<select name="struct" id="struct" class="form-control"  >
                <?php $query=$bdd->prepare('SELECT * FROM centres WHERE id_centre NOT IN (SELECT id_centre FROM se_fait_dans WHERE id_creneau = "'.$idCreneau.'")');
							$query->execute();
							while($data = $query->fetch()){
									echo'<option value="'.$data['id_centre'].'"> '.$data['nom_centre'].' - '.$data['type_centre'].'</option>';
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

								