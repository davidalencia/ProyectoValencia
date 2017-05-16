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
	<h1>Cifrado XOR</h1>
    <form method='POST' action='pracCinco.php'>
			<label>(usa el codigo ascii)<label><br/>
			<input type='text' name='info'/>
      <input type='submit'/>
    </form>
		</br>
		<a href='index.html'>Regresar<a/>
</body>
</html>";
//asignación
$info=datos("info");
//preparación
$info= str_split($info);


echo "<h3>";
for ($alfa=0; $alfa < count($info); $alfa++) {
	$info[$alfa]=ord($info[$alfa]);
	echo ($info[$alfa]^111)."  ";

}
echo "</h3>";


?>
