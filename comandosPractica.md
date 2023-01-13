
## Comandos utilizados para el desarrollo de la práctica:

1. composer create-proyect laravel/laravel Practica_Laravel:
Crea un nuevo proyecto de laravel llamado Practica_Laravel.

2. php artisan serve: 
Levanta el servidor en localhost usando el puerto 8000 por defecto.

3. php artisan migrate:
Enlaza con la Base de Datos para migraciones, rellenar la BD y llevar un control sobre los cambios realizados.

4. php artisan make:migration create_students_table:
Crea un archivo Migrations con una tabla y sus parámetros.

5. php artisan make:seeder StudentsSeeder:
Crea un archivo Seeder que nos permite probar nuestra BD y nos ayudan a no tener que perder tiemo escribiendo de forma manual todos los datos.

6. php artisan db:seed --class=StudentsSeeder:
Ejecuta el Seeder de AlumnoSeeder con los nuevos datos de 2 alumnos en la BD (students).

7. php artisan db:seed --class=DatabaseSeeder:
Ejecuta el Seeder de DatabaseSeeder donde se crean 10 usuarios nuevos aleatorios en la BD (users).

8. php artisan make:controller StudensController:
Crea un archivo Controller con las funciones de la aplicación, para asociar luego cada ruta a su controlador y su método.

9. php artisan make:middleware ValidateId:
Crea un archivo Middleware donde validamos el id de las rutas para que sea numérico, entero y positivo. Se define en una clase por restricción.
Un middleware  es un archivo que filtra las peticiones HTTP en un sistema, es un archivo adicional que va en el medio de la petición y de eso que se quiere ver como resultado final (un controlador, vista, archivo PDF o cualquier cosa). En otras palabras es una capa adicional donde podemos colocar la lógica de acceso.

10. php artisan make:request StudentsCreateRequest / StudentsUpdateRequest:
Crea un archivo Request donde validamos el resto de parámetros recibidos y que no se procesen campos que no sean necesarios.
La clase Form Request permiten separar la lógica de validación de datos (validación, mensajes de errores, autorización de usuarios y redirección en caso de fallar) de la lógica del controlador. Esta clase intercepta la solicitud o request y valida los datos que vienen de una petición HTTP antes de pasar al controlador.
