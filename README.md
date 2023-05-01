<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Quind

Sistema de Alquiler de cámaras

## Requerimientos

Node

Composer

php 7.3.4 +

Laravel 8+

MySQL

### Instalación

- Usar git para clonar este repositorio, ejecute este comando: git clone https://github.com/DanielGCSK8/PruebaQuind.git
- Una vez clonado el repositorio, ejecutar el siguiente comando: composer install


## Ajustes y ejecución

- Ejecutar en la consola el siguiente comando: cp .env.example .env
Esto generará el archivo .env en base al .env.example.
- crear una base de datos en MySQL con el siguiente nombre: quind
- generar el app key de la aplicación con el siguiente comando: php artisan key:generate
- ejecutar el siguiente comando: php artisan migrate --seed para generar las migraciones y ejecutar los seeders.
- ejecutar el siguiente comando: npm install
- Ejecutar el siguiente comando: npm run watch
esto para correr el componente de vue.
- Para ejecutar el proyecto, ejecutar el siguiente comando: php artisan serve

Nota: Para correr la primera parte de la prueba, ingrese los siguientes links:
http://127.0.0.1:8000/order
http://127.0.0.1:8000/verifyString

y para el alquiler de cámaras
http://127.0.0.1:8000/

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
