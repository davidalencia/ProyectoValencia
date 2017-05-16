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
  <h1>Hash</h1>
    <form method='POST' action='pracSiete.php'>
      <input type='text' name='info'/></br>
      <input type='submit'/>
    </form>
    </br>
    <a href='index.html'>Regresar<a/>
    </br>
</body>
</html>";

$info=datos('info');
$info=str_split($info);
$hash=$info;
$hashBeta=$info;
while((count($hash))>5){
  $hash=array();
  for ($alfa=0; $alfa <count($hashBeta) ; $alfa=$alfa+2) {
    $hash[]=$hashBeta[$alfa];
  }
  $hashBeta=$hash;
}

echo implode($hash);
?>
