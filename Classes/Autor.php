<?php

namespace Classes;


class Autor
{
	public $codigo;
	public $nome;
	public $biografia;
	public $nascimento;

	public function __construct($codigo, $nome, $biografia, $nascimento)
	{
        $this->setCodigo($codigo);
		$this->setNome($nome);
		$this->setBiografia($biografia);
		$this->setNascimento($nascimento);
	}

	public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getBiografia()
    {
        return $this->biografia;
    }

    public function setBiografia($biografia)
    {
        $this->biografia = $biografia;

        return $this;
    }

    public function getNascimento()
    {
        return $this->nascimento;
    }

    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;

        return $this;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }
}