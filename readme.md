# Pasos para el montaje de la aplicacion

## Base de Datos

Configurar base de datos de la app con una local.

- Ir al archivo .env 
- modificar DB_CONNECTION con el nombre del gestor de Base de Datos.
- modificar DB_DATABASE con el nombre de la Base de Datos a usar.
- modificar DB_USERNAME con el nombre de usuario para el ingreso a la Base de Datos.
- modificar DB_PASSWORD con la contraseña del anterior usuario para le ingreso a la Base de Datos.


## Composer
- ir a la ruta de la carpeta del proyecto y ejecutar el comando "PHP ARTISAN COMPOSER".


## Dirigirse a la carpeta donde se enceuntra el proyecto
- Abrir una consola y dirigirse a la ruta en donde se tiene descargado la carpeta del proyecto.

## Activar servidor
- Ejecutar en consola el comando 'php artisan serve'


## Migraciones y Seeder
- Ejecutar de forma consecutiva los comandos 'php artisan migrate:fresh' y 'php artisan db:seed'



Con estos pasos estaría lista la app para ser corrida en su servidor configurado.

