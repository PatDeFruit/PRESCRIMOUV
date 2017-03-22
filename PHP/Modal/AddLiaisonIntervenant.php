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
	$idCreneau = $_GET['idCreneau'];
?>
<!-- line modal -->
			
            <!-- content goes here -->
			<center>
			<legend><h3>Intervenants permettant la pratique d'activité au créneau choisi</h3> </legend>
			<form method="POST"  action ="<?php 	
			$intervenant = $_POST['inter'];
			
			$query=$bdd->prepare('SELECT id_intervenant FROM est_encadre_par WHERE id_creneau = "'.$idCreneau.'" AND id_intervenant="'.$intervenant.'"');
			$query->execute();
			$data= $query->fetch();
			$intervenantExist = $data['id_intervenant'];
			$query->CloseCursor();
			
			if($intervenantExist == 0){
			$query = $bdd->prepare('INSERT INTO est_encadre_par(id_creneau, id_intervenant) VALUES (:idCreneau, :idInterv)');
			$query->bindValue(':idCreneau',$idCreneau, PDO::PARAM_STR);
			$query->bindValue(':idInterv',$intervenant, PDO::PARAM_STR);
			$query->execute();
			$query->CloseCursor();
			} 
			
	?>">		
				<h4>Intervenants disponibles à ces créneaux</h4>
				<div class="form-group">
				<table class="table">
					<tr>
					<th>
						Prénom
					</th>
					<th>
						Nom
					</th>
					<th>
						Téléphone
					</th>
					</tr>
					<?php 
						$query=$bdd->prepare('SELECT * FROM intervenants WHERE id_intervenant IN (SELECT id_intervenant FROM est_encadre_par WHERE id_creneau = "'.$idCreneau.'")');
						$query->execute();
						while($data = $query->fetch()){
							echo '<tr>
										<td> '.$data['prenom_intervenant'].' </td>
										<td> '.$data['nom_intervenant'].' </td>
										<td> '.$data['tel_intervenant'].' </td>
									</tr>';
						}
					$query->CloseCursor();
					?>
				</table>
				</div>
				<br />
				
				<h4>Choisir un intervenant prenant en charge ce créneau</h4>
              <div class="form-group">
				<select name="inter" id="inter" class="form-control"  >
                <?php $query=$bdd->prepare('SELECT * FROM intervenants WHERE id_intervenant NOT IN (SELECT id_intervenant FROM est_encadre_par WHERE id_creneau = "'.$idCreneau.'")');
							$query->execute();
							while($data = $query->fetch()){
									echo'<option value="'.$data['id_intervenant'].'"> '.$data['prenom_intervenant'].' '.$data['nom_intervenant'].'</option>';
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

								