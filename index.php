<?php

/**
 * Configs, variaveis e constantes
 */
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_DATABASE', 'acougue');

/**
 * Requires e includes de bibliotecas, etc
 */
require 'vendor/autoload.php';


/**
 * Namespaces
 */
use Slim\Slim;
use Slim\Extras;
use idiorm\idiorm;
use Mustache\Mustache;

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
		'perfis' => 'IDPerfil',
		'produtos' => 'IDProduto'
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

/**
 * Configuração da view e layoyts
 */
$view = new \Slim\Extras\Views\Mustache();

// Define o caminho de onde o mustache está alocado
\Slim\Extras\Views\Mustache::$mustacheDirectory = 'vendor/mustache/mustache/src/Mustache';

// Valores padrões para as templates
$view->appendData(array(
	'template' => array(
		'titulo' => 'WebSystems TI'
	)
));

// Slim Framework
$app = new Slim(array(
	'templates.path' => './application/views',
	'view' => $view
));

$app->add(new \Slim\Middleware\SessionCookie(array(
	'expires' => '60 minutes',
	'path' => '/',
	'domain' => null,
	'secure' => false,
	'httponly' => false,
	'name' => 'W3BS!S!T3MS#',
	'secret' => 'b6e7fe44b10c445cfd30aebe852412f9fffd82c3',
	'cipher' => MCRYPT_RIJNDAEL_256,
	'cipher_mode' => MCRYPT_MODE_CBC
)));


/**
 * Routes
 */

require_once './application/routes/ProdutoRoute.php';

/**
 * Run app, run!
 */
$app->run();