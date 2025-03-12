console.log("Iniciando o servidor...")

const express = require('express'); //Importamos o Express, que é um framework para criar servidores web de forma mais simples.
const path = require('path'); 

const app = express(); //Criamos uma aplicação Express, que será o nosso servidor.
    app.set('view engine', 'ejs'); //Dizemos ao Express que vamos usar o EJS como engine de views.
    app.set('views', path.join(__dirname, 'views')); //Dizemos ao Express que as views estão na pasta views.

app.get('/', (req,res) => {
    res.render('index', {nome: "Pedrinho"});
}); //Criamos uma rota que responde à requisição GET no endereço /, enviando o arquivo treino.html.

const PORT = 3000;
app.listen(PORT, () => {
    console.log('Servidor rodando em http://localhost:${PORT}');
}); // Iniciamos o servidor na porta 3000 e exibimos uma mensagem no console.

app.use(express.urlencoded({extended: true})); //Dizemos ao Express para usar o middleware que faz o parse do corpo das requisições.

app.post('/submit', (req,res) => {
    const texto = req.body.texto;
    console.log(`Usuário digitou: ${texto}`);
    res.send(`Você enviou: ${texto}`);
});

app.get('/api/dados', (req,res) => {
    res.json({ mensagem: "Olá, Pedrinho!", status: "sucesso"});
});