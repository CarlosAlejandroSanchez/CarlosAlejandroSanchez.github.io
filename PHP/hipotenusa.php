<?php
$valor1=$_GET["valor1"];
$valor2=$_GET["valor2"];
$res=0;
if ($valor1!= 0 || $valor2 != 0){
$valor1=$valor1*$valor1;
$valor2=$valor2*$valor2;
$res=$valor1+$valor2;
$res=sqrt($res);
print("La hipotenusa es de:".$res);
}
?>