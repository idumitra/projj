<!DOCTYPE html>
<html>
<font color="grey">	
	<head>
		<link rel="stylesheet" type="text/css" href="../css/form.css"/>
		<title> Movie Reviews </title>
		<meta charset="utf-8"/>
		<div class="banner"> <center> <H1>  Movie reviews </H1> </center> </div>
		
	</head>
	
	<body background="../images/4k.jpg">
	<font color="grey">
	<section>
	<div class="formulaire">
		<form method="post" action="logininvite.html">
		<label for ="Nom"> Nom </label> : <input type "text" name="Nom" id ="Nom">
		<p> <label for ="¨Prénom"> Prénom </label> : <input type "text" name="Prénom" id ="Prénom"> </p>
		<p> <label for ="email"> Adresse e-mail </label> : <input type "text" name="email" id ="email"> </p>
		<p> <label for ="mdp"> Mot de passe </label> : <input type ="password" name="mdp" id ="mdp"> </p>
		<p> <label for ="cmdp"> Confirmer mot de passe </label> : <input type ="password" name="cmdp" id ="cmdp"> </p>
		<p> <label for="admin"> Admin ou user ? </label> 
			<select name="admin" id="admin">
				<option value="admin"> Admin </option>
				<option value="user"> User </option>
		</p>
		
		<p> <input type="submit" value="enregistrer"/> </p>
		</form>





	</div>
	</section>
	

</font>
</body>