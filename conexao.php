<?php
$servidor = "localhost";
$usuario = "aulapw";
$senha = "5LnLBTlFge32WbYQ";
$banco = "aulapw";

try {
    $conexao = new PDO("mysql:host={$servidor};dbname={$banco};", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}