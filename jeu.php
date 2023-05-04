<!DOCTYPE html>
<html>
<head>
	<title>Débat en Cascade</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Bienvenue sur le jeu de débat</h1>
		<?php
			// Récupération des données du formulaire
			$nb_joueurs = $_GET['nbJoueurs'];
			$debat = $_GET['debat'];
			// Récupération du nombre de joueurs et du débat
			// Création d'un tableau contenant le débat et une seule occurrence de "Tu es le fumier"
			$cartes = array_merge(array_fill(0, $nb_joueurs - 1, $debat), ["Tu es le fumier"]);

			// Mélange aléatoire du tableau
			shuffle($cartes);




			// Affichage des cartes
			echo '<div id="cartes">';
			for ($i=0; $i<$nb_joueurs; $i++) {
				echo '<div class="carte" data-carte="'.$cartes[$i].'">Carte '.($i+1).'</div>';
			}
			echo '</div>';
		?>

		<script>
			var cartes = document.querySelectorAll('.carte');
			cartes.forEach(function(carte) {
				carte.addEventListener('click', function() {
					var carte_selectionnee = this.getAttribute('data-carte');
					if (carte_selectionnee == "Tu es le fumier") {
						this.innerHTML = "<p>Tu es le fumier</p>";
					} else {
						this.innerHTML = "<p>"+carte_selectionnee+"</p>";
					}
				});
			});
		</script>
	</div>
</body>
</html>
