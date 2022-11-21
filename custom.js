
$(document).ready(function(){
	$(#username).blur(function(){
	var username =$($this).val();
	$.ajax({
		url:"checkuser.php",
		method:"POST",
		data:{
         username:username
		},
		datatype:"text",
		success:function(data){
			$(#userstatus).html(data);

		}

	});



	});

});