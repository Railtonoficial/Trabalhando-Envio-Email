# Sistema de Envio de Emails com Laravel

Este projeto foi desenvolvido com o objetivo de aprimorar habilidades no envio de emails utilizando **Laravel**, implementando filas (queues) para processamento assíncrono. Utilizei o **Mailtrap** para testar os envios de email em ambiente de desenvolvimento e o ambiente foi configurado com Docker, Composer, Nginx e Dockerfile. 

## Funcionalidades Implementadas

1. **Cadastro de Usuário**
   - Cadastro de um usuário fictício no banco de dados.

2. **Envio de Email de Registro**
   - Envio de email para o usuário registrado utilizando filas (queues).
   - Utilização da classe **Mailable** para gerenciar o conteúdo do email.

3. **Processamento Assíncrono com Queues**
   - Implementação de **Jobs** para processar o envio de emails de forma assíncrona.
   - Configuração da tabela `jobs` no banco de dados para armazenar tarefas.

4. **Testes de Email**
   - Configurado para usar o **Mailtrap** para verificar os envios de email em ambiente de desenvolvimento.

## Tecnologias Utilizadas

- **PHP**: Linguagem principal do projeto.
- **Laravel**: Framework utilizado para a estrutura do projeto.
- **Docker**: Configuração do ambiente de desenvolvimento.
- **Composer**: Gerenciador de dependências do PHP.
- **Nginx**: Servidor web.
- **Mailtrap**: Ferramenta para testes de envio de emails.

## Como Executar o Projeto

### 1. Requisitos
Certifique-se de ter as seguintes ferramentas instaladas:
- Docker
- Docker Compose

### 2. Configuração do Ambiente

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
