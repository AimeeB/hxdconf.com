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
  <title>About The HxD Conference | Healthcare Experience Design Conference 2012</title>
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
	<form id="form1" name="form1" method="post" action="">
	<nav id="main-nav">
				<ul>
					<li><a href="about.php" id="selected">About</a></li>
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
					<li class="mobile-bottom"><a href="logistics.php">At the Event</a></li>	
					
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
			<div id="logo"><a href="index.php"><img src="img/logo-white.png" alt="Healthcare Experience Design Conference" alt="Healthcare Experience Design Conference 2012"/></a></div>

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

<article>	
	<h2 class="section-header">About</h2>
	<h3 id="register" class="action-button"><a href=" http://www.regonline.com/hxd2012" target="_blank">REGISTER NOW!</a></h3>	
	
	<p class="body-text">The Healthcare Experience Design Conference blends the powerhouse perspectives of healthcare thought leaders, product developers, and design implementers across a broad spectrum of healthcare technologies and delivery channels.</p>

	<p class="body-text">Informative, inspiring and above all practical, this conference will empower technologists, usability practitioners, design practitioners and thought leaders to improve healthcare technologies from electronic health records to web-based applications, medical devices, and human services.</p>
	</article>
	<br />
	<article>
	<h2 class="section-header">HxD Conference Announcment</h2>

	<p class="body-text"><span style="font-style:italic">From: Amy Cueva, Founder, Chief Experience Officer, and Healthcare Principal at <a href="http://www.madpow.com" target="_blank">Mad*Pow</a></span></p>
	<p class="body-text">It’s been almost six months since last year’s HxD Conference. We’ve been busy processing attendee feedback, reviewing the videos and transcripts posted at the conference site, and brainstorming ways to make the next conference even more informative and inspiring. And, honestly, we’re still coming down from the high of being surrounded by so much passion and commitment.
</p>
	<p class="body-text">We want the 2012 conference to have the same amazingly transformative energy, a renewed belief that together we can change the world for the better. But we’d also like participants to leave with a clear sense of direction and focus and some actionable insights and solid methods to put to use back in the real world. Dreams are great, but it takes lots of hard work to make them a reality.</p>
	
	<p class="body-text"><a href="http://www.madpow.net/Blog.aspx?blogpostID=112" target="_blank">Continue reading ></a></p>
	
	</article>

</div> <!-- end white content container -->
</div> <!-- end of sub-page-container -->
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
			<section id="sponsors">
				<h2 class="top-padding grid_12">Sponsors</h2>
								<div class="grid_2" style="margin-left:4%"><a href="http://gehealthcare.com" target="_blank"><img src="img/sponsorLogo-GEHealthcare.png" alt="GE Healthcare"/></a></div>
				                <div class="grid_2"><a href="http://continuuminnovation.com" target="_blank"><img src="img/sponsorlogo-continuum.png" alt="Continuum Innovation" /></a></div>
				                <div class="grid_2" style="margin-top:-1.5em;"><a href="http://userzoom.com" target="_blank"><img src="img/sponsorLogo-userzoom.png" alt="User Zoom" /></a></div>
				                <div class="grid_2" style="margin-top:1.5em;"><a href="http://aloftgroup.com" target="_blank"><img src="img/aloft-logo.png" alt="Aloft Group" /></a></div>
				<div class="grid_2" style="margin-top:1.5em;"><a href="http://axure.com" target="_blank"><img src="img/sponsorLogo-axure.png" alt="Axure" /></a></div>

							<div class="clearfix"></div>
				           	  <div class="grid_2" style="margin-top:1.5em; margin-left:4%"><a href="http://rosenfeldmedia.com" target="_blank"><img src="img/sponsorLogo-rosenfeld.png" alt="Rosenfeld" /></a></div>
							<div class="grid_2"  style="margin-top:1.5em;"><a href="http://www.connected-health.org" target="_blank"><img src="img/sponsorLogo-centerForConnectedHealth.png" alt="Connected Health"/></a></div>
				           <div class="grid_2"  style="margin-top:1em;"><a href="http://rockhealth.com" target="_blank"><img src="img/sponsorlogo-rockhealth.png" alt="Rock Health" /></a></div>
							<div class="grid_4"  style="margin-top:2em;"><a href="http://www.thefrontierproject.com" target="_blank"><img src="img/sponsorlogo-frontier.png" alt="Frontier Health" /></a></div>    
							<div class="clearfix"></div>
						   <div class="grid_2"  style="margin-top:3.5em; margin-left:7%"><a href="http://www.theatomgroup.com/" target="_blank"><img src="img/sponsorLogo-atom.png" alt="Atom" /></a></div> 
								    <div class="grid_2 omega"  style="margin-top:1.5em;"><a href="http://www.medcitynews.com/about-us-2/" target="_blank"><img src="img/sponsorLogo-medcityMedia.png" alt="MedCity Media" /></a></div>

						   <div class="grid_2 alpha" style="margin-top:2em;"><a href="http://www.mobihealthnews.com/" target="_blank"><img src="img/sponsorLogo-mobiHealthNews.png" alt="Mobi Health News" /></a></div>     
						   <div class="grid_2" style="margin-top:3em;"><a href="http://www.linkedin.com/groups?about=&gid=2181454&trk=anet_ug_grppro" target="_blank"><img src="img/sponsorLogo-wirelessHealth.png" alt="Wireless Health" /></a></div> 
						<div class="grid_2" style="margin-top:3em;"><a href="http://www.meyouhealth.com/" target="_blank"><img src="img/sponsorLogo-meYouHealth.png" alt="Me You Health" /></a></div> 
						

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
