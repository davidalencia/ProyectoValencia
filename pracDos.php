<?php
include 'funcionesGenerales.php';

echo "<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'/>
	<link rel='stylesheet' type='text/css' href='styles/estilo.css'>
	<title>HTML</title>
</head>
<body>
	<h1>Codificación Propia</h1>
    <form method='POST' action='pracDos.php'>
      <input type='text' name='info'/>
      <input type='submit'/>
    </form>
		</br>
		<a href='index.html'>Regresar<a/></br>
</body>
</html>";

$info=datos("info");

echo "<h3>".strrev($info)."</h3>";

?>
