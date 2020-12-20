Курс React+Laravel+Next
https://www.udemy.com/course/react-laravel-influencer/learn/lecture/22536426?components=deal_badge%2Cdiscount_expiration%2Cgift_this_course%2Cprice_text%2Cpurchase%2Credeem_coupon%2Cslider_menu%2Ccacheable_deal_badge%2Ccacheable_discount_expiration%2Ccacheabl#questions

github:
https://github.com/antoniopapa
https://github.com/antoniopapa/admin-backend

// будет установлена 8 версия
composer create-project laravel/laravel laravel-next

// для 7 версии запусти команду ---------------
composer create-project --prefer-dist laravel/laravel:^7.0 blog
// узнать версию laravel:
php artisan --version
// 7.30.0

// поднимает локальный веб сервер
php artisan serve

docker-compose up
// docker build

//***** 4. Routes *************
// создание контроллера
php artisan make:controller UserController
//***** 4. Routes END *************

//***** 5. Migrations *************
// внесли изменения в user table database/migrations/2014_10_12_000000_create_users_table.php
// мы должны войти внутрь контейнера
docker ps // какие контейнеры сейчас выполняются RUN
// в самой правой колонке указаны имена контейнеров, нам нужен admin_api
docker exec -it admin_api sh

// находясь внутри контейнера запускай команду 
php artisan migrate

php artisan make:seeder UserSeeder
// создан database/seeds/UserSeeder.php

// seeder вызывает factory database/factories/UserFactory.php
php artisan db:seed

//***** 5. Migrations END *************

//***** 6. Rest *****************

//***** 6. Rest END *************



//->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->
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
//*******************************************************************

===============
Создать контроллер (Lara 8)
php artisan make:controller UserController3
создал здесь:
app/Http/Controllers/UserController.php


php artisan -h migrate
// выполняемые контейнеры
docker ps

// войти внутрь контейнера
docker exec -it admin_api sh
php artisan migrate

php artisan -h make:seeder

php artisan make:seeder UserSeeder
