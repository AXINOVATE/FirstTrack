<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix');
?>
<footer style="margin-bottom:28px;">
	<!--section style="background-color:#F9D133;padding:10px 0px;">
		<div class="container">
			<div class="row f-links">
				<div class="col-sm-3 col-xs-12">
					<h4>Services</h4>
					<ul>
						<!--<li><a href="#" data-toggle="modal" data-target="#adv-book-modal" id="adv-book">Advanced Bookings </a> </li>
						<li><a href="#" data-toggle="modal" data-target="#test-drive-modal" id="test-drive">Test Drive </a> </li>
						<li><a href ="#" data-toggle="modal" data-target="#vehicle-loan-modal" id="vehicle-loan">Apply for Vehicle Loan</a></li>
						<li><a href ="#" data-toggle="modal" data-target="#corporate-deal-modal" id="corporate-deal">Corporate Deals</a></li>
						<li><a href ="#" data-toggle="modal" data-target="#apply-insurance-modal" id="apply-for-insurance">Apply for Insurance</a></li>
						<li><a href ="#" data-toggle="modal" data-target="#road-assistance-modal" id="on-road-assistance">Buy on Road Assistance</a></li> -->
						<!--li><a href ="http://www.nayagaadi.com/Pooja%20Service" target="_blank">Pooja Service</a></li>
						<li><a href ="http://www.nayagaadi.com/Roadside%20Assistance%20-24*7%20Service" target="_blank">Roadside Assistance -24*7 Service</a></li>
						<li><a href ="http://www.nayagaadi.com/Referral%20Services" target="_blank">Referral Services</a></li>
					</ul>
				</div>
				<div class="col-sm-3 col-xs-12">
					<!--<h4>Finance</h4>
					<ul>
						<li><a href="#" data-toggle="modal" data-target="#vehicle-loan-modal" id="vehicle-loan">Apply For Loan </a> </li>
						<li><a href="#" data-toggle="modal" data-target="#apply-insurance-modal" id="apply-for-insurance">Apply For Insurance </a> </li>
						<li><a href="http://www.btis.in/fines" target="_blank">Pay UR Dues </a> </li>
					</ul> -->
					<!--h4>Useful links</h4>
					<ul>
						<li><a href="https://www.cibil.com/online/credit-score-check.do" target="_blank">Know your Credit Score </a> </li>
						<li><a href="http://www.nayagaadi.com/Nayagaadi-Experience">NayaGaadi Experience</a> </li>
						<!--<li><a href="https://www.cibil.com/xpressacquire" target="_blank">Apply Loan Credit Card</a> </li>
						<li><a href="http://www.nayagaadi.com/discounts-codes">Discount Codes</a> </li>
						<li><a href="http://www.nayagaadi.com/Gallery">Gallery </a> </li> -->
					<!--/ul>
				</div>
				<div class="col-sm-3 col-xs-12">
					<!--<h4>Self Help</h4>
					<ul>
						<li><a href="http://www.nayagaadi.com/index.php?route=product/search">Search A Vehicle </a> </li>
						<li><a href="http://www.nayagaadi.com/index.php?route=information/search-dealer">Search A Dealer</a> </li>
						<li><a href="http://www.nayagaadi.com/Instant%20Access%20to%20ur%20Docs">Access ur Docs </a> </li>
						<li><a href="#">Reviews / Ratings </a> </li>
						<li><a href="#">Industry Latest News / updates</a></li>
					</ul> -->
				<!--/div>
				<div class="col-sm-3 col-xs-12">
					<!--<h4>Tools</h4>
					<ul>
						<li><a href="<?php echo $prefix;?>/emi_calculator">EMI Calculator </a> </li>
						<li><a href="http://www.nayagaadi.com/index.php?route=information/instant-on-road-price">Instant On Road Price </a> </li>
						<li><a href="<?php echo $prefix;?>/service_cost_analyzer">Service Cost Analyser </a> </li> 
                         <li><a href="<?php echo $prefix.'/locate_dealer';?>" id="locate-dealer">Locate A Dealer </a> </li> 						
						<li><a href="http://www.nayagaadi.com/index.php?route=product/compare">Compare Vehicles </a> </li>
						<li><a href="http://www.nayagaadi.com/index.php?route=account/order">Track UR Order  </a> </li>
					</ul> -->
				<!--/div>
			</div>
		</div>
	</section-->
	<section style="background-color:#666666;padding:15px 0px;">
		<div class="container">
			<div class="row f-desc">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="row">
						<div class="col-md-2 col-sm-3 col-xs-3 mt-10">
							<a href="<?php echo $prefix;?>"><img src="<?php echo $assetsPath;?>/images/favicon.png" class="img-responsive" alt="LOGO"></a>
							
						</div>
						<div class="col-md-10 col-sm-9 col-xs-9 mt-10">
							<a href="<?php echo $prefix;?>"><img src="<?php echo $assetsPath;?>/images/logo.png" class="img-responsive " alt="LOGO"></a><span style="color: #fff;font-size: 12px;">Mera Time | Mera Choice | Mera Price</span>
							<p class="mt-5">NayaGaadi.com is India's first Online market place for all the Brand New Vehicles ( Autos, Bikes, Scooters, Cars, Cycles, Buses, Lorries, Tractors, Passenger Vehicles, Commercial vehicles, Utility Vehicles, SUV's, MUV's etc ) to buy online.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<h4>Newsletter Signup</h4>
					<p>Please send your mail to newsletter@NayaGaadi.com and we'll send you updates and interesting offers from NayaGaadi.</p>
					<div class="input-group">
						
					</div>
				</div>
				<div class="col-md-3  col-sm-3 col-xs-12 f-social" style="margin-top:35px;">
					<h4>Follow us</h4>
					<ul>
						<li><a class="facebook" href="https://www.facebook.com/NayaGaadi" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a class="pinterest" href="http://in.linkedin.com/in/NayaGaadi" title="Pinterest" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a class="twitter" href="https://twitter.com/nayagaadi" title="Twiter" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<!--<li><a class="google" href="https://plus.google.com/" title="Google plus"  target="_blank"><i class="fa fa-google-plus"></i></a></li>
						<li><a class="rss" href="" title="RSS"><i class="fa fa-rss"></i></a></li>-->
						<li><a class="youtube" href="https://www.youtube.com/channel/UCHCrLu5DinIDbg8ZOiHeQuQ" title="YouTube" target="_blank"><i class="fa fa-youtube"></i></a></li>
					</ul>
				<!--	<h4>Visitor Count</h4>
					<div class="v-count">00003230</div>-->
				</div>
			</div>
		</div>
	</section>
	<section style="background-color:#333333;padding:15px 0px;">
		<div class="container">
			<div class="row fs-links">
				<div class="col-md-12">
					<ul>
						<li class="heading">About Company :</li>
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/Aboutus">About Us</a></li>
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/investors">Investors</a></li>
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/media">Media</a></li>
						<!--<li><a style="color:#ffffff" href="http://www.nayagaadi.com/Testimonials">Testimonials</a></li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/Careers">Careers</a></li> -->
						<!-- <li><a style="color:#333333" href="http://www.nayagaadi.com/index.php?route=information/contact">Contact US</a></li>-->
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/faq">FAQ</a></li>						
					</ul>
					<!--<ul class="list-unstyled">
						<li class="heading">Partners :</li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/Showroom%20Dealer%20Registration">Showroom Dealers</a> </li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/Manufacturer%20Registration">Manufacturers</a> </li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/Spare%20Parts%20Associates">Spare Parts Vendor </a> </li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/index.php?route=information/information&amp;information_id=92">Banks</a> </li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/index.php?route=information/information&amp;information_id=93">NBFC </a> </li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/index.php?route=information/information&amp;information_id=91"> Insurance Companies</a> </li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/index.php?route=affiliate/account">Affiliates</a> </li>   
					</ul> -->
					<ul class="list-unstyled">
						<li class="heading">Policies :</li>						
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/delivery_policy">Delivery Policy </a> </li>
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/privacy_policy">Privacy Policy </a> </li>
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/payment_policy">Payment Policy </a> </li>
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/terms_condition">Terms &amp; Conditions  </a> </li>
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/visitor_agreement_policy">Visitor Agreement Policy </a> </li>
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/infringement_policy">Infringement Policy|</a> </li>
					</ul>

					<ul class="list-unstyled">
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/customer_care">Contact Us</a></li>
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/siteMap" id="site-map">Site Map</a></li>
						<!--<li><a style="color:#ffffff" href="http://www.nayagaadi.com/index.php?route=product/manufacturer">Brands</a></li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/index.php?route=affiliate/account">Affiliates</a></li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/index.php?route=product/special">Specials</a></li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/index.php?route=account/newsletter">Newsletter</a></li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/index.php?route=account/voucher">Gift Vouchers</a> </li>   
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/index.php?route=account/return/add">Returns</a> </li>   -->  
					</ul>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>© 2015 NayaGaadi.com. All rights Reserved.<span>&nbsp;</span></p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 text-right">
					<!--<ul class="payment">
						<li><a title="Visa" href="#" class="visa"><img alt="Visa" src="<?php echo $prefix;?>/assets/images/visa.jpg"></a></li>
						<li><a title="MasterCard" href="#" class="masterCard"><img alt="MasterCard" src="<?php echo $prefix;?>/assets/images/master_card.jpg"></a></li>
						<li><a title="Paypal" href="#" class="paypal"><img alt="Paypal" src="<?php echo $prefix;?>/assets/images/paypal.jpg"></a></li>
						<li><a title="Merican" href="#" class="merican"><img alt="Merican" src="<?php echo $prefix;?>/assets/images/american.jpg"></a></li>
						<li><a title="DHL" href="#" class="dhl"><img alt="DHL" src="<?php echo $prefix;?>/assets/images/dhl.jpg"></a></li>
					</ul>-->
				</div>
			</div>
		</div>
	</section>
