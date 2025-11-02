<?php
/*
Ejercicio 3.
Crea un script que, dado un valor numérico almacenado en la varibale $valor, devuelva ese valor multiplicado por 2.
*/
$valor = isset($_GET['valor']) ? floatval($_GET['valor']) : 0;
$result = $valor * 2;
?><!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Multplicar por 2</title>
    </head>
    <body>
        <p>Valor: <?= $valor ?> → x2 = <strong><?= $result ?></strong></p>
        <p>Cambia el parámetro <code>?valor=</code> en la URL.</p>
    </body>
</html>