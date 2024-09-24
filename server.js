const express = require('express');
const axios = require('axios');
const bodyParser = require('body-parser');

const app = express();
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Defina seu token de autenticação
const API_TOKEN = '570576e14fedc4f90bc74b9c019a2137';

// Rota para receber dados do formulário e enviar o e-mail
app.post('/enviar-email', async (req, res) => {
  const { first_name, last_name, phone, email, message } = req.body; // Remova 'subject' se não estiver no formulário

  try {
    const response = await axios.post(
      'https://api.smtplw.com.br/v1/messages',
      {
        subject: `Mensagem de ${first_name} ${last_name}`, // Assunto padrão
        body: message,
        from: email,
        to: 'contato@powertrading.com.br' // Substitua pelo e-mail de destino
      },
      {
        headers: {
          'x-auth-token': API_TOKEN,
          'Content-Type': 'application/json'
        }
      }
    );

    res.status(200).json({ status: 'ok', message: 'Email enviado com sucesso!' });
  } catch (error) {
    console.error('Erro ao enviar e-mail:', error.response ? error.response.data : error.message); // Log do erro
    res.status(500).json({ status: 'erro', message: 'Falha ao enviar o email', error: error.response ? error.response.data : error.message });
  }
});


app.listen(3000, () => {
  console.log('Servidor rodando na porta 3000');
});
