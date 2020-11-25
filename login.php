<?php

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

echo "<br>";
echo "<h2 align='center'>Bienvenido al Sistema</h2>";
echo "<br>";

echo "<h3 align='center'> <span style='background-color: teal; color: white'>Los datos ingresados son: </h3></span>";
echo "<br>";

echo "<h3 align='center' style='color:red'>Tu Usuario: &nbsp {$usuario}</h3>";
echo "<br>";

echo "<h3 align='center' style='color:red'>Tu Clave: &nbsp {$clave}</h3>";
"<br>";

?>

