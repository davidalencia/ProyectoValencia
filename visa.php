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
    <form method='POST' action='visa.php'>
      <input type='text' name='info'/>
      <input type='submit'/>
    </form>
		</br>
		<a href='index.html'>Regresar<a/>
</body>
</html>";
$x=0;
$r=0;
$info=datos("info");


if ($info!='') {
	$info=str_split($info);
	for ($alfa=1; $alfa < count($info); $alfa++) {
		$x+=($alfa<15)? $info[$alfa]*2: 0;
		$r+=($info[$alfa]*2>9)? 1: 0;
	  $alfa++;
		$x+=($alfa<15)? $info[$alfa]: 0;
	}
}
$x=($x%10)-$r;
$info=implode($info);
echo (preg_match("/^4[0-9]{14}".$x."/", $info )) ? "<h3>bien</h3>" : "<h3>mal</h3>" ;

?>
