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
			<div class="login mt-65">
				<div class="row br-1">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<ul id = "myTab" class = "nav nav-tabs mt-10">
						   <li class = "active"> <a href = "#login_tab" data-toggle = "tab"> Login </a></li>
						   <li> <a href = "#signup_tab" data-toggle = "tab"> Signup </a></li>
						</ul>

						<div id = "myTabContent" class = "tab-content">

						   <div class="tab-pane fade in active" id="login_tab">
								<div class="form-group">
									<div class="input-group mt-10">
										<div class="input-group-addon"><i class="fa fa-user"></i></div>
										<input type="text" class="form-control" id="username" name="username" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mt-10">
										<div class="input-group-addon"><i class="fa fa-key"></i></div>
										<input type="password" class="form-control" name="password" id="pwd" placeholder="Password">
									</div>
								</div>
								<button class="btn" id="login_btn">Login</button>
								<div class="form-group">
									Forgot Password ? <a href="javascript:void(0);"> Click here </a> to reset password
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
										<input type="text" class="form-control" id="email" name="email" placeholder="Email">
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
										<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
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
<script type="text/javascript">
	function checkemail(email){
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
			return 1;
		}
		return 0;
	}
    $(document).ready(function(){
		
	});
	$("#login_btn").on('click',function(){
		$(".login .text-danger").remove();
		var text_error = '<span class="text-danger"> This field is required </span>',error=0;
		if($('#username').val() == ""){$('#username').parent().parent().append(text_error);error++;}
		if($('#pwd').val() == ""){$('#pwd').parent().parent().append(text_error);error++;}
		if(error == 0){
			$.ajax({
				url:'<?php echo $prefix;?>/home/login_check',
				type:'POST',
				data:{'username':$('#username').val(),'password':$('#pwd').val()},
				dataType:'JSON'
			}).success(function(data){
				alert(data);
			});;
		}
	});
	$("#register_btn").on('click',function(){
		//Validations
		$(".login .text-danger").remove();
		var text_error = '<span class="text-danger"> This field is required </span>',error=0;
		$("#signup_tab .form-control").each(function(){if($(this).val() == ""){$(this).parent().parent().append(text_error);error++;}});
		if(!checkemail($("#email").val()) && $("#email").val() != ""){$("#email").parent().parent().append('<span class="text-danger"> Invalid email </span>');error++;}
		if($("#repassword").val() != $("#password").val() && $("#password").val() != ""){	$("#repassword").parent().parent().append('<span class="text-danger"> Password not matched </span>');error++;}
		if($("#password").val().length < 7 && $("#password").val() != ""){$("#password").parent().parent().append('<span class="text-danger"> This field should contain 6 characters minimum </span>');error++;}
		
		if(error == 0){
			$.ajax({
				url:'<?php echo $prefix;?>/home/register',
				type:'POST',
				data:{'name':$('#name').val(),'email':$('#email').val(),'password':$('#password').val(),'repassword':$('#repassword').val(),'phone':$('#phone').val()},
				dataType:'JSON'
			}).success(function(data){
				alert(data);
			});;
		}
	});
</script>
	
</body>
</html>