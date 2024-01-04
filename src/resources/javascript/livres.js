// VALIDATION COURRIEL

courriel.addEventListener("input", (event) => {
    if (courriel.validity.typeMismatch) {
        courriel.setCustomValidity("Le courriel n'a pas le bon format!");
    } else {
        courriel.setCustomValidity("");
    }
})

// BARRE DE RECHERCHE
/* document.getElementById('btnsearch').addEventListener('click', function () {
    var searchTerm = document.getElementById('searchbar').value.toLowerCase();
    var livres = document.querySelectorAll('.livres');
    livres.forEach(livre => {
        var titre = livre.querySelector('.titre');
         if (searchTerm !== '') {
            livre.style.display = titre.includes(searchTerm) ? 'block' : 'none';
         } 
    });
}) */

// CHANGER BOUTON RÉSERVER PAR DETAIL SI != DISPONIBLE
