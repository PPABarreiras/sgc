<?php
class RetirarE{
    public $idChave;
    public $situacao;
    public $retirado;
    public $idPredio;
    public $descricao;

    function __construct($idChave, $situacao, $retirado, $idPredio, $descricao){
        $this->idChave = $idChave;
        $this->situacao = $situacao;
        $this->retirado = $retirado;
        $this->idPredio = $idPredio;
        $this->descricao = $descricao;
    }

}