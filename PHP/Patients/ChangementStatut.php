<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
	<META HTTP-EQUIV="Refresh" CONTENT="0;URL=ListePatient.php">
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
<!-- Page Content -->
    <div class="container">
	<?php 
		$idPatient = $_GET['idPatient']; 
		$statutPatient = $_GET['statutPatient'];
		
		if($statutPatient == "Actif - Entretien initial"){
			$query=$bdd->prepare('UPDATE patients SET id_statut = 2 WHERE id_patient = :idPatient');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
		} else if($statutPatient == "Actif - Entretien intermédiaire"){
			$query=$bdd->prepare('UPDATE patients SET id_statut = 3 WHERE id_patient = :idPatient');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
		} else if($statutPatient == "Actif - Entretien final"){
			$query=$bdd->prepare('UPDATE patients SET id_statut = 5 WHERE id_patient = :idPatient');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
		} else if($statutPatient == "En attente"){
			$query=$bdd->prepare('UPDATE patients SET id_statut = 1 WHERE id_patient = :idPatient');
					$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
					$query->execute();
					$query->CloseCursor();
		}
		
		
	?>

	
	<?php echo'<center><div class="alert alert-success" role="alert"> Changement de statut effectué ! </div></center>';
	
	?>
	
	</div>
	</body>
	</html>
	