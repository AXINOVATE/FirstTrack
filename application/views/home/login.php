<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NayaGaadi.com</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/bootstrap-timepicker.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>/gritter/css/jquery.gritter.css">
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		
	</style>

</head>
<body>

	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	<div class="body-container">
		<div class="container">
			<h4 class="text-center <?php if($this->session->flashdata('registerStatus'))echo 'text-success';else echo 'text-danger';?>"><?php echo $this->session->flashdata('registerMessage');?></h4>
			<center><h2>Log in to NayaGaadi</h2></center>
			<div class="login mt-65">
				<div class="row br-1">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<ul id = "myTab" class = "nav nav-tabs mt-10">
						   <li class = "active"> <a href = "#login_tab" data-toggle = "tab"> Login (Existing User)</a></li>
						   <li> <a href = "#signup_tab" data-toggle = "tab"> Signup (New Users)</a></li>
						</ul>

						<div id = "myTabContent" class = "tab-content mb-20">

						   <div class="tab-pane fade in active" id="login_tab">
								<form class="form-horizontal" method="post" action="#" onsubmit="return false;" role="login" id="login_form">
									<div>
										<div class="input-group mt-10">
											<div class="input-group-addon"><i class="fa fa-user"></i></div>
											<input type="text" class="form-control" id="user_name" name="username" placeholder="Email">
										</div>
									</div>
									<div>
										<div class="input-group mt-10">
											<div class="input-group-addon"><i class="fa fa-key"></i></div>
											<input type="password" class="form-control" name="password" id="userpassword" placeholder="Password">
										</div>
									</div>
									<button class="btn" id="login_btn">Login</button>
									<div>
										Forgot Password ? <a href="#" id="forget_password"> Click here </a> to reset password
									</div>
								</form>
								<div id="forget_password_blog" style="display:none">
									<form class="form-horizontal " method="post" action="#" onsubmit="return false;" role="forget_password" id="forget_password_form">
										<div class="input-group mt-10">
											<div class="input-group-addon"><i class="fa fa-user"></i></div>
											<input type="text" class="form-control" id="forget_password_email" name="forget_password_email" placeholder="Email">
										</div>
										<button class="btn" id="reset_password">Reset Password</button>
										<div class="resultReset"></div>
									</form>
								</div>
						   </div>
						   
						   <div class="tab-pane fade" id="signup_tab">
								<div class="form-group">
									<div class="input-group mt-10">
										<div class="input-group-addon"><i class="fa fa-user"></i></div>
										<input type="text" class="form-control" id="name" name="name" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mt-10">
										<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
										<input type="text" class="form-control" id="userEmail" name="email" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mt-10">
										<div class="input-group-addon"><i class="fa fa-key"></i></div>
										<input type="password" class="form-control" name="password" id="password" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mt-10">
										<div class="input-group-addon"><i class="fa fa-key"></i></div>
										<input type="password" class="form-control" name="repassword" id="repassword" placeholder="Re enter password">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mt-10">
										<div class="input-group-addon"><i class="fa fa-phone"></i></div>
										<input type="text" class="form-control" name="phone" id="userPhone" placeholder="Phone">
									</div>
								</div>
								<button class="btn" id="register_btn">Signup</button>
						   </div>
						</div>

					</div>
					<div class="col-md-1 hide">
						<div class="or-middle">
							<span class="horizontal">
								<div class="or-circle">or </div>
							</span>
						</div>
					</div>
					<div class="col-md-5 hide">
						<div class="form-group mt-65">
							<a type="submit" href="#" name="go" class="social-btn facebook text-left" id="facebook_sign_in"><i class="fa fa-facebook icon-fb"></i> <span class="hidden-xs">Log in with</span> Facebook</a>
							<a href="#" type="submit" name="go" class="social-btn google text-left" id="google_sign_in"><i class="fa fa-google-plus icon-google"></i> <span class="hidden-xs">Log in with</span> Google</a> 
						</div>
					</div>
				</div>	
			</div>	
		</div>	
	</div>	
	<!-- Footer start -->
	<?php echo $footer; ?>
	<!-- Footer end -->
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/jquery.typeahead.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script type="text/javascript">
	function checkemail(email){
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
			return 1;
		}
		return 0;
	}
    $(document).ready(function(){
		$('.datepicker').datepicker({ format: 'yyyy-mm-dd' });
		$('.inpt-timepicker').timepicker();	
		$("#login_form").on('submit',function(){
			$("#login_btn").trigger('click');
		});
	});
	$("#login_btn").on('click',function(){
		$(".login .text-danger").remove();
		var text_error = '<span class="text-danger"> This field is required </span>',error=0;
		if($('#user_name').val() == ""){$('#user_name').parent().parent().append(text_error);error++;}
		if($('#userpassword').val() == ""){$('#userpassword').parent().parent().append(text_error);error++;}
		if(error == 0){
			$("#login_btn").html('Please wait... <i class="fa fa-spinner fa-pulse"></i>');
			$("#login_btn").attr('disabled','disabled');
			$.ajax({
				url:'<?php echo $prefix;?>/home/login_check',
				type:'POST',
				data:{'username':$('#user_name').val(),'password':$('#userpassword').val()},
				dataType:'JSON'
			}).success(function(data){
				$(".login .text-danger").remove();
				if(data.status){
					window.location.reload();
				}				
				else{
					$("#login_tab").prepend('<div class="text-danger mt-10">Invalid username or password </div>');
					$("#login_btn").html('Login');
					$("#login_btn").attr('disabled',false);
				}
			});
		}
	});
	$("#register_btn").on('click',function(){
		//Validations
		$(".login .text-danger").remove();
		var text_error = '<span class="text-danger"> This field is required </span>',error=0;
		$("#signup_tab .form-control").each(function(){if($(this).val() == ""){$(this).parent().parent().append(text_error);error++;}});
		if(!checkemail($("#userEmail").val()) && $("#userEmail").val() != ""){$("#userEmail").parent().parent().append('<span class="text-danger"> Invalid email </span>');error++;}
		if($("#repassword").val() != $("#password").val() && $("#password").val() != ""){	$("#repassword").parent().parent().append('<span class="text-danger"> Password not matched </span>');error++;}
		if($("#password").val().length < 7 && $("#password").val() != ""){$("#password").parent().parent().append('<span class="text-danger"> This field should contain 6 characters minimum </span>');error++;}
		
		if(error == 0){
			$("#register_btn").html('Please wait... <i class="fa fa-spinner fa-pulse"></i>');
			$("#register_btn").attr('disabled','disabled');
			$.ajax({
				url:'<?php echo $prefix;?>/home/register',
				type:'POST',
				data:{'name':$('#name').val(),'email':$('#userEmail').val(),'password':$('#password').val(),'repassword':$('#repassword').val(),'phone':$('#userPhone').val()},
				dataType:'JSON'
			}).success(function(data){
				if(data.message == 'DUPLICATE'){
					$("#userEmail").parent().parent().append('<span class="text-danger"> This email is already exists in system. Please try forgot password to retrive the password </span>');
					$("#register_btn").html('Signup');
					$("#register_btn").attr('disabled',false);
				}else{
					window.location.reload();
				}
				
			});
		}
	});
	$("#forget_password").click(function(){
		$("#forget_password_blog").show();
	});
	$("#reset_password").click(function(){
		var error=0;
		var text;
		$(".login .text-danger").remove();
		if(!checkemail($("#forget_password_email").val())){$("#forget_password_email").parent().parent().append('<span class="text-danger"> Invalid email </span>');error++;}
		if(error==0){
			var mail=$("#forget_password_email").val();
			$.ajax({
				url:'<?php echo $prefix;?>/home/resetPassword/FORGET/',
				data:{'mail':mail},
				type:'POST',
				dataType:'JSON'
			}).success(function(data){
				if(data.status=='Success'){
					text="<span class='text-danger' style='color:green;'>Email sent Successfully</span>";
				}else{
					text="<span class='text-danger'> Email does not exist</span>";
				}
				$(".resultReset").html(text);
			});
		}
	});
</script>
	
</body>
</html>