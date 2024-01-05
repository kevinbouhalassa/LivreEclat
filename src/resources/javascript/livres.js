// VALIDATION COURRIEL

/* courriel.addEventListener("input", (event) => {
    if (courriel.validity.typeMismatch) {
        courriel.setCustomValidity("Le courriel n'a pas le bon format!");
    } else {
        courriel.setCustomValidity("");
    }
}) */

// BARRE DE RECHERCHE

var input = document.getElementById('searchbar');
var livres = document.querySelectorAll('.livres');
var titres = document.querySelectorAll('.titre');


function search() {
    var filter = input.value.toLowerCase();
    for (let i = 0; i < titres.length; i++) {
        h = titres[i];
        if (h.innerHTML.toLowerCase().indexOf(filter) > -1) {
            livres[i].style.display = "block";
        } else {
            livres[i].style.display = "none";

        }
    }
}

// CHANGER BOUTON RÉSERVER PAR DETAIL SI != DISPONIBLE
