# simple-payment-application

 This a web platform that can enable users to register and send money to each other within the system. They top up their accounts through MPESA* and can now transfer amongst themselves. They use the registered number or email address to transfer.  Once a transfer is done, the recipient receives a notification in the system as well as a confirmation through email. 


### Why Laravel?

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

### Minimum requirements 
* php >= 7.1.3

### Installation ###
* type `https://github.com/sirBobz/worldbank.org-v2-datacatalog.git datacatalog` to clone the repository 
* type `cd datacatalog`
* type `composer install`
* type `composer update`
* copy *.env.example* to *.env*
* type `php artisan key:generate`to generate secure key in *.env* file
* if you use MySQL in *.env* file :
   * set DB_CONNECTION
   * set DB_DATABASE
   * set DB_USERNAME
   * set DB_PASSWORD

* type `php artisan migrate` to create tables

### Included packages ###

* [reliese/laravel](https://github.com/reliese/laravel) is a collection of Laravel Components which aim is to help the development process of Laravel applications by providing some convenient code-generation capabilities.

* [predis/predis](https://github.com/nrk/predis) Flexible and feature-complete Redis client for PHP >= 5.3 and HHVM >= 2.3.0.

* [pusher/pusher-php-server](https://github.com/pusher/pusher-http-php) PHP library for interacting with the Pusher HTTP API.

* [fideloper/proxy](https://github.com/fideloper/TrustedProxy) Laravel Proxy Package for handling sessions when behind load balancers or other intermediaries.

### Features ###


* Authentication (registration, email verification, login, logout)