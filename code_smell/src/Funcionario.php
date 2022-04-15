<?php

class Funcionario
{
    // Os atributos cpf e nome estao duplicados na classe Titular...
    private string $cpf;
    private string $nome;
    private string $cargo;

    public function __construct(string $nome, string $cpf, string $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }
}