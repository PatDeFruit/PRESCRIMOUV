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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/portfolio-item.css" rel="stylesheet">
	<link rel="stylesheet" href="../CSS/style.css">
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
		include("../BDD/variableSession.php");
		include("../BDD/connexionBDD.php");
		
		?>

</head>

<body>

    <?php include("header.php"); ?> 

    <!-- Page Content -->
    <div class="container">

        <!-------------------------- Container --------------------------------->

        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">
					<center><legend> Liste des patients </legend></center>
					<center>
						<table id="tableauPatient" class="table-hover">
							<thead>
								<th class="text-center">
								Identifiant
								</th>
								<th class="text-center">
								Nom
								</th>
								<th class="text-center">
								Prénom
								</th>
								<th class="text-center">
								Statut
								</th>
								<th>
								
								</th>
							</thead>

							<?php
								$query=$bdd->prepare('SELECT id_patient, nom_patient, prenom_patient, statut, id_statut FROM patients JOIN statuts USING(id_statut)');
								$query->execute();
								;
								while($data=$query->fetch()){
									echo '<tr><td width="10%" class="text-center">'.$data['id_patient'].'</td><td width="20%" class="text-center">'.$data['nom_patient'].'</td><td width="20%" class="text-center">'.$data['prenom_patient'].'</td>';
									if($data['id_statut']==1 || $data['id_statut']==2 || $data['id_statut']==3){
										echo'<td width="20%" class="text-center"><span class="label label-success">'.$data['statut'].' </span>';
									} else if($data['id_statut']==4){
										echo'<td width="20%" class="text-center"><span class="label label-warning">'.$data['statut'].' </span>';
									} else if($data['id_statut']==5){
										echo'<td width="20%" class="text-center"><span class="label label-danger">'.$data['statut'].' </span>';
									}
									echo'</td><td class="text-center" width="30%"><a class=\'btn btn-success btn-xs\' href="AfficherPatient.php?idPatient='.$data['id_patient'].'&statutPatient='.$data['statut'].'"><span class="glyphicon glyphicon-eye-open"></span> </a> <a class=\'btn btn-info btn-xs\' href="ModifierPatient.php?idPatient='.$data['id_patient'].'&statutPatient='.$data['statut'].'"><span class="glyphicon glyphicon-edit"></span> </a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-inbox"></span> </a></td>';
								}
								
								$query->CloseCursor();
							?>
						</table>
					</center>
					
				</fieldset>
			</div>
		</div>
		
        <!-------------------------- /Container --------------------------------->
	
    <?php include("footer.php"); ?> 
    </div>
    <!-- /content -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
	<script src="../js/functions.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
