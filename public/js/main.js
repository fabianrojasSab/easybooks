// Funcion global que se usa para dar vuelta a las tarjetas
function flipCard(front, back){
    let cardFront = document.querySelector(front);
    let cardBack = document.querySelector(back);

    cardFront.classList.toggle("flip-on-front");
    cardBack.classList.toggle("flip-on-back");
}
