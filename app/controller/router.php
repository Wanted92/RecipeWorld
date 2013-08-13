<?php
	//Home page	
	$app->get('/', function () use($app){
		$app->render('base.twig', array(
			'app' => $app
	));
	})->name("Homepage");
	
	require 'app/controller/routerSignup.php';
	
	require 'app/models/user.php';