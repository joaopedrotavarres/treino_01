console.log("Iniciando o servidor...")
const express = require('express'); //Importamos o Express, que é um framework para criar servidores web de forma mais simples.

const app = express(); //Criamos uma aplicação Express, que será o nosso servidor.

app.use(express.static('static')); //Dizemos ao Express para servir arquivos estáticos (CSS, imagens, etc.) da pasta static.

app.get('/', (req,res) => {
    res.sendFile(__dirname + '/template/treino.html');
}); //Criamos uma rota que responde à requisição GET no endereço /, enviando o arquivo treino.html.

const PORT = 3000;
app.listen(PORT, () => {
    console.log('Servidor rodando em http://localhost:${PORT}');
}); // Iniciamos o servidor na porta 3000 e exibimos uma mensagem no console.
