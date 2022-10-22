<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation

Before install this project, please make sure **Composer** is installed at the local base, and **Docker** is installed and activated.

- Go to the project root path
- Run ```cp .env.example .env```
- Set environment variables in *.env*
- Run ```composer install```
- Run ```./vendor/bin/sail up -d``` to build and start Docker container
- Run ```./vendor/bin/sail shell``` to connect to the container
- Run ```composer install``` again to install dependencies under container environment
- Run ```php artisan migrate:refresh --seed``` to initialise database
- Open application in browser via [http://localhost](http://localhost)

## Key Concepts
