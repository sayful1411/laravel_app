![OSTAD - Assignment7](https://cdn.ostad.app/public/upload/2023-10-17T07-14-50.690Z-Logo-new.png)

# OSTAD Assignment 8

- Create ProfileController  using following Command

```
php artisan make:controller ProfileController 
```

- Route mapping with ProfileController
Code
```
Route::get('/profile/{id}', [ProfileController::class, 'index']);
```


# OSTAD Assignment 7

## Laravel Installation

- Install Laravel

```bash
composer create-project laravel/laravel laravel_app
```

- Create UserController using following Command

```
php artisan make:controller UserController
```

- Route mapping with UserController
Code
```
Route::get('message', [UserController::class, 'message']);
```


## RUN the project
```
php artisan serve
```
## Go to the following URL
[OSTAD - Assignment7](http://127.0.0.1:8000/message)

## License
[MIT](https://choosealicense.com/licenses/mit/)
