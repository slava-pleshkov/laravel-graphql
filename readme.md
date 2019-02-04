<p align="center">
    <a href="https://laravel.com/" target="_blank">
        <img src="https://laravel.com/assets/img/components/logo-laravel.svg" height="100px">
    </a>
    <a href="https://graphql.org/" target="_blank">
        <img src="https://marmelab.com/images/blog/graphql/logo.png" height="100px" width="300px">
    </a>
    <h1 align="center">laravel-graphql</h1>
    <br>
</p>
<p align="center">🎼 Laravel 5.7 Framework using GraphQL</p>

## Installation Dev

1. Clone the repo and `cd` into it
1. Run this command `composer install`
1. Rename or copy `.env.example` file to `.env`
1. Run this command `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set your mail credentials in your `.env` file
1. Set your `APP_URL` in your `.env` file
1. Set your `APP_DEBUG` in your `.env` file with the value `true`
1. Set your `GRAPHQL_PLAYGROUND_ENABLED` in your `.env` file with the value `true`
1. Run this command `php artisan config:cache`
1. Run this command `php artisan db:seed`
1. Run this command `php artisan serve` or use Laravel Valet or Laravel Homestead
1. Visit `localhost:8000` in your browser

## Installation Production

1. Clone the repo and `cd` into it
1. Create users and table in MySQL
1. Configure Nginx with these settings `nginx.conf`
1. Run this command `composer install`
1. Rename or copy `.env.example` file to `.env`
1. Run this command `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set your mail credentials in your `.env` file
1. Set your `APP_URL` in your `.env` file
1. Set your `APP_DEBUG` in your `.env` file with the value `false`
1. Set your `GRAPHQL_PLAYGROUND_ENABLED` in your `.env` file with the value `true`
1. Run this command `php artisan config:cache`
1. Run this command `php artisan db:seed`
1. Visit `https://laravelgraphql.slavapleshkov.com` in your browser
