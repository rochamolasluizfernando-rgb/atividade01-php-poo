<?php

class Planta
{
    private $nome;
    private $especie;
    private $aguaPorDia;

    public function __construct(
        string $nome,
        string $especie,
        float $aguaPorDia
    ) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->aguaPorDia = $aguaPorDia;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEspecie(): string
    {
        return $this->especie;
    }

    public function getAguaPorDia(): float
    {
        return $this->aguaPorDia;
    }

    public function calcularAguaSemanal(): float
    {
        return $this->aguaPorDia * 7;
    }
}