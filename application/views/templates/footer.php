<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$assetsPath=$this->config->item('asset_path'); 
$prefix=$this->config->item('prefix');
?>
<footer style="margin-bottom:28px;">
	<section style="background-color:#F9D133;padding:10px 0px;">
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
						<li><a href ="http://www.nayagaadi.com/Pooja%20Service" target="_blank">Pooja Service</a></li>
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
					<h4>Useful links</h4>
					<ul>
						<li><a href="https://www.cibil.com/online/credit-score-check.do" target="_blank">Know your Credit Score </a> </li>
						<li><a href="http://www.nayagaadi.com/Nayagaadi-Experience">NayaGaadi Experience</a> </li>
						<!--<li><a href="https://www.cibil.com/xpressacquire" target="_blank">Apply Loan Credit Card</a> </li>
						<li><a href="http://www.nayagaadi.com/discounts-codes">Discount Codes</a> </li>
						<li><a href="http://www.nayagaadi.com/Gallery">Gallery </a> </li> -->
					</ul>
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
				</div>
				<div class="col-sm-3 col-xs-12">
					<!--<h4>Tools</h4>
					<ul>
						<li><a href="<?php echo $prefix;?>/home/emi_calculator">EMI Calculator </a> </li>
						<li><a href="http://www.nayagaadi.com/index.php?route=information/instant-on-road-price">Instant On Road Price </a> </li>
						<li><a href="<?php echo $prefix;?>/home/service_cost_analyzer">Service Cost Analyser </a> </li> 
                         <li><a href="<?php echo $prefix.'/home/locate_dealer';?>" id="locate-dealer">Locate A Dealer </a> </li> 						
						<li><a href="http://www.nayagaadi.com/index.php?route=product/compare">Compare Vehicles </a> </li>
						<li><a href="http://www.nayagaadi.com/index.php?route=account/order">Track UR Order  </a> </li>
					</ul> -->
				</div>
			</div>
		</div>
	</section>
	<section style="background-color:#666666;padding:15px 0px;">
		<div class="container">
			<div class="row f-desc">
				<div class="col-md-6">
					<a href="<?php echo $prefix;?>"><img src="<?php echo $assetsPath;?>/images/nlogo.png" class="img-responsive logo-img hidden-xs" alt="LOGO"></a>
					<p>NayaGaadi.com is India's first Online market place for all the Brand New Vehicles ( Autos, Bikes, Scooters, Cars, Cycles, Buses, Lorries, Tractors, Passenger Vehicles, Commercial vehicles, Utility Vehicles, SUV's, MUV's etc ) to buy online.</p>
				</div>
				<div class="col-md-3">
					<h4>Newsletter Signup</h4>
					<p>Enter your email and we'll send you updates and interesting offers from NayaGaadi.</p>
					<div class="input-group">
						<i class="fa fa-paper-plane"></i>
						<input type="text" placeholder="Enter your email here">
					</div>
				</div>
				<div class="col-md-3 f-social" style="margin-top:35px;">
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
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/home/Aboutus">About Us</a></li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/Investors">Investors</a></li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/Media">Media</a></li>
						<!--<li><a style="color:#ffffff" href="http://www.nayagaadi.com/Testimonials">Testimonials</a></li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/Careers">Careers</a></li> -->
						<!-- <li><a style="color:#333333" href="http://www.nayagaadi.com/index.php?route=information/contact">Contact US</a></li>-->
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/FAQ">FAQ</a></li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/index.php?route=information/information&amp;information_id=96">Feedback-Suggestions</a></li>
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
						<li><a style="color:#ffffff" href="http://nayagaadi.com/%20Delivery%20Policy">Delivery Policy </a> </li>
						<li><a style="color:#ffffff" href="http://nayagaadi.com/Policy">Privacy Policy </a> </li>
						<li><a style="color:#ffffff" href="http://nayagaadi.com/payment%20policy">Payment Policy </a> </li>
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/Terms%20and%20conditions">Terms &amp; Conditions  </a> </li>
						<li><a style="color:#ffffff" href="http://nayagaadi.com/Visitor%20Agreement">Visitor Agreement Policy </a> </li>
						<li><a style="color:#ffffff" href="http://nayagaadi.com/Infringement%20Policy">Infringement Policy|</a> </li>
					</ul>

					<ul class="list-unstyled">
						<li><a style="color:#ffffff" href="http://www.nayagaadi.com/index.php?route=information/contact">Contact Us</a></li>
						<li><a style="color:#ffffff" href="<?php echo $prefix;?>/home/siteMap" id="site-map">Site Map</a></li>
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
					<div class="f-btn"><i class="fa fa-download"></i> Download Brochure</div>
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
