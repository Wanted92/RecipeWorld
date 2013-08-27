<?php
	// Creare un nuovo utente
	$app->post ( '/api/user/add', function () use($app) {
		$json = $app->request ()->getBody ();
		$user = json_decode ( $json );
		
		// Aggiungo lo user al database
		$conn = new Mongo ();
		if ($conn) {
			// selezionato il database
			$db = $conn->RecipeWorld;
			
			// selezionare la collezione
			$utenti = $db->users;
			// aggiunta di un documento
			
			$result = $utenti->insert ( $user );
			
			exit ( '{"successo": "true"}' );
		}
	} )->name ("UserAdd");