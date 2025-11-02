<?php
/*
Ejercicio 4.
Crea un script que tenga una constante y muestre por pantalla:
"El valor de la constante es: <valor>"
*/
define('MI_CONSTANTE', '42-GBD');
?><!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Constante</title>
    </head>
    <body>
        <p>El valor de la constante es: <strong><?= MI_CONSTANTE ?></strong></p>
    </body>
</html>