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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php include("header.php"); ?> 

    <!-- Page Content -->
    <div class="container">

        <!-------------------------- Container --------------------------------->
		
        <div id="conteneurPrincipale">
			<div id = "conteneurGauche">
				<fieldset id="conteneurPatient">
					<center><legend> Patient </legend></center>
					<input type="button" id="boutonPatient" value="Liste Patient" onclick="self.location.href='../index.php'">
					<input type="button" id="boutonPatient" value="Ajout Patient" onclick="self.location.href='../index.php'">
				</fieldset>
				
				
				<div id = "conteneurGaucheBas">
					<fieldset id="conteneurEntretien">
						<center><legend> Entretiens </legend></center>
						<input type="button" id="boutonEntretien" value="Initial" onclick="self.location.href='../index.php'">
						<input type="button" id="boutonEntretien" value="Intermédiaire" onclick="self.location.href='../index.php'">
						<input type="button" id="boutonEntretien" value="Final" onclick="self.location.href='../index.php'">
					</fieldset>
					<fieldset id="conteneurSante">
						<center><legend> Sante </legend></center>
						<input type="button" id="boutonSante" value="Médecins" onclick="self.location.href='../index.php'">
						<input type="button" id="boutonSante" value="Mutuelles" onclick="self.location.href='../index.php'">
					</fieldset>
				</div>
			</div>
			
			<div id = "ConteneurDroit">
				<fieldset id="conteneurStat">
					<center><legend> Statistiques </legend></center>
					<center><img src="../images/patientstats.png"/></center>
				</fieldset>
				<fieldset id="conteneurAutre">
					<center><legend>  Autre </legend></center>
						<input style="margin-top : 0px" type="button" id="boutonAutre" value="Activités" onclick="self.location.href='../index.php'">
						<input type="button" id="boutonAutre" value="Intervenants" onclick="self.location.href='../index.php'">
						<input type="button" id="boutonAutre" value="Centres" onclick="self.location.href='../index.php'">
						<input type="button" id="boutonAutre" value="Créneaux" onclick="self.location.href='../index.php'">
				</fieldset>
			</div>
		</div>
		
        <!-------------------------- /Container --------------------------------->
	
    <?php include("footer.php"); ?> 
    </div>
    <!-- /content -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
