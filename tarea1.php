<?php

$sueldoBasico = 600; 
$porcentajeComision = 7.5; 
$descuentoPorcentaje = 11; 
$bonificacionPorHijo = 50; 

$importeTotalVendido = floatval(readline("Ingrese el importe total vendido del mes: "));
$cantidadHijosEscolar = intval(readline("Ingrese los hijos en edad escolar: "));

$comision = ($importeTotalVendido * $porcentajeComision) / 100;

$bonificacion = $bonificacionPorHijo * $cantidadHijosEscolar;

$sueldoBruto = $sueldoBasico + $comision + $bonificacion;

$descuento = ($sueldoBruto * $descuentoPorcentaje) / 100;

$sueldoNeto = $sueldoBruto - $descuento;

echo "Comisión: S/. " . number_format($comision, 2) . "\n";
echo "Bonificación: S/. " . number_format($bonificacion, 2) . "\n";
echo "Sueldo Bruto: S/. " . number_format($sueldoBruto, 2) . "\n";
echo "Descuento: S/. " . number_format($descuento, 2) . "\n";
echo "Sueldo Neto: S/. " . number_format($sueldoNeto, 2) . "\n";
?>
