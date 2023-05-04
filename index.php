<!DOCTYPE html>
<html>
<head>
	<title>Mon jeu de débat</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Bienvenue sur le jeu de débat</h1>
		<form method="post" action="jeu.php">
			<label for="nb_joueurs">Nombre de joueurs :</label>
			<input type="number" name="nb_joueurs" id="nb_joueurs" required>

			<label for="debat">Débat :</label>
			<input type="text" name="debat" id="debat" required>

			<input type="submit" value="Commencer">
		</form>
	</div>
</body>
</html>
