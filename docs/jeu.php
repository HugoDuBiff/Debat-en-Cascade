Skip to content
Search or jump to…
Pulls
Issues
Codespaces
Marketplace
Explore
 
@HugoDuBiff 
HugoDuBiff
/
Debat-en-Cascade
Public
Cannot fork because you own this repository and are not a member of any organizations.
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
More
Beta Try the new code view
Debat-en-Cascade/jeu.php /
@HugoDuBiff
HugoDuBiff Create jeu.php
Latest commit b7efd85 45 minutes ago
 History
 1 contributor
42 lines (39 sloc)  1.3 KB
 

<!DOCTYPE html>
<html>
<head>
	<title>Mon jeu</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	// Vérifier si le formulaire a été soumis
	if (isset($_POST['submit'])) {
		// Récupérer le nombre de joueurs et le débat à partir du formulaire
		$nb_joueurs = $_POST['nb_joueurs'];
		$debat = $_POST['debat'];

		// Générer une carte aléatoire pour chaque joueur
		$cartes = array("carte1.png", "carte2.png", "carte3.png", "carte4.png");
		shuffle($cartes);

		// Afficher les cartes pour chaque joueur
		for ($i = 1; $i <= $nb_joueurs; $i++) {
			echo "<div class='carte'>";
			echo "<img src='images/" . $cartes[$i-1] . "'>";
			echo "<form method='post' action=''>";
			echo "<input type='text' name='joueur_" . $i . "' placeholder='Nom du joueur'>";
			echo "<input type='hidden' name='carte_" . $i . "' value='" . $cartes[$i-1] . "'>";
			echo "</form>";
			echo "</div>";
		}
	} else {
		// Afficher le formulaire pour demander le nombre de joueurs et le débat
		echo "<form method='post' action=''>";
		echo "<label>Nombre de joueurs:</label>";
		echo "<input type='number' name='nb_joueurs' min='1' max='10'>";
		echo "<label>Débat:</label>";
		echo "<input type='text' name='debat'>";
		echo "<input type='submit' name='submit' value='Jouer'>";
		echo "</form>";
	}
	?>

</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Debat-en-Cascade/jeu.php at main · HugoDuBiff/Debat-en-Cascade