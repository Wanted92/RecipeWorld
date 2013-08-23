<?php

	require_once('../../../vendor/autoload.php');

	use Respect\Validation\Validator as v;

	//Validation rules
	$nameValidator = v::alpha()->notEmpty()->length(1,21);
	$surnameValidator = v::alpha()->notEmpty()->length(1,21);
	$usernameValidator = v::alnum()->notEmpty()->length(1,21);
	$emailValidator = v::notEmpty()->email();
	$passwordValidator = v::alnum()->notEmpty()->length(9,21);
	$countryValidator = v::alpha()->notEmpty()->length(1,21);
	$dateValidator = v::date();
	
	// Split of rules to be used
	if(isset($_POST)){
		$keys = array_keys($_POST);
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
							echo $check;
							break;
				}
				case "email_":{
							$check = $emailValidator->validate(trim($_POST['email_']));
							echo $check;
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