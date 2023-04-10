<?php
require_once("carregar.php");
use AulaPW\Modelo\Carro;

header("Content-type: application/json");

$carro = new Carro();
$carro->Listar();
