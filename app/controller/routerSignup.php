<?php

/*
 * Questo route reindirizza al form di registrazione
 */
$app->get ( '/signup', function () use($app) {
	$app->render ( 'signup.twig', array (
			'app' => $app 
	) );
} )->name ( "Sign up" );

/*
 * Questo route reindirizza al messaggio di avvenuta registrazione
 */
$app->get ( '/signup/add', function () use($app) {
	$app->render ( 'emailConfirm.twig', array (
			'app' => $app 
	) );
} )->name ( "SignupAdd" );

/**
 * Questo route compatta le informazioni in arrivo dal form da cui è richiamato,
 * le invia ad una classe dedita all'aggiunta su database
 */
$app->post ( '/signup/add', function () use($app) {
	$request = $app->request ();
	$postVars = $request->post ();
	$url = $request->getUrl () . $app->urlFor( "UserAdd" );
	
	array_walk_recursive ( $postVars, function (&$value) {
		$value = utf8_encode ( $value );
	} );
	
	$response = \Httpful\Request::post($url)	// Build a POST request...
	->sendsJson ()								// tell it we're sending (Content-Type) JSON...
	->body ( json_encode ( $postVars ) )		// attach a body/payload...
	->send (); 									// and finally, fire that thing off!
	           
	// Analizziamo la risposta alla nostra richiesta alle API
	$body = $response->body;
	$feed = json_decode ( $body );
	
	//reindirizzo al messaggio di invio email
	$app->redirect($app->urlFor("SignupAdd"));
} )->name ( "SignupAddPost" );