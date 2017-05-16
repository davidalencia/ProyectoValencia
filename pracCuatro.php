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
	<h1>Cifrado simple a un # de cuenta</h1>
    <form method='GET' action='pracCuatro.php'>
      <input type='text' name='x' value='0'/>
      <input type='submit'/>
    </form>
		</br>
		<a href='index.html'>Regresar<a/>
</body>
</html>";

$x = (preg_match("/[0-9]{9}/", datos("x")))? datos("x") : "lam" ;
echo "<h3>".strrev($x)."</h3>";


?>
