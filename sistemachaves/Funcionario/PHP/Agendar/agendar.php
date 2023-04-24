<?php
class AgendarE{
    public $idChave;
    public $situacao;
    public $agendado;
    public $idPredio;
    public $descricao;

    function __construct($idChave, $situacao, $agendado, $idPredio, $descricao){
        $this-> idChave = $idChave;
        $this->situacao = $situacao;
        $this->agendado = $agendado;
        $this->idPredio = $idPredio;
        $this->descricao = $descricao;
    }

    

}