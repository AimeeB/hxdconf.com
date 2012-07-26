<!DOCTYPE html>
<?php 		
		$DefaultName = "Name";
		$DefaultEmail = "Email Address";
 ?>
<html>
<head>
  <meta charset="utf-8">
<!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="true" -->
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- InstanceBeginEditable name="doctitle" -->
  <title>At the HxD Event | Healthcare Experience Design Conference 2012</title>
  <!-- InstanceEndEditable -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	
	<meta name="description" content="The Healthcare Experience Design Conference blends the powerhouse perspectives of healthcare thought leaders, product developers, and design implementers across a broad spectrum of healthcare technologies and delivery channels." />
 
	
	<meta name="keywords" content="user experience design,healthcare, interaction design, usability, conference, design conference, experience design conference, healthcare conference, hxd, hxd conference, hxdconf" />   

  <!-- Mobile viewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- CSS links -->
  
	<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" /> 
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/contax.css" />
	<link rel="stylesheet" href="css/icon-font.css" />
	<link rel="stylesheet" href="css/tabs.css" />
	<link rel="stylesheet" href="css/twitter.css" />
	<link rel="stylesheet" href="css/colorbox.css" />
	<link rel="stylesheet" href="css/bgstretcher.css" />
	<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
  <!-- end CSS-->
  
  <!--JS links-->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <!-- // <script src="js/libs/modernizr-2.0.6.min.js"></script> -->
	<!-- // <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script> -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/twitter.js"></script>
	<!-- // <script type="text/javascript" src="js/stickyPanel.js"></script> -->
	<script type="text/javascript" src="js/slide-fade-content.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<!-- // <script src="js/jquery.colorbox-min.js"></script> -->
	<script type="text/javascript" src="js/jquery.colorbox-variations.js"></script>
	<script type="text/javascript" src="js/bgstretcher.js"></script>
	<!-- <script type="text/javascript">
	$(document).ready(function(){
	//  Initialize Backgound Stretcher
	$(document).bgStretcher({
	images: ['img/biker.jpg'], imageWidth: 1024, imageHeight: 768
	});
	});
	</script> -->
	
	<script type="text/javascript" language="javascript">
	<!---
	defaultNameValue = '<?php echo $DefaultName; ?>';
	defaultEmailValue = '<?php echo $DefaultEmail; ?>';

	$(document).ready(function() {
		$('#namefield').live('click', clearName);
		$('#namefield').live('focusout', defaultName);
		$('#emailfield').live('click', clearEmail);
		$('#emailfield').live('focusout', defaultEmail);
		$("form").submit(function(event) {
			validateForm(event);
		});

		defaultName();
		defaultEmail();
	});



	function clearName()
	{
		$('#namefield').val('');
		return false;
	}
	function clearEmail()
	{
		$('#emailfield').val('');
		return false;
	}
	function defaultName()
	{
		if ($('#namefield').val() == '')
			$('#namefield').val(defaultNameValue)
		return false;
	}
	function defaultEmail()
	{
		if ($('#emailfield').val() == '')
			$('#emailfield').val(defaultEmailValue)
		return false;
	}
	function hideForm()
	{
		$('#namefield').hide();
		$('#emailfield').hide();
		$('#button').hide();
		return false;
	}
	function validateForm(event)
	{

		var nameOk = false;
		var emailOk = false;
		var emailTest = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;

		var nameValue = $('#namefield').val();
		var emailValue = $('#emailfield').val();

		var emailMessage = 'Please fill out a valid email address.';
		var nameMessage = 'Please fill out your name.';
		var emailAndNameMessage = 'Please fill out your name and a valid email address.  ';

		if ((nameValue != '') && (nameValue != defaultNameValue))
			nameOk = true;
		if ((emailValue != '') && (emailValue != defaultEmailValue) && (emailTest.test(emailValue)))
			emailOk = true;

		if (!(nameOk && emailOk))
		{
			event.preventDefault();
			if (emailOk && (!nameOk))
				alert(nameMessage);

			else if (nameOk && (!emailOk))
				alert(emailMessage);

			else 
				alert(emailAndNameMessage);

			return false;
		}
		else
			return true;
	}
	-->
	</script>

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
	
