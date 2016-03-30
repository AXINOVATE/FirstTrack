<?php $prefix=$this->config->item('prefix'); ?>
<html>
	<head>
		<style>
			td{border: 1px solid #EEE; padding:7px 10px;text-align:center;}
		</style>
	</head>
	<body>
		<div>
			<div style=" background-color: #0a3151; padding: 10px;">
				<img src="<?php echo $prefix;?>/assets/images/logo.png">
			</div>
			<br>
			<table width="100%" style="border-spacing: 0px;">
				<tr style="background-color: #F7F7F7;">
					<td width="300px" style="border-right:0px;text-align:left;">Product Name</td>
					<td style="border-right:0px;">Quantity</td>
					<td style="border-right:0px;">Model</td>
					<td style="border-right:0px;">Unit Price</td>
					<td>Total</td>
				</tr>
				<tr>
					<td width="300px" style="border-top:0px;border-right:0px;padding-top:10px;text-align:left;">
						<b><?php if(isset($basic->productName))echo $basic->productName;?></b>
						<ul style="margin-top:2px;font-size:12px;margin-left:10px;">
							<li>Model : <?php if(isset($data->variantName))echo $data->variantName;?></li>
							<li>Engine : <?php if(isset($data->engineType))echo $data->engineType;?></li>
							<li>Displacement : <?php if(isset($data->displacement))echo $data->displacement.' CC';?></li>
							<li>Max Power : <?php if(isset($data->powerBHP))echo $data->powerBHP.' bhp @ '.$data->powerRPM.' rpm';?></li>
							<li>Mileage : <?php if(isset($data->mileage))echo $data->mileage.' kmpl';?></li>
							<li>Fuel : <?php if(isset($data->fueltype))echo $data->fueltype;?></li>
							<li>Transmission : <?php if(isset($data->transmission))echo $data->transmission;?></li>
						</ul>
					</td>
					
					<td style="border-top:0px;border-right:0px;"><?php if(isset($cart['qty']))echo $cart['qty'];?></td>
					<td style="border-top:0px;border-right:0px;"><?php if(isset($data->variantName))echo $data->variantName;?></td>
					<td style="border-top:0px;border-right:0px;">Rs <?php if(isset($cart['unitPrice']))echo $cart['unitPrice'];?></td>
					<td style="border-top:0px; ">Rs <?php if(isset($cart['unitPrice']))echo $cart['unitPrice']*$cart['qty'];?></td>
				</tr>
				<tr>
					<td colspan="4" style="border-top:0px;border-right:0px;text-align:right;">Sub Total</td>
					<td style="border-top:0px;text-align:left;">Rs <?php if(isset($cart['unitPrice']))echo $cart['unitPrice']*$cart['qty'];?></td>
				</tr>
				<tr>
					<td colspan="4" style="border-top:0px;border-right:0px;text-align:right;">Free Shipping</td>
					<td style="border-top:0px;text-align:left;">Rs <?php if(isset($cart['shippingPrice']))echo $cart['shippingPrice'];?></td>
				</tr>
				<tr>
					<td colspan="4" style="border-top:0px;border-right:0px;text-align:right;">Total</td>
					<td style="border-top:0px;text-align:left;">Rs <?php if(isset($cart['totalPrice']))echo $cart['totalPrice'];?> </td>
				</tr>
			</table>
		</div>			
	</body>
</html>