<?php

/**
 * Index
 */
$app->get('/', function() use ($app) {

	// Chama a página
	$app->render('index/Login.php', array(
		'template' => array(
			'titulo' => 'WebSystems - Login'
		)
	));
});