<?php include_once("analytics.php") ?>

	<form id="form1" name="form1" method="post" action="">
	<nav id="main-nav">
				<ul>
					<li><a href="about.php">About</a></li>
					<li><a href="speakers.php">Speakers</a></li>
					<li><a href="agenda.php">Agenda</a></li>
					<li><a href="sponsor.php">Sponsor</a></li>
					<li class="mobile-bottom" id="social-media-icons-mobile">
						<a class="social-media-icon" href="http://www.linkedin.com/groups?home=&gid=1996303&trk=anet_ug_hm" target="_blank"><div class="social-icon-div"><img src="img/linkedin-sm-white.png" /></div></a>
						<a class="social-media-icon" href="https://www.facebook.com/pages/Healthcare-Experience-Design-Conference/175279145836929" target="_blank" ><div class="social-icon-div"><img src="img/facebook-sm-white.png" /></div></a>
					<a class="social-media-icon" href="https://twitter.com/#!/hxdconf" target="_blank"><div class="social-icon-div"><img src="img/twitter-sm-white.png" /></div></a>
					<a class="social-media-icon"  id="crowdvine-small" href="http://www.hxdconference2012.crowdvine.com" target="_blank"><div class="social-icon-div"><img src="img/crowdvine-sm-white.png" /></div>
					</a>
					</li>
					
					<li class="mobile-bottom"><a href="registration.php">Registration</a></li>
					<li class="mobile-bottom"><a href="logistics.php" id="selected">At the Event</a></li>	
					
					<li id="social-media-icons"><a class="social-media-icon" href="https://www.facebook.com/pages/Healthcare-Experience-Design-Conference/175279145836929" target="_blank" ><div class="social-icon-div"><img src="img/facebook-sm.png" /></div></a>
					<a class="social-media-icon" href="http://www.linkedin.com/groups?home=&gid=1996303&trk=anet_ug_hm" target="_blank"><div class="social-icon-div"><img src="img/linkedin-sm.png" /></div></a>
					<a class="social-media-icon" href="https://twitter.com/#!/hxdconf" target="_blank"><div class="social-icon-div"><img src="img/twitter-sm.png" /></div></a>
					<a class="social-media-icon"  id="crowdvine-small" href="http://www.hxdconference2012.crowdvine.com" target="_blank"><div class="social-icon-div"><img src="img/crowdvine-sm.png" /></div>
					</a>
					</li>	
				</ul>
			</nav>
			
  <div id="container">
    <header>
		<div id="header-wrapper" class="container_12">
			<div id="logo"><a href="index.php"><img src="img/logo-white.png" alt="Healthcare Experience Design Conference"/></a></div>

			<div id="organizers">
				<p><span style="color:white;">Brought to you by:</span></p>
				<div id="organizers-logos"><a href="http://madpow.com" target="_blank"><img src="img/madpow_logo-white.png" alt="Mad*Pow"/></a> <span style="color:white;">&amp;</span>
				<a href="http://claricode.com" target="_blank"><img id="claricode-logo" src="img/claricode_logo_white.png" alt="claricode"/></a></div>
			</div>

			<!-- <div id="social-media-icons">
						<a href="facebook.com">f</a>
						<a href="linkedin.com">i</a>
						<a href="twitter.com">t</a>
						<a href="crowdvine.com"><img class="icon-image" src="img/crowdvine.png"></a>
					</div> -->
			
		
		</div><!-- end header-wrapper div -->
    </header>
	
	<div id="top-spacer"></div> 
<!-- InstanceBeginEditable name="page-content" -->
<div id="sub-page-container" role="main" class="container_12">
<div id="white-content-container">
<h2 class="section-header">At The HxD Event</h2>
<h3 id="register" class="action-button"><a href=" http://www.regonline.com/hxd2012" target="_blank">REGISTER NOW!</a></h3>
<img class="float-left" style="padding-right:1em; padding-bottom:1em;" src="img/westinBostonWaterfront.jpg" />
<p class="body-text">
<a href="https://www.starwoodmeeting.com/StarGroupsWeb/booking/reservation?id=1109065089&key=74AA4" target="_blank">The Westin Boston Waterfront Hotel</a><br />
425 Summer St.<br />
Boston, MA 02210</p>
<p class="body-text"><a href="http://www.starwoodhotels.com/westin/property/area/map.html?propertyID=1528" target="_blank">Local area map ></a></p>
<p class="body-text"><a href="http://maps.google.com/maps?q=Westin+Boston+Waterfront,+Summer+Street,+Boston,+MA&hl=en&sll=37.0625,-95.677068&sspn=37.871902,92.8125&vpsrc=0&hq=Westin+Boston+Waterfront,+Summer+Street,+Boston,+MA&t=m&z=15" target="_blank">Google map ></a></p>