</footer>
	<div class="sticky-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="f-btn"><a href ="#" data-toggle="modal" data-target="#download_brochure_modal" id="download_brochure"><i class="fa fa-download"></i> Download Brochure</a></div>
				</div>
				<div class="col-md-3">
					
				</div>
				<div class="col-md-4">
					<a href ="javascript:void(0)" data-toggle="modal" data-target="#drop-a-query-modal" style="text-decoration:none;">
					<div class="f-btn"><i class="fa fa-pencil-square-o"></i> Drop a query</div>
					</a>
				</div>
				<div class="col-md-4">
					
				</div>
			</div>
		</div>
	</div>
<!-- Modal starts here  Download Brochure-->
	<div class="modal fade blue-modals" id="download_brochure_modal" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="opacity:1 !important;">&times;</button>
					<h4 class="text-center modal-title">Download Brochure</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" name="brochure_download_form" role="form"  method="POST" id="brochure_download_form" submit="return false">
					<div class="form-group">
						<label for="fullName" class="col-md-3 col-sm-3 col-xs-12 control-label">Full Name</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><i class="fa fa fa-user"></i></span>
							<input type="text" class="form-control" va_req="true" placeholder="Full Name" name="brochureFullName" aria-describedby="basic-addon1" va_err="brochureFullNameError" />
							</div>
							<div class="text-danger" id="brochureFullNameError"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-md-3 col-sm-3 col-xs-12 control-label">Mobile No</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
							<input type="Text" class="form-control"  va_req="true" va_num="true" id="brochurephone" name="brochurephone" placeholder="eg. 9874563110" va_err="brochurephoneError" />					
							</div>
							<div class="text-danger" id="brochurephoneError"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="emailID" class="col-md-3 col-sm-3 col-xs-12 control-label">Email-id</label>
						<div class="col-md-9 col-sm-9 col-xs-12 mb-10">
							<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
							<input type="text" class="form-control" va_req="true" va_email="true"  id="brochureemailID" name="brochureemailID" placeholder="tony@gmail.com" va_err="brochureemailIDError" />				
							</div>
							<div class="text-danger" id="brochureemailIDError"></div>
						</div>
					</div>
						<div class="col-md-4">
							<select class="form-control mb-10"  style="width:100%;" va_req="true" name="brochureCountry" id="brochureCountry">
								<option value="" >-- Select Country --</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10"  style="width:100%;" va_req="true" name="brochureState" id="brochureState">
								<option value="" >-- Select State --</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10"  style="width:100%;" va_req="true" name="brochureCity" id="brochureCity">
								<option value="" >-- Select City --</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10"  style="width:100%;" va_req="true" name="brochureCategory" id="brochureCategory">
								<option value="" >-- Select Category --</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10"  style="width:100%;" va_req="true" name="brochureMaker" id="brochureMaker">
								<option value="">-- Select Maker --</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10"  style="width:100%;" va_req="true" name="brochureModel" id="brochureModel">
								<option value="">-- Select Model --</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10" style="width:100%;" va_req="true" name="brochureVariant" id="brochureVariant">
								<option value="">-- Select Variant --</option>								
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control mb-10" style="width:100%;" va_req="true" name="brochureFurtherAssistance" id="brochureFurtherAssistance">
								<option value="">-- Do You Need further Assistance --</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>
					   <div class="col-md-12">
						<input class="col-md-1 col-sm-1 col-xs-2" va_req="true"  type="checkbox" value="Agreed" style="float:left;" name="brochureTermsConditions" id="brochureTermsConditions" >
							<div class="col-md-11 col-sm-11 col-xs-10 mb-10">
								I agree to NayaGaadi.com <a href="#" style="text-decoration: none !Important; color: #000 !important;" data-toggle="tooltip" data-placement="top" title="I agree to receive calls, e-mail and SMS from NayaGaadi Online Marketplace Private Limited (“NayaGaadi”), its agents, and its dealers on my mobile phone, which are intended to assist me in purchasing Ford vehicles, products and services. I also agree to receive such and any other marketing & product related communication from Ford, its agents, and its dealers until specified otherwise, by me.">Terms & Conditions</a>.
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-md-4 col-sm-4 hidden-xs"> &nbsp; </label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<a href="#" class="search-btn"  data-toggle="modal" id="brochure_submit" style="background-color:#F9D133;font-size:18px;" >Submit</a>
								<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
							</div>
						</div>
					</form>
					<div class="col-md-12 col-sm-12 col-xs-12 hide text-center" id="BrochureData">
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal ends here -->