<?php
/*
Ejercicio 6 (alternativa en PHP).
Crea el siguiente array y muéstralo en una página con H1 "Oferta de trabajo":

$array = array(
	"Titulo" => "Desarrollador backend php",
	"Descripcion" => "Desarrollo de API y páginas web en php con Laravel",
	"Sector" => "informatica",
	"Salario" => "35000",
	"Experiencia" => "2 años",
	"Modalidad" => "Teletrabajo",
	"Incorporación" => "Inmediata",
);
*/
$oferta = [
	"Titulo" => "Desarrollador backend php",
	"Descripcion" => "Desarrollo de API y páginas web en php con Laravel",
	"Sector" => "informatica",
	"Salario" => "35000",
	"Experiencia" => "2 años",
	"Modalidad" => "Teletrabajo",
	"Incorporación" => "Inmediata",
];
?><!doctype html>
<html lang="es"><head><meta charset="utf-8"><title>Oferta (PHP)</title>
<style>body{font-family:system-ui;margin:2rem}dt{font-weight:700}</style></head>
<body>
<h1>Oferta de trabajo</h1>
<dl>
<?php foreach ($oferta as $k => $v): ?>
	<dt><?= htmlspecialchars($k) ?></dt>
	<dd><?= htmlspecialchars($v) ?></dd>
<?php endforeach; ?>
</dl>
</body></html>