<?php

class Planta
{
    private string $nome;
    private string $especie;
    private float $aguaPorDia;

    public function __construct(
        string $nome,
        string $especie,
        float $aguaPorDia
    ) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->aguaPorDia = $aguaPorDia;
    }

    // GETTERS
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

    // SETTERS
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEspecie(string $especie): void
    {
        $this->especie = $especie;
    }

    public function setAguaPorDia(float $aguaPorDia): void
    {
        $this->aguaPorDia = $aguaPorDia;
    }

    // MÉTODO
    public function calcularAguaSemanal(): float
    {
        return $this->aguaPorDia * 7;
    }
}