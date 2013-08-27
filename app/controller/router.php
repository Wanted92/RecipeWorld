<?php
	//Home page	
	$app->get('/', function () use($app){
		$app->render('base.twig', array(
			'app' => $app
	));
	})->name("Homepage");
	
	require 'app/controller/routerSignup.php';
	require 'app/controller/routerLogin.php';
	require 'app/models/user.php';
	require 'app/models/login.php';