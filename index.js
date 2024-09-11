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


const imageSelector = document.querySelector('.image-selector');
let isDown = false;
let startX;
let scrollLeft;

// Mouse Down
imageSelector.addEventListener('mousedown', (e) => {
    isDown = true;
    imageSelector.classList.add('active');
    startX = e.pageX - imageSelector.offsetLeft;
    scrollLeft = imageSelector.scrollLeft;
});

// Mouse Leave/Up
imageSelector.addEventListener('mouseleave', () => {
    isDown = false;
    imageSelector.classList.remove('active');
});
imageSelector.addEventListener('mouseup', () => {
    isDown = false;
    imageSelector.classList.remove('active');
});

// Mouse Move
imageSelector.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - imageSelector.offsetLeft;
    const walk = (x - startX) * 3; // Velocidade de rolagem
    imageSelector.scrollLeft = scrollLeft - walk;
});

// Touch (para mobile)
imageSelector.addEventListener('touchstart', (e) => {
    isDown = true;
    startX = e.touches[0].pageX - imageSelector.offsetLeft;
    scrollLeft = imageSelector.scrollLeft;
});

imageSelector.addEventListener('touchmove', (e) => {
    if (!isDown) return;
    const x = e.touches[0].pageX - imageSelector.offsetLeft;
    const walk = (x - startX) * 3; // Velocidade de rolagem
    imageSelector.scrollLeft = scrollLeft - walk;
});

imageSelector.addEventListener('touchend', () => {
    isDown = false;
});


