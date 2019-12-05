## About immo

Simple web application for real-estate management and accounting (in development).

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the software

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
* ...

## Authors

* [Pascal Mirring](https://github.com/mirpas)

## License

This project is licensed under the GNU General Public License v3.0 - see the [LICENSE](LICENSE) file for details
