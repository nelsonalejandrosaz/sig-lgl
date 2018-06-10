# Sistema de Información Gerencial de facturacion LGL
## Prerrequisitos
- PHP >= 7.1
- PHP Extensiones PHP: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON
- MySQL o MariaBD
- Composer
Si se tiene instalado XAMP, este ya trae todas las extenciones requeridas.
Se recomienda crear un virtualhost para el proyecto, pero si no se puede utilizar el propio servidor de prueba de Laravel.
## Pasos para instalación de repositorio
- Clonar repositorio, ya sea con algún programa o directamente de la consola de git
- Instalar dependencias con Composer
```sh
$ composer install
```
- Copiar archivo de configuración de Laravel, se puede hacer una copia del ".env.example" y cambiar nombre a ".env".
- Generar un nuevo API key
```sh
$ php artisan key:generate
```
- Crear una base de datos para el proyecto y posteriormente debes agregar las credenciales al archivo .env
```sh
DB_HOST=localhost
DB_DATABASE=tu_base_de_datos
DB_USERNAME=root
DB_PASSWORD=
```
- Ejecutar las migraciones
```sh
$ php artisan migrate
```
- Ejecutar los seeds
```sh
$ php artisan db:seed
```
### Usuarios predeterminados
Estos son los usuarios con los que se puede 

| usuario | pass |
| ------ | ------ |
| administrador@lgl.com | qwerty0106|
| tactico@lgl.com | qwerty0106|
| estrategico@lgl.com | qwerty0106|
****
## Enlaces útiles
* [Documentación Laravel] - Documentación de Laravel 5.6
* [Styde Guia instalación] - Guia de instalacion de proyectos existentes en Laravel

[Documentación Laravel]: <https://laravel.com/docs/5.6>
[Styde Guia instalación]: <https://styde.net/como-instalar-proyectos-existentes-de-laravel/>
