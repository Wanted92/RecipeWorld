<?php

	require_once('../../../vendor/autoload.php');
	require('../lib/smtp-validate-email.php');

	use Respect\Validation\Validator as v;

	//Validation rules
	$nameValidator = v::alpha()->notEmpty()->length(1,21);
	$surnameValidator = v::alpha()->notEmpty()->length(1,21);
	$usernameValidator = v::alnum()->notEmpty()->length(1,21);
	$emailValidator = v::notEmpty()->email();
	$domainValidator = v::domain();
	$passwordValidator = v::alnum()->notEmpty()->length(8,21);
	$countryValidator = v::alpha()->notEmpty()->length(1,21);
	$dateValidator = v::date();
	
	// Split of rules to be used, and call to MongoDB to prevent duplicate
	if(isset($_POST)){
		$keys = array_keys($_POST);
		$conn = new Mongo ();
		if ($conn) {
			$db = $conn->RecipeWorld;
			$utenti = $db->users;
			switch($keys[0]){
				case "name_":{
							$check = $nameValidator->validate(trim($_POST['name_']));
							echo $check;
							break;
				}
				case "surname_":{
							$check = $surnameValidator->validate(trim($_POST['surname_']));
							echo $check;
							break;
				}
				case "username_":{
							$check = $usernameValidator->validate(trim($_POST['username_']));
							$cursor = $utenti->findOne(array("username" => trim($_POST['username_'])));
							if($check && !$cursor)
								echo ('1');
							break;
				}
				case "email_":{
							$from = 'a-happy-camper@campspot.net'; // for SMTP FROM:<> command
							$email = trim($_POST['email_']);
							$validator = new SMTP_Validate_Email($email, $from);
							$check = $emailValidator->validate($email);
							$smtp_results = $validator->validate();
							$cursor = $utenti->findOne(array("email" => $email));
							if($smtp_results[$email] == true && $check && !$cursor){
								echo ('1'); 
							}
							break;
				}
				case "password_":{
							$check = $passwordValidator->validate(trim($_POST['password_']));
							echo $check;
							break;
				}
				
				case "born_date_":{
							$check = $dateValidator->validate(trim($_POST['born_date_']));
							echo $check;
							break;
				}
				case "country_":{
							$check = $countryValidator->validate(trim($_POST['country_']));
							echo $check;
							break;
				}
				default: break;
			}
	}
}