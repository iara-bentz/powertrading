<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem Enviada com Sucesso</title>
</head>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
            </style>
        <link rel="stylesheet" href="contato.css">
        <title>Power trading</title>
        <script src="https://kit.fontawesome.com/9ed9502f40.js"></script>
        <title>Power trading</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="icon" href="imagens/favicon.png" type="image/png">

        <script type="text/javascript">
            function googleTranslateElementInit() {
                // Cria o elemento de tradução do Google
                new google.translate.TranslateElement({
                    pageLanguage: 'pt',
                    includedLanguages: 'en,es,pt,zh-CN,ar'
                }, 'google_translate_element');
        
                // Recupera o idioma e a bandeira salvos no localStorage, se existirem
                const savedLang = localStorage.getItem('selectedLanguage');
                const savedFlag = localStorage.getItem('selectedFlag');
        
                if (savedLang && savedLang !== 'pt') {
                    // Se houver um idioma salvo diferente de 'pt', aplicamos a tradução
                    document.getElementById('selected-language').src = savedFlag;
                    setTimeout(() => {
                        changeLanguage(savedLang, savedFlag, false); // O "false" evita a atualização do localStorage novamente
                        document.body.style.visibility = 'visible'; // Mostra o conteúdo da página após a tradução
                    }, 1000);
                } else {
                    // Se não houver idioma salvo ou o idioma salvo for 'pt', mostramos a página imediatamente
                    document.body.style.visibility = 'visible';
                }
            }
        
            // Função para alterar o idioma e salvar a bandeira/idioma
            function changeLanguage(lang, flagSrc, save = true) {
                var translateElement = document.querySelector('.goog-te-combo');
                if (translateElement) {
                    translateElement.value = lang;
                    translateElement.dispatchEvent(new Event('change'));
        
                    // Atualiza a bandeira selecionada
                    document.getElementById('selected-language').src = flagSrc;
        
                    // Salva o idioma e a bandeira no localStorage se necessário
                    if (save) {
                        localStorage.setItem('selectedLanguage', lang);
                        localStorage.setItem('selectedFlag', flagSrc);
                    }
                }
            }
        
            // Inicializa o Google Translate quando a página carrega
            window.onload = googleTranslateElementInit;
        </script>
        
        <!-- Carrega o script de tradução do Google -->
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
</head>

<body>
    <header class="header">
        <nav class="navbar transparent" id="navbar">
            <div class="logo"><img src="imagens/logo.png"></div>
            <div id="google_translate_element" class="translate-icon"></div>
            <!-- Seletor de idiomas com dropdown de bandeiras -->
            <div class="language-dropdown">
                <!-- Bandeira principal que será exibida -->
                <img src="imagens/bandeiras/portugues.png" alt="Português" class="language-selected" id="selected-language">
                
                <!-- Bandeiras no dropdown (que aparecem ao clicar) -->
                <div class="dropdown-content">
                    <img src="imagens/bandeiras/ingles.png" alt="English" onclick="changeLanguage('en', 'imagens/bandeiras/ingles.png')">
                    <img src="imagens/bandeiras/espanhol.png" alt="Español" onclick="changeLanguage('es', 'imagens/bandeiras/espanhol.png')">
                    <img src="imagens/bandeiras/portugues.png" alt="Português" onclick="changeLanguage('pt', 'imagens/bandeiras/portugues.png')">
                    <img src="imagens/bandeiras/chines.png" alt="中文" onclick="changeLanguage('zh-CN', 'imagens/bandeiras/chines.png')"> 
                    <img src="imagens/bandeiras/arabe.png" alt="العربية" onclick="changeLanguage('ar', 'imagens/bandeiras/arabe.png')"> 
                </div>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="index.html">Início</a></li>
                <li><a href="nossassolucoes.html">Nossas Soluções</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="ondeestamos.html">Onde Estamos</a></li>
                <li><a href="contato.html" class="active">Contato</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>

            <div class="mobile-menu" id="mobile-menu">
                <div class="close" id="close">&times;</div>
                <ul class="nav-links">
                    <li><a href="index.html">Início</a></li>
                    <li><a href="nossassolucoes.html">Nossas Soluções</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a href="ondeestamos.html">Onde Estamos</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </div>
        </nav>

        
    </header>
    <div class="content">
    <div class="container">
        <h1>Oops, algo deu errado!</h1>
        <p>Sua mensagem não foi enviada. Por favor, tente novamente.</p>
        <div class="btn-container">
        <a href="contato.html" class="btn1">Tentar novamente</a>
        <a href="index.html" class="btn">Voltar ao início</a>
        </div>
    </div>
    </div>
    
