# test-php-laravel-10-project-center-formation-app

This project consists of creating a web application offering online courses for a fictitious company in order to put
[Grafikart's Laravel 10](https://grafikart.fr/formations/laravel) training into practice.

## Getting Started

### Prerequisites

1. Check composer is installed
2. Check yarn & node 18 are installed

### Install

1. Clone this project
2. Run `composer install`
3. Run `yarn install`
4. Configure database connection
5. Make the database and tables  
```php artisan migrate```
6. Generate files to help your IDE offer you better auto-completion
```
php artisan clear-compiled
php artisan ide-helper:generate
php artisan ide-helper:models -M
php artisan ide-helper:meta
```

### Working

1. Run `php artisan serve` to launch your local php web server
2. Run `yarn run dev` to launch your local server for assets

## Built With

* PHP 8.2
* Node JS 18
* [Laravel 10](https://laravel.com/)
* [Mentor bootstrap template (frontend interface)](https://bootstrapmade.com/mentor-free-education-bootstrap-theme/)
* [Nice Admin bootstrap template (backend interface)](https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/)
