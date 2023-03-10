<?php
require("conexao.php");

$consulta = $conexao->query("SELECT * FROM tb_carro");
$dados = $consulta->fetchAll(PDO::FETCH_NAMED);

header("Content-type: application/json");
echo json_encode($dados);