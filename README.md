# LaravelLocalization
Laravel base app with [mcamara/laravel-localization](https://github.com/mcamara/laravel-localization) integration

# Features
This project can be used as a boilerpate for a laravel localized application using mcamara/laravel-localization plugin.

The main features are:
* Basic localization for routes,
* Localized interface
* Custom language selector.

**Examples**
When a user goes to the application base url, it will be automatically redirected to his locale:
So, http://localhost:8000 will redirect to http://localhost:8000/en or http://localhost:8000/it 

If you need more information about the localization system, please visit [mcamara/laravel-localization](https://github.com/mcamara/laravel-localization) repository.

# Install

First of all open a terminal and clone this project

```shell
$ git clone https://github.com/IlGala/LaravelLocalization myCustomName
```
then move to the project folder and run
```shell
$ composer update
$ php artisan clear-compiled && php artisan optimize
$ php artisan serve
```
The last command will start the built-in server and you can reach the application by opening a browser and go to http://localhost:8000

Now you are ready to customize the project.