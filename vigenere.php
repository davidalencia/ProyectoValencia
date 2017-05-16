<?php
include 'funcionesGenerales.php';
//compra de comida
$letra;
$abc1d = array();
$abc2d = array();
$info = datos('info');
$clave= datos('clave');
//cortar los vegetales
for ($alfa=0; $alfa < 26; $alfa++) {
  $abc1d[]=chr($alfa+65);
  echo chr($alfa);
}
for ($alfa=0; $alfa < 26; $alfa++) {
  for ($beta=0; $beta < 26; $beta++) {
    $abc2d[$alfa][]=$abc1d[($beta+$alfa)%26];
  }
}
$info=strtoupper($info);
$info=str_split($info);
$clave=strtoupper($clave);
$clave=str_split($clave);
//preguntar la cantidad de sal
echo "<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset='utf-8'/>
	<link rel='stylesheet' type='text/css' href='styles/estilo.css'>
</head>
<body>
	<form method='POST' action='vigenere.php'>
    <label>información a cifrar</label>
    <input type='text' name='info'/></br>
    <label>iplabra indice (no introducir espacios)</label>
    <input type='text' name='clave'/></br>
    <input type='submit' id='submit'/>
	</form>
  </br>
  <a href='index.html'>Regresar<a/>
</body>
</html>";
//preparar
for ($alfa=0; $alfa < count($clave); $alfa++) {
  $clave[$alfa]=ord($clave[$alfa])-65;
}
echo "<h3>";
if(isset($abc2d[0][$clave[$alfa%count($clave)]]))
  for ($alfa=0; $alfa < count($info); $alfa++) {
    $letra=ord($info[$alfa])-65;
    if($letra<0)
      echo chr($letra+65);
    else
      echo $abc2d[$letra][$clave[$alfa%count($clave)]];
  }
echo "</h3>";
//bon apetit

?>
