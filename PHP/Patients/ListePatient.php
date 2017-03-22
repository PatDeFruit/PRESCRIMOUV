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
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap.no-icons.min.css" rel="stylesheet">
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
<script>
		(function(document) {
    'use strict';

	var LightTableSorter = (function(Arr) {

		var _th, _cellIndex, _order = '';

		function _text(row) {
			return row.cells.item(_cellIndex).textContent.toLowerCase();
		}

		function _sort(a, b) {
			var va = _text(a), vb = _text(b), n = parseInt(va, 10);
			if (n) {
				va = n;
				vb = parseInt(vb, 10);
			}
			return va > vb ? 1 : va < vb ? -1 : 0;
		}

		function _toggle() {
			var c = _order !== 'asc' ? 'asc' : 'desc';
			_th.className = (_th.className.replace(_order, '') + ' ' + c).trim();
			_order = c;
		}

		function _reset() {
			_th.className = _th.className.replace('asc', '').replace('desc', '');
			_order = '';
		}

		function onClickEvent(e) {
			if (_th && _cellIndex !== e.target.cellIndex) {
				_reset();
			}
			_th = e.target;
			_cellIndex = _th.cellIndex;
			var tbody = _th.offsetParent.getElementsByTagName('tbody')[0],
				rows = tbody.rows;
			if (rows) {
				rows = Arr.sort.call(Arr.slice.call(rows, 0), _sort);
				if (_order === 'asc') {
					Arr.reverse.call(rows);
				}
				_toggle();
				tbody.innerHtml = '';
				Arr.forEach.call(rows, function(row) { tbody.appendChild(row); });
			}
		}

		return {
			init: function() {
				var ths = document.getElementsByTagName('th');
				Arr.forEach.call(ths, function(th) { th.onclick = onClickEvent; });
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableSorter.init();
		}
	});

})(document);

	</script>
<body>

    <?php include("../header.php"); ?> 

    <!-- Page Content -->
    <div class="container tableFiltre">

        <!-------------------------- Container --------------------------------->

        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">
					<center><legend style="color: white"><a href="../Accueil.php" style="color: white; margin-right: 50px;"><span class="glyphicon glyphicon-arrow-left"></span></a>Liste des bénéficiaires</center></legend>
					<center>
					<div id="afficherInfosPatient">
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
							<tbody>
							<?php
								$query=$bdd->prepare('SELECT id_patient, nom_patient, prenom_patient, statut, id_statut FROM patients JOIN statuts USING(id_statut) WHERE id_coordinateur = "'.$id.'" ORDER BY statut');
								$query->execute();
								;
								while($data=$query->fetch()){
									echo '<tr><td width="10%" class="text-center">'.$data['id_patient'].'</td><td width="20%" class="text-center">'.$data['nom_patient'].'</td><td width="20%" class="text-center">'.$data['prenom_patient'].'</td>';
									if($data['id_statut']==1){
										echo'<td width="20%" class="text-center"><span class="label label-success">'.$data['statut'].' </span>';
										echo'</td><td class="text-center" width="30%"><a class=\'btn btn-success btn-xs\' href="AfficherPatient.php?idPatient='.$data['id_patient'].'&statutPatient='.$data['statut'].'"><span class="glyphicon glyphicon-eye-open"></span> </a> <a class=\'btn btn-info btn-xs\' href="ModifierPatient.php?idPatient='.$data['id_patient'].'&statutPatient='.$data['statut'].'"><span class="glyphicon glyphicon-edit"></span> </a> <a href="ArchivagePatient.php?idPatient='.$data['id_patient'].'" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-inbox"></span> </a>   <a href="ChangementStatut.php?idPatient='.$data['id_patient'].'&statutPatient='.$data['statut'].'" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-transfer"></span> </a>  <a class=\'btn btn-primary btn-xs\' href="GenererSynthese1.php?idPatient='.$data['id_patient'].'"><span class="glyphicon glyphicon-print"></span> Synthèse 1 </a></td>';
									} else if($data['id_statut']==2 || $data['id_statut']==3){
										echo'<td width="20%" class="text-center"><span class="label label-success">'.$data['statut'].' </span>';
										echo'</td><td class="text-center" width="30%"><a class=\'btn btn-success btn-xs\' href="AfficherPatient.php?idPatient='.$data['id_patient'].'&statutPatient='.$data['statut'].'"><span class="glyphicon glyphicon-eye-open"></span> </a> <a class=\'btn btn-info btn-xs\' href="ModifierPatient.php?idPatient='.$data['id_patient'].'&statutPatient='.$data['statut'].'"><span class="glyphicon glyphicon-edit"></span> </a> <a href="ArchivagePatient.php?idPatient='.$data['id_patient'].'" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-inbox"></span> </a>   <a href="ChangementStatut.php?idPatient='.$data['id_patient'].'&statutPatient='.$data['statut'].'" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-transfer"></span> </a>  <a class=\'btn btn-default btn-xs\' href="GenererSynthese1.php?idPatient='.$data['id_patient'].'"><span class="glyphicon glyphicon-print"></span> Synthèse 1 </a></td>';
									} else if($data['id_statut']==4){
										echo'<td width="20%" class="text-center"><span class="label label-warning">'.$data['statut'].' </span>';
										echo'</td><td class="text-center" width="30%"><a class=\'btn btn-success btn-xs\' href="AfficherPatient.php?idPatient='.$data['id_patient'].'&statutPatient='.$data['statut'].'"><span class="glyphicon glyphicon-eye-open"></span> </a> <a class=\'btn btn-info btn-xs\' href="ModifierPatient.php?idPatient='.$data['id_patient'].'&statutPatient='.$data['statut'].'"><span class="glyphicon glyphicon-edit"></span> </a> <a href="ArchivagePatient.php?idPatient='.$data['id_patient'].'" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-inbox"></span> </a>   <a href="ChangementStatut.php?idPatient='.$data['id_patient'].'&statutPatient='.$data['statut'].'" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-transfer"></span> </a></td>';
									} else if($data['id_statut']==5){
										echo'<td width="20%" class="text-center"><span class="label label-danger">'.$data['statut'].' </span>';
										echo'</td><td class="text-center" width="30%"><a class=\'btn btn-success btn-xs\' href="AfficherPatient.php?idPatient='.$data['id_patient'].'&statutPatient='.$data['statut'].'"><span class="glyphicon glyphicon-eye-open"></span> </a> <a class=\'btn btn-default btn-xs\' href="GenererSynthese1.php?idPatient='.$data['id_patient'].'"><span class="glyphicon glyphicon-print"></span> Synthèse 1 </a> <a class=\'btn btn-primary btn-xs\' href="GenererBilan.php?idPatient='.$data['id_patient'].'"><span class="glyphicon glyphicon-duplicate"></span> Synthèse finale</a></td>';
									}
								}
								
								$query->CloseCursor();
							?>
							</tbody>
						</table>
					</center>
					
				</fieldset>
	
		</div>
		</div>
		</div>
		
        <!-------------------------- /Container --------------------------------->
	
    <?php include("../footer.php"); ?> 
    </div>
    <!-- /content -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>
	<script src="../../js/functions.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
