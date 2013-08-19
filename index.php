<?php

	require_once 'vendor/autoload.php';
	// Instanzia con Twig
	$app = new \Slim\Slim(array(
			'view' => new \Slim\Views\Twig(),
			'templates.path' => './app/view/templates',
			
	));
	$view = $app->view();
	$view->parserOptions = array(
			'debug' => true,
			'cache' => dirname(__FILE__) . '/cache'
	);
	$view->parserExtensions = array(
			new \Slim\Views\TwigExtension(),
	);


	require 'app/controller/router.php';
	
	$app->run();