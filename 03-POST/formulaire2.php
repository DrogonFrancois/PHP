<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Formulaire 2</title>
</head>
<body>

	<form method="post" action="formulaire3.php" >

		<!-- Les traitements de ce formulaire se feront sur le fichier formulaire3.php car nous l'avons précicé dans l'attribut action="" de la balise <form> -->
		
		<label>Pseudo *</label><br>
		<input type="text" name="pseudo"><br><br>

		<label>Email</label><br>
		<input type="text" name="email"><br><br>

		<input type="submit" name="valider" value="Envoyer">
	</form>

</body>
</html>