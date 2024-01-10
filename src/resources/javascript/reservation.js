// Redirection veuillez nous contacter

document.querySelector('a[href="#adresse"]').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('adresse').scrollIntoView({
        behavior: 'smooth'
    });
});