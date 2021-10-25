<?php
$vrnumero1 = $_REQUEST["num_numero1"];
$vrnumero2 = $_GET["num_numero2"];

$vrrespuesta = $vrnumero1 + $vrnumero2;

echo "la suma de los numeros: ".$vrnumero1." y ". $vrnumero2. "es:  ".$vrrespuesta. "<br>";

echo  '<a href="http://localhost/ADSI-2338368-RODRIGO/FORMULARIO.PHP"><input type="submit" name="btn_enviar" value="Regresar"></a>'




?>
