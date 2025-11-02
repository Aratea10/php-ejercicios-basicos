<?php
$links = [
  '01 Hola Mundo' => '../src/01_hola.php',
  '02 Número aleatorio' => '../src/02_aleatorio.php',
  '03 Multiplicar $valor x2' => '../src/03_multiplica.php?valor=7',
  '04 Constante y su valor' => '../src/04_constante.php',
  '05-09 Operaciones con $nums' => '../src/nums.php',
  '10 Oferta de trabajo (HTML)' => './oferta.html',
  '10 (alt) Oferta desde array PHP' => '../src/oferta.php'
];
?><!doctype html>
<html lang="es"><head><meta charset="utf-8"><title>Ejercicios PHP</title>
<style>body{font-family:system-ui;margin:2rem}li{margin:.4rem 0}</style></head>
<body>
<h1>Ejercicios PHP</h1>
<ol>
<?php foreach ($links as $t => $u): ?>
  <li><a href="<?= htmlspecialchars($u) ?>"><?= htmlspecialchars($t) ?></a></li>
<?php endforeach; ?>
</ol>
</body></html>