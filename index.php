<!DOCTYPE html>
<html>
<head>
	<title>Débat en Cascade</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Bienvenue sur le jeu des débat</h1>
		<form method="get" action="jeu.php">
			<label for="nbJoueurs">Nombre de joueurs :</label>
			<input type="number" name="nbJoueurs" id="nbJoueurs" required>
			<br>
			<label for="debat">Débat :</label>
			<input type="text" name="debat" id="debat" required>
			<br>
			<input type="submit" value="Commencer le jeu">
		</form>
	</div>

	<?php
	if (isset($_GET['nbJoueurs']) && isset($_GET['debat'])) {
		$nbJoueurs = $_GET['nbJoueurs'];
		$debat = $_GET['debat'];
	?>

	<div class="container">
		<h2>Cartes des joueurs</h2>
		<form method="post" action="jeu.php">
			<?php
			for ($i = 1; $i <= $nbJoueurs; $i++) {
			?>
			<div class="carte">
				<h3>Joueur <?php echo $i; ?></h3>
				<label for="joueur<?php echo $i; ?>">Nom :</label>
				<input type="text" name="joueur<?php echo $i; ?>" id="joueur<?php echo $i; ?>" required>
				<label for="carte<?php echo $i; ?>">Carte :</label>
				<select name="carte<?php echo $i; ?>" id="carte<?php echo $i; ?>">
					<option value="pour">Pour</option>
					<option value="contre">Contre</option>
					<option value="fumier">Fumier</option>
				</select>
			</div>
			<?php
			}
			?>
			<input type="submit" value="Valider les cartes">
		</form>
	</div>

	<?php
	}
	?>

</body>
</html>
