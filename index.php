<?php

require_once( dirname(__FILE__) . DIRECTORY_SEPARATOR . 'autoload.php');

use Classes\Autor;
use Classes\Biblioteca;
use Classes\Livro;

$a1 = new Autor('1', 'Pedro Bandeira',  'Biografia de Pedro Bandeira',  '16/10/1971');
$a2 = new Autor('2', 'Monteiro Lobato', 'Biografia de Monteiro Lobato', '01/10/1912');
$a3 = new Autor('3', 'Sidney Sheldon',  'Biografia de Sidney Sheldon',  '09/02/1951');


$l1 = new Livro($a1, 'A droga da Obediência',     'nov/2005', 'Editora Abril');
$l2 = new Livro($a2, 'Sítio do Pica-pau Amarelo', 'jan/2008', 'Editora Abril');
$l3 = new Livro($a3, 'As Areias do Tempo',        'jan/2012', 'Editora Abril');
$l4 = new Livro($a3, 'O Reverso da Medalha',      'jan/2012', 'Editora Abril');
$l5 = new Livro($a1, 'A droga do Amor',           'jan/2012', 'Editora Abril');


$b1 = new Biblioteca('Biblioteca Municipal Monteiro Lobato', 'Avenida Bento Gonçalves 443, Novo Hamburgo - RS', [ $l1, $l2, $l3 ] );
$b2 = new Biblioteca('Biblioteca Municipal Monteiro Lobato', 'Avenida Brasil 4344, Rio de Janeiro - RJ', [ $l1, $l2, $l3, $l4, $l5 ] );

echo '<strong>Dados do Autor:</strong><br />';
// Obter dados do Autor atrávez da biblioteca
	echo $b2->livros[0]->autor->codigo . '<br />';
	echo $b2->livros[0]->autor->nome . '<br />';
	echo $b2->livros[0]->autor->biografia . '<br />';
	echo $b2->livros[0]->autor->nascimento . '<br />';
	echo '<br />';

// Obter dados do autor atravéz do Livro
	echo $l1->autor->codigo . '<br />';
	echo $l1->autor->nome . '<br />';
	echo $l1->autor->biografia . '<br />';
	echo $l1->autor->nascimento . '<br />';
	echo '<br />';

// Obter dados do autor diretamente do objeto autor
	echo $a1->codigo . '<br />';
	echo $a1->nome . '<br />';
	echo $a1->biografia . '<br />';
	echo $a1->nascimento . '<br />';


echo '<br /><hr><strong>Dados do Livro:</strong><br />';

// Obter dados do livro atravéz da Biblioteca
	echo $b2->livros[0]->titulo . '<br />';
	echo $b2->livros[0]->lancamento . '<br />';
	echo $b2->livros[0]->editora . '<br />';
	echo '<br />';


// Obter dados do livro diretamente no objeto livro
	echo $l1->titulo . '<br />';
	echo $l1->lancamento . '<br />';
	echo $l1->editora . '<br />';


// Obter dados da Biblioteca
echo '<br /><hr><strong>Dados da Biblioteca:</strong><br />';
	echo $b2->nome . '<br />';
	echo $b2->endereco . '<br />';






