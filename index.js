// Seleciona todas as imagens de seleção
const selectorImages = document.querySelectorAll('.selector-image');

// Seleciona o elemento da imagem de fundo principal
const mainBackground = document.getElementById('main-background');

// Função para selecionar a imagem inicial ao carregar a página
window.addEventListener('load', () => {
    // Seleciona a primeira imagem
    const firstImage = selectorImages[0];
    
    // Adiciona a classe 'selected' na primeira miniatura
    firstImage.classList.add('selected');
    
    // Atualiza a imagem de fundo principal com o 'data-background' da primeira imagem
    const initialBackground = firstImage.getAttribute('data-background');
    mainBackground.src = initialBackground;
});

// Adiciona um evento de clique em cada imagem de seleção
selectorImages.forEach(image => {
    image.addEventListener('click', () => {
        // Remove a classe 'selected' de todas as imagens
        selectorImages.forEach(img => img.classList.remove('selected'));

        // Adiciona a classe 'selected' na imagem clicada
        image.classList.add('selected');

        // Obtém o novo caminho da imagem de fundo
        const newBackground = image.getAttribute('data-background');

        // Atualiza a imagem de fundo principal
        mainBackground.src = newBackground;
    });
});