<p class="body-text"><a href="#directions">Driving and walking directions ></a></p>
<br />
<br />
<br />

<h3 class="top-padding">Overnight Stays</h3>
<p class="body-text">The Westin Boston Waterfront, one of Boston’s premiere hotels, manages to infuse wellness and rejuvenation into every guest’s stay. We invite you to consider adding an overnight stay to your conference experience, and our discounted room rates  ($219 + tax) make it an affordable luxury.</p>

<a href="https://www.starwoodmeeting.com/StarGroupsWeb/booking/reservation?id=1109065089&key=74AA4" target="_blank">BOOK NOW ></a>

<h3 class="top-padding">Connect with attendees and speakers</h3>

<p class="body-text">Can’t wait until March 26th to meet the 2012 HxD Conference attendees and speakers? Use our <a href="http://www.hxdconference2012.crowdvine.com">CrowdVine</a> site to see who else is coming to Boston and get networking!</p>

<p class="body-text">Follow us on <a href="https://twitter.com/#!/hxdconf">Twitter</a>, <a href="https://www.facebook.com/pages/Healthcare-Experience-Design-Conference/175279145836929" target="_blank">Facebook</a> and <a href="http://www.linkedin.com/groups?home=&gid=1996303&trk=anet_ug_hm" target="_blank">Linkedin</a> to stay in the loop of what’s to come!</p>

<h3 class="top-padding">Included with Registration</h3>
<ul>
    <li>Access to all presentation sessions</li>
    <li>Access to the sponsor area</li>
    <li>Continental breakfast, snacks, lunch</li>
    <li>Networking and cocktails – light hors d’oeuvres and a drink ticket will be waiting for you</li>
	<li>A puppy (just making sure you were paying attention)</li>
</ul>
<h3 class="top-padding">Attire and What to Bring</h3>

<p class="body-text">Leave those pinstripes at home! Most presenters and participants will be dressed in casual business attire. The conference space is air-conditioned, but popular sessions tend to fill up, so temperatures can vary throughout the day.</p>

<p class="body-text">Attendees may wish to bring laptops and writing materials for note taking purposes. Business cards and other materials for networking are welcome as well.</p>
<h3 class="top-padding">Connectivity</h3>

<p class="body-text">Laptops, notebooks and other note-taking equipment are allowed and Wi-Fi Internet access is available free of charge. A majority of the presentation rooms feature classroom style seating to provide modest workspace for your laptops. Wi-Fi connection instructions will be distributed to attendees on site.</p>

<h3 class="top-padding">Unique Accommodations</h3>

<p class="body-text">If you have unique dietary restrictions or other special requests to ensure your comfort and safety during the conference, <a href="mailto:hxdconf@gomeeting.com">hxdconf@gomeeting.com</a>. We will do our best to meet your needs.</p>

<h3 class="top-padding" id="directions">Driving Directions</h3>
<h5 class="top-padding">From Logan International Airport:</h5>

<ul>
<li>Follow the signs for I-90W/I-93S/Williams Tunnel/Mass Pike</li>
<li>Merge onto I-90W</li>
<li>Take exit 25 toward South Boston</li>
<li>Turn right onto Congress St.</li>
<li>Turn right onto D Street.</li>
<li>Turn right onto Summer St.</li>
<li>Take the first left onto World Trade Center Ave</li>
<li>Take the first left and you will arrive at The Westin Boston Waterfront entrance.</li>
</ul>

<h5 class="top-padding">From Western Massachusetts & Points South via Massachusetts Turnpike:</h5>

<ul>
<li>Take Interstate 90 East to Exit 24A (South Station).</li>
<li>Go straight onto Atlantic Avenue.</li>
<li>Turn right onto Summer Street.</li>
<li>The hotel is approximately 0.7 miles ahead on the right, just past the convention center.</li>
<li>From Points South via I-95 &amp; I-93:</li>
<li>Take Interstate 93 North to Exit 20 (South Station).</li>
<li>Turn right at the end of the ramp on Kneeland Street.</li>
<li>Turn at the 2nd left onto Atlantic Avenue.</li>
<li>Turn right on Summer Street. </li>
<li>The hotel is ahead approximately 0.7 miles ahead on the right.</li> 
</ul>
<h5 class="top-padding">From Points North via I-95 or I-93:</h5>

