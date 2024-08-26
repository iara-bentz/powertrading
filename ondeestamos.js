window.onscroll = function() {
    var navbar = document.getElementById("navbar");
    if (window.pageYOffset > 50) { 
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
};

    document.addEventListener("DOMContentLoaded", function() {
const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("nav-links");

hamburger.addEventListener("click", function() {
navLinks.classList.toggle("active");
});
});


document.addEventListener("DOMContentLoaded", function() {
    let lazyImages = [].slice.call(document.querySelectorAll("img.lazyload"));
  
    if ("IntersectionObserver" in window) {
      let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            let lazyImage = entry.target;
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.classList.remove("lazyload");
            lazyImageObserver.unobserve(lazyImage);
          }
        });
      });
  
      lazyImages.forEach(function(lazyImage) {
        lazyImageObserver.observe(lazyImage);
      });
    } else {
      // Fallback for older browsers
      lazyImages.forEach(function(lazyImage) {
        lazyImage.src = lazyImage.dataset.src;
        lazyImage.classList.remove("lazyload");
      });
    }
  
    const inicial = "brasil";
    const paises = {
      brasil: {
        nome: "BRASIL",
        endereco: "1048, AVENIDA PAULISTA, - 17º FLOOR - BELA VISTA - SP - SÃO PAULO - BRAZIL - ZIP CODE 01310-100",
        imagem: "imagens/BRASIL.jpg"
      },
      "estados-unidos": {
        nome: "ESTADOS UNIDOS",
        endereco: "2039, OLD MIDDLEBURG - RD N - JACKSONVILLE, FL 32210",
        imagem: "imagens/USA.jpg"
      },
      "alemanha": {
        nome: "ALEMANHA",
        endereco: "2039, OLD MIDDLEBURG - RD N - JACKSONVILLE, FL 32210",
        imagem: "imagens/ALEMANHA.jpg"
      },
      "singapura": {
        nome: "SINGAPURA",
        endereco: "2039, OLD MIDDLEBURG - RD N - JACKSONVILLE, FL 32210",
        imagem: "imagens/SINGAPURA.jpg"
      },
      "china": {
        nome: "CHINA",
        endereco: "2039, OLD MIDDLEBURG - RD N - JACKSONVILLE, FL 32210",
        imagem: "imagens/CHINA.jpg"
      },
      "dubai": {
        nome: "DUBAI",
        endereco: "2039, OLD MIDDLEBURG - RD N - JACKSONVILLE, FL 32210",
        imagem: "imagens/DUBAI.jpg"
      }
    };
  
    function atualizarInformacoes(id) {
      const imagemDiv = document.getElementById("imagem");
      if (paises[id] && imagemDiv) {
        document.getElementById("nome-pais").textContent = paises[id].nome;
        document.getElementById("endereco").textContent = paises[id].endereco;
        imagemDiv.style.backgroundImage = `url('${paises[id].imagem}')`;
      }
    }
  
    // Inicializar com Brasil
    atualizarInformacoes(inicial);
  
    // Interação
    document.querySelectorAll("#mapa-svg g").forEach(pais => {
      pais.addEventListener("mouseenter", () => {
        const id = pais.id;
        atualizarInformacoes(id);
      });
    });
  });

  window.onscroll = function() {
      var navbar = document.getElementById("navbar");
      if (window.pageYOffset > 50) { 
          navbar.classList.add("scrolled");
      } else {
          navbar.classList.remove("scrolled");
      }
  };

      document.addEventListener("DOMContentLoaded", function() {
const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("nav-links");

hamburger.addEventListener("click", function() {
  navLinks.classList.toggle("active");
});
});
  