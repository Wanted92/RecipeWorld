<?php

	require_once('../../../vendor/autoload.php');

	use Respect\Validation\Validator as v;

	$nameValidator = v::alpha()->length(1,20);
	$surnameValidator = v::alpha()->length(1,20);
	$usernameValidator = v::alnum()->length(1,20);
	$emailValidator = v::email();
	$passwordValidator = v::alnum()->length(8,20);
	$countryValidator = v::alpha()->length(1,20);
	
	
	if(isset($_POST)){
		$keys = array_keys($_POST);
		
			switch($keys[0]){
				case "name_":{
							$check = $nameValidator->validate($_POST['name_']);
							echo $check;
							break;
				}
				case "surname_":{
							$check = $surnameValidator->validate($_POST['surname_']);
							echo $check;
							break;
				}
				case "username_":{
							$check = $usernameValidator->validate($_POST['username_']);
							echo $check;
							break;
				}
				case "email_":{
							$check = $emailValidator->validate($_POST['email_']);
							echo $check;
							break;
				}
				case "password_":{
							$check = $passwordValidator->validate($_POST['password_']);
							echo $check;
							break;
				}
				/*case "password_check_":{
							$check = false;
							if($_POST['password_check_'] == $password){
								$check = true;
							}
							echo $check;
							break;
				}*/
				case "born_date_":{
						echo 'Ottimo cognome';
						break;
				}
				case "country_":{
							$check = $countryValidator->validate($_POST['country_']);
							echo $check;
						break;
				}
				default: break;
			}
	}