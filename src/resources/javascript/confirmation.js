// REDIRECTION À LA BOUTIQUE
const counter = document.getElementById('counter')
function redirection() {
    if (parseInt(counter.innerHTML) <= 0) {
        location.href = 'src/livres.php';
    } if (parseInt(counter.innerHTML) != 0) {
        counter.innerHTML = parseInt(counter.innerHTML) -1 ;
    }
}

setInterval(function () {
    redirection();
}, 1000);