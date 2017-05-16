<?php
function datos ($nombre){
  if (isset($_GET[$nombre]))
    return $_GET[$nombre];
	else
    return 0;
}

echo "<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'/>
	<link rel='stylesheet' type='text/css' href='styles/estilo.css'>
	<title>HTML</title>
</head>
<body>
  <h1>Obtener Módulo</h1>
    <form method='GET' action='pracUno.php'>
      <input type='text' name='x'/>
      <label>%</label></br>
      <input type='text' name='y'/></br>
      <input type='submit'/>
    </form>
    </br>
    <a href='index.html'>Regresar<a/>
    </br>
</body>
</html>";

$x=datos("x");
$y=datos("y");

$z = ($x!=0&&$y!=0) ? $x%$y : "mal" ;

if (preg_match("/[0-9]+/", $x)) {
  if (preg_match("/[0-9]+/",$y)) {
    if ($z>=0) {
      echo "<h3>".$z."</h3>";
    }
    else {
      echo "<h3>".$z+$y."</h3>";
    }
  }
}



?>
