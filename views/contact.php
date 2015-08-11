<?php 
if(isset($_POST['submit'])){
    $to = "awharton5@gmail.com"; // this is your Email address!
    $from = $_POST['ContactEmail']; // this is the sender's Email address
    $contact_name = $_POST['ContactName'];
	$contact_phone = $_POST['ContactPhone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $contact_name . " " . " wrote the following:" . "\n\n" . $_POST['ContactComment'];
    $message2 = "Here is a copy of your message " . $contact_name . "\n\n" . $_POST['ContactComment'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    }
?>




<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>  <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Tailgate Sports Pub</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700%7CBenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/libs/jquery-1.11.2.js"></script>	
	<script src="js/libs/jquery-migrate.min.js"></script>
	<script src="js/libs/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<header>
		<div class="width-container">
			<h1 id="logo">
				<a href="/" title="Tailgate Sports Pub" rel="home">
					<img src="images/tgvb1.png" alt="Tailgate Sports Pub" width="320">
				</a>
			</h1>
			<div class="social-ico">
				<a href="/contact"><i class="fa fa-map-marker"></i></a>
				<a href="https://www.facebook.com/thetailgatevb" target="_blank"><i class="fa fa-facebook"></i></a>
				<!-- <a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> --> 
			</div>

			<nav>
				<div class="menu-main-navigation-container">
					<ul id="menu-main-navigation" class="sf-menu">
						<li>
							<a href="/">Home</a>
						</li>
						<li class="menu-item">
							<a href="/menu" class="sf-with-ul">Menu</a>	
						</li>
						<li class="current-menu-item">
							<a href="/contact">Contact</a>
						</li>	
					</ul>
				</div>
			</nav>
			<div class="clearfix"></div>
		</div>
	</header>

	<div id="page-title">
		<div class="width-container">
			<h1>Contact us</h1>
				<div id="bread-crumb">
					<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to Tailgate Sports Pub." href="/" class="home"><i class="fa fa-home"></i></a></span> <i class="fa fa-angle-right"></i> <span typeof="v:Breadcrumb"><span property="v:title">Contact Us</span></span>
				</div>
				<div class="clearfix"></div>
		</div>
	</div>
	
	<script type="text/javascript">jQuery(document).ready(function($) {   $("#page-title").backstretch([ "/images/barheader.jpg" ],{ fade: 750, }); }); </script>
	
	
	
	<div id="main">
		<div class="width-container bg-sidebar-pro">
			<div id="sidebar-border">
				<div id="content-container-sidebar">
					<div class="content-container-pro">
						<h1>Send us a message</h1>
						<div id="map-progression">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.00758342206!2d-73.9780035!3d40.70563080000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2s!4v1412174533844"></iframe>
						</div>
						<br />
						<div class="wpcf7">
							<form class="progression-contact" id="CommentForm" method="post" action="">
								<fieldset>
									<div>
										<p><input id="ContactName" name="ContactName" class="textInput required" placeholder="Name" /></p>
									</div>
									<div>
										<p><input id="ContactEmail" name="ContactEmail" class="textInput required email" placeholder="E-mail" /></p>
									</div>
									<div>
										<p><input id="ContactPhone" name="ContactPhone" class="textInput digits" value="" placeholder="Phone" /></p>
									</div>
									<div>
										<p><textarea id="ContactComment" name="ContactComment" class="textInput required" rows="10" cols="4" placeholder=" Your Message"></textarea></p>
									</div>
									<div>
										<p><input type="submit" name="submit" value="Submit" class="wpcf7-form-control wpcf7-submit"></p>
									</div>
								</fieldset>
							</form>	
						</div>
					</div>
				</div>	

				<div id="sidebar">
					<div id="pyre_social_media-widget-feat-3" class="sidebar-item widget pyre_social_media-feat">
						<h5 class="widget-title">Contact Info</h5>
						<div class="social-icons-widget-pro">	
							<div>
								<strong>Address</strong>: 344 Constitution Drive <br>
								Virginia Beach, VA 23462<br><br>
								<strong>Phone</strong>: 757-961-3468<br>
								<strong>E-mail</strong>: <a href="mailto:thetailgatevb@gmail.com">thetailgatevb@gmail.com</a>
							</div>						
							<div class="social-ico">
								<a href="https://www.facebook.com/thetailgatevb" target="_blank"><i class="fa fa-facebook"></i></a>
								<!-- <a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> --> 
								<!-- <a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a> -->
								<!-- <a href="http://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a> -->
								<!-- <a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a> -->
							</div><!-- close .social-ico -->
						</div><!-- close .social-icons-widget-pro -->
						
						<div class="sidebar-divider"></div>	
					</div>
					
					<div id="our-hours-widget-3" class="sidebar-item widget hours">
						<h5 class="widget-title">Hours</h5>			
						<ul class="open-hours">
							<li>
								<div class="date-day grid2column-progression">Monday</div>
								<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="date-day grid2column-progression">Tuesday</div>
								<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="date-day grid2column-progression">Wednesday</div>
								<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="date-day grid2column-progression">Thursday</div>
								<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="date-day grid2column-progression">Friday</div>
								<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="date-day grid2column-progression">Saturday</div>
								<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="date-day grid2column-progression">Sunday</div>
								<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
								<div class="clearfix"></div>
							</li>
						</ul>
						<div class="sidebar-divider"></div>
					</div>
				</div>
				
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>
	
	<div id="pyre_homepage_media-widget-product-feat-2" class="widget pyre_homepage_media-product-feat">		
		<div class="footer-highlight">
			<div class="width-container">
				<h2 class="footer-highlight-widget">Newsletter</h2>	
				<div class="summary-text-pro">Subscribe to our newsletter and recieve special offers and discounts.</div>
				<div class="newletter-container"><!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup"><form action="//progressionstudios.us1.list-manage.com/subscribe/post?u=1a06aa3bca8613232881e8a6e&amp;id=2f5a556941" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate=""><div class="mc-field-group"> <label for="mce-EMAIL">Enter Your Email Address </label> <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Your E-mail Address"></div><div id="mce-responses" class="clear"><div class="response" id="mce-error-response" style="display:none"></div><div class="response" id="mce-success-response" style="display:none"></div></div><div style="position: absolute; left: -5000px;"><input type="text" name="b_1a06aa3bca8613232881e8a6e_2f5a556941" tabindex="-1" value=""></div><div class="clear"><input type="submit" value="Go" name="subscribe" id="mc-embedded-subscribe" class="button"></div></form></div>
					<!--End mc_embed_signup-->
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<div id="widget-area">
		<div class="width-container footer-3-column">
			<div id="pyre_social_media-widget-feat-2" class="widget pyre_social_media-feat">
				<h2 class="widget-title">Our Location</h2>
				<div class="social-icons-widget-pro">	
					<div>
						<strong>Growler Brewery</strong><br />
						1422 1st St. Santa Rosa, CA 94559<br /><br />
						<strong>Call for 
						Reservations</strong>: 757-961-3468<br />
						<strong>E-mail</strong>: thetailgatevb@gmail.com
					</div>						
					<div class="social-ico">
						<a href="https://www.facebook.com/thetailgatevb" target="_blank"><i class="fa fa-facebook"></i></a>
						<!-- <a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> --> 
						<!-- <a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a> -->
						<!-- <a href="http://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a> -->
						<!-- <a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a> -->
					</div><!-- close .social-ico -->
				</div><!-- close .social-icons-widget-pro -->
			</div>
			
			<div id="our-hours-widget-2" class="widget hours"><h2 class="widget-title">HOURS</h2>			
				<ul class="open-hours">
					<li>
						<div class="date-day grid2column-progression">Monday</div>
						<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="date-day grid2column-progression">Tuesday</div>
						<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="date-day grid2column-progression">Wednesday</div>
						<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="date-day grid2column-progression">Thursday</div>
						<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="date-day grid2column-progression">Friday</div>
						<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="date-day grid2column-progression">Saturday</div>
						<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="date-day grid2column-progression">Sunday</div>
						<div class="hours-date grid2column-progression lastcolumn-progression">11:00am - ?</div>
						<div class="clearfix"></div>
					</li>
				</ul>	
			</div>
			
			<div id="flickr-widget-2" class="widget flickr">
				<h2 class="widget-title">Photos from Flickr</h2>
				<!-- Important: In Order to change your Flickr ID number, edit the script.js file, and replace this number: 52617155@N08 -->
				<div class="flickr-widget flickr-widget-2"></div>
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>

	<footer>
		<div id="copyright">
			<div class="width-container">
				<div id="copyrigh-text">© 2015 All Rights Reserved. </div>
				<div class="menu-footer-navigation-container">
					<ul id="menu-footer-navigation" class="pro-footer-menu">
						<li class="menu-item current-menu-item">
							<a href="/">Home</a>
						</li>
						<li class="menu-item">
							<a href="/menu">Menu</a>
						</li>
						<li class="menu-item current-menu-item">
							<a href="/contact">Contact</a>
						</li>
					</ul>
				</div>
			</div><!-- close .width-container -->
			<div class="clearfix"></div>
		</div><!-- close #copyright -->
	</footer>
	
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script src="js/libs/jquery-ui.min.js"></script>
</body>
</html>