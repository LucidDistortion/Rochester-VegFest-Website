<!doctype html>
<html lang="en">
<head>
<!--That's so meta (meta information to ensure content will correctly adapt to screen size)-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<title>Contact &#124; RocVegFest</title>

<!--Reset CSS-->
<link rel="stylesheet" type="text/css" href="css/reset.css">
<!--Bootstrap CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Bootstrap JavaScript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--Custom CSS-->
<link rel="stylesheet" type="text/css" href="css/header_and_navbar.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="stylesheet" type="text/css" href="css/body_and_background.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/contactstyles.css">

<!--Contact form style and script-->
<link rel="stylesheet" type="text/css" href="gbcf-v3/files/themes/default.css" media="screen" />
<!--[if IE]><script type="text/javascript" src="gbcf-v3/files/focus.js"></script><![endif]-->


</head>

<body>

<div class="container-fluid">
	<div class="row">
		<div class="col"><img id="headerImg" src="images/other/vegfestheader.jpg" alt="Rochester VegFest MLK Park Semptember 16th, 2017"></div>
	</div>
</div>
<nav class="navbar">
	<div class="container-fluid navbar-container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle toggle-button" data-toggle="collapse" data-target="#navbar">
				<span class="glyphicon glyphicon-menu-hamburger"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li class="navItem"><a class="navLink" href="index.html">HOME</a></li>
				<li class="navItem"><a class="navLink" href="eventinfo.html">EVENT INFO</a></li>
				<li class="navItem"><a class="navLink" href="sponsors.html">SPONSORS</a></li>
				<li class="navItem"><a class="navLink" href="exhibitors.html">EXHIBITORS</a></li>
				<li class="navItem"><a class="navLink" href="speakers.html">SPEAKERS</a></li>
				<li class="navItem"><a class="navLink" href="volunteer.html">VOLUNTEER</a></li>
				<li class="navItem"><a class="navLink" href="https://rocvegfest.org/updates/">UPDATES</a></li>
				<li class="navItem"><a class="navLink navLink-current"  href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</div>
</nav>

<div id="main">

<h1>CONTACT US!</h1>

<p class="bodytext">You can use the form below to send us an email with your questions or comments. You can also <a class="textlink" href="volunteer.html">join our mailing list,</a><a class="textlink" href="https://www.facebook.com/RocVegFest/?hc_ref=PAGES_TIMELINE" target="_blank">visit us on Facebook,</a> leave a message at ARRoc’s voicemail (585) 445-3599, or write to us at:</p><br>
<p class="bodytext">Rochester VegFest<br>
P.O. Box 20185<br>
Rochester, NY 14602</p>

<div id="contactfield">

<!--Contact form PHP-->
<?php include_once("gbcf-v3/form.php"); ?>

</div>

</div>

<div class="container-fluid" id="footer">
<div class="row" id="accent"></div>

	<div class="row" id="footer-content">	
		<div class="col-xs-12 col-sm-6 footerBox">
<div id="mailingfield">
			<div class="row">
				<div class="col-xs-2">
					<img id="envelope" src="images/other/maillist_graphic.png" alt="mailing list envelope graphic"> 
				</div>
				<div class="col-xs-10">
					<div class="row">
						<div class="col-xs-12">
							<h3 class="footerTitle">SUBSCRIBE FOR UPDATES</h3>
						</div>
						<div class="col-xs-12">
							<p id="mailDetail">Join us for latest news, reminders, and more!</p>
						</div>

					</div>
				</div>
			</div>
			<div class="row">

					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="//rocvegfest.us15.list-manage.com/subscribe/post?u=e7e4acaaab6a1bcbd8ade9f2c&amp;id=64b1bd56bc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    						<div id="mc_embed_signup_scroll">
    								<div class="col-xs-7">
										<div class="mc-field-group">
											<input type="email" value="" name="EMAIL" class="required email footer-email-field" id="mce-EMAIL" placeholder="Email Address">
										</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>    
										<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    									<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e7e4acaaab6a1bcbd8ade9f2c_64b1bd56bc" tabindex="-1" value=""></div>
    								</div>
    								<div class="col-xs-4">
    									<div class="clear"><input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button subscribe"></div>
    								</div>
    						</div>
						</form>
					</div>
</div>
<!--End mc_embed_signup-->


					
			</div>
		</div>

		<div class="col-xs-12 col-sm-4  footerBox socialmedia">
			<div id="row">
				<div class="col-xs-12 socalLinksDiv">
					<h3 class="footerTitle socialTitle">FOLLOW US ONLINE!</h3>
				</div>
				<div class="col-xs-12">
					<div class="row">
						<div id="socialbox">
							<a id="fb" href="https://www.facebook.com/RocVegFest/?hc_ref=PAGES_TIMELINE" target="_blank"><img class="socialLink" src="images/other/facebookcolor.png" alt="Facebook"></a>
							<a id="insta" href="https://www.instagram.com/rochestervegfest/?hl=en" target="_blank"><img class="socialLink" src="images/other/instagramcolor.png" alt="Instagram"></a>
							<a id="twitter" href="https://twitter.com/RocVegFest" target="_blank"><img class="socialLink" src="images/other/twittercolor.png" alt="Twitter"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-2  footerBox">
			<img id="arrocravs" src="images/sponsors/arrocravsfooter.png" alt="ARroc and RAVS Logos">
			<img id="arravs_flat" src="images/sponsors/arravs_flat.png" alt="ARroc and RAVS Logos">
		</div>

	</div>



	<div class="row" id="anchor"> 
		<div class="left">
			<a class="sitelink anchorlink" href="sitemap.html">SITE MAP</a> 
			&#124; 
			<a class="anchorlink" href="contact.html">CONTACT US</a> 
			&#124; 
			<a class="anchorlink" href="https://www.facebook.com/leanne.morango" target="_blank">WEB DESIGN BY LEANNE MORANGO</a>
		</div>
		<div class="right">
			<a class="anchorlink" href="http://arroc.org/" target="_blank">ARRoc</a> and <a class="anchorlink" href="https://rochesterveg.org/" target="_blank">RAVS</a> are both 501(c)3 charitable nonprofits.
		</div>
	</div>
</div>
</body>
</html>