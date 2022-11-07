#Laravel Crud Generator

This Laravel Generator package provides and generate Controller, Model (with eloquent relations) and Views in **Bootstrap** for your development of your applications with single command.

- Will create **Model** with Eloquent relations
- Will create **Controller** with all resources
- Will create **views** in Bootstrap

## Requirements
    Laravel >= 5.5
    PHP >= 7.1

## Installation
1 - Install
```
composer require ajtarragona/crud-generator --dev
```
2- Publish the default package's config
```
php artisan vendor:publish --tag=crud
```

## Usage
```
//Makes a model from table name
php artisan crud:model {table_name}

//Makes crud from model
php artisan crud:make {model_name}

```

Add a route in `web.php`
```
Route::resource('banks', 'BankController');
```
Route name in plural slug case.

#### Options
 - Custom Route
```
php artisan make:crud {table_name} --route={route_name}
```
