<?php

$precioActualGaseosa = floatval(readline("Ingrese el precio actual de la gaseosa de 3 litros: "));
$cantidadUnidadesAdquiridas = intval(readline("Ingrese la cantidad de unidades adquiridas: "));


$nuevoPrecioGaseosa = $precioActualGaseosa - ($precioActualGaseosa * 0.05);


$importeCompraAntesDescuento = $nuevoPrecioGaseosa * $cantidadUnidadesAdquiridas;


$importeDescuento = ($importeCompraAntesDescuento * 0.07);


$importeAPagar = $importeCompraAntesDescuento - $importeDescuento;


$obsequioCaramelos = $cantidadUnidadesAdquiridas * 2;


echo "Nuevo precio de la gaseosa de 3 litros: S/. " . number_format($nuevoPrecioGaseosa, 2) . "\n";
echo "Importe de la compra antes del descuento: S/. " . number_format($importeCompraAntesDescuento, 2) . "\n";
echo "Importe del descuento: S/. " . number_format($importeDescuento, 2) . "\n";
echo "Importe a pagar, Diego: S/. " . number_format($importeAPagar, 2) . "\n";
echo "Obsequio: " . $obsequioCaramelos . " caramelos\n";
?>
