<?php 
include 'header.php'; 
?>
<h2>Topics 01:- Check username availability</h2>

<div class="content">
<form action="" method="post">
	<table>
		<tr>
			<td>Useranme</td>
			<td>:</td>
			<td>
				<input type="text" name="username" id="username"  placeholder="Enter Your Username...">
			</td>
		</tr>
	</table>

</form>
</div>
<!-- <div id="userstatus"></div>
 -->
<?php include 'footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#username").blur(function(){
	var username =$(this).val();
	$.ajax({
		url:"checkuser.php",
		method:"POST",
		data:{
         username:username
		},
		datatype:"text",
		success: function(data) {
			alert(data)
		     // $(#result).html(html);
		}
	});



	});

});
</script>