# token-auth
A headless backend code for a token-based login application built on Laravel 5 PHP. This works well with https://github.com/jenorigor/authenticate (frontend code) and makes use of jwt (https://github.com/tymondesigns/jwt-auth) for authentication and token generation.

## Installation
Pre-requisites:
* Install Laravel 5 (https://laravel.com/docs/5.6/installation)
* A Frontend application like https://github.com/jenorigor/authenticate

## How to Run
* Clone this repository and place it on your local machine
* Using your command line, go to your directory and run the command:

```
php artisan serve
```

##### Remember that this is only a backend application. You can use https://github.com/jenorigor/authenticate for the frontend or build your own.