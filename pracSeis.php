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
	<h1>Cifrado Simetrico</h1>
    <form method='POST' action='pracSeis.php'>
      <label>info</label>
      <input type='text' name='info'/></br>
      <label>clave(num menor o igual a 5)</label>
      <input type='number' name='clave'/></br>
      <input type='submit'/>
    </form>
		</br>
		<a href='index.html'>Regresar<a/>
</body>
</html>";

$info=datos("info");
$clave=datos("clave");
$info=str_split($info);

for ($alfa=0; $alfa < count($info); $alfa++) {
  $info[$alfa]=ord($info[$alfa])+$clave;
  $info[$alfa]= chr($info[$alfa]);
}
$info =implode($info);
echo "<h3>".$info."</h3>";

?>
