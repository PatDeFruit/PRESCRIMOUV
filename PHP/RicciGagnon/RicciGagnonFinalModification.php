<h4>Evaluation Ricci & Gagnon </h4> 
								<p>Comportements sédentaires</p>
								
								<table class="table">
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Combien de temps passez-vous en position assise par jour (loisirs, télé, ordinateur, travail, etc…)</label>  
								<div class="col-md-8">
								<?php 
								if($RG_CS2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="1" selected> + 5h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="2"> 4 à 5h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="3"> 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="4"> 2 à 3h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="5"> < 2h </label>';
								} else if($RG_CS2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="1"> + 5h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="2" selected> 4 à 5h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="3"> 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="4"> 2 à 3h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="5"> < 2h </label>';
								} else if($RG_CS2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="1"> + 5h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="2"> 4 à 5h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="3" selected> 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="4"> 2 à 3h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="5"> < 2h </label>';
								} else if($RG_CS2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="1"> + 5h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="2"> 4 à 5h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="3"> 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="4" selected> 2 à 3h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="5"> < 2h </label>';
								} else if($RG_CS2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="1"> + 5h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="2"> 4 à 5h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="3"> 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="4"> 2 à 3h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="5" selected> < 2h </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="1"> + 5h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="2"> 4 à 5h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="3"> 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="4"> 2 à 3h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="CS1-2" name="CS1-2"  value="5"> < 2h </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								</table>
								<p>Activité physique de loisirs (dont sports)</p>
								
								<table class="table">
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Pratiquez vous régulièrement une ou des activités physiques ?</label>  
								<div class="col-md-8">
									<?php 
									if($RG_APL12 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL1-2" name="APL1-2"  value="1" selected> Non </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL1-2" name="APL1-2"  value="5"> Oui </label>';
								} else if($RG_APL12 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL1-2" name="APL1-2"  value="1"> Non </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL1-2" name="APL1-2"  value="5" selected> Oui </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL1-2" name="APL1-2"  value="1"> Non </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL1-2" name="APL1-2"  value="5"> Oui </label>';
								}
									
									?>
									
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group" id="freq-activite">
								  <label class="col-md-4 control-label" >A quelle fréquence pratiquez-vous l'ensemble de ces activités ?</label>  
								<div class="col-md-8">
									
								<?php 
								if($RG_APL22 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL2-2-2" name="APL2-2"  value="1" selected> 1 à 2 x/mois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="2"> 1 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="3"> 2 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="4"> 3 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="5"> 4 x/sem </label>';
								} else if($RG_APL22 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="1"> 1 à 2 x/mois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="2" selected> 1 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="3"> 2 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="4"> 3 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="5"> 4 x/sem </label>';
								} else if($RG_APL22 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="1"> 1 à 2 x/mois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="2"> 1 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="3" selected> 2 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="4"> 3 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="5"> 4 x/sem </label>';
								} else if($RG_APL22 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="1"> 1 à 2 x/mois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="2"> 1 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="3"> 2 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="4" selected> 3 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="5"> 4 x/sem </label>';
								} else if($RG_APL22 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="1"> 1 à 2 x/mois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="2"> 1 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="3"> 2 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="4"> 3 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="5" selected> 4 x/sem </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="1"> 1 à 2 x/mois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="2"> 1 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="3"> 2 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="4"> 3 x/sem </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL2-2" name="APL2-2"  value="5"> 4 x/sem </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Combien de minutes consacrez-vous en moyenne à chaque séance d'activité ?</label>  
								<div class="col-md-8">
								<?php 
								if($RG_APL32 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="1" selected> Moins de 15 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="2"> 16 à 30 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="3"> 31 à 45 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="4"> 46 à 60 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="5"> Plus de 60 min </label>';
								} else if($RG_APL32 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="1"> Moins de 15 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="2" selected> 16 à 30 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="3"> 31 à 45 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="4"> 46 à 60 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="5"> Plus de 60 min </label>';
								} else if($RG_APL32 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="1"> Moins de 15 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="2"> 16 à 30 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="3" selected> 31 à 45 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="4"> 46 à 60 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="5"> Plus de 60 min </label>';
								} else if($RG_APL32 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="1"> Moins de 15 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="2"> 16 à 30 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="3"> 31 à 45 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="4" selected> 46 à 60 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="5"> Plus de 60 min </label>';
								} else if($RG_APL32 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="1"> Moins de 15 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="2"> 16 à 30 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="3"> 31 à 45 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="4"> 46 à 60 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="5" selected> Plus de 60 min </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="1"> Moins de 15 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="2"> 16 à 30 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="3"> 31 à 45 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="4"> 46 à 60 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL3-2" name="APL3-2"  value="5"> Plus de 60 min </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Habituellement comment percevez-vous votre effort ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($RG_APL42 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="1" selected> Très facile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="2"> Facile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="3"> Ni facile ni difficile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="4"> Difficile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="5"> Très difficile </label>';
								} else if($RG_APL42 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="1"> Très facile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="2" selected> Facile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="3"> Ni facile ni difficile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="4"> Difficile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="5"> Très difficile </label>';
								} else if($RG_APL42 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="1"> Très facile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="2"> Facile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="3" selected> Ni facile ni difficile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="4"> Difficile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="5"> Très difficile </label>';
								} else if($RG_APL42 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="1"> Très facile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="2"> Facile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="3"> Ni facile ni difficile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="4" selected> Difficile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="5"> Très difficile </label>';
								} else if($RG_APL42 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="1"> Très facile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="2"> Facile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="3"> Ni facile ni difficile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="4"> Difficile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="5" selected> Très difficile </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="1"> Très facile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="2"> Facile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="3"> Ni facile ni difficile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="4"> Difficile </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APL4-2" name="APL4-2"  value="5"> Très difficile </label>';
								}
									?>
								</div>
								</div>
								</td>
								</tr>
								</table>
								
								<p>Activités physiques quotidiennes</p>
								
								<table class="table">
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Quelle intensité d'activité physique votre travail requiert t-il ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($RG_APQ12 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="1" selected> Légère </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="2"> Modérer </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="3"> Moyenne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="4"> Intense </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="5"> Très intense </label>';
								} else if($RG_APQ12 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="1"> Légère </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="2" selected> Modérer </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="3"> Moyenne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="4"> Intense </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="5"> Très intense </label>';
								} else if($RG_APQ12 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="1"> Légère </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="2"> Modérer </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="3" selected> Moyenne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="4"> Intense </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="5"> Très intense </label>';
								} else if($RG_APQ12 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="1"> Légère </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="2"> Modérer </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="3"> Moyenne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="4" selected> Intense </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="5"> Très intense </label>';
								} else if($RG_APQ12 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="1"> Légère </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="2"> Modérer </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="3"> Moyenne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="4"> Intense </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="5" selected> Très intense </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="1"> Légère </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="2"> Modérer </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="3"> Moyenne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="4"> Intense </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ1-2" name="APQ1-2"  value="5"> Très intense </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group" id="freq-activite">
								  <label class="col-md-4 control-label" >En dehors de votre travail régulier, combien d'heures par semaines consacrez-vous aux travaux légers ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($RG_APQ22 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="1" selected> Moins de 2h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="2"> De 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="3"> De 5 à 6h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="4"> De 7 à 9h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="5"> Plus de 10h </label>';
								} else if($RG_APQ22 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="1"> Moins de 2h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="2" selected> De 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="3"> De 5 à 6h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="4"> De 7 à 9h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="5"> Plus de 10h </label>';
								} else if($RG_APQ22 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="1"> Moins de 2h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="2"> De 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="3" selected> De 5 à 6h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="4"> De 7 à 9h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="5"> Plus de 10h </label>';
								} else if($RG_APQ22 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="1"> Moins de 2h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="2"> De 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="3"> De 5 à 6h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="4" selected> De 7 à 9h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="5"> Plus de 10h </label>';
								} else if($RG_APQ22 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="1"> Moins de 2h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="2"> De 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="3"> De 5 à 6h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="4"> De 7 à 9h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="5" selected> Plus de 10h </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="1"> Moins de 2h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="2"> De 3 à 4h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="3"> De 5 à 6h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="4"> De 7 à 9h </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ2-2" name="APQ2-2"  value="5"> Plus de 10h </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Combien de minutes consacrez-vous à la marche ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($RG_APQ32 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="1" selected> Moins de 15 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="2"> 16 à 30 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="3"> 31 à 45 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="4"> 46 à 60 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="5"> Plus de 60 min </label>';
								} else if($RG_APQ32 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="1"> Moins de 15 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="2" selected> 16 à 30 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="3"> 31 à 45 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="4"> 46 à 60 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="5"> Plus de 60 min </label>';
								} else if($RG_APQ32 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="1"> Moins de 15 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="2"> 16 à 30 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="3" selected> 31 à 45 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="4"> 46 à 60 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="5"> Plus de 60 min </label>';
								} else if($RG_APQ32 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="1"> Moins de 15 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="2"> 16 à 30 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="3"> 31 à 45 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="4" selected> 46 à 60 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="5"> Plus de 60 min </label>';
								} else if($RG_APQ32 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="1"> Moins de 15 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="2"> 16 à 30 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="3"> 31 à 45 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="4"> 46 à 60 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="5" selected> Plus de 60 min </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="1"> Moins de 15 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="2"> 16 à 30 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="3"> 31 à 45 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="4"> 46 à 60 min </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ3-2" name="APQ3-2"  value="5"> Plus de 60 min </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Combien d'étages en moyenne montez-vous à pieds chaque jour ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($RG_APQ42 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="1" selected> Moins de 2 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="2"> 3 à 5 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="3"> 6 à 10</label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="4"> 11 à 15 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="5"> Plus de 16 </label>';
								} else if($RG_APQ42== 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="1"> Moins de 2 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="2" selected> 3 à 5 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="3"> 6 à 10</label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="4"> 11 à 15 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="5"> Plus de 16 </label>';
								} else if($RG_APQ42 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="1"> Moins de 2 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="2"> 3 à 5 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="3" selected> 6 à 10</label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="4"> 11 à 15 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="5"> Plus de 16 </label>';
								} else if($RG_APQ42 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="1"> Moins de 2 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="2"> 3 à 5 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="3"> 6 à 10</label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="4" selected> 11 à 15 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="5"> Plus de 16 </label>';
								} else if($RG_APQ42 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="1"> Moins de 2 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="2"> 3 à 5 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="3"> 6 à 10</label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="4"> 11 à 15 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="5" selected> Plus de 16 </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="1"> Moins de 2 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="2"> 3 à 5 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="3"> 6 à 10</label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="4"> 11 à 15 </label>
									<label for="default" class="btn btn-default"><input type="radio" id="APQ4-2" name="APQ4-2"  value="5"> Plus de 16 </label>';
								}
									?>
								</div>
								</div>
								</td>
								</tr>
								</table>
								</br>