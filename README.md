# Курс React+Laravel+Next :grinning: 
[Курс](https://www.udemy.com/course/react-laravel-influencer/learn/lecture/22536426?components=deal_badge%2Cdiscount_expiration%2Cgift_this_course%2Cprice_text%2Cpurchase%2Credeem_coupon%2Cslider_menu%2Ccacheable_deal_badge%2Ccacheable_discount_expiration%2Ccacheabl#questions)

---
## github:  
https://github.com/antoniopapa  
https://github.com/antoniopapa/admin-backend
---
## Установка
// будет установлена 8 версия  
composer create-project laravel/laravel laravel-next

// для 7 версии запусти команду ---------------
composer create-project --prefer-dist laravel/laravel:^7.0 blog
// узнать версию laravel:
php artisan --version
// 7.30.0

// поднимает локальный веб сервер
php artisan serve

### 4. Routes
// создание контроллера
php artisan make:controller UserController

### 5. Migrations
// внесли изменения в user table database/migrations/2014_10_12_000000_create_users_table.php  
// мы должны войти внутрь контейнера  
docker ps // какие контейнеры сейчас выполняются RUN  
// в самой правой колонке указаны имена контейнеров, нам нужен admin_api  
<span style="color:blue;font-weight:bold">docker exec -it admin_api sh</span>

// находясь внутри контейнера запускай команду  
php artisan migrate

php artisan make:seeder UserSeeder  
// создан database/seeds/UserSeeder.php

// seeder вызывает factory database/factories/UserFactory.php  
php artisan db:seed

### 6. Rest 
php artisan route:list

### 7. Custom Requests
//Если не указать first_name при создании - то возникнет ошибка.
//Нужен custom validation  

php artisan make:request UserCreateRequest  
//app/Http/Requests/UserCreateRequest.php

---
В заголовках запроса не забудь поставить Accept:application/json иначе ошибку будет не видно

php artisan make:request UserUpdateRequest

### 8. Pagination
This package generates helper files that enable your IDE to provide accurate autocompletion. Generation is done based on the files in your project, so they are always up-to-date.  

https://github.com/barryvdh/laravel-ide-helper  

<span style="color:blue;font-weight:bold">composer require --dev barryvdh/laravel-ide-helper</span>  

php artisan ide:generate

php artisan ide:models
// app/User.php добавлены комментарии


### 9. Laravel Passport
login  
https://laravel.com/docs/7.x/passport

composer require laravel/passport "~9.0"

php artisan migrate

php artisan passport:install

### 10. Login

php artisan make:controller AuthController

### 11. Middlewares
Для авторизации и получения, например списке пользователей надо передать в postamn Header:  

Authorizaqtion : Bearer пробел + токен полученный при логин

### 12. Register
валидация для регистрации
php artisan make:request RegisterRequest

## WSL
wsl -l

Сжать диск docker  
Optimize-VHD -Path Y:\dockerData\ext4.vhdx -Mode Full

______________________________
wslconfig /list

https://dev.to/kimcuonthenet/move-docker-desktop-data-distro-out-of-system-drive-4cg2

%LOCALAPPDATA%/Docker/wsl;

wsl --shutdown  
wsl --export docker-desktop-data E:\docker\docker-desktop-data.tar  
wsl --unregister docker-desktop-data  
wsl --import docker-desktop-data E:\docker\data E:\docker\docker-desktop-data.tar --version 2  


## Docker
// Сборка образа  
docker-compose up

// выполняемые контейнеры  
docker ps

// войти внутрь контейнера  
docker exec -it admin_api sh

// войти внутрь контейнера  
// в самой правой колонке указаны имена контейнеров, нам нужен admin_api  
<span style="color:blue;font-weight:bold">docker exec -it admin_api sh</span>

[DD]: https://www.udemy.com/course/react-laravel-influencer/learn/lecture/22536426?components=deal_badge%2Cdiscount_expiration%2Cgift_this_course%2Cprice_text%2Cpurchase%2Credeem_coupon%2Cslider_menu%2Ccacheable_deal_badge%2Ccacheable_discount_expiration%2Ccacheabl#questions
