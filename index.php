
<?php

require_once 'modelos/auto.php';



$a=new Auto();
$a->setModelo('fiesta');
$a->setMarca('ford');
$a->setVersion('SE');
$a->setAnio(2018);


$a->MostrarDatos();


