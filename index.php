<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Wenesley\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page = new Page();
	$page->setTpl("index");

	/*testes desta classe
	$sql = new Wenesley\DB\Sql();
	$results = $sql->select("SELECT * FROM tb_users");

	echo json_encode($results);
	*/
    
	//echo "OK";

});

$app->run();

 ?>