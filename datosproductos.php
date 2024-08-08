<?php
$Product1= $_POST ['Producto1'];
$Product2=$_POST ['Producto2'];
$Product3=$_POST ['Producto3'];
$Precio1=$_POST ['Precio1'];
$Precio2=$_POST ['Precio2'];
$Precio3=$_POST ['Precio3'];
$Suma = ['$Precio1'+'$Precio2'+'Precio3'];
$Descuento= 0.16;
$totalcondescuento = $Suma * (1-$Descuento);
echo "La suma con descuento de los productos es".$totalcondescuento;
?>
