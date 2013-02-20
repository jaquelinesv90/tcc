<?php


class Produto {

	// Atributos
	private $idProduto;
	private $descricaoProduto;
	private $valorVendaProduto;
	private $codigoBarrasProduto;

	// Construtor - Proposta
	public function __construct($idProduto, $descricaoProduto, $valorVendaProduto, $codigoBarrasProduto, $tipoUnidade, $cateogira)
	{
		// Se id do produto for nulo, ele faz um novo cadastro
		if ( is_null($idProduto) ) {
			$this->novoProduto($descricaoProduto, $valorVendaProduto, $codigoBarrasProduto, $tipoUnidade, $cateogira);
		}
		// Se não for, ele identifica que é uma atualização de produto
		else {
			$this->atualizarProduto($idProduto, $descricaoProduto, $valorVendaProduto, $codigoBarrasProduto, $tipoUnidade, $cateogira);
		}
	}


	// Métodos
	public function verProduto($idProduto)
	{

	}

	public function novoProduto($descricaoProduto, $valorVendaProduto, $codigoBarrasProduto, $tipoUnidade, $cateogira)
	{
		// Utilizaria assim...
		$descricaoProduto;
		$valorVendaProduto;
	}

	public function novoProduto($objetoProduto)
	{
		// Utilizaria assim...
		$objetoProduto->idProduto;
		$objetoProduto->descricaoProduto;
	}

	public function excluirProduto($idProduto)
	{

	}

	public function verEstoqueProduto($idProduto)
	{

	}

	public function verProdutosPorUnidade($idUnidade)
	{

	}

	public function verProdutosPorCategoria($idCategoria)
	{

	}

	public function atualizarProduto($idProduto, $descricaoProduto, $valorVendaProduto, $codigoBarrasProduto, $tipoUnidade, $cateogira)
	{

	}

}