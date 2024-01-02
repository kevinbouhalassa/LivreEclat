const courriel = document.getElementById("courriel");

courriel.addEventListener("input", (event) => {
    if (courriel.validity.typeMismatch) {
        courriel.setCustomValidity("Le courriel n'a pas le bon format!");
    } else {
        courriel.setCustomValidity("");
    }
})