<ul>
<li>Take Interstate Interstate 93 South to Exit 20A towards South Station.</li>
<li>Turn left at the light onto Summer Street.</li>
<li>The hotel is approximately 0.7 miles ahead on the right just past the convention center.</li> 
</ul>
<br />
<h3>Walking</h3>
<h5 class="top-padding">From Back Bay Station / MBTA Orange Line:</h5>

<ul>
<li>Exit Back Bay Train Station on the Dartmouth Street side.</li>
<li>Take right onto Stuart St. and follow for six blocks.</li>
<li>Turn left onto Washington St.</li>
<li>Take the next right onto Essex St.</li>
<li>Take a slight left to turn onto Surface Road.</li> 
<li>Turn right onto Summer St.</li>
<li>Follow Summer St. southeast for 0.8 mi.</li>
<li>You will pass the Boston Convention Center on your right.</li>
<li>Entrance to The Westin Boston Waterfront Hotel will be on your right.</li>
</ul>  

<h5 class="top-padding">From South Station / MBTA Red Line, Bus Station and Amtrak:</h5>

<ul>
<li>Exit South Station onto Summer St.</li>
<li>Follow Summer St. southeast for 0.8 mi.</li>
<li>You will pass the Boston Convention Center on your right.</li>
<li>Entrance to The Westin Boston Waterfront Hotel will be on your right.</li>
</ul>
<a href="#container" class="float-right">Back to top ^</a>
<br />
</div> <!-- end white content container -->
</div><!--end of sub-page container-->
</div><!-- end of container -->
	<!-- InstanceEndEditable -->	
