<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Laravel Test Project

This project is a Laravel-based backend application developed for a job application test. It includes CRUD operations for managing products using Laravel's Resource Controller.

## Features

- **Data Structure:** The database is designed to support the products table with fields such as id, name, description, price, stock, created_at, and updated_at.
- **API (Application Programming Interface):** CRUD operations for managing products are implemented using Laravel's Resource Controller.
- **Data Validation:** Validation rules are implemented to ensure the accuracy of input data.
- **Unit Testing:** PHPUnit tests are integrated to verify the integrity of API functionalities

## Installation

1. Clone the repository.
   ```bash
   git clone https://github.com/YourUsername/Laravel-Test-Project.git
 ```
1- Install dependencies.
  ```bash
        composer install
```
        
2- Set up the environment.
  ```bash
        cp .env.example .env
        php artisan key:generate
```
        
3- Run migrations.
  ```bash
        php artisan migrate
```
        
4- Run the application.
  ```bash
        php artisan serve
```
        
Testing
Run PHPUnit tests.
php artisan test

