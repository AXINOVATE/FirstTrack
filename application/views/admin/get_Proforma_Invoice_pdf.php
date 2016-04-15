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
	<link href="<?php echo $assetsPath;?>/css/custom.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $assetsPath;?>/css/bootstrap-switch.min.css" type="text/css" rel="stylesheet">	
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/css/select2.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $assetsPath; ?>/plugin/file-upload/css/jquery.fileupload.css" type="text/css" />
	<style type="text/css">
        *
        {
            margin:0;
            padding:0;
            font-family:Arial;
            font-size:10pt;
            color:#000;
        }
        body
        {
            width:100%;
            font-family:Arial;
            font-size:10pt;
            margin:0;
            padding:0;
        }
         
        p
        {
            margin:0;
            padding:0;
        }
         
        #wrapper
        {
            width:180mm;
            margin:0 15mm;
        }
         
        .page
        {
            height:297mm;
            width:210mm;
            page-break-after:always;
        }
 
        table
        {
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
             
            border-spacing:0;
            border-collapse: collapse; 
             
        }
         
        table td 
        {
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding: 2mm;
        }
         
        table.heading
        {
            height:50mm;
        }
         
        h1.heading
        {
            font-size:14pt;
            color:#000;
            font-weight:normal;
        }
         
        h2.heading
        {
            font-size:9pt;
            color:#000;
            font-weight:normal;
        }
         
        hr
        {
            color:#ccc;
            background:#ccc;
        }
         
        #invoice_body
        {
            height: 149mm;
        }
         
        #invoice_body , #invoice_total
        {   
            width:100%;
        }
        #invoice_body table , #invoice_total table
        {
            width:100%;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
     
            border-spacing:0;
            border-collapse: collapse; 
             
            margin-top:5mm;
        }
         
        #invoice_body table td , #invoice_total table td
        {
            text-align:center;
            font-size:9pt;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding:2mm 0;
        }
         
        #invoice_body table td.mono  , #invoice_total table td.mono
        {
            font-family:monospace;
            text-align:right;
            padding-right:3mm;
            font-size:10pt;
        }
         
        #footer
        {   
            width:180mm;
            margin:0 15mm;
            padding-bottom:3mm;
        }
        #footer table
        {
            width:100%;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
             
            background:#eee;
             
            border-spacing:0;
            border-collapse: collapse; 
        }
        #footer table td
        {
            width:25%;
            text-align:center;
            font-size:9pt;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }
		.mt-condition li{
			 padding-bottom:3mm;
		}
    
	</style>
