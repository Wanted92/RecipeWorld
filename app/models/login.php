<?php
$app->post ( '/api/login', function () use($app) {
	echo 'Ciaoooooooooooooooooooooooooooooooooooooo';
	$json = $app->request ()->getBody ();
	$user = json_decode ( $json );

	array_walk_recursive ( $user, function (&$value) {
		$value = utf8_decode ( $value );
	} );

$db = $conn->RecipeWorld;
$utenti = $db->users;
	if($utenti->findOne(array("name" => $user['name'], "password" => $user['password']))){
		session_cache_limiter(false);
		session_start();
		$app->redirect(app.urlFor("Hf"));
	}
	else{
		echo 'Your data are wrong!';
	}

} )->name ("LoginFeed");