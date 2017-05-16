<?php
include 'funcionesGenerales.php';

function letras ($cadena, $vocalesBool){
	$vocales =array('A', 'E', 'I', 'O', 'U');
	$beta = 1;
	$gamma =0;
	$cuentaVocales =1;
	while ($gamma< count($cadena)) {
		for ($alfa=0; $alfa < 5; $alfa++) {
			if ($cadena[$beta]==$vocales[$alfa]) {
					return $vocales[$alfa];
			}
			if ($vocalesBool == false) {
				$cuentaVocales++;
			}
			if ($cuentaVocales==5) {
				return $cadena[$beta];
			}
		}
		$beta++;
	}
}

function pasarMayusculas($cadena) {
	$cadena = str_replace("á", "a", $cadena);
	$cadena = str_replace("é", "e", $cadena);
	$cadena = str_replace("í", "i", $cadena);
	$cadena = str_replace("ó", "o", $cadena);
	$cadena = str_replace("ú", "u", $cadena);
	$cadena = str_replace("Á", "a", $cadena);
	$cadena = str_replace("É", "e", $cadena);
	$cadena = str_replace("Í", "i", $cadena);
	$cadena = str_replace("Ó", "o", $cadena);
	$cadena = str_replace("Ú", "u", $cadena);
	return ($cadena);
}

//jala datos de html

$nombreCom = (datos('nom')!='') ? datos('nom') : "paterno materno nombre" ;
$nacio = (datos('fechnac')!='') ? datos('fechnac') : "0000-00-00" ;
$nacio = str_split($nacio);
$donde = (datos('ln')) ? datos('ln') : "QS"/*Quien Sabe*/ ;
$sexo = datos('sexo');

$cod1 = ((implode(array_slice($nacio, 0, 4)))<2000) ? "0" : "A" ;
$cod2 = 1;

//variables necesitadas y preparación

$curpBien;
$nombrePartes= array();
$curp =array();

$nombreCom = pasarMayusculas($nombreCom);
$nombreCom = strtoupper($nombreCom);
$nombrePartes = explode(' ', $nombreCom);
$nombrePartes[1] = str_split($nombrePartes[1]);
$nombrePartes[2] = str_split($nombrePartes[2]);
$nombrePartes[0] = str_split($nombrePartes[0]);

// partes del curp
$curp[] = $nombrePartes[0][0];
$curp[] = letras ($nombrePartes[0], true);
$curp[] = $nombrePartes[1][0];
$curp[] = $nombrePartes[2][0];
$curp[] = implode(array_slice($nacio, 2, 2));
$curp[] = implode(array_slice($nacio, 5, 2));
$curp[] = implode(array_slice($nacio, 8, 2));
if ($sexo=='mujer') {
	$curp[] = 'M';
}
else{
	$curp[] = 'H';
}
$curp[] = $donde;
$curp[] = letras (implode(array_slice($nombrePartes[0], 1)), false);
$curp[] = letras (implode(array_slice($nombrePartes[1], 1)), false);
$curp[] = letras (implode(array_slice($nombrePartes[2], 1)), false);
$curp[] = $cod1;
$curp=implode("", $curp);
$curp=str_split($curp);
for ($alfa=0; $alfa < 16; $alfa++) {
  $beta=ord($curp[$alfa])-55;
	$beta = ($beta<3) ? $beta+7 : $beta ;
	$beta*=18-$alfa;
	$cod2+=$beta;
}
$curp[] = $cod2%10;

$curpBien = implode('', $curp);

echo "<!DOCTYPE html>
	<html>
	<head>
		<meta charset='utf-8'/>
	<link rel='stylesheet' type='text/css' href='styles/estilo.css'>
	<title>PHP</title>
</head>
<body>
".$curpBien;

echo "    </br>
    <a href='index.html'>Regresar<a/>
</body>
</html>";



?>
