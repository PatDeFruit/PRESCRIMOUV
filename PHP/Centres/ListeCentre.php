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

        <!-------------------------- Container --------------------------------->
		
        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">
					<center><legend> Liste des lieux de pratique </legend></center>
					<br/>
					<center><input type="button" id="boutonAutre" value="Ajout lieu de pratique" onclick="self.location.href='AjoutCentre.php'"></center>
					<br/><br/>
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
								Adresse
								</th>
								<th class="text-center">
								Telephone 
								</th>
								<th class="text-center">
								E-mail
								</th>
								<th class="text-center">
								Type de centre
								</th>
							</thead>

							<?php
								$query=$bdd->prepare('SELECT id_centre, nom_centre, adresse_centre, CP_centre, ville_centre, tel_centre, email_centre, type_centre FROM centres');
								$query->execute();
								;
								while($data=$query->fetch()){
									$adresseComp = $data['adresse_centre'].' '.$data['CP_centre'].' '.$data['ville_centre'];
									echo '<tr><td width="8%" class="text-center">'.$data['id_centre'].'</td><td width="15%" class="text-center">'.$data['nom_centre'].'</td><td width="25%" class="text-center">'.$adresseComp.'</td><td width="15%" class="text-center">'.$data['tel_centre'].'</td><td width="15%" class="text-center">'.$data['email_centre'].'</td><td width="20%" class="text-center">'.$data['type_centre'].'</td>';
									echo'<td class="text-center" width="30%"><a class=\'btn btn-info btn-xs\' href="ModifCentre.php?idCentre='.$data['id_centre'].'"><span class="glyphicon glyphicon-edit"></span> </a></td>';
								}
								
								$query->CloseCursor();
							?>
						</table>
					</center>
					
				</fieldset>
			</div>
		</div>
		
        <!-------------------------- /Container --------------------------------->
	
    <?php include("../footer.php"); ?> 
    </div>
    <!-- /content -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
