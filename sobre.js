document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', () => {
        // Remove a classe 'flipped' de todos os cartões
        document.querySelectorAll('.card').forEach(c => {
            if (c !== card) {
                c.classList.remove('flipped');
            }
        });
        // Alterna a classe 'flipped' do cartão clicado
        card.classList.toggle('flipped');
    });
});

