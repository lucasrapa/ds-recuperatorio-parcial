<?php

require_once 'modelo/compra.php';
require_once 'modelo/producto.php';
require_once 'modelo/Lineacompra.php';



$p1 =new Producto();
$p1->id=1;
$p1->Descripcion='Pantalon';
$p1->Precio= '$30000';

$p2 =new Producto();
$p2->id=2;
$p2->Descripcion='Buzo';
$p2->Precio='$20000';

$p3 =new Producto();
$p3->id=3;
$p3->Descripcion='Camperon';
$p3->Precio='$25000';


$lnc =new LineaCompra ();
$lnc->id=1;
$lnc->Producto = $p1;
$lnc->Cantidad = 1;
$lnc->Subtotal = '$30000';

$lnc1 =new LineaCompra ();
$lnc1->id=2;
$lnc1->Producto= $p2;
$lnc1->Cantidad=1;
$lnc1->Subtotal = '$20000';

$lnc2 = new LineaCompra ();
$lnc2->id=3;
$lnc2->Producto= $p3;
$lnc2->Cantidad = 2;
$lnc2->Subtotal = '$ 50000';


$c1 =new compra();
$c1->id=1;
$c1->Fecha='18/08/2023';
$c1->MontoTotal= '$100000';
$c1->TipoCompra= $_GET ['tipo'];
$c1->ListLineasCompra[]=$lnc;
$c1->ListLineasCompra[]=$lnc1;
$c1->ListLineasCompra[]=$lnc2;
$c1->MostrarDatos();


