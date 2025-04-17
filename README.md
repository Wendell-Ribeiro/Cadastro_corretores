# 📋 Sistema de Cadastro de Corretores

Este projeto é um sistema simples de cadastro de corretores, desenvolvido em PHP com MySQL, utilizando HTML5, CSS3, JavaScript e Bootstrap. Ele permite **inserir, editar, listar e excluir corretores** de um banco de dados.

## 🚀 Tecnologias Utilizadas

- PHP
- MySQL (phpMyAdmin ou MySQL Workbench)
- HTML5 / CSS3
- JavaScript
- Bootstrap 5
- XAMPP (para ambiente local)

## 📁 Estrutura do Projeto


📦 cadastro_corretores ├── index.php # Página inicial com listagem 
├── processa.php # Processa os dados do formulário ├── editar.php # Edição dos dados do corretor
├── excluir.php # Exclusão de um corretor ├── conexao.php # Conexão com o banco de dados └── banco/corretores_db.sql # Script SQL para criação do banco


## 🧠 Funcionalidades

- ✅ Cadastro de novos corretores
- ✅ Edição de corretores existentes
- ✅ Exclusão de corretores
- ✅ Listagem de corretores cadastrados


## 🛠 Banco de Dados

- Nome do banco: `corretores_db`
- Tabela principal: `corretores`
- Campos da tabela:
- `id` (int, auto_increment, chave primária)
- `nome`
- `email`
- `telefone`
- `creci`
- `cidade`
- `uf`

## 📌 Observações

- Este projeto foi desenvolvido como teste prático para fins acadêmicos e profissionais.
- Pode ser adaptado e expandido para incluir autenticação de usuários, paginação, upload de arquivos e muito mais.

## 🧑‍💻 Autor

**Wendell Gama Ribeiro**  
Recém-formado em Sistemas de Informação, apaixonado por tecnologia, dados e inteligência artificial.  
Conhecimentos em PHP, HTML5, CSS3, JavaScript, MySQL e XAMPP.

---
