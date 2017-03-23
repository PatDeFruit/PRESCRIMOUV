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

?>
<!-- line modal -->
			
            <!-- content goes here -->
			<center>
			<legend><h3>Ajouter un médecin    </h3> </legend>
			<form method="post"  action ="<?php 	
	
	$nomMed=$_POST['AddnameMed'];
	$prenomMed=$_POST['AddfirstnameMed'];
	$numAdeli=$_POST['AddnumAdeli'];
	$tel=$_POST['AddtelMed'];
	$email=$_POST['AddemailMed'];
	$query=$bdd->prepare('INSERT INTO medecins(nom_medecin,prenom_medecin,num_adeli,email_medecin,tel_medecin) VALUES (:nomMed,:prenomMed,:numAdeli,:email,:tel)');
	$query->bindValue(':nomMed',$nomMed,PDO::PARAM_STR);
	$query->bindValue(':prenomMed',$prenomMed,PDO::PARAM_STR);
	$query->bindValue(':numAdeli',$numAdeli,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	
	$query->execute();
	?>">
              <div class="form-group">
                <label for="AddnameMed">Nom du médecin</label>
                <?php echo'<input type="text" class="form-control" id="AddnameMed" name="AddnameMed"  value="">'; ?>
              </div>
              <div class="form-group">
                <label for="AddfirstnameMed">Prénom du médecin</label>
                <?php echo'<input type="text" class="form-control" id="AddfirstnameMed" name="AddfirstnameMed" value="">'; ?>
              </div>
			  <div class="form-group">
                <label for="AddnumAdeli">Numéro Adeli</label>
                <?php echo'<input type="number" class="form-control" id="AddnumAdeli" name="AddnumAdeli" value="" maxlength="10">'; ?>
              </div>
			  <div class="form-group">
                <label for="AddtelMed">Téléphone</label>
                <?php echo'<input type="tel" class="form-control" id="AddtelMed"  name="AddtelMed" value=""maxlength="10">'; ?>
              </div>
			  <div class="form-group">
                <label for="AddemailMed">Email</label>
                <?php echo'<input type="email" class="form-control" id="AddemailMed" name="AddemailMed" value="">'; ?>
              </div>
		  <input type="submit" value="Enregistrer" class="btn btn-success btn-xs">
            </form>
		</div>
		
	</div>
  </div>
</div>
</center>
</body>

								