<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About immo

Simple laravel application for real-estate management and accounting (in development).

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

```
php 7.2, db (mysql, postgresql, ...), composer
```

### Installing

Clone the repository to your local machine

```
git clone https://github.com/mirpas/immo.git
```

Install Composer Dependencies

```
composer install
```

Create a copy of your .env file

```
cp .env.example .env
```

Generate an app encryption key

```
php artisan key:generate
```

Complete information in your .env file

```
vi .env
```

Migrate your database

```
php artisan migrate
```

Seed the database with test data

```
php artisan migrate:seed
```

## Built With

* [Laravel](https://github.com/laravel/laravel) - The php framework used
* [AdminLte](https://github.com/ColorlibHQ/AdminLTE) - Admin dashboard template based on Bootstrap

## Authors

* **Pascal Mirring** - *Initial work* - [Pascal Mirring](https://github.com/mirpas)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
