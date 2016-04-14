<?php

namespace Classes;


class Biblioteca
{

	public $nome;
	public $endereco;
	public $livros;

	public function __construct($nome,$endereco,$livros)
	{
		$this->setNome($nome);
		$this->setEndereco($endereco);
		$this->setLivros($livros);
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
	
	public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getLivros()
    {
        return $this->livros;
    }

    public function setLivros($livros)
    {
        $this->livros = $livros;

        return $this;
    }
}