<?php

/**
 * Configs, variaveis e constantes
 */
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_DATABASE', 'tcc');

/**
 * Requires e includes de bibliotecas, etc
 */
require_once 'vendor/autoload.php';
require_once 'application/helpers/CustomView.php';


/**
 * Namespaces
 */
use Slim\Slim;
use idiorm\idiorm;

/**
 * Configuração do banco de dados
 * Tudo relacionando os banco deve entrar neste bloco de try/catch
 */
try {
	/**
	 * Conecta com o banco, passando qual o driver (Mysql), host, user e pass e a base da dados
	 */
	ORM::configure( DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_DATABASE ); // Conexão
	ORM::configure(array(
		'username' => DB_USER, // Nome de usuário do banco
		'password' => DB_PASS, // Senha do usuário do banco
		'driver_options' => array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // Converte o resultado para utf-8
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ // Todos os resultados retornaram em object
		)
	));
	/**
	 * Indica qual é a PK de cada tabela !important
	 */
	ORM::configure('id_column_overrides', array(
		'usuarios' => 'IDUsuario',
		'perfis' => 'IDPerfil'
	));
}
catch ( PDOException $e ) {
	echo $e->getMessage();
	exit;
}


/**
 * Retorna os dados do banco
 * @var object
 */
$db = ORM::get_db();

/**
 * Instancia de objetos
 */
// View
$view = new CustomView();

// Slim Framework
$app = new Slim(array(
	'view' => $view,
	'templates.path' => './application/views'
));

/**
 * Routes
 */
// Login
$app->get('/usuario/:id_usuario', function($id_usuario) use ($app, $db) {
	// Procura o usuario na base
	$user = ORM::for_table('usuarios')->where('IDUsuario', $id_usuario)->find_one();

	if ( $user ) {
		echo $user->NomeUsuario;
	}
	else {
		echo 'Usuário não encontrado';
	}
});

/**
 * Run app, run!
 */
$app->run();