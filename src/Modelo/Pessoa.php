<?php

namespace Modelo;

class Pessoa
{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome); // se nao for valido o programa eh encerrado
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNome($nome): void
    {
        if(strlen($nome) < 4) {
            echo "Nome precisa ter pelo menos 4 caracteres." . PHP_EOL;
            exit();
        }
    }

}