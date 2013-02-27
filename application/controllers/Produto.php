<?php

class Produto {

	// Atributos
	private $idProduto;
	private $descricaoProduto;
	private $valorVendaProduto;
	private $codigoBarrasProduto;


	public function __construct($produto = null)
	{
		if ( !is_null($produto) ) {
			// Se id do produto for nulo, ele faz um novo cadastro
			if ( is_null($produto->idProduto) ) {
				$this->novoProduto($produto);
			}
			// Se não for, ele identifica que é uma atualização de produto
			else {
				$this->atualizarProduto($produto);
			}
		}

		return $this;
	}


	/**
	 * Métodos
	 */

	public function verificaProduto($idProduto) {

		if ( !is_int($idProduto) ) {
			throw new Exception('O ID do Produto deve ser um número inteiro.');
		}

		return (ORM::for_table('produtos')->where('IDProduto', $idProduto)->count() > 0);
	}

	public function verProduto($idProduto)
	{
		if ( $this->verificaProduto($idProduto) ) {
			return ORM::for_table('produtos')->where('IDProduto', $idProduto)->find_one();
		}
	}

	public function verificaProdutoCodigoBarras($codigo) {
		return (ORM::for_table('produtos')->where('CodigoBarrasProduto', $codigo)->count() > 0);
	}

	public function novoProduto($produto)
	{
		$new = ORM::for_table('produtos')->create();
		$new->NomeProduto = $produto->NomeProduto;
		$new->CodigoBarrasProduto = $produto->CodigoBarrasProduto;
		$new->ValorVendaProduto = $produto->ValorVendaProduto;
		$new->DescricaoProduto = $produto->descProduto;
		$new->IDCategoria = $produto->IDCategoria;
		$new->IDUnidade = $produto->IDUnidade;
		$new->save();

		return true;
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

	public function atualizarProduto($produto)
	{

	}

}