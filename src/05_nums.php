<?php
/*
Array base para los ejercicios 5-9:
$nums = array(5,3,8,1,10,2,3);

- Devuelve por pantalla el número de elementos que contiene el array.
- Recorre el array y multiplica cada elemento por 3.
- Recorre el array y devuelve por pantalla únicamente los elementos múltiplos de 2.
- Recorre el array y devuelve la suma de todos los elementos.
- Recorre el array mostrando su clave y valor. ¿Qué clave tienen?
*/
$nums = array(5, 3, 8.1, 10, 2, 3);

/* número de elementos */
$count = count($nums);

/* multiplica cada elemento por 3 */
$porTres = array_map(fn($n) => $n * 3, $nums);

/* solo múltiplos de 2 */
$multiplos2 = array_values(array_filter($nums, fn($n) => $n % 2 === 0));

/* suma de todos */
$suma = array_sum($nums);

/* claves y valores (claves numéricas 0..N-1) */
$paresClaveValor = [];
foreach ($nums as $k => $v) {
    $paresClaveValor[] = "$k => $v";
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Array $nums</title>
    <style>
        code {
            background: #eee;
            padding: .1rem .3rem;
            border-radius: .25ren
        }
    </style>
</head>
<body>
    <h1>Operaciones con <code>$nums = [5,3,8,1,10,2,3]</code></h1>
    <ol>
        <li><strong>Elementos:</strong> <?= $count ?></li>
        <li><strong>Por 3:</strong> <?= implode(', ', $porTres) ?></li>
        <li><strong>Múltiplos de 2:</strong> <?= implode(', ', $multiplos2) ?></li>
        <li><strong>Suma total:</strong> <?= $suma ?></li>
        <li><strong>Claves y valores:</strong> <?= implode(' | ', $paresClaveValor) ?>.
            Claves usadas: <em>0 a <?= count($nums) - 1 ?></em></li>
    </ol>
</body>
</html>