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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
<div class="container">
<?php
//Cette fonction doit être appelée avant tout code html
		session_start();

		//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
		include("../../BDD/variableSession.php");
		include("../../BDD/connexionBDD.php");
		if($id==0){ erreur2(ERR_IS_CO); }
	$idActivite = $_GET['idAct'];
?>
<!-- line modal -->
			
            <!-- content goes here -->
			<center>
			<legend><h3>Créneaux de l'activité</h3> </legend>
			<!-- content goes here -->
							
	
				
		
			  <table class="table">
				<tr>
					<th> Créneau </th>
					<th>Structure </th>
					<th> Intervenant </th>
				</tr>
				<?php 
				$query=$bdd->prepare('select jour_creneau, heure_creneau_debut, heure_creneau_fin, nom_centre, nom_intervenant, prenom_intervenant from se_fait_a JOIN creneaux using(id_creneau) join se_fait_dans using(id_creneau) join centres using(id_centre) join est_encadre_par using(id_creneau) join intervenants using(id_intervenant) where id_activite="'.$idActivite.'"');
				$query->execute();
				while($data = $query->fetch()){
					echo'<tr>
								<td>'.$data['jour_creneau'].' de '.$data['heure_creneau_debut'].' à '.$data['heure_creneau_fin'].'</td>
								<td>'.$data['nom_centre'].'</td>
								<td>'.$data['prenom_intervenant'].' '.$data['nom_intervenant'].'</td>
							</tr>';
				}
				?>
			  </table>
			  


		
	</div>
  </div>
</div>
</center>
</body>

								