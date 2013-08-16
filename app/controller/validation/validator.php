<?php
	
	use Respect\Validation\Validator as v;
	$nomeValidator = v::string()->notEmpty();
	/*$nameValidator = Respect\Validation\Validator::alpha()->length(1,20);
	/*$surnameValidator = v::alpha()->length(1,20);
	$usernameValidator = v::alnum()->length(1,20);
	$emailValidator = v::email();
	$passwordValidator = v::alnum()->length(8,20);*/
	
	
	if(isset($_POST)){
		$keys = array_keys($_POST);
			switch($keys[0]){
				case "name_":{
							
							break;
				}
				case "surname_":{
							echo 'Ottimo cognome';
							break;
				}
				case "username_":{
						echo 'Ottimo username';
						break;
				}
				case "email_":{
						echo 'Ottimo cognome';
						break;
				}
				case "password_":{
						echo 'Ottimo cognome';
						break;
				}
				case "password_check_":{
						echo 'Ottimo cognome';
						break;
				}
				case "born_date_":{
						echo 'Ottimo cognome';
						break;
				}
				case "country_":{
						echo 'Ottimo cognome';
						break;
				}
				default: break;
			}
	}