<div class="clearfix"></div>
	
	<footer>
		<div id="footer-wrapper" class="container_12">
			<article id="contact-us" class="grid_4">
				<h2>Contact Us</h2>
				<p>Please feel free to send your comments, questions and feedback to: 
				<a href="mailto:hxdconf@gomeeting.com">hxdconf@gomeeting.com</a>
				<br /><br />
				We’ll be sure to respond to you as quickly as possible.</p>
			</article>
			
			<article id="get-updates" class="grid_3 alpha">
				<h2>Get Updates</h2>
				<table border="0">
					<?php
						if (isset($_POST['submitted']))
						{
							$fullnamepost = filter_input(INPUT_POST, 'namefield', FILTER_SANITIZE_STRING, array(FILTER_FLAG_STRIP_LOW, FILTER_FLAG_ENCODE_HIGH));
							$emailpost = filter_input(INPUT_POST, 'emailfield', FILTER_SANITIZE_EMAIL);


							if (strlen($fullnamepost)>0 && filter_var($emailpost, FILTER_VALIDATE_EMAIL))
							{
								$bodymessage = "Full Name:\n\t " . $fullnamepost . "\n\n Email:\n\t " . $emailpost . "\n\n";
								$bodymessage .= "IP:\n\t" . $_SERVER['REMOTE_ADDR'] . " (http://www.maxmind.com/app/locate_demo_ip?ips=" . $_SERVER['REMOTE_ADDR'] . ")" . "\n\n";


								//mail('info@healthcareexperiencedesign.com', 'healthcare experience design conference - web contact form', $bodymessage);
								//mail('hxd@gomeeting.com', 'healthcare experience design conference - web contact form', $bodymessage);

								$submissionsFilePath = "emaillist/submissions.csv";
								$file = fopen($submissionsFilePath, 'a') or die("Unable to open file.");
								fwrite($file, $fullnamepost . "," . $emailpost . ","  . $_SERVER['REMOTE_ADDR'] . "\n");
								fclose($file);

								$thankyou = true;
							}
							else
							{
								if (strlen($fullnamepost) == 0 || $fullnamepost == $DefaultName)
								  $errormessage .= "Please enter your name<br />\n";

								if (strlen($emailpost) == 0 || $emailpost == $DefaultEmail)
								  $errormessage = "Please enter your email address<br />\n";
								else
								  {
									if(!filter_var($emailpost, FILTER_VALIDATE_EMAIL))
								  		$errormessage .= "Please fix your email address<br />\n";
								  }
							}
						}
						else
						{
							$fullnamepost = $DefaultName;
							$emailpost = $DefaultEmail;
						}

					?>
									<?php if (isset($thankyou)) { ?><tr><td>Thank you for submitting your information</td></tr><?php } ?>
								<?php 
									if (isset($errormessage))
										echo "<tr><td><span style=\"color:pink;\">$errormessage</span></td></tr>";
								?>
					<?php if (!isset($thankyou)) { ?>
					<tr>
				    <td>
				      <label>
				        <input name="namefield" type="text" id="namefield" value="<?php echo $fullnamepost; ?>" title="Name" />
				      </label>
					</td>
				  </tr>
				  <tr>
				    <td>
					<label>
				    <input name="emailfield" type="text" id="emailfield" value="<?php echo $emailpost; ?>" title="Email" />
				    </label>
					</td>
				  </tr>
				  <tr id="button-box">
						<td>
							<label>
								<input type="submit" name="button" id="button" alt="Keep me posted!" value="Keep me posted!" class="action-button" />
								<input type="hidden" name="submitted" value="true" />
					    </label>
					</td>
					
					</tr><?php } ?>
				</table>
			</article>
			<article id="footer-social-media" class="grid_5 alpha">
				<div id="connect-headline"><h2>Connect</h2><p>before, during, and <br />after the event</p></div>
				<div id="footer-icons"><a href="http://www.linkedin.com/groups?home=&gid=1996303&trk=anet_ug_hm" target="_blank"><img src="img/linkedin-big.png" /></a>
				<a href="https://twitter.com/#!/hxdconf" target="_blank"><img src="img/twitter-big.png" /></a>
				<a href="http://www.hxdconference2012.crowdvine.com" target="_blank"><img src="img/crowdvine-big.png" /></a>
				<a href="https://www.facebook.com/pages/Healthcare-Experience-Design-Conference/175279145836929" target="_blank"><img src="img/facebook-big.png" /></a></div>
			</article>
			<section id="sponsors"> <h2 class="top-padding grid_12">Sponsors</h2>
								<div class="grid_2" style="margin-left:4%"><a href="http://gehealthcare.com" target="_blank"><img src="img/sponsorLogo-GEHealthcare.png" alt="GE Healthcare"/></a></div>
				                <div class="grid_2"><a href="http://continuuminnovation.com" target="_blank"><img src="img/sponsorlogo-continuum.png" alt="Continuum Innovation" /></a></div>
				                <div class="grid_2" style="margin-top:-1.5em;"><a href="http://userzoom.com" target="_blank"><img src="img/sponsorLogo-userzoom.png" alt="User Zoom" /></a></div>
				                <div class="grid_2" style="margin-top:1.5em;"><a href="http://aloftgroup.com" target="_blank"><img src="img/aloft-logo.png" alt="Aloft Group" /></a></div>
				<div class="grid_2" style="margin-top:1.5em;"><a href="http://axure.com" target="_blank"><img src="img/sponsorLogo-axure.png" alt="Axure" /></a></div>

							<div class="clearfix"></div>
				           	  <div class="grid_2" style="margin-top:1.5em; margin-left:4%"><a href="http://rosenfeldmedia.com" target="_blank"><img src="img/sponsorLogo-rosenfeld.png" alt="Rosenfeld" /></a></div>
							<div class="grid_2"  style="margin-top:1.5em;"><a href="http://www.connected-health.org" target="_blank"><img src="img/sponsorLogo-centerForConnectedHealth.png" alt="Connected Health"/></a></div>
				           <div class="grid_2"  style="margin-top:1em;"><a href="http://rockhealth.com" target="_blank"><img src="img/sponsorlogo-rockhealth.png" alt="Rock Health" /></a></div>
							<div class="grid_4"  style="margin-top:2em;"><a href="http://frontierhealth.org/" target="_blank"><img src="img/sponsorlogo-frontier.png" alt="Frontier Health" /></a></div>    
							<div class="clearfix"></div>
						   <div class="grid_2"  style="margin-top:3.5em; margin-left:7%"><a href="http://www.theatomgroup.com/" target="_blank"><img src="img/sponsorLogo-atom.png" alt="Atom" /></a></div> 
								    <div class="grid_2 omega"  style="margin-top:1.5em;"><a href="http://www.medcitynews.com/about-us-2/" target="_blank"><img src="img/sponsorLogo-medcityMedia.png" alt="MedCity Media" /></a></div>

						   <div class="grid_2 alpha" style="margin-top:2em;"><a href="http://www.mobihealthnews.com/" target="_blank"><img src="img/sponsorLogo-mobiHealthNews.png" alt="Mobi Health News" /></a></div>

			</section>
		
		<div class="clearfix"></div>
		</div>
    </footer>
  

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <!-- // <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    //   <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script> -->


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>

  
</form>
</body>
<!-- InstanceEnd --></html>
