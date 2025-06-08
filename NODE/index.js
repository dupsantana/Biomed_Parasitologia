//O Express é um framework para Node.js que facilita a criação de servidores web e APIs.
// Ele permite lidar com rotas, requisições HTTP (GET, POST, etc.), respostas e muito mais de forma simples.
// Em vez de escrever tudo do zero com Node puro, o Express oferece funções prontas que economizam tempo.
// Exemplo: com poucas linhas de código, consigo criar um servidor que responde quando alguém acessa uma rota.
const express = require('express');
/*O body-parser é um middleware do Express que permite interpretar dados enviados 
por formulários HTML ou por requisições JSON. Ele é útil quando você precisa acessar
 os dados do corpo (body) de uma requisição POST, por exemplo.*/
const bodyParser =  require("body-parser");
const app = express();

//Configurando para sempre receber os dados no formato JSON
app.use(bodyParser.json());
//Encondando todos os parâmetros para JSON
app.use(bodyParser.urlencoded({extended: true}));
//Configurando o express para usar o EJS como mecanismo de renderização de views padrão
app.set("view engine", "ejs");

app.get("/", (req, res) => {
    res.send("Executando tudo correto");
});

//CRUD EXAME
app.get("/listagem-exame", (req,res)=>{
  
  res.render("ListaExame");
});

app.post("/cadastro-exame", (req,res)=>{
    console.log(req.body);
    res.send("Dados recebidos pelo node");
});

app.put("/editar-exame", (req,res)=>{
  console.log(req.body);
  res.send("Dados de put recebidos com sucesso");
});

app.delete("/excluir-exame", (req,res)=>{

  console.log(req.body);
  res.send("dados do delete recebidos com sucesso");
})

app.listen(3000, () => {
  console.log("Servidor rodando na porta 3000");
});