# Logowanie przez Google OAuth2

Prosty system logowania w Symfony 7 wykorzystujący Google OAuth2 

## Funkcje
- Logowanie przez konto Google
- unit test

## Wymagania
- PHP 8.2 
- Composer
- Symfony CLI
- Baza danych (SQLite/MySQL)

## Instalacja
1. Sklonuj repozytorium
```bash
git clone [twój-link-do-repo]

potem:

composer install

Skonfiguruj zmienne środowiskowe w .env
GOOGLE_OAUTH_ID=twoje_client_id
GOOGLE_OAUTH_SECRET=twoje_client_secret

migracje:
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