</head>
<body>
	<!-- Header starts here -->
	<div id="wrapper">
	<table class="" style="width:100%;">
		<tr>
			
		</tr>
		<tr><center>
			<td style="width:20mm;border-right:none;padding-left:30px;margin-top:-5px;background-color:#337ab7;">
				<img width="45%" height="10%" src="<?php echo $assetsPath;?>/images/logo.png" alt="logo"></img>				
			</td>
			<td style="width:80mm;">
			<center>	<h1 class="heading">NAYAGAADI</h1></center>
				<h2 class="heading">
					NO 14 ,SLN ROAD ,BANGALORE-560027<br />
					Website : http://www.nayagaadi.com/<br />
					E-mail : info@nayagaadi.com<br />
					Phone : +919900151719
				</h2>
			</td></center>
		</tr>
	</table>
	</div>
	<!-- Header ends here -->
	
	<!-- Body content starts here -->
	
	
	<div id="wrapper">
     
    <p style="text-align:center; font-weight:bold; padding-top:5mm;">INVOICE</p>
    <br />
    <table class="heading" style="width:100%;">
        <tr>
            <td style="width:80mm;">
                <h1 class="heading"> Name :<?php echo $proformaInvoice[0]['fullname'];?></h1>
                <h2 class="heading">                    
                    Phone :<?php echo $proformaInvoice[0]['phone'];?> <br />
                    Email ID :<?php echo $proformaInvoice[0]['emailID'];?> <br />                     
                   Address : <br/>
				   <?php echo $proformaInvoice[0]['address'];?> 
                </h2>
            </td>
            <td rowspan="2" valign="top" align="right" style="padding:3mm;">
                <table>
                    <tr><td>Invoice No : </td><td><?php echo $proformaInvoice[0]['billNo'];?></td></tr>
                    <tr><td>Dated : </td><td><?php echo date('D-M-Y',strtotime($proformaInvoice[0]['invoiceDate']));?></td></tr> 
                    <tr><td>Currency : </td><td>IND</td></tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
				<h5>Delar Detail</h5>
                 <h6 class="heading">    
					Name :<?php echo $proformaInvoice[0]['firstName'];?> <br />
					LastName :<?php echo $proformaInvoice[0]['lastName'];?> <br />
                    Phone :<?php echo $proformaInvoice[0]['dealerPhone'];?> <br />                                      
                    Address : <br/>
				   <?php echo $proformaInvoice[0]['addressLine1'];?> </br>
				   <?php echo $proformaInvoice[0]['addressLine2'];?> <br/>
				   PinCode<?php echo $proformaInvoice[0]['zipCode'];?>				   
                </h6>
            </td>
        </tr>
    </table>
    <div id="content">
        <div id="invoice_body">
            <table>
            <tr style="background:#eee;">
                <td style="width:8%;"><b>Sl. No.</b></td>
                <td><b>Description</b></td>
                <td style="width:15%;"><b>Quantity</b></td>
                <td style="width:15%;"><b>Rate</b></td>
                <td style="width:15%;"><b>Total</b></td>
            </tr>
            </table>
            <table>
            <tr>
                <td style="width:8%;">1</td>
                <td style="text-align:left; padding-left:10px;"><pre><?php echo $proformaInvoice[0]['productName'];?> </pre></td>
                <td class="mono" style="width:15%;">1</td><td style="width:15%;" class="mono"><pre><?php echo $proformaInvoice[0]['exShowroomPrice'];?> </pre></td>
                <td style="width:15%;" class="mono"><pre><?php echo $proformaInvoice[0]['exShowroomPrice'];?> </pre></td>
            </tr>         
            <tr>
                <td colspan="3"></td>
                <td></td>
                <td></td>
            </tr>
             
            <tr>
                <td colspan="3"></td>
                <td>Total :</td>
                <td class="mono"><pre><?php echo $proformaInvoice[0]['exShowroomPrice'];?> </pre></td>
            </tr>
        </table>
        </div>       
        <table style="width:100%; height:35mm;">
            <tr>
                <td style="width:65%;" valign="top">
                    Payment Information :<br />
                    Please make cheque payments payable to : <br />
                    <b>ABC Corp</b>
                    <br /><br />
                    The Invoice is payable within 7 days of issue.<br /><br />
                </td>
                <td>
                <div id="box">
                    E &amp; O.E.<br />
                    For ABC Corp<br /><br /><br /><br />
                    Authorised Signatory
                </div>
                </td>
            </tr>
        </table>
    </div>
     
    <br />
     <table class="" style="width:100%;border:none;">
		<tr style="border:none;"><center>
			<td style="width:80mm;border:none;">
			<center>	<h1 class="heading">TERMS AND CONDITION</h1></center>
				
			</td></center>
		</tr></center>
		<tr style="border:none;" >
			<td style="border:none;">
				<ol class="mt-condition" style="margin-bottom:10px">
				  <li style="margin-bottom:10px">The content of the pages of this website is for your general information and use only. It is subject to change without notice.</li>
				  <li style="margin-bottom:10px">This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties: [insert list of information].</li>
				  <li>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li>
				  <li>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li>
				  <li>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li>
				  <li>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li>
				  <li>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li>
				</ol>  

			</td>
		</tr>
	</table>
    </div>
		
	
		
<script src="<?php echo $assetsPath; ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo $assetsPath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
	<script>
	</script>
</body>
</html>
