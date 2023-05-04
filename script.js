var nbJoueurs = 4; // Remplacer par le nombre de joueurs

// Ajouter les rectangles pour chaque joueur
var joueursDiv = document.getElementById("joueurs");
for (var i = 1; i <= nbJoueurs; i++) {
  var joueurDiv = document.createElement("div");
  joueurDiv.classList.add("joueur");
  joueursDiv.appendChild(joueurDiv);
}
