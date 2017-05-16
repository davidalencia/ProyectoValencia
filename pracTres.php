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
  <h1>Playfair n</h1>
    <form method='POST' action='pracTres.php'>
      <label>información</label>
      <input type='text' name='info'/></br>
      <label>n</label>
      <input type='text' name='n'/>
      <input type='submit'/>
    </form>
    </br>
    <a href='index.html'>Regresar<a/>
    </br>
</body>
</html>";

$info=datos('info');

$n =datos('n');

$info=str_split($info);
if ($n=='')
  $n=1;
for ($alfa=0; $alfa < ceil(count($info)/$n)+1; $alfa++)
    for ($beta=0; $beta < $n; $beta++) 
      echo (isset($info[$alfa+($n*$beta)]))? $info[$alfa+($n*$beta)]: "";
?>
