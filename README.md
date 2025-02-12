# Laravel 10 Skeleton

Este repositório é um esqueleto base para projetos Laravel 10, contendo alguns pacotes e configurações que utilizo frequentemente. O objetivo é facilitar a inicialização de novos projetos mantendo um padrão organizado.

## Tecnologias Utilizadas

- **Laravel 10** - Framework PHP para aplicações web.
- **Composer** - Gerenciador de dependências do PHP.
- **MySQL** - Banco de dados relacional.
- **Apache/Nginx** - Servidor HTTP.
- **GitHub Actions** - CI/CD para automatização de testes e deploy.

## Pacotes Instalados

Os seguintes pacotes são incluídos neste esqueleto:

- **Laravel Sanctum** - Autenticação leve para APIs.
- **Laravel Breeze** - Autenticação simples e rápida.
- **Spatie Permission** - Gerenciamento de permissões e funções.
- **Laravel Debugbar** - Ferramenta para debugging.
- **Laravel IDE Helper** - Gera dicas de autocomplete para IDEs.

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/michelmelo/periquita.git
   ```

2. Acesse o diretório do projeto:
   ```bash
   cd periquita
   ```

3. Instale as dependências:
   ```bash
   composer install
   ```

4. Copie o arquivo `.env.example` para `.env`:
   ```bash
   cp .env.example .env
   ```

5. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

6. Configure o banco de dados no arquivo `.env` e execute as migrações:
   ```bash
   php artisan migrate --seed
   ```

7. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```

## Estrutura do Projeto

- `app/` - Contém os arquivos principais da aplicação.
- `database/migrations/` - Arquivos de migração do banco de dados.
- `routes/web.php` - Definição de rotas web.
- `routes/api.php` - Definição de rotas para APIs.

## Testes

Para rodar os testes, utilize:
```bash
php artisan test
```

## Licença

Este projeto é distribuído sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