</body>
</html>

<style>

.content {
    place-items: center;
    position: relative;
    height: 100vh;
    background-image: url('imagens/back-contato.jpg') ;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.skiptranslate,
.goog-te-banner-frame {
    display: none !important;
}


#google_translate_element {
    display: none;
}

.translate-icon {
    position: absolute; 
    top: 10px; /* Ajuste a posição conforme necessário */
    right: 10px;
    z-index: 9999; 
    margin-right: 200px;
}

.language-dropdown {
    padding-right: 30px;
    z-index: 100;
    width: 100%;
    display: flex;
    justify-content: flex-end;
    position: relative;
}

.language-selected {
    width: 32px;    
    cursor: pointer;
    border: 0px solid #ccc;
    border-radius: 5px;
    transition: transform 0.3s ease; /* Transição para animação de rotação */
}

/* Estilo para as bandeirinhas no dropdown */
.dropdown-content {
    display: none;
    position: absolute;
    right: 70px; 
    top: -5px;
    min-width: 50px;
    z-index: 1;
    opacity: 0; /* Inicialmente invisível */
    transform: scaleY(0); /* Inicialmente colapsado */
    transform-origin: top; /* Animação ocorre a partir do topo */
    transition: opacity 0.3s ease, transform 0.3s ease; /* Transições para animação */
}

/* Estilo para as bandeiras dentro do dropdown */
.dropdown-content img {
    width: 32px;
    cursor: pointer;
    border: 0px solid #ccc;
    border-radius: 5px;
    margin: 5px 0;
}

/* Estilo para a bandeira principal quando o dropdown está ativo */
.language-dropdown:hover .language-selected {
    transform: rotate(180deg); /* Rotaciona a bandeira para indicar que o dropdown está aberto */
}

/* Mostrar o dropdown quando o usuário passa o mouse */
.language-dropdown:hover .dropdown-content {
    display: block;
    opacity: 1;
    transform: scaleY(1); /* Expande o dropdown */
}

/* Mostrar o dropdown quando o usuário clica (ajuste se necessário) */
.language-dropdown .dropdown-content {
    display: block; /* Mantém o dropdown visível após o clique */
}

/* Estilo para o estado ativo do dropdown após seleção */
.language-dropdown.active .dropdown-content {
    display: block;
    opacity: 1;
    transform: scaleY(1);
}

.navbar {
    background-color: #fff;
    display: flex;
    align-items: center;
    padding: 15px 30px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 90px;
    z-index: 1000;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    box-sizing: border-box;
    z-index: 30;
}

.navbar-logo,
.navbar-language,
.navbar-nav {
    flex: 1; /* Cada container ocupa 1/3 da largura disponível */
}


.navbar.scrolled {
    backdrop-filter: blur(13px); 
    background-color: #0000005f;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.203);
}

.navbar.scrolled .nav-links a {
    color: #ffffff; /* Cor dos links quando o fundo é branco */
}

.logo img {
    width: 18vw; 
    max-width: 160px; 
    min-width: 50px; /* Tamanho mínimo para telas menores */
    height: auto; /* Mantém a proporção da imagem */
}


.nav-links {
    white-space: nowrap;
    width: auto;
    justify-content: flex-end;
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

.nav-links li {
    margin-left: 30px;
    position: relative; /* Necessário para o posicionamento correto do ::after */
}

.nav-links a {
    color: #000000;
    text-decoration: none;
    font-family: "Work Sans", system-ui;
    font-weight: 350;
    font-size: 1rem;
    padding: 5px 10px;
    transition: color 0.3s ease-in-out;
    position: relative; /* Isso é importante para que o ::after seja relativo ao link */
}

.nav-links a:hover {
    color: #ff7104;
}

.nav-links a::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 1px;
    background-color: #ff7104; 
    transition: width 0.3s ease-in-out;
}

.nav-links a.active {
    color: #ff7104; 
}

.nav-links a:hover::after {
    width: 100%; 
}

