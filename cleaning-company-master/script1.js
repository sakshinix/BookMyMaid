<script type="text/javascript" src="js/js/jquery.min.js"></script>
<script type="text/javascript" src="js/js/jquery.validate.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$("#LoginForm").validate({
		rules:{
			username:"required",
			email:{
				required:true,
				email:true
				},
			   password:"required"
		},
		messages:{
			
			username:"Please enter valid username",
			email:{
				required:"Please enter email",
				email:"Please enter valid email"
				
			},
			password:"Please enter password"
		};
		submitHandler:function(form){
			alert("Data is processing!");
			form.submit();
			
		}
		
	
	});
});
</script>