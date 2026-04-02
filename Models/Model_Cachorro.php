<?php

class Model_Cachorro
{
    private $nome;
    private $raca;
    private $porte;

    public function __construct($nome, $raca, $porte)
    {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->porte = $porte;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getRaca()
    {
        return $this->raca;
    }

    public function getPorte()
    {
        return $this->porte;
    }
}