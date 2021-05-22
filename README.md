# login-php

Este es un pequeño sistema de logeo con sesiones de PHP y usando rutas amigables. El sistema permite el registro de un usuario, el logeo del mismo, la comprobacion de la sesion y la destruccion de la sesion.

## Uso

1. Crear la base de datos. El script sql se encuentra en la carpeta `schema/usuarios.sql`
2. Modificar el archivo de configuracion que se encuentra en la carpeta `app/config.php` este archivo contiene dos constantes que se deben de modificar segun convenga:
    ```php
    define('NOMBRE_SERVIDOR', 'coloca-aqui-el-nombre-del-servidor');
    define('SERVIDOR', 'http://localhost/carpeta-donde-alojaste-el-proyecto/');
    ```
3. Una ves configurada la base de datos y modificado el archivo de configuracion a tus necesidades puedes probar el sistema.