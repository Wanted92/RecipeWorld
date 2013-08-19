$(document).ready(function(){
	$('#born_date').datepicker();

	$('#name').keyup(function(){
		$.ajax({
			type: "POST",
			url: "/app/controller/validation/validator.php",
			data:"name = " + $(this).val(),
			success: function(response){
				$("#name").removeClass('invalidate');
				if(response){
					$("#name").addClass('validate');
					$('#feed_name').html(response);
				}else{
					$("#name").addClass('invalidate');
				}
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
				$("#surname").removeClass('invalidate');
				if(response == true){
					$("#surname").addClass('validate');
				}else{
					$("#surname").addClass('invalidate');
				}
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
				$("#username").removeClass('invalidate');
				if(response == true){
					$("#username").addClass('validate');
				}else{
					$("#username").addClass('invalidate');
				}
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
				$("#email").removeClass('invalidate');
				if(response == true){
					$("#email").addClass('validate');
				}else{
					$("#email").addClass('invalidate');
				}
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
				$("#password").removeClass('invalidate');
				if(response == true){
					$("#password").addClass('validate');
				}else{
					$("#password").addClass('invalidate');
				}
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
				$("#password_check").removeClass('invalidate');
				if(response == true){
					$("#password_check").addClass('validate');
				}else{
					$("#password_check").addClass('invalidate');
				}
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
				$("#born_date").removeClass('invalidate');
				if(response == true){
					$("#born_date").addClass('validate');
				}else{
					$("#born_date").addClass('invalidate');
				}
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
				$("#country").removeClass('invalidate');
				if(response == true){
					$("#country").addClass('validate');
				}else{
					$("#country").addClass('invalidate');
				}
			},
			error : function(){
				alert('Niente');
			}
		});
	});

});