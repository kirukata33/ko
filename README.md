# KONSIT

Landing page KONSIT — dibangun dengan Laravel 13, Tailwind CSS, dan Alpine.js.

## Requirement

- PHP 8.3+
- Composer
- Node.js & NPM

## Setup lokal (Laragon)

```bash
composer install
copy .env.example .env
php artisan key:generate
npm install
npm run dev
```

## Build production

```bash
npm run build
```