.hamburger .line {
    width: 30px;
    height: 3px;
    background-color: #000000;
    margin: 5px 0;
    border-radius: 2px;
}

.hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
    z-index: 1010;
}

.hamburger .line {
    width: 25px;
    height: 3px;
    background-color: #333;
    margin: 3px 0;
    transition: 0.3s;
}

/* Estilos para o menu mobile */
.mobile-menu {
    display: none;
    position: fixed;
    top: 0;
    right: 0;
    width: 75%;
    height: 100%;
    background-color: #fff;
    transform: translateX(100%);
    transition: transform 0.3s ease;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 60px; /* Espaço para o X */
}

.mobile-menu.active {
    transform: translateX(0);
}

.mobile-menu .close {
    font-size: 30px;
    cursor: pointer;
    padding: 15px;
    text-align: right;
    width: 100%;
}

.mobile-menu .nav-links {
    display: flex;
    flex-direction: column;
    width: 100%;
    list-style: none;
    padding: 0;
    margin: 0;
}

.mobile-menu .nav-links li {
    margin: 20px 0;
    width: 100%;
    text-align: center;
}

.mobile-menu .nav-links a {
    text-decoration: none;
    color: #333;
    font-family: "Work Sans", system-ui;
    font-weight: 350;
    font-size: 1.2rem;
}



@media (min-width: 780px) and (max-width: 1200px){
    .nav-links {
        display: none;
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 60px;
        left: 0;
        background-color: #fff;
        text-align: center;
        padding: 20px 0;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        border-radius: 0 0 10px 10px;
        transition: all 0.3s ease-in-out;
    }

    .nav-links.active {
        display: flex;
    }

    .nav-links.active a {
        color: #000; /* Muda a cor dos links para preto quando o menu está aberto */
    }

    .nav-links li {
        margin: 15px 0;
    }

    .hamburger {
        display: flex;
    }

    .logo img {
        width: max-content; /* Aumenta a responsividade para telas menores */
        max-width: 150px; /* Ajuste o máximo para telas pequenas */
    }
}

@media (max-width: 779px) {
    #navbar {
        background-color: #fff;
        z-index: 200;
    } 

    .nav-links {
        display: none;
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 60px;
        left: 0;
        background-color: #fff;
        text-align: center;
        padding: 20px 0;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        border-radius: 0 0 10px 10px;
        transition: all 0.3s ease-in-out;
    }

    .nav-links.active {
        display: flex;
    }

    .nav-links.active a {
        color: #000; /* Muda a cor dos links para preto quando o menu está aberto */
    }

    .nav-links li {
        margin: 15px 0;
    }

    .hamburger {
        display: flex;
    }

    .logo img {
        width: max-content; /* Aumenta a responsividade para telas menores */
        max-width: 150px; /* Ajuste o máximo para telas pequenas */
    }
}


* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.container {
    padding-top: 500px;
    width: 50vw;
    margin: auto; /* Use 'margin' instead of 'marging' */
    height: 50vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: rgba(255 255 255 / 34%);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(17.5px);
    -webkit-backdrop-filter: blur(17.5px);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    z-index: 10; /* Garante que a div de mensagem fique por cima do conteúdo */
}

p {
    font-family: 'Heebo';
    font-size: 18px;
    font-weight: 300;
}

h1 {
    margin-bottom: 10px;
    font-size: 32px;
    font-family: 'Heebo';
    font-weight: 300;
}

.btn-container {
    display: flex;
    justify-content: center;
    display: flex;
    flex-direction: row;
    gap: 20px;
}


.btn {
    font-family: 'Heebo';
    font-weight: 600;
    font-size: 16px;
    width: 200px;
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background: #4D8AFF;
    color: white;
    text-decoration: none;
    border-radius: 10px;
}

.btn:hover {
    background: #0056b3;
}

.btn1 {
    font-family: 'Heebo';
    font-weight: 600;
    font-size: 16px;
    width: 200px;
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background: #434343;
    color: white;
    text-decoration: none;
    border-radius: 10px;
}

@media (max-width: 480px) {
    .container{
        width: 80vw;
        height: auto;
    }

    .h1 {
        font-size: 24px;
    }

    .p {
        font-size: 16px;
    }

    .btn-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0;
    }

    .btn {
        width: 150px;
        font-size: 12px;
    }

    .btn1 {
        width: 150px;
        font-size: 12px;
    }
}


</style>