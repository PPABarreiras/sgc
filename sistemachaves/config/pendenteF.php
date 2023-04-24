<?php
class PendenteF{
    public $idChave;
    public $situacao;
    public $matricula;
    public $nome;
    public $retirado;
    public $idPredio;
    public $descricao;

    function __construct($idChave, $situacao, $matricula, $nome, $retirado, $idPredio, $descricao){
        $this->idChave = $idChave;
        $this->situacao = $situacao;
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->retirado = $retirado;
        $this->idPredio = $idPredio;
        $this->descricao = $descricao;
    }

}