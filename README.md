# Sistema de Cadastro de Corretores 🧾

Este projeto consiste em um sistema web simples para cadastro, edição, listagem e exclusão de corretores. Ele foi desenvolvido como parte de um teste prático com foco em PHP, MySQL, Bootstrap e XAMPP.

## 🔧 Tecnologias Utilizadas

- PHP
- MySQL (via phpMyAdmin ou MySQL Workbench)
- HTML5 / CSS3
- Bootstrap 5
- JavaScript
- XAMPP (Apache + MySQL)

## 📂 Estrutura de Arquivos

- `index.html` — Página inicial com formulário para cadastrar corretores e tabela para listagem.
- `processa.php` — Responsável por processar o envio do formulário e salvar no banco de dados.
- `editar.php` — Permite editar os dados de um corretor.
- `excluir.php` — Responsável por excluir um corretor do sistema.
- `corretores_db.sql` — Script de criação do banco de dados e tabela.

## 🗃️ Banco de Dados

O banco de dados utilizado se chama `corretores_db` e possui uma tabela chamada `corretores` com os seguintes campos:

- `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
- `nome` (VARCHAR)
- `email` (VARCHAR)
- `telefone` (VARCHAR)
- `creci` (VARCHAR)

## 🚀 Como Executar Localmente

1. Clone este repositório:
   ```bash
   git clone https://github.com/SEU_USUARIO/cadastro_corretores.git
