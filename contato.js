
// Quando o DOM estiver pronto, executa o script
document.addEventListener("DOMContentLoaded", function() {
    var button = document.getElementById('submit'); // botão de envio

    // Função para enviar o formulário via AJAX
    var actionSend = function(event) {
        event.preventDefault(); // Evita recarregar a página

        // Pegue os valores dos campos do formulário
        var dados = {
            first_name: document.querySelector('#first_name').value,
            last_name: document.querySelector('#last_name').value,
            email: document.querySelector('#email').value,
            phone: document.querySelector('#phone').value,
            message: document.querySelector('#message').value
        };
        
        var url = 'enviar_email.php'; // URL do arquivo PHP
        var xhr = new XMLHttpRequest(); // Inicia uma nova requisição AJAX
        var randomNum = Math.round(Math.random() * 10000); // Número randômico para cache

        // Configura a requisição como POST
        xhr.open("POST", url + '?rnd=' + randomNum, true);
        xhr.setRequestHeader('Content-Type', 'application/json'); // Envia os dados como JSON
        xhr.responseType = 'json'; // Espera uma resposta JSON do servidor

        // Função que será executada ao receber a resposta do servidor
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) { // Verifica se a requisição foi completada
                var resultBox = document.getElementById('message'); // Elemento onde a mensagem será exibida

                if (xhr.status == 200 && xhr.response.status) {
                    // Se o envio foi bem-sucedido
                    resultBox.innerHTML = '<div class="alert alert-success" role="alert">' + xhr.response.message + '</div>';
                } else {
                    // Se houve erro no envio ou resposta
                    resultBox.innerHTML = '<div class="alert alert-danger" role="alert">' + (xhr.response.message || xhr.statusText) + '</div>';
                }
            }
        };

        // Envia os dados do formulário em formato JSON
        xhr.send(JSON.stringify(dados));
    };

    // Adiciona o evento de clique ao botão de envio
    button.addEventListener("click", actionSend, false);
});

