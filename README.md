# Projeto de Autenticação Simples em PHP

Este projeto foi desenvolvido como parte da disciplina de Ferramentas de Desenvolvimento Web. O objetivo é criar um sistema de autenticação simples em PHP, simulando um cenário de E-Commerce.

## Requisitos

- Ambiente de desenvolvimento PHP configurado.
- Docker instalado na máquina.

## Passos da Atividade

### Passo 1: Formulário de Autenticação

Nesta etapa, um formulário de autenticação foi criado para coletar o e-mail e a senha do usuário. O formulário possui os botões "Entrar" e "Sair".

### Passo 2: Salvando E-mail na Sessão

Ao clicar no botão "Entrar", o formulário envia as informações via método POST para a página `process_login.php`. Nesta página, o e-mail é salvo na sessão PHP (`$_SESSION`) para manter o usuário autenticado.

### Passo 3: Removendo E-mail da Sessão

Quando o usuário clica no botão "Sair", o e-mail é removido da sessão, efetuando o logout do usuário.

### Passo 4: Exibindo Mensagem de Boas-Vindas

Uma estrutura condicional (`if` e `else`) foi implementada para verificar se o e-mail existe na sessão. Se existir, uma mensagem de boas-vindas é exibida, seguida pelo e-mail do usuário.

## Instruções de Uso

1. Certifique-se de ter um ambiente de desenvolvimento PHP configurado.
2. Certifique-se de ter o Docker instalado na máquina.
4. Abra um terminal na pasta do projeto.
5. Execute o comando `docker-compose up -d` para subir os containers do servidor PHP e do servidor web.
6. Acesse  `http://localhost:39000/login.php` no navegador para iniciar o sistema de autenticação.

## Notas

Este é um projeto didático para fins de aprendizado e não é recomendado para uso em produção. Para um sistema de autenticação mais robusto e seguro, é recomendado utilizar uma estrutura de desenvolvimento ou bibliotecas de autenticação já existentes.