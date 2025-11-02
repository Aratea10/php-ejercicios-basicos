<?php
/*
Ejercicio 2.
Crea un script que muestre un número aleatorio cada vez que se carga la página.
*/
mt_srand();
$numero = mt_rand(1, 100);
?><!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Aleatorio</title>
    </head>
    <body>
        <p>Número aleatorio: <strong><?= $numero ?></strong></p>
    </body>
</html>