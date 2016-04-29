<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome First Track</title>
	<link href="<?php echo $assetsPath;?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/style.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/admin_custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link href="<?php echo $assetsPath;?>/images/favicon.png" rel="icon" />
	<style type="text/css">
		.picture-color-edit >tr>td>img{text-align:center !important;}
		hr.style-eight {
					 height: 10px;
					  border: 1;
				  background: #F9D133;
		}

	</style>
</head>
<body>
	<!-- Header starts here -->
	<?php echo $header;?>
	<!-- Header ends here -->
	<!-- Body content starts here -->
	<div class="body-container">
		<section class="container">
			<form id="bank_form" method="POST" action="#" onSubmit="return false;">
				<h3>Bank Information  - <?php if(isset($details->firstName)){echo $details->firstName.' '.$details->lastName; }?></h3>
				<ul id="myTab" class="nav  nav-tabs1" role="tablist">
					<li role="presentation" class="product-panel-heading"><a href="<?php echo $prefix;?>/dealer/<?php echo $userID;?>">Information</a></li>
					<li role="presentation" class="active"><a href="#bank-info" aria-controls="profile" role="tab" data-toggle="tab">Bank Details </a></li>
				</ul>
				
				<div class="row">
					<input type="hidden" name="userID" value="<?php echo $userID;?>">
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Dealer Bank A/C Name</label>
						<input type="text" class="form-control" name="dealeracname" value="<?php if(isset($bank->dealerBankAccountName))echo $bank->dealerBankAccountName;?>" placeholder="Bank Name"/>
					</div>					
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Bank Name</label>
						<input type="text" class="form-control" name="bankName" value="<?php if(isset($bank->bankName))echo $bank->bankName;?>" placeholder="Bank Name"/>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Bank Account Number</label>
						<input type="text" class="form-control" value="<?php if(isset($bank->accountNumber))echo $bank->accountNumber;?>" name="accountNumber" placeholder="Bank Account Number"/>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Account Type</label>
						<select class="form-control select2" name="accountType" style="width:100%;">
							<option value="current" <?php if(isset($bank->accountType))if($bank->accountType == 'current')echo 'selected';?>>Current</option>
							<option value="savings" <?php if(isset($bank->accountType))if($bank->accountType == 'savings')echo 'selected';?>>Savings</option>
						</select>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>IFSC Code</label>
						<input type="text" class="form-control" value="<?php if(isset($bank->IFSC))echo $bank->IFSC;?>" name="IFSC" placeholder="IFSC Code">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Branch</label>
						<input type="text" class="form-control" value="<?php if(isset($bank->branch))echo $bank->branch;?>" name="branch" placeholder="Branch">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Dealer TIN</label>
						<input type="text" class="form-control" value="<?php if(isset($bank->TIN))echo $bank->TIN;?>" name="TIN" placeholder="Dealer TIN">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Dealer Service Tax Number</label>
						<input type="text" class="form-control" value="<?php if(isset($bank->PAN))echo $bank->PAN;?>" name="PAN" placeholder="Dealer Service Tax Number">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mb-10">
						<label>Dealer CIN</label>
						<input type="text" class="form-control" value="<?php if(isset($bank->CIN))echo $bank->CIN;?>" name="CIN" placeholder="Dealer CIN">
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<label>Dealer Address</label>
						<textarea type="text" rows="4" class="form-control" name="address" placeholder="Dealer Address"><?php if(isset($bank->address))echo $bank->address;?></textarea>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 mb-10">
						<label>Terms and Conditions</label>
						<textarea type="text" rows="8" class="form-control" name="termandcondition" placeholder="Terms and Conditions"><?php if(isset($bank->termandcondition))echo $bank->termandcondition;?></textarea>
					</div>
				</div>			
				<button class="btn btn-default btn-primary pull-right" id="dealer_update_btn">Update</button>
			</form>
		</section>
	</div>
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $assetsPath; ?>/js/bootstrap-tabcollapse.js"></script>
<script src="<?php echo $assetsPath; ?>/js/select2.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/scripts.js"></script>
<script  src="<?php echo $assetsPath; ?>/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>

	<script>
	$("#dealer_update_btn").on('click',function(){
		
		//alert('dfsdfsd');exit();
		//Validations
		$(".text-danger").remove();
		var text_error = '<span class="text-danger"> This field is required </span>',error=0;
		$("#bank_form .form-control").each(function(){if($(this).val() == ""){$(this).parent().append(text_error);error++;}});
		if(error == 0){
			$("#update_btn").html('Please wait... <i class="fa fa-spinner fa-pulse"></i>');
			$("#update_btn").attr('disabled','disabled');
			//alert('sfdfdsfs');exit();
			$.ajax({
				url:'<?php echo $prefix;?>/home/bank_update',
				type:'POST',
				data:$('#bank_form').serialize(),
				dataType:'JSON'
			}).success(function(data){				
				if(data.status == true){
					$.gritter.add({
						title: 'Success',
						text: 'Saved Successfully',
						class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					window.location.reload();
				}else{
				$.gritter.add({
					title: 'Failed',
					text: 'Failed To Save',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
				window.location.reload();
			}
				//window.location.reload();
			});
		}
	});
	</script>
</body>
</html>
