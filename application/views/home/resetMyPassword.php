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
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		
	</style>

</head>
<body>

	<!-- Body content starts here -->
	<div class="body-container">
		<div class="container">
			<center><h2>Reset password</h2></center>
			<div class="login mt-65">
				<div class="row br-1">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						   <div class="tab-pane fade in active" id="login_tab">
								<form class="form-horizontal" method="post" action="#" onsubmit="return false;" role="login" id="reset_form">
									<div>
										<div class="input-group mt-10">
											<div class="input-group-addon"><i class="fa fa-key"></i></div>
											<input type="password" class="form-control" id="password" name="password" placeholder="Password">
											<span class="passwordError"></span>
										</div>
									</div>
									<div>
										<div class="input-group mt-10">
											<div class="input-group-addon"><i class="fa fa-key"></i></div>
											<input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
											<span class="confirmPasswordError"></span>
										</div>
									</div>
									<button class="btn" id="reset_btn">Reset</button>
									<div class="resultReset"></div>
								</form>
						   </div>
					</div>
				</div>	
			</div>	
		</div>	
	</div>	
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php echo $assetsPath; ?>/js/xu-validation.js" type="text/javascript"></script>
<script type="text/javascript">
	function checkemail(email){
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
			return 1;
		}
		return 0;
	}
	$("#reset_btn").click(function(){
		var error=0;
		$(".login .text-danger").remove();
		var confirmPassword=$("#confirmPassword").val();
		var password=$("#password").val();
		if(password==''){
			text="<span class='text-danger'>Enter password</span>";
			$(".passwordError").html(text);
			error++;
		}
		if(confirmPassword==''){
			text="<span class='text-danger'>Enter password</span>";
			$(".confirmPasswordError").html(text);
			error++;
		}
		if(confirmPassword==password){
			error=0;
		}else{
			text="<span class='text-danger'> Mismatch password</span>";
			$(".resultReset").html(text);
			error++;
		}
		var text;
		if(error==0){
			$("#reset_btn").html('Please wait... <i class="fa fa-spinner fa-pulse"></i>');
			$("#reset_btn").attr('disabled','disabled');
			var vType='<?php echo $vType; ?>';
			var id='<?php echo $id; ?>';
			var password=$("#confirmPassword").val();
			$.ajax({
				url:'<?php echo $prefix;?>/home/resetPassword/'+vType,
				data:{'password':password,'id':id},
				type:'POST',
				dataType:'JSON'
			}).success(function(data){
				if(data.status=='Success'){
					text="<span class='text-danger' style='color:green;'>Reset Successfully <a href='<?php echo $prefix; ?>'>Click here to go home</a></span>";
				}else{
					text="<span class='text-danger' style='color:red;'>Try Again Later or Link Expired</span>";
				}
				$(".resultReset").html(text);
			});
		}
	});
</script>
	
</body>
</html>