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
	<script type="text/javascript" src="../../js/functions.js"></script>

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
	?>

        <!-------------------------- Container --------------------------------->
		

		
		
        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">
					<?php echo'<center><legend> Statistiques </center></legend>'; ?>
					
					</br>
					
				</fieldset>
			</div>
		</div>
		
        <!-------------------------- /Container --------------------------------->
	
    <?php include("../footer.php"); 
		?> 
    </div>
    <!-- /content -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>
	<script src="../../js/functions.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
