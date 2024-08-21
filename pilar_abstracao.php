<?php

class Funcionario {
    // atributos
    public $nome=null;
    public $telefone=null;
    public $numFilhos=null;

    // funções e mérodos
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function getTelefone($telefone) {
        return $this->telefone;
    }

    function resumirCardFunc () {
        return "$this->nome  e ele possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($numFilhos) {
       return $this->numFilhos = $numFilhos;
    }

}

$y= new Funcionario();
$y->setNome('Japa');
$y->setNumFilhos(0);
echo $y->resumirCardFunc();
echo $y->getNome() . 'possui ' . $y->getNumFilhos() . 'filhos';





?>