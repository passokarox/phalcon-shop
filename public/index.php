<?php

error_reporting(E_ALL);

$di = new \Phalcon\DI\FactoryDefault();

//Registering a router
$di->set('router', function(){

	$router = new \Phalcon\Mvc\Router();

	$router->setDefaultModule("Shop");

	$router->add('/:controller/:action', array(
		'module' => 'Shop',
		'controller' => 1,
		'action' => 2,
	));

	$router->add("/login", array(
		'module' => 'Shop',
		'controller' => 'account\login',
		'action' => 1,
	));

	$router->add("/admin/products/:action", array(
		'module' => 'admin',
		'controller' => 'products',
		'action' => 1,
	));

	$router->add("/products/:action", array(
		'module' => 'Shop',
		'controller' => 'products',
		'action' => 1,
	));

	return $router;
});

//Registering a shared view component
$di->set('view', function() {
	$view = new \Phalcon\Mvc\View();
	$view->setViewsDir('../apps/common/views/');
        $view->registerEngines(array(
                ".volt" => 'Phalcon\Mvc\View\Engine\Volt'
            ));
	return $view;
});

$application = new \Phalcon\Mvc\Application();

//Pass the DI to the application
$application->setDI($di);

//Register the installed modules
$application->registerModules(array(
	'Shop' => array(
		'className' => 'Multiple\Shop\Module',
		'path' => '../apps/modules/shop/Module.php'
	),
	'Admin' => array(
		'className' => 'Multiple\Admin\Module',
		'path' => '../apps/modules/admin/Module.php'
	)
));

echo $application->handle()->getContent();
