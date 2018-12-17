<?php 
require("connexion.php");

$obj = new Connexion();
$connexion = $obj->getConnnexion();



/* if(isset($_GET["Nom"])){
$Nom 		= $_GET["Nom"];
$Prenom 	= $_GET["Prenom"];
$PURL 		= $_GET["PURL"];
$Dnaissance = $_GET["Dnaissance"];
$Statut 	= $_GET["Statut"];

music 
$music = array();

$music_filter = array();


$music[1] 			= @$_GET["Rock"]; 	
$music[2]    		= @$_GET["Hip_Hop"];  
$music[3] 			= @$_GET["Metal"]; 	
$music[4]			= @$_GET["Jazz"];		
$music[5]			= @$_GET["R_and_B"];	
$music[6]			= @$_GET["POP"];

foreach ($music as $key => $value) {

	if($value == "on"){
		$music_filter[$key] = 1;
	}
}		

hobby


$hobby = array();

$hobby_filter = array();


$hobby[1] 			= @$_GET["Football"]; 
$hobby[2]			= @$_GET["Cinema"];
$hobby[3]			= @$_GET["Lire"];
$hobby[4]			= @$_GET["Jeux"];
$hobby[5] 			= @$_GET["Fashion"];
$hobby[6] 			= @$_GET["Hockey"];

foreach ($hobby as $key => $value) {

	if($value == "on"){
		$hobby_filter[$key] = 1;
	}
}



personne
$personne_get = $obj->selectAllPersonne();

$per = array();

		foreach($personne_get as $value=>$key){

			if(@$_GET["$key->Prenom"]){
				$per["$key->id"] = @$_GET["$key->Prenom"];
			}

		}


} */

//la fin de deuxiem if isset
?>

<!DOCTYPE html>
<html>
<head>
	<!-- meta_tags-->
	<title>Elon Musk</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta charset="utf-8">
	<!-- // Meta_tags-->
</head>

<body>
<div class="head-title">
<h1> Ajouter un nouveau profil</h1>
</div>
<div class="form">
	<!-- contenu -->
	<form action="profile.php" method="POST">
		<div class="user">
			<div class="userfirstname">
				<label class="titre" for="name">Nom</label>
				<input required type="text" id="name" name="Prenom" placeholder="Votre prénom" >
			</div>
			<div class="userlastname">
				<label class="titre" for="lastname">Prenom</label>
				<input required type="text" id="lastname" name="Nom" placeholder="Votre Nom">
			</div>
		</div>
		<div class="user">
			<div class="userdate">	
				<label class="titre" for="date">Date de naissance</label>
				<input class="date" required type="date" name="Dnaissance" id="date" >
			</div>			
			<div class="userphoto">
				<label class="titre" for="profile_photo">Votre photo</label>
				<input required id="profile_photo" type="url" placeholder="lien de votre avatar" name="PURL" id="photo">
			</div>
		</div>
			<div class="etatcivil">
				<label class="titre"><h2>Etat Civil</h2></label>
					<select class="form-control" required="" name="Statut">
						<option value="celibataire">Célibataire</option>
						<option value="en couple">En couple</option>
						<option value="non défini">Non défini</option>
					</select> 
			</div>				
				<br>

			<div id="flex_form">

				<fieldset id="music">
					<h2 class="white">Music</h2>
					<p><label><input type="checkbox" name="Rock" > Rock</label></p>
					<p><label><input type="checkbox" name="Hip_Hop" > Hip_Hop</label></p>
					<p><label><input type="checkbox" name="Metal" > Metal</label></p>
					<p><label><input type="checkbox" name="Jazz" > Jazz</label></p>
					<p><label><input type="checkbox" name="R_and_B" > R_and_B</label></p>
					<p><label><input type="checkbox" name="POP" > POP</label></p>
				</fieldset>


				<fieldset id="hobbies">
					<h2 class="white">Hobbies</h2>
					<p><label><input type="checkbox" name="Football" >Football</label></p>
					<p><label><input type="checkbox" name="Cinema" >Cinema</label></p>
					<p><label><input type="checkbox" name="Lire" >Lire</label></p>
					<p><label><input type="checkbox" name="Jeux" >Jeux</label></p>
					<p><label><input type="checkbox" name="Fashion">Fashion</label></p>
					<p><label><input type="checkbox" name="Hockey">Hockey</label></p>
				</fieldset>

			</div>
			<br>
			<h2 class="white">En Relation Avec</h2>
				<fieldset id="friend_list">
				<div id="friend_list_option">
			<?php
				$personne = $obj->selectAllPersonne();
				 foreach($personne as $key){

                         echo '<p><label name="'.$key->Prenom.'">'.$key->Prenom.' '.$key->Nom.'
                         <select id="select_option" name="'.$key->Prenom.'">
                        	<option default></option>
                         	<option>ami</option>
                        	<option>famille</option>
                         	<option>collège</option>

                         </select>

                         </label></p>';

                        } 

					//<input type="text" name="'.$key->Prenom.'">
					
             ?>

            </div>
				</fieldset>
				<input id="register_button" type="submit"  value="Enregistrer">
				<input id="cancel_button" type="reset"  value="Anuler">
			</form>
		</div>
</body>

</html>









