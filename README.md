# Guia de Inicialização do Projeto

Este documento descreve os passos necessários para configurar e iniciar o projeto.

## Requisitos
- Docker e Docker Compose instalados
- Node.js e npm (caso vá rodar o frontend)

## Passos para iniciar o projeto

1. **Inicie os containers**
   ```sh
   make dev
   ```

2. **Acesse o terminal do container** e execute os seguintes comandos:
   ```sh
   composer install
   cp .env.example .env
   php artisan key:generate
   php artisan migrate
   php artisan test
   ```

## Comandos Explicados
- `make dev`: Inicializa os containers do projeto.
- `composer install`: Instala as dependências do Laravel.
- `cp .env.example .env`: Copia o arquivo de exemplo das configurações para um novo arquivo `.env`.
- `php artisan key:generate`: Gera uma chave de aplicação.
- `php artisan migrate`: Executa as migrações do banco de dados.
- `php artisan test`: Executa os testes da aplicação.

## Problemas Comuns
Se ocorrer algum erro durante a execução dos comandos, tente:
- Verificar se o Docker está rodando corretamente.
- Conferir se o arquivo `.env` está configurado corretamente.
- Rodar `php artisan config:clear` e `php artisan cache:clear` para limpar caches.

Agora seu projeto está pronto para uso! 🚀

