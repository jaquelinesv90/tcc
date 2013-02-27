<?php

// Novo Produto
$app->get('/produto/:id_produto', function($idProduto) use ($app, $db) {
	$produto = new Produto();



	if ( $idProduto == 'novo' ) {

		$categorias = new Categoria();
		$unidades = new Unidade();

		$app->render('/produto/NovoProduto.php', array(
			'template' => array(
				'titulo' => 'Cadastrar Novo Produto'
			),
			'content' => array(
				'title' => 'Novo Produto'
			),
			'categorias' => $categorias->verCategorias(),
			'unidades' => $unidades->verUnidades()
		));

	}
	else {
		try {
			$produto = $produto->verProduto( (int) $idProduto );
		}
		catch ( Exception $e ) {
			$app->flash('error', $e->getMessage());
		}

		$app->render('/produto/VerProduto.php', array(
			'produto' => $produto,
			'template' => array(
				'titulo' => 'teste'
			),
			'content' => array(
				'title' => 'Editar Produto'
			)
		));
	}


});

$app->post('/produto', function() use($app) {

	$params = (object)$app->request()->post();

	$produto = new Produto();

	if ( $produto->verificaProdutoCodigoBarras($params->CodigoBarrasProduto) ) {
		echo 'existe';
	}
	else {
		$produto->NovoProduto($params);
	}
});
