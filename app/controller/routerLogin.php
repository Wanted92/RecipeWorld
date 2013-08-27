<?php

/*
 * Questo route reindirizza al form di login
*/
	$app->get ( '/login', function () use($app) {
	$app->render ( 'login.twig', array (
			'app' => $app 
	) );
} )->name ( "Login" );


/*
* Questo route reindirizza alle operazioni di background del login
*/
$app->post ( '/login/loginPost', function () use($app) {
	$request = $app->request ();
	$postVars = $request->post ();
	$url = $request->getUrl () . $app->urlFor( "LoginFeed" );
	
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
} )->name ( "LoginPost" );