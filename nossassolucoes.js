// Seleciona todos os cards
const cards = document.querySelectorAll('.card2');

// Função para desvirar todos os cards
function resetFlippedCards() {
    cards.forEach(card => card.classList.remove('flipped'));
}

// Adiciona o evento de clique em cada card
cards.forEach(card => {
    card.addEventListener('click', () => {
        // Se o card já estiver virado, desvira ele
        if (card.classList.contains('flipped')) {
            card.classList.remove('flipped');
        } else {
            // Desvira os outros cards e vira o card atual
            resetFlippedCards();
            card.classList.add('flipped');
        }
    });
});
