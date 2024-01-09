// BARRE DE RECHERCHE

const input = document.getElementById('searchbar');
let livres = document.querySelectorAll('.livres');
let titres = document.querySelectorAll('.titre');


function search() {
    let filter = input.value.toLowerCase();
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
