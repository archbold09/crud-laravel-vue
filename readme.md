
Hola, para iniciar este proyecto, sigue los siguientes pasos :

1- Usa la terminal, en la raiz del proyecto ejecuta el comando : 

npm install

2- ahora el comando : 

composer install

3- Crea la base de datos (puede ser en PhpMyAdmin) con el nombre "crudlaravel" en este caso

4- Iniciamos las migraciones con el siguiente comando :

php artisan migrate:refresh --seed
--------------------------------------------------

Ya tendrias el proyecto funcional. Solo queda iniciarlo con :

php artisan serve
--------------------------
:)
