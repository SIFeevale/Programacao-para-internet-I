<?php

namespace Classes;


class Livro
{
	public $autor;
	public $titulo;
	public $lancamento;
	public $editora;

	public function __construct($autor, $titulo, $lancamento, $editora)
	{
		$this->setAutor($autor);
		$this->setTitulo($titulo);
		$this->setLancamento($lancamento);
		$this->setEditora($editora);
	}

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getLancamento()
    {
        return $this->lancamento;
    }

    public function setLancamento($lancamento)
    {
        $this->lancamento = $lancamento;

        return $this;
    }

    public function getEditora()
    {
        return $this->editora;
    }

    public function setEditora($editora)
    {
        $this->editora = $editora;

        return $this;
    }


    /**
     * Gets the value of autor.
     *
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Sets the value of autor.
     *
     * @param mixed $autor the autor
     *
     * @return self
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }
}