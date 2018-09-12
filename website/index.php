<?php 

require_once("vendor/autoload.php");

// Estanciando classe que define Rotas
$app = new \Slim\Slim();

// Chamando namespece que define os templetes
// namespace
use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl",
    "cache_dir"     => "cache/"
);
Tpl::configure( $config );




// Pagina inicial
$app->get('/', function(){
	// echo "Home Page";
	/*echo json_encode(array(
		'date'=>date("Y-m-d H:i:s")	
		)
	);*/
	$tpl = new Tpl;
	// $tpl->assign( "page2", "page2.html" );
	// $tpl->assign( "version", PHP_VERSION );
	// draw the template (Gerando o templete)
	$tpl->draw( "index" );
});

// Crinado Rotas
$app->get('/:name', function ($name) {
    	/*$tpl = new Tpl;
    	$tpl->assign("name", $name );
    	$tpl->draw( "teste.html" );*/
    	echo "Hello, " . $name;
	}
);

$app->run();


 ?>