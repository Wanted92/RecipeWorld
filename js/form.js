$(document).ready(function(){
	$('#born_date').datepicker();

	$('#name').keyup(function(){
		$.ajax({
			type: "POST",
			url: "/app/controller/validation/validator.php",
			data:"name = " + $(this).val(),
			success: function(response){
				$("#feed_name").html(response);
			},
			error : function(){
				alert('Niente');
			}
		});
	});
	
	$('#surname').keyup(function(){
		$.ajax({
			type: "POST",
			url: "/app/controller/validation/validator.php",
			data:"surname = " + $(this).val(),
			success: function(response){
				$("#feed_surname").html(response);
			},
			error : function(){
				alert('Niente');
			}
		});
	});
	
	$('#username').keyup(function(){
		$.ajax({
			type: "POST",
			url: "/app/controller/validation/validator.php",
			data:"username = " + $(this).val(),
			success: function(response){
				$("#feed_username").html(response);
			},
			error : function(){
				alert('Niente');
			}
		});
	});
	
	$('#email').keyup(function(){
		$.ajax({
			type: "POST",
			url: "/app/controller/validation/validator.php",
			data:"email = " + $(this).val(),
			success: function(response){
				$("#feed_email").html(response);
			},
			error : function(){
				alert('Niente');
			}
		});
	});
	
	$('#password').keyup(function(){
		$.ajax({
			type: "POST",
			url: "/app/controller/validation/validator.php",
			data:"password = " + $(this).val(),
			success: function(response){
				$("#feed_password").html(response);
			},
			error : function(){
				alert('Niente');
			}
		});
	});
	
	$('#password_check').keyup(function(){
		$.ajax({
			type: "POST",
			url: "/app/controller/validation/validator.php",
			data:"password_check = " + $(this).val(),
			success: function(response){
				$("#feed_password_check").html(response);
			},
			error : function(){
				alert('Niente');
			}
		});
	});
	
	$('#born_date').keyup(function(){
		$.ajax({
			type: "POST",
			url: "/app/controller/validation/validator.php",
			data:"born_date = " + $(this).val(),
			success: function(response){
				$("#feed_born_date").html(response);
			},
			error : function(){
				alert('Niente');
			}
		});
	});
	
	$('#country').keyup(function(){
		$.ajax({
			type: "POST",
			url: "/app/controller/validation/validator.php",
			data:"country = " + $(this).val(),
			success: function(response){
				$("#feed_country").html(response);
			},
			error : function(){
				alert('Niente');
			}
		});
	});

});