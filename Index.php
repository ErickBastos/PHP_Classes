<?php

require 'vendor/autoload.php';

use App\Carro;
use App\CarroHibrido;

$carroHibrido = new Hibrido("Roberto");
$carroHibrido->setMarca("Chevrolet");
$carroHibrido->setModelo("Corsa");
$carroHibrido->setAno("2010");

echo $carroHibrido->exibirInformacoes();

?>