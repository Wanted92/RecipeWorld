$(document).ready(function(){
	$('#born_date').datepicker({dateFormat: 'mm/dd/yy', showAnim:'fadeIn'});
	
});

/*
 * This function use an AJAX call to validate the field, it receive a response from server to able or unable the field
 */
function validate(elementID){
	var id = '#'+elementID;
		$.ajax({
			type: "POST",
			url: "/app/controller/validation/validator.php",
			data: elementID +" = " + $(id).val(),
			success: function(response){
				var feed = '#feed_'+elementID;
				$(id).removeClass('invalidate');
				if(response == 1){
					$(id).addClass('validate');
					$('#feed_'+elementID).text('');
				}else{
					$(id).addClass('invalidate');
					switch(elementID){
						case "name":{
							$('#feed_'+elementID).html('</br> First name is required. </br> First name accepted must be: A-Z a-z </br> No others simbols are accepted.');
							break;
							}
						case "surname":{
							$('#feed_'+elementID).html('</br> Surname is required. </br> Surname accepted must be: A-Z a-z </br> No others simbols are accepted.');
							break;
							}
						case "username":{
							$('#feed_'+elementID).html('</br> Username is required. </br> Username accepted must be: A-Z a-z </br> No others simbols are accepted.');
							break;
							}
						case "email":{
							$('#feed_'+elementID).html('</br> Email is required. </br> Email should look like an email address.');
							break;
							}
						case "password":{
							$('#feed_'+elementID).html('</br> Password is required. </br> Password must be long at least 8 characters.');
							break;
							}
						case "country":{
							$('#feed_'+elementID).html('</br> Country is required.');
							break;
							}
						default: break;
					}
				}
			},
			error : function(){
				alert('Ajax call don\'t work!');
			}
		});
}