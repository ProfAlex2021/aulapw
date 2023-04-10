<?php
namespace AulaPW\Modelo;
class Carro extends \AulaPW\Conexao{
    private $codigo = 5;
    private $marca;
    private $modelo;
    private $ano;

    public function __get($a){
        return $this->$a;
    }

    public function __set($a, $v){
        $this->$a = $v;
    }

    public function Listar(){
        $this->Conectar();
        $this->sql = "SELECT * FROM tb_carro";
        parent::Listar();
    }

    public function ListarJSON(){
        $this->Listar();
        echo json_encode($this->dados);
    }


}