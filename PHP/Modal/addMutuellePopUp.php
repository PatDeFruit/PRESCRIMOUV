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

?>
<!-- line modal -->
			
            <!-- content goes here -->
			<center>
			<legend><h3>Ajouter une mutuelle    </h3> </legend>
			<form method="post"  action ="<?php 	
	
	$nomMutuelle=$_POST['AddnameMut'];
	$adresse=$_POST['AddadressMut'];
	$CP=$_POST['AddCPMut'];
	$ville=$_POST['AddVilleMut'];
	$email=$_POST['AddemailMut'];
	$tel=$_POST['AddtelMut'];
	
	if($adresse==""){
		$adresse=null;
	}
	
	if($CP==""){
		$CP=null;
	}
	
	if($ville==""){
		$ville=null;
	}
	
	if($tel==""){
		$tel=null;
	}
	
	
	$query=$bdd->prepare('INSERT INTO mutuelles(nom_mutuelle,adresse_mutuelle,CP_mutuelle,ville_mutuelle,email_mutuelle,tel_mutuelle) VALUES (:nomMutuelle,:adresse,:CP,:ville,:email,:tel)');
	$query->bindValue(':nomMutuelle',$nomMutuelle,PDO::PARAM_STR);
	$query->bindValue(':adresse',$adresse,PDO::PARAM_STR);
	$query->bindValue(':CP',$CP,PDO::PARAM_STR);
	$query->bindValue(':ville',$ville,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_STR);
	
	$query->execute();
	
	?>">
              <div class="form-group">
                <label for="AddnameMut">Nom de la mutuelle</label>
                <?php echo'<input type="text" class="form-control" id="AddnameMut" name="AddnameMut"  value="">'; ?>
              </div>
              <div class="form-group">
                <label for="AddadressMut">Adresse</label>
                <?php echo'<input type="text" class="form-control" id="AddadressMut" name="AddadressMut" value="">'; ?>
              </div>
			  <div class="form-group">
                <label for="AddCPMut">Code Postal</label>
                <?php echo'<input type="number" class="form-control" id="AddCPMut" name="AddCPMut" value="" maxlength="5">'; ?>
              </div>
			  <div class="form-group">
                <label for="AddVilleMut">Ville</label>
                <?php echo'<input type="text" class="form-control" id="AddVilleMut" name="AddVilleMut" value="">'; ?>
              </div>
			  <div class="form-group">
                <label for="AddtelMut">Téléphone</label>
                <?php echo'<input type="tel" class="form-control" id="AddtelMut"  name="AddtelMut" value=""  maxlength="10">'; ?>
              </div>
			  <div class="form-group">
                <label for="AddemailMut">Email</label>
                <?php echo'<input type="email" class="form-control" id="AddemailMut" name="AddemailMut" value="" placeholder="example@example.fr">'; ?>
              </div>
		  <input type="submit" value="Enregistrer" class="btn btn-success btn-xs">
            </form>
		</div>
		
	</div>
  </div>
</div>
</center>
</body>

								