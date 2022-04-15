<?php

class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairo;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }
}