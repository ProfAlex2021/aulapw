<?php
namespace AulaPW;
class Conexao
{
    private static $servidor = "localhost";
    private static $usuario = "aulapw";
    private static $senha = "5LnLBTlFge32WbYQ";
    private static $banco = "aulapw";

    protected $conexao = null;
    protected $sql = "";
    protected $dados = null;

    protected function Conectar()
    {
        try {
            $this->conexao = new \PDO("mysql:host=" . Conexao::$servidor . ";dbname=" . Conexao::$banco . ";", Conexao::$usuario, Conexao::$senha);
            $this->conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    protected function Listar(){
        $this->dados = $this->conexao->query($this->sql)->fetchAll(\PDO::FETCH_NAMED);
    }
}
