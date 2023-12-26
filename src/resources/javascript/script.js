

const form = document.getElementById('formulaire');
const prenom = document.getElementById('prenom');
const nom = document.getElementById('nom');
const courriel = document.getElementById('courriel');


function showError(input) {
    input.className = 'error';
}

function showSuccess(input) {
    input.className = 'success';
}

function invalideEmail(message) {
    const small = document.querySelector('.ErrorMessage');
    small.style.visibility = 'visible'
    small.innerText = message;
}

function correctEmail() {
    const small = document.querySelector('.ErrorMessage');
    small.style.visibility = 'hidden';
}

function checkRequired(inputArr) {
    inputArr.forEach(function(input) {
        if (input.value.trim() !== '') {
            showSuccess(input);
        } else {
            showError(input)
        }
    });
}
function checkEmail(input) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(input.value.trim() === '') {
        showError(input);
        invalideEmail('Le prénom, le nom et le courriel est requis')
    } else if (re.test(input.value.trim())) {
        showSuccess(input);
        correctEmail();
    } else {
        showError(input);
        invalideEmail('Le courriel est invalide')
    }
}



 form.addEventListener("submit", function(e) {
    /*e.preventDefault();*/
    const error = form.querySelectorAll('.error');
    checkRequired([prenom, nom, courriel]);
    checkEmail(courriel);
    
    if (prenom.value !== '' && nom.value !=='' && courriel.value !== '' && error.length === 0) {
        console.log('ça fonctionne')
    } else {
        e.preventDefault();
        return false
        console.log('ça fonctionne pas')
    }
        
    } 
    
)

