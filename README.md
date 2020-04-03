# Laravel Sanctom Demo

## About Laravel Sanctom

Laravel Sanctum provides a featherweight authentication system for SPAs (single page applications), mobile applications, and simple, token based APIs. Sanctum allows each user of your application to generate multiple API tokens for their account. These tokens may be granted abilities / scopes which specify which actions the tokens are allowed to perform.

Go to Documents: [Sanctum](https://laravel.com/docs/7.x/sanctum)

## After git clone...

```
composer install
cp .env.example .env # need to set up for database
php artisan key:generate
php artisan migrate

# change permission
sudo chown -R $USER:www-data storage
sudo chown -R $USER:www-data bootstrap/cache
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```
