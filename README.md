# Miniblog | Beige Pages

Beige Pages is a simple blog system built with Laravel, wherein it allow users to create, update, and manage blog posts. 
It has basic login authentication and profile settings update.

## Features
- User authentication (login/register)
- Create, edit, and delete blog posts
- User profile settings
- See posts from other users

## Tech Stack
- [Laravel 12](https://laravel.com)
- [Blade Templates](https://laravel.com/docs/master/blade)
- [MySQL](https://www.mysql.com)
- [Vite](https://vitejs.dev/) for frontend assets

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/mrllcgds/miniblog
    cd miniblog

2. Install dependencies:
    ```bash
    composer install
    npm install

3. Copy .env.example to .env and update your environment variables
    ```bash
    cp .env.example .env

4. Generate application key:
    ```bash
    php artisan key:migrate

5. Run migrations:
    ```bash
    php artisan migrate

6. Start the development server:
    ```bash
    php artisan serv
    npm run dev

