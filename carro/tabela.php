<?php
require_once("carregar.php");
require_once("../view/tabela.php");
use AulaPW\Modelo\Carro;
use AulaPW\View\Tabela;

$carro = new Carro();
$carro->Listar();
$tabela = new Tabela();
$tabela->dados = $carro->dados;
$tabela->Exibir();