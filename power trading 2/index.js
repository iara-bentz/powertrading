// Seleciona todas as imagens de seleção
const selectorImages = document.querySelectorAll('.selector-image');

// Seleciona o elemento da imagem de fundo principal
const mainBackground = document.getElementById('main-background');

// Variáveis para controlar o slideshow automático
let currentImageIndex = 0;
let slideshowInterval;
const slideshowDelay = 3000; // 3 segundos entre as imagens
const resetSlideshowDelay = 5000; // 10 segundos após interação do usuário

// Função para atualizar a imagem de fundo
function updateBackgroundImage(index) {
    // Remove a classe 'selected' de todas as imagens
    selectorImages.forEach(img => img.classList.remove('selected'));

    // Adiciona a classe 'selected' na nova imagem
    const selectedImage = selectorImages[index];
    selectedImage.classList.add('selected');

    // Atualiza a imagem de fundo principal
    const newBackground = selectedImage.getAttribute('data-background');
    mainBackground.src = newBackground;

    // Atualiza o índice da imagem atual
    currentImageIndex = index;
}

// Função para avançar para a próxima imagem
function nextImage() {
    const nextIndex = (currentImageIndex + 1) % selectorImages.length;
    updateBackgroundImage(nextIndex);
}

// Inicia o slideshow automático
function startSlideshow() {
    slideshowInterval = setInterval(nextImage, slideshowDelay);
}

// Para o slideshow automático
function stopSlideshow() {
    clearInterval(slideshowInterval);
}

// Reinicia o slideshow após a inatividade do usuário
function resetSlideshow() {
    stopSlideshow();
    setTimeout(startSlideshow, resetSlideshowDelay);
}

// Função para selecionar a imagem inicial ao carregar a página
window.addEventListener('load', () => {
    updateBackgroundImage(0);
    startSlideshow();
});

// Adiciona um evento de clique em cada imagem de seleção
selectorImages.forEach((image, index) => {
    image.addEventListener('click', () => {
        stopSlideshow(); // Para o slideshow quando o usuário clica
        updateBackgroundImage(index); // Atualiza a imagem de fundo
        resetSlideshow(); // Reinicia o slideshow após um tempo de inatividade
    });
});
