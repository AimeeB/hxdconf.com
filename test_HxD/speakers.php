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
 <title>HxD Speakers | Healthcare Experience Design Conference 2012</title>
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
	<!-- <link rel="stylesheet" href="css/colorbox.css" /> -->
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
	<script type="text/javascript" src="js/scrollTo.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.colorbox.js"></script> -->
	<!-- // <script src="js/jquery.colorbox-min.js"></script> -->
	<script type="text/javascript" src="js/jquery.colorbox-variations.js"></script>
	<!-- <script type="text/javascript">
	$(document).ready(function(){
	// Initialize Backgound Stretcher
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
		var emailAndNameMessage = 'Please fill out your name and a valid email address. ';

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
	<!-- Fancybox -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.5.1.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
		 	<!-- <link rel="stylesheet" href="style.css" /> -->
	<script type="text/javascript">
		$(document).ready(function() {

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
			
			$("a[rel=example_group2]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
			
			$("a[rel=example_group3]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
			
			$("a[rel=example_group4]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			$(".various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});


		});
	</script>

	<script type="text/javascript" src="js/bgstretcher.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>	
<?php include_once("analytics.php") ?>

	<form id="form1" name="form1" method="post" action="">
	<nav id="main-nav">
				<ul>
					<li><a href="about.php">About</a></li>
					<li><a href="speakers.php" id="selected">Speakers</a></li>
					<li><a href="agenda.php">Agenda</a></li>
					<li><a href="sponsor.php">Sponsor</a></li>
					<li class="mobile-bottom" id="social-media-icons-mobile">
						<a class="social-media-icon" href="http://www.linkedin.com/groups?home=&gid=1996303&trk=anet_ug_hm" target="_blank"><div class="social-icon-div"><img src="img/linkedin-sm-white.png" /></div></a>
						<a class="social-media-icon" href="https://www.facebook.com/pages/Healthcare-Experience-Design-Conference/175279145836929" target="_blank" ><div class="social-icon-div"><img src="img/facebook-sm-white.png" /></div></a>
					<a class="social-media-icon" href="https://twitter.com/#!/hxdconf" target="_blank"><div class="social-icon-div"><img src="img/twitter-sm-white.png" /></div></a>
					<a class="social-media-icon" id="crowdvine-small" href="http://www.hxdconference2012.crowdvine.com" target="_blank"><div class="social-icon-div"><img src="img/crowdvine-sm-white.png" /></div>
					</a>
					</li>
					
					<li class="mobile-bottom"><a href="registration.php">Registration</a></li>
					<li class="mobile-bottom"><a href="logistics.php">At the Event</a></li>	
					
					<li id="social-media-icons"><a class="social-media-icon" href="https://www.facebook.com/pages/Healthcare-Experience-Design-Conference/175279145836929" target="_blank" ><div class="social-icon-div"><img src="img/facebook-sm.png" /></div></a>
					<a class="social-media-icon" href="http://www.linkedin.com/groups?home=&gid=1996303&trk=anet_ug_hm" target="_blank"><div class="social-icon-div"><img src="img/linkedin-sm.png" /></div></a>
					<a class="social-media-icon" href="https://twitter.com/#!/hxdconf" target="_blank"><div class="social-icon-div"><img src="img/twitter-sm.png" /></div></a>
					<a class="social-media-icon" id="crowdvine-small" href="http://www.hxdconference2012.crowdvine.com" target="_blank"><div class="social-icon-div"><img src="img/crowdvine-sm.png" /></div>
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
		<h2 class="section-header">
		HxD Speakers | 
		<a href="agenda.php">AGENDA</a>
	</h2>
	<h3 id="register" class="action-button"><a href=" http://www.regonline.com/hxd2012" target="_blank">REGISTER NOW!</a></h3>	
<div class="clearfix"></div>
<div class="grid_4 alpha">&nbsp;</div>
<p class="body-text grid_8 alpha omega">“Listening to BJ Fogg at least year's conference was a revelation for me. Even though I’d greatly admired his "stuff" for years, I took away things from his 45 minutes that I remember even now, which is for me is amazing.”  - Steve Krug</p>
<div class="clearfix"></div>
<h4>CONFIRMED SPEAKERS</h4>
<div id="speaker-list">
	<ul class="grid_4 alpha">
		<li><a href="#stephen-anderson"><span class="speaker-name">Stephen Anderson</span></a>, Ind. Consultant</li>
		<li><a href="#margot-bloomstein"><span class="speaker-name">Margot Bloomstein</span></a>, Appropriate, Inc.</li> 
		<li><a href="#jonathan-bush"><span class="speaker-name">Jonathan Bush</span></a>, athenahealth</li>
		<li><a href="#zen-chu"><span class="speaker-name">Zen Chu</span></a>, Accelerated Medical Ventures</li> 
		<li><a href="#josh-clark"><span class="speaker-name">Josh Clark</span></a>, Global Moxie</li>
		<li><a href="#adam-connor"><span class="speaker-name">Adam Connor</span></a>, Mad*Pow</li>
		<li><a href="#amy-cueva"><span class="speaker-name">Amy Cueva</span></a>, Mad*Pow</li>
		<li><a href="#meredith-dezutter"><span class="speaker-name">Meredith DeZutter</span></a>, Mayo Clinic</li>
		<li><a href="#dustin-ditommaso"><span class="speaker-name">Dustin DiTommaso</span></a>, Mad*Pow</li>
		<li><a href="#alexandra-drane"><span class="speaker-name">Alexandra Drane</span></a>, The Eliza Corporation</li>
		<!-- <li><a href="#zoe-finch-totten"><span class="speaker-name">Zoe Finch Totten</span></a>, The Full Yield</li> -->
		<li><a href="#joseph-flaherty"><span class="speaker-name">Joseph Flaherty</span></a>, Agamatrix</li>
		<li><a href="#jessica-floeh"><span class="speaker-name">Jessica Floeh</span></a>, Hanky Pancreas</li>		 	
	</ul>
	<ul class="grid_4">		    	
		<li><a href="#bj-fogg"><span class="speaker-name">BJ Fogg</span></a>, Stanford</li>
		<li><a href="#debra-gelman"><span class="speaker-name">Debra Gelman</span></a>, Nutrisystem</li>
		<li><a href="#megan-grocki"><span class="speaker-name">Megan Grocki</span></a>, Mad*Pow</li>
		<li><a href="#mike-hawley"><span class="speaker-name">Michael Hawley</span></a>, Mad*Pow</li>
		<li><a href="#chris-herot"><span class="speaker-name">Chris Herot</span></a>, SBR Health</li>
		<li><a href="#mitch-higashi"><span class="speaker-name">Mitch Higashi</span></a>, GE Healthcare</li>
		<li><a href="#gary-hirshberg"><span class="speaker-name">Gary Hirshberg</span></a>, Stonyfield Farms</li>
		<li><a href="#regina-holliday"><span class="speaker-name">Regina Holliday</span></a>, Patient Rights Advocate</li>
		<li><a href="#tim-kieschnick"><span class="speaker-name">Tim Kieschnick</span></a>, Kaiser Permanente</li>
	  	<li><a href="#devorah-klein"><span class="speaker-name">Devorah Klein</span></a>, Continuum</li>  
		<li><a href="#scott-lind"><span class="speaker-name">Scott Lind</span></a>, Siemens</li>	
	</ul>
	<ul class="grid_4 omega">
		<li><a href="#jerilyn-maclarenhall"><span class="speaker-name">Jerilyn MacLaren-Hall</span></a>, Sachs Insights</li> 
		<li><a href="#trapper-markelz"><span class="speaker-name">Trapper Markelz</span></a>, MeYou Health</li>
		<li><a href="#tod-moore"><span class="speaker-name">Tod Moore</span></a>, Sparling</li>
		<li><a href="#robyn-obrien"><span class="speaker-name">Robyn O'Brien</span></a>, AllergyKids Foundation</li>
		<li><a href="#todd-park"><span class="speaker-name">Todd Park</span></a>, US Health and Human Services</li>
		<li><a href="#jill-reed"><span class="speaker-name">Jill Reed</span></a>, Allscripts</li>
		<li><a href="#christian-richard"><span class="speaker-name">Christian Richard</span></a>, Philips Healthcare</li>
		<li><a href="#david-rose"><span class="speaker-name">David Rose</span></a>, MIT Media Lab</li>		
		<li><a href="#john-weiss"><span class="speaker-name">John Weiss</span></a>, WebMD</li>
		<li><a href="#john-yesko"><span class="speaker-name">John Yesko</span></a>, Walgreens</li>
		<li><a href="#anna-zandanel"><span class="speaker-name">Anna Zandanel, PhD</span></a>, Consultant</li>
		<li></li>
	</ul>
</div><!-- end speakers-list -->

<div class="clearfix"></div>

<br />
<nav id="sub-nav-keynote"><h3><span class="sub-nav">KEYNOTE SPEAKERS</span>&nbsp;&nbsp;<a href="#sub-nav-mainConf">MAIN CONFERENCE SPEAKERS</a> | <a href="#sub-nav-workshops">WORKSHOP SPEAKERS</a></h3></nav>
<br />
	
	<div class="keynote-box">
		<a rel="example_group" class="various3 grid_3 alpha" href="speakers/robynObrien.html">
			<img class="" src="img/profile-robynObrien.jpg" alt="Robyn O'Brien"/>
			<div class="overlay">
				<div class="hover-text"><h5>Robyn O'Brien</h5></div>
			</div>
			<div class="overlay-hover">
				<div class="hover-text"><h5>Robyn O'Brien</h5>
				<p class="body-text">A former financial and food industry analyst, author, Fulbright grant recipient and mother of four, Robyn brings compassion, insight and detailed analysis to her research...</p>
				<p class="body-text">Read more ></p></div>
			</div>
		</a>
	</div>
	       
	<div class="keynote-box">
		<a rel="example_group" class="various3 grid_3" href="speakers/garyHirshberg.html">
			<img class="" src="img/profile-garyBarn.jpg" alt="Gary Hirshberg"/>
			<div class="overlay">
				<div class="hover-text"><h5>Gary Hirshberg</h5></div>
			</div>
			<div class="overlay-hover">
				<div class="hover-text"><h5>Gary Hirshberg</h5>
				<p class="body-text">Gary is President, and CE-Yo of Stonyfield Farm, the world’s leading organic yogurt producer, and the author of Stirring It Up: How to Make Money and Save the World (Hyperion, 2008).</p>
				<p class="body-text">Read more ></p></div>
			</div>
		</a>
	</div>
	
	<div class="keynote-box">
		<a rel="example_group"  class="various3 grid_3" href="speakers/toddPark.html">
			<img class="" src="img/profile-toddPark.jpg" alt="Todd Park"/>
			<div class="overlay">
				<div class="hover-text"><h5>Todd Park</h5></div>
			</div>
			<div class="overlay-hover">
				<div class="hover-text"><h5>Todd Park</h5>
				<p class="body-text">Todd Park has served as HHS’s Chief Technology Officer since August 2009. His mission is to be a change agent and “entrepreneur-in-residence,” helping HHS harness the power of data...</p>
				<p class="body-text">Read more ></p></div>
			</div>
		</a>
	</div>
	 
	   
	<div class="keynote-box">
		<a rel="example_group"  class="various3 grid_3 omega" href="speakers/jonathanBush.html">
			<img class="" src="img/profile-jonathanBush.jpg" alt="Jonathan Bush"/>
			<div class="overlay">
				<div class="hover-text"><h5>Jonathan Bush</h5></div>
			</div>
			<div class="overlay-hover">
				<div class="hover-text"><h5>Jonathan Bush</h5>
				<p class="body-text">Athenahealth has emerged as one of the largest and fastest growing providers of on-demand billing, practice management and electronic health record services to medical groups in the US.</p>
				<p class="body-text">Read more ></p></div>
			</div>
		</a>
	</div>
	

	<!-- <div class="keynote-box">
			<a href="#bj-fogg" class="grid_3 omega">
				<img class="" src="img/profile-bjFogg.jpg" alt="BJ Fogg"/>
				<div class="overlay">
					<div class="hover-text"><h5>BJ Fogg</h5></div>
				</div>
				<div class="overlay-hover">
					<div class="hover-text"><h5>BJ Fogg</h5>
					<p class="body-text">A psychologist and innovator, BJ devotes at least half of his time to the industry projects. His work empowers people to think clearly about the psychology of persuasion...</p>
					<p class="body-text">Read more ></p></div>
				</div>
			</a>
		</div> -->
	
	<!-- <div class="clearfix"></div>
		<br />
		
		<div class="keynote-box">
			<a href="#amy-cueva" class="grid_3 alpha">
				<img class="" src="img/profile-amyCueva.jpg" alt="Amy Cueva"/>
				<div class="overlay">
					<div class="hover-text"><h5>Amy Cueva</h5></div>
				</div>
				<div class="overlay-hover">
					<div class="hover-text"><h5>Amy Cueva</h5>
					<p class="body-text">Amy’s passion for user-centered design methodology has been demonstrated in her work for clients like New England Journal of Medicine, Google, Aetna, Fidelity, and McKesson.</p>
					<p class="body-text">Read more ></p></div>
				</div>
			</a>
		</div>
		
		<div class="clearfix"></div> -->
	
	<!-- <nav id="sub-nav-allspeakers"><h3><a href="#sub-nav-keynote">KEYNOTE SPEAKERS</a> &nbsp;<span style="background-color:#333; padding:.5em; color:white">ALL SPEAKERS</span></h3> -->
	
	<div class="clearfix"></div>
	<br />
	<br />	
	
	<nav id="sub-nav-mainConf"><h3><a href="#sub-nav-keynote">KEYNOTE SPEAKERS</a>&nbsp;&nbsp;<span class="sub-nav">MAIN CONFERENCE SPEAKERS</span>&nbsp;&nbsp;<a href="#sub-nav-workshops">WORKSHOP SPEAKERS</a></h3></nav>
	
	<div class="clearfix"></div>
	<br />
	<br />
	
	<div id="stephen-anderson" class="grid_6 alpha">
		<a class="various3" rel="example_group" href="speakers/stephenAnderson.html"><img class="speaker-profile" src="img/profile-stephenAnderson.jpg" alt="Stephen Anderson" /></a>
		<div class="profile-content">
			<a class="various3" rel="example_group3" href="speakers/stephenAnderson.html"><h3 class="speaker-name">Stephen Anderson</h3></a>
			<h5 class="speaker-title"><a href="http://poetpainter.com/" target="_blank">Independent Consultant</a></h5>
			<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/stephenAnderson.html">The Quest for Emotional Engagement</a></h5>
			<p class="body-text">Stephen P. Anderson is an internationally recognized speaker and consultant based out of Dallas, Texas. He created the <a href="http://getmentalnotes.com/" target="_blank">Mental Notes card deck</a>, a tool that's widely used by product teams to apply psychology to interaction design. He’s also of the author of the book <a href="http://www.amazon.com/Seductive-Interaction-Design-Effective-Experiences/dp/0321725522/ref=sr_1_1?s=books&ie=UTF8&qid=1327365192&sr=1-1" target="_blank">Seductive Interaction Design</a>, which answers the question: "How do we get people to fall in love with our applications?”</p>
			<a class="various3" rel="example_group2" href="speakers/stephenAnderson.html">Read more ></a>
		</div>
	</div>
	   
	<div id="jonathan-bush" class="grid_6 omega">
				<a class="various3" rel="example_group" href="speakers/jonathanBush.html"><img class="speaker-profile" src="img/profile-jonathanBush.jpg" alt="Jonathan Bush" /></a>
			<div class="profile-content">
				<a class="various3" rel="example_group3" href="speakers/jonathanBush.html"><h3 class="speaker-name">Jonathan Bush</h3></a>
				<h5 class="speaker-title">President, CEO and Co-Founder, <a href="http://athenahealth.com" target="_blank">athenahealth</a></h5>
				<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/jonathanBush.html">Keynote</a></h5>
				<p class="body-text">Today, through its national network, athenaNet®, athenahealth has emerged as one of the largest and fastest growing providers of on-demand billing, practice management and electronic health record services to medical groups in the United States, but the vision is the same: bring process integrity to the delivery of health care.</p>
				<a class="various3" rel="example_group2" href="speakers/jonathanBush.html">Read more ></a>	
			</div>
	</div>
	   
	<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
	<br />
	<br />
	
	<div id="zen-chu" class="grid_6 alpha">
		<a class="various3" rel="example_group" href="speakers/zenChu.html"><img class="speaker-profile" src="img/profile-zenChu.jpg" alt="Zen Chu" /></a>
		<div class="profile-content">
		<a class="various3" rel="example_group3" href="speakers/zenChu.html"><h3 class="speaker-name">Zen Chu</h3></a>
		<h5 class="speaker-title">Healthcare Entrepreneur, <a href="http://www.acmedx.com" target="_blank">Accelerated Medical Ventures</a></h5>
		<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/zenChu.html">HACKING MEDICINE EXAMPLES FROM MIT &amp; BEYOND</a></h5>
		<p>Zen Chu (<a href=https://twitter.com/#!/accelmed target=”_blank”>@accelmed</a>) is a biomedical engineer and healthcare entrepreneur working across healthcare information technology, whole genome sequencing, medical devices, biomaterial implants, surgical tools, drug delivery, and regenerative medicine. He runs Accelerated Medical Ventures, serving as cofounder and investor for a few early-stage medical and software companies.</p>	
		<a class="various3" rel="example_group2" href="speakers/zenChu.html">Read more ></a>
		</div>	
	</div>
	
	<div id="josh-clark" class="grid_6 omega">
		<a class="various3" rel="example_group" href="speakers/joshClark.html"><img class="speaker-profile" src="img/profile-joshClark.jpg" alt="Josh Clark" /></a>
		<div class="profile-content">
		<a class="various3" rel="example_group3" href="speakers/joshClark.html"><h3 class="speaker-name">Josh Clark</h3></a>
		<h5 class="speaker-title">Founder, <a href="http://globalmoxie.com/index.shtml" target="_blank">Global Moxie</a></h5>
		<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/joshClark.html">Mobile Myths Debunked</a></h5>
		<p>Josh Clark is a designer specializing in mobile design strategy and user experience. He's author of "Tapworthy: Designing Great iPhone Apps" (O'Reilly, 2010) and "Best iPhone Apps" (O'Reilly, 2009). Josh's outfit Global Moxie offers consulting services, training, and product invention workshops to help creative organizations build tapworthy mobile apps and effective websites.</p>	
		<a class="various3" rel="example_group2" href="speakers/joshClark.html">Read more ></a>
		</div>	
	</div>
	    
	<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
	<br />
	<br />
	   
	<div id="adam-connor" class="grid_6 alpha">
			<a class="various3" rel="example_group" href="speakers/adamConnor.html"><img class="speaker-profile" src="img/profile-adamConnor.jpg" alt="Adam Connor" /></a>
			<div class="profile-content">
				<a class="various3" rel="example_group3" href="speakers/adamConnor.html"><h3 class="speaker-name">Adam Connor</h3></a>
				<h5 class="speaker-title">Experience Design Director, <a href="http://madpow.com" target="_blank">Mad*Pow</a></h5>
				<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/adamConnor.html">Research and Design Methods</a></h5>
				<p class="body-text">With a background in Computer Science, Film and Visual Design plus ten years of in Experience Design, Adam Connor brings a unique design perspective that contribute to Mad*Pow’s digital product design and strategy projects.</p>
				<a class="various3" rel="example_group2" href="speakers/adamConnor.html">Read more ></a>	
			</div>
	</div>
    
	<div id="amy-cueva" class="grid_6 omega">
			<a class="various3" rel="example_group" href="speakers/amyCueva.html"><img class="speaker-profile" src="img/profile-amyCueva.jpg" alt="Amy Cueva" /></a>
		<div class="profile-content">
			<a class="various3" rel="example_group3" href="speakers/amyCueva.html"><h3 class="speaker-name">Amy Cueva</h3></a>
			<h5 class="speaker-title">Founder, Chief Experience Officer, and Healthcare Principal, <a href="http://madpow.com" target="_blank">Mad*Pow</a></h5>
			<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/amyCueva.html">Opening Address</a></h5>
			<p>Amy Cueva is Founder, Chief Experience Officer, and Healthcare Principal at <a href="http://madpow.com" target="_blank">Mad*Pow</a>. Amy’s passion for user-centered design methodology has been demonstrated repeatedly in her work for clients like New England Journal of Medicine, Google, Aetna, Fidelity, and McKesson.</p>
			<a class="various3" rel="example_group2" href="speakers/amyCueva.html">Read more ></a>	
		</div>
	</div>
       
       
	<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
	<br />
	<br />
   
		        
		<div id="meredith-dezutter" class="grid_6 alpha">
					<a class="various3" rel="example_group" href="speakers/meredithDeZutter.html"><img class="speaker-profile" src="img/profile-meredithDeZutter.jpg" alt="Meredith DeZutter" /></a>
				<div class="profile-content">
					<a class="various3" rel="example_group3" href="speakers/meredithDeZutter.html"><h3 class="speaker-name">Meredith DeZutter</h3></a>
					<h5 class="speaker-title">Sr Service Designer, <a href="http://centerforinnovation.mayo.edu/transform/index.html" target="_blank">Mayo Clinic Center for Innovation</a> </h5>
					<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/meredithDeZutter.html">Aligning New Care Models with the Patient of the Future</a></h5>
					<p class="body-text">At Mayo, Meredith and the team of designers are exploring the potential for an embedded design group (located in a live clinical practice) to effect meaningful and sustained transformation within a large, traditional medical institution. They work on behalf of patient and provider communities to effect and evolve the culture of the Clinic but also to determine the most robust model for the integration of design in healthcare.</p>
					<a class="various3" rel="example_group2" href="speakers/meredithDeZutter.html">Read more ></a>	
				</div>
		</div>
   
	<div id="dustin-ditommaso" class="grid_6 omega">
	<a class="various3" rel="example_group" href="speakers/dustinDitommaso.html"><img class="speaker-profile" src="img/profile-dustinDitommaso.jpg" alt="Dustin DiTommaso" /></a>
	<div class="profile-content">
	<a class="various3" rel="example_group3" href="speakers/dustinDitommaso.html"><h3 class="speaker-name">Dustin DiTommaso</h3></a>
	<h5 class="speaker-title">Experience Director, <a href="http://madpow.com" target="_blank">Mad*Pow</a></h5>
	<h5 class="speech-title"></h5>
	<p class="body-text">Starting his career pulling double duty as a print graphic designer and a sound designer for new media, Dustin quickly learned that the work he created affected the actions of the audience experiencing it, and that this “silent majority” had a voice that needed to be heard and understood. Since that “Eureka!” moment, he has been blending research and design as a means to create value for both people and business.</p>
	<a class="various3" rel="example_group2" href="speakers/dustinDitommaso.html">Read more ></a>
	</div>
	</div>
   
		      
		<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
			<br />
			<br /> 
	
	    
			<div id="alexandra-drane" class="grid_6 alpha">
			<a class="various3" rel="example_group" href="speakers/alexandraDrane.html"><img class="speaker-profile" src="img/profile-alexandraDrane.jpg" alt="Zoe Finch Totten" /></a>
			<div class="profile-content">
			<a class="various3" rel="example_group3" href="speakers/alexandraDrane.html"><h3 class="speaker-name">Alexandra Drane</h3></a>
			<h5 class="speaker-title">President and Co-Founder, <a href="http://elizacorporation.com/" target="_blank" >Eliza Corporation</a></h5>
			<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/alexandraDrane.html">Talk Health to Me, Baby</a></h5>
			<p class="body-text">Alexandra has devoted her career to inspiring people to lead healthier, happier and more engaged lives through the use of innovative technology. Her entrepreneurial spirit and passion for technology and design have led to the launch of four successful healthcare ventures over the past 15 years. </p>
			<a class="various3" rel="example_group2" href="speakers/alexandraDrane.html">Read more ></a>
			</div>
			</div>
	  
	<div id="joseph-flaherty" class="grid_6 omega">
	<a class="various3" rel="example_group" href="speakers/josephFlaherty.html"><img class="speaker-profile" src="img/profile-josephFlaherty.jpg" alt="Joseph Flaherty" /></a>
	<div class="profile-content">
	<a class="various3" rel="example_group3" href="speakers/josephFlaherty.html"><h3 class="speaker-name">Joseph Flaherty</h3></a>
	<h5 class="speaker-title">Senior Manager, Strategic Marketing, <a href="http://wavesense.info/company" target="_blank">AgaMatrix</a> </h5>
	<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/josephFlaherty.html">Improve Outcomes with Checklists</a></h5>
	<p class="body-text">Flaherty's talk will detail lessons learned creating the first FDA cleared iOS medical device and the decision making process we used that helped us sell over 2 million meters and a billion sensors in partnership with the top pharmaceutical companies and retailers.</p>
	<a class="various3" rel="example_group2" href="speakers/josephFlaherty.html">Read more ></a>
	</div>
	</div>
	     
	<!-- <div id="zoe-finch-totten" class="grid_6 omega">
		<a class="various3" rel="example_group" href="speakers/zoeFinchTotten.html"><img class="speaker-profile" src="img/profile-zoeFinchTotten.jpg" alt="Zoe Finch Totten" /></a>
		<div class="profile-content">
		<a class="various3" rel="example_group3" href="speakers/zoeFinchTotten.html"><h3 class="speaker-name">Zoe Finch Totten</h3></a>
		<h5 class="speaker-title">Founder and CEO, <a href="http://thefullyield.com/" target="_blank" >The Full Yield, Inc.</a></h5>
		<h5 class="speech-title"></h5>
		<p class="body-text">Zoe Finch Totten is Founder and CEO of The Full Yield, Inc. For the past 20 years, Zoe has been developing and refining her vision for The Full Yield Inc., whose first program was successfully piloted with Harvard Pilgrim Health Care, Roche Bros. Supermarkets, two national food manufacturers, three food service vendors, and seven Boston-area employers between February 2010 and August 2011.</p>
		<a class="various3" rel="example_group2" href="speakers/zoeFinchTotten.html">Read more ></a>
		</div>
		</div>     -->
		           
			<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
				<br />
				<br /> 
		       
			<div id="jessica-floeh" class="grid_6 alpha">
						<a class="various3" rel="example_group" href="speakers/jessicaFloeh.html"><img class="speaker-profile" src="img/profile-jessicaFloeh.jpg" alt="Debra Gelman" /></a>
					<div class="profile-content">
						<a class="various3" rel="example_group3" href="speakers/jessicaFloeh.html"><h3 class="speaker-name">Jessica Floeh</h3></a>
						<h5 class="speaker-title">Founder, <a href="http://hankypancreas.com" target="_blank">Hanky Pancreas</a> </h5>
						<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/jessicaFloeh.html">Transformative Fashion for Diabetes Technologies</a></h5>
						<p class="body-text">Jessica Floeh is the founder of Hanky Pancreas, LLC, a series of functional yet fashionable products to better integrate wearable diabetes technologies with the human experience. The goal of Hanky Pancreas is to ignite positive conversations and holistically improve health for those living with diabetes.</p>
						<a class="various3" rel="example_group2" href="speakers/jessicaFloeh.html">Read more ></a>	
					</div>
			</div>    
		   	 
			 <div id="bj-fogg" class="grid_6 omega">
							<a class="various3" rel="example_group" href="speakers/bjfogg.html"><img class="speaker-profile" src="img/profile-bjFogg.jpg" /></a>
						<div class="profile-content">
							<a class="various3" rel="example_group3" href="speakers/bjfogg.html"><h3 class="speaker-name">BJ Fogg</h3></a>
							<h5 class="speaker-title">Director, <a href="http://captology.stanford.edu/" target="_blank">Persuasive Tech Lab</a> at Stanford University</h5>
							<h5 class=""></h5>
							<p>A psychologist and innovator, he devotes at least half of his time to industry projects. His work empowers people to think clearly about the psychology of persuasion – and then to convert those insights into real-world outcomes.</p>
							<a class="various3" rel="example_group2" href="speakers/bjfogg.html">Read more ></a>		
						</div>
					</div>
				                
				<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
					<br />
					<br />
			    
				         
				 <div id="debra-gelman" class="grid_6 alpha">
							<a class="various3" rel="example_group" href="speakers/debraGelman.html"><img class="speaker-profile" src="img/profile-debraGelman.jpg" alt="Debra Gelman" /></a>
						<div class="profile-content">
							<a class="various3" rel="example_group3" href="speakers/debraGelman.html"><h3 class="speaker-name">Debra Gelman</h3></a>
							<h5 class="speaker-title">Director, User Experience, <a href="http://nutrisystem.com" target="_blank">Nutrisystem, Inc</a> </h5>
							<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/debraGelman.html">Ready or not? How design can inspire &amp; support behavioral change</a></h5>
							<p class="body-text">Debra Gelman leads the user experience for <a href=”http://nutrisystem.com” target=”_blank”>Nutrisystem.com</a>, America¹s number one home delivery weight loss company. Through research, design and testing, Deb and her team develop web and mobile products which help Nutrisystem customers lead healthier lives.</p>
							<a class="various3" rel="example_group2" href="speakers/debraGelman.html">Read more ></a>	
						</div>
				</div>   
			                   
			<div id="megan-grocki" class="grid_6 omega">
						<a class="various3" rel="example_group" href="speakers/meganGrocki.html"><img class="speaker-profile" src="img/profile-meganGrocki.jpg" alt="Megan Grocki" /></a>
					<div class="profile-content">
						<a class="various3" rel="example_group3" href="speakers/meganGrocki.html"><h3 class="speaker-name">Megan Grocki</h3></a>
						<h5 class="speaker-title">Experience Design Director, <a href="http://madpow.com" target="_blank">Mad*Pow</a> </h5>
						<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/meganGrocki.html">Research and Design Methods</a></h5>
						<p class="body-text">With 15 years of experience in marketing, research and experience design, Megan specializes in helping clients discover the attitudes, intents and behaviors of their users and understand what is truly important to them. By being the ultimate user advocate, she is able to improve the organization and presentation of content and refine the messaging in a way that rings true with the audience(s) and meets business goals.</p>
						<a class="various3" rel="example_group2" href="speakers/meganGrocki.html">Read more ></a>	
					</div>
			</div>
  			            	        
			<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
						<br />
						<br />
             
				<div id="mike-hawley" class="grid_6 alpha">
							<a class="various3" rel="example_group" href="speakers/mikeHawley.html"><img class="speaker-profile" src="img/profile-mikeHawley.jpg" alt="Mike Hawley" /></a>
						<div class="profile-content">
							<a class="various3" rel="example_group3" href="speakers/mikeHawley.html"><h3 class="speaker-name">Michael Hawley</h3></a>
							<h5 class="speaker-title">Chief Design Officer, <a href="http://madpow.com" target="_blank">Mad*Pow</a> </h5>
							<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/mikeHawley.html">Research and Design Methods</a></h5>
							<p class="body-text">As the leader of Mad*Pow's user experience team, Michael leverages 15 years experience in the software industry and expertise in user experience research and usability design to deliver value to clients such as Fidelity, Autodesk and Monster.</p>
							<a class="various3" rel="example_group2" href="speakers/mikeHawley.html">Read more ></a>	
						</div>
				</div>
			          
				<div id="chris-herot" class="grid_6 omega">
						<a class="various3" rel="example_group" href="speakers/chrisHerot.html"><img class="speaker-profile" src="img/profile-chrisHerot.jpg" alt="Chris Herot" /></a>
						<div class="profile-content">
							<a class="various3" rel="example_group3" href="speakers/chrisHerot.html"><h3 class="speaker-name">Chris Herot</h3></a>
							<h5 class="speaker-title">CEO and Co-founder, <a href="http://sbrhealth.com" target="_blank">SBR Health</a></h5>
							<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/chrisHerot.html">Improving the usability of televideo technologies</a></h5>
							<p class="body-text">Chris Herot is the CEO and co-founder of SBR Health. Prior to launching SBR in 2010, Chris was Chief Product Officer at VSee Lab, a provider of high quality, low bandwidth and low cost videoconferencing solutions to enterprises and governments. </p>
							<a class="various3" rel="example_group2" href="speakers/chrisHerot.html">Read more ></a>	
						</div>
				</div>
				                 
					<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
					<br />
					<br />
				   
						<div id="mitch-higashi" class="grid_6 alpha">
								<a class="various3" rel="example_group" href="speakers/mitchHigashi.html"><img class="speaker-profile" src="img/profile-mitchHigashi.jpg" alt="Mitch Higashi" /></a>
								<div class="profile-content">
									<a class="various3" rel="example_group3" href="speakers/mitchHigashi.html"><h3 class="speaker-name">Mitch Higashi</h3></a>
									<h5 class="speaker-title">Chief Economist, <a href="http://gehealthcare.com" target="_blank">GE Healthcare</a></h5>
									<h5 class="speech-title"><a class="various3" rel="example_group" href="speakers/mitchHigashi.html">SimIndia</a></h5>
									<p class="body-text">As Chief Economist for GE Healthcare, Mitch Higashi leads a team that is responsible for health economics, global pricing, reimbursement, and health policy. His team seeks to demonstrate the value of healthcare technology by improving cost, quality, and access for all stakeholders.</p>
									<a class="various3" rel="example_group2" href="speakers/mitchHigashi.html">Read more ></a>	
								</div>
						</div>
                     
					<div id="gary-hirshberg" class="grid_6 omega">
						<a class="various3" rel="example_group" href="speakers/garyHirshberg.html"><img class="speaker-profile" src="img/profile-garyBarn.jpg" alt="Gary Hirshberg" /></a>
						<div class="profile-content">
							<a class="various3" rel="example_group3" href="speakers/garyHirshberg.html"><h3 class="speaker-name">Gary Hirshberg</h3></a>
							<h5 class="speaker-title">Chairman of the Board, <a href="http://stonyfield.com" target="_blank">Stonyfield Farm</a></h5>
							<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/garyHirshberg.html">Keynote</a></h5>
							<p class="body-text">Gary Hirshberg is the husband of writer Meg Hirshberg and the father of three yogurt eaters. He is President, and CE-Yo of Stonyfield Farm, the world’s leading organic yogurt producer, and the author of Stirring It Up: How to Make Money and Save the World (Hyperion, 2008). </p>
							<a class="various3" rel="example_group2" href="speakers/garyHirshberg.html">Read more ></a>
						</div>
					</div>
                        <div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
					<br />
					<br />
					 
				<div id="regina-holliday" class="grid_6 alpha">
					<a class="various3" rel="example_group" href="speakers/reginaHolliday.html"><img class="speaker-profile" src="img/profile-reginaHolliday.jpg" alt="Regina Holliday" /></a>
					<div class="profile-content">
						<a class="various3" rel="example_group3" href="speakers/reginaHolliday.html"><h3 class="speaker-name">Regina Holliday</h3></a>
						<h5 class="speaker-title"><a href="http://reginaholliday.blogspot.com/" target="_blank">Artist and Patient Rights Advocate</a></h5>
						<h5 class="speech-title"><a class="various3" rel="example_group" href="speakers/reginaHolliday.html">What does art have to do with medicine?</a></h5>
						<p class="body-text">Regina began painting a series of murals depicting the need for clarity and transparency in medical records. This advocacy mission was inspired by her husband Frederick Allen Holliday II and his struggle to get appropriate care during 11 weeks of continuous hospitalization at 5 facilities. </p>
						<a class="various3" rel="example_group2" href="speakers/reginaHolliday.html">Read more ></a>	
					</div>
				</div>  
				           
				    
					<div id="tim-kieschnick" class="grid_6 omega">
						<a class="various3" rel="example_group" href="speakers/timKieschnick.html"><img class="speaker-profile" src="img/profile-timKieschnick.jpg" alt="Tim Kieschnick" /></a>
						<div class="profile-content">
						<a class="various3" rel="example_group3" href="speakers/timKieschnick.html"><h3 class="speaker-name">Tim Kieschnick</h3></a>
						<h5 class="speaker-title">Manager of Service Strategy, <a href="https://healthy.kaiserpermanente.org/html/kaiser/index.shtml" target="_blank">Kaiser Permanente</a></h5>
						<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/timKieschnick.html">Data are People Too</a></h5>
						<p>Tim Kieschnick has spent over 20 years developing, implementing, and evaluating programs that put technology-based tools into the hands of health care consumers and purchasers. Tim created the strategy that has resulted in over 3,000,000 Kaiser Permanente members interacting with their physicians and medical records online.</p>	
						<a class="various3" rel="example_group2" href="speakers/timKieschnick.html">Read more ></a>
						</div>	
					</div>  
				                
					<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
					<br />
					<br />		
				    
					<div id="devorah-klein" class="grid_6 alpha">
						<a class="various3" rel="example_group" href="speakers/devorahKlein.html"><img class="speaker-profile" src="img/profile-devorahKlein.jpg" alt="Devorah Klein" /></a>
						<div class="profile-content">
							<a class="various3" rel="example_group3" href="speakers/devorahKlein.html"><h3 class="speaker-name">Devorah Klein</h3></a>
							<h5 class="speaker-title">PhD Principal, Human Centered Design, <a href="http://continuuminnovation.com" target="_blank">Continuum</a></h5>
							<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/devorahKlein.html">Designing a Healthcare Ecosystem</a></h5>
							<p class="body-text">A psychologist and designer, Devorah is passionate about helping people meet their goals. Whether the goal is to lose weight, control insulin levels, or remember to change hearing aid batteries, Devorah works to understand people’s needs and barriers to change. 
							</p>
							<a class="various3" rel="example_group2" href="speakers/devorahKlein.html">Read more ></a>
						</div>
					</div>  
				    
					<div id="scott-lind" class="grid_6 omega">
						<a class="various3" rel="example_group" href="speakers/scottLind.html"><img class="speaker-profile" src="img/profile-scottLind.jpg" alt="Scott Lind" /></a>
						<div class="profile-content">
							<a class="various3" rel="example_group3" href="speakers/scottLind.html"><h3 class="speaker-name">Scott Lind</h3></a>
							<h5 class="speaker-title">Director of User Experience, <a href="http://medical.siemens.com" target="_blank">Siemens Healthcare</a></h5>
							<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/scottLind.html">The Secret Life of EHRs</a></h5>
							<p class="body-text">Scott is the Director of User Experience at Siemens Healthcare, near Philadelphia, where he leads a team that designs electronic health record (EHR) products used by clinicians in hospitals throughout the U.S. and Europe. He is also the co-chair of the EHR Vendor Association's Quality and Clinician Experience Workgroup. 
							</p>
							<a class="various3" rel="example_group2" href="speakers/scottLind.html">Read more ></a>
						</div>
					</div>
  				             
					<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
					<br />
					<br />
				     
					<div id="trapper-markelz" class="grid_6 alpha">
					<a class="various3" rel="example_group" href="speakers/trapperMarkelz.html"><img class="speaker-profile" src="img/profile-trapperMarkelz.jpg" alt="Trapper Markelz" /></a>
					<div class="profile-content">
					<a class="various3" rel="example_group3" href="speakers/trapperMarkelz.html"><h3 class="speaker-name">Trapper Markelz</h3></a>
					<h5 class="speaker-title">Head of Product, <a href="http://meyouhealth.com" target="_blank">MeYou Health</a></h5>
					<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/trapperMarkelz.html">Overcoming Indifference</a></h5>
					<p class="body-text">Trapper Markelz has more than 12 years of experience building consumer-facing web products that focus on community and conversation. He is currently Head of Product at <a href="www.meyouhealth.com" target="_blank">MeYou Health</a>, where he leads a team in developing products that empower users to improve their well-being.
					</p>
					<a class="various3" rel="example_group2" href="speakers/trapperMarkelz.html">Read more ></a>
					</div>
					</div> 
				     
					<div id="tod-moore" class="grid_6 omega">
					<a class="various3" rel="example_group" href="speakers/todMoore.html"><img class="speaker-profile" src="img/profile-todMoore.jpg" alt="Tod Moore" /></a> 
					<div class="profile-content">
					<a class="various3" rel="example_group3" href="speakers/todMoore.html"><h3 class="speaker-name">Tod Moore</h3></a>
					<h5 class="speaker-title">Principal, Technology Consulting, <a href="http://sparling.com" target="_blank">Sparling</a></h5>
					
					<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/todMoore.html">Weathering the perfect storm</a></h5>
					<p class="body-text">Tod's presentation will discuss a new model for managing the technology avalanche based upon business analysis, use-case development, and comprehensive program management.  With an emerging track record of success, this new model eliminates shortcomings of the current design development system, and centralizes ownership/leadership of the full technology program.
					</p>
					<a class="various3" rel="example_group2" href="speakers/todMoore.html">Read more ></a>
					</div>
					</div>
				            
					<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
					<br />
					<br />
				    
					<div id="robyn-obrien" class="grid_6 alpha">
							<a class="various3" rel="example_group" href="speakers/robynObrien.html"><img class="speaker-profile" src="img/profile-robynObrien.jpg" alt="Robyn O'Brien" /></a>
						<div class="profile-content">
							<a class="various3" rel="example_group3" href="speakers/robynObrien.html"><h3 class="speaker-name">Robyn O'Brien</h3></a>
							<h5 class="speaker-title">Founder, <a href="http://www.allergykids.com/" target="_blank">AllergyKids Foundation</a></h5>
							<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/robynObrien.html">Keynote</a></h5>
							<p>A former financial and food industry analyst, author, Fulbright grant recipient and mother of four, Robyn O’Brien brings compassion, insight and detailed analysis to her research on the health of the American families and its food system. She has been called "food's Erin Brockovich" by the New York Times.</p>	
							<a class="various3" rel="example_group2" href="speakers/robynObrien.html">Read more ></a>
						</div>
					</div>
                      
					<div id="todd-park" class="grid_6 omega">
							<a class="various3" rel="example_group" href="speakers/toddPark.html"><img class="speaker-profile" src="img/profile-toddPark.jpg" alt="Todd Park" /></a>
						<div class="profile-content">
							<a class="various3" rel="example_group3" href="speakers/toddPark.html"><h3 class="speaker-name">Todd Park</h3></a>
							<h5 class="speaker-title">Chief Technology Officer, <a href="http://www.hhs.gov" target="_blank">US Department of Health and Human Services</a></h5>
							<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/toddPark.html">Unleashing the Power of Open Data and Innovation</a></h5>
							<p class="body-text">Todd Park has served as HHS’s Chief Technology Officer since August 2009. In this role, his mission is to be a change agent and “entrepreneur-in-residence,” helping HHS harness the power of data, technology, and innovation to improve the health of the nation.</p>
							<a class="various3" rel="example_group2" href="speakers/toddPark.html">Read more ></a>
						</div>
					</div>
				      
					 <div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
						<br />
						<br />  
					<div id="christian-richard" class="grid_6 alpha">
					<a class="various3" rel="example_group" href="speakers/christianRichard.html">
					<div class="profile-content">
					<a class="various3" rel="example_group3" href="speakers/christianRichard.html"><h3 class="speaker-name">Christian Richard</h3></a>
					<h5 class="speaker-title">Interaction Designer, <a href="http://www.healthcare.philips.com/us_en/" target="_blank">Philips Healthcare</a></h5> 
					<div class="clearfix"></div>
					<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/christianRichard.html">Design for Emergency Medical Services</a></h5>
					<p class="body-text">Christian Richard is the lead UI designer responsible for Philips Healthcare’s award-winning Automatic External Defibrillators.  He has championed a human-centered design process, leading extensive user testing with firefighters, police personnel, MERT teams, and hospital personnel, and has collaborated with healthcare teams at the Mayo Clinic and many EMS organizations across the United States.</p>
					<a class="various3" rel="example_group2" href="speakers/christianRichard.html">Read more ></a>
					</div>
					</div>
				   
					 
					  <div id="jill-reed" class="grid_6 omega">
					<a class="various3" rel="example_group" href="speakers/jillReed.html"><img class="speaker-profile" src="img/profile-jillReed.jpg" alt="Jill Reed" /></a>
					<div class="profile-content">
					<a class="various3" rel="example_group3" href="speakers/jillReed.html"><h3 class="speaker-name">Jill Reed</h3></a>
					<h5 class="speaker-title">User Experience Research Manager, <a href="http://allscripts.com" target="_blank">Allscripts Healthcare</a></h5>
					<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/jillReed.html">Go with the Flow: 
					EMR Design that Accommodates Physical and Procedural Workflows</a></h5>
					<p class="body-text">Jill Reed is a researcher and designer who is obsessed with the bettering the human experience in healthcare. She has spent her career exploring innovative, fun and compelling ways to improve healthcare technologies. She currently serves as the UX Research Manager at Allscripts Healthcare.</p>
					<a class="various3" rel="example_group2" href="speakers/jillReed.html">Read more ></a>
					</div>
					</div> 
					     
					 <div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
						<br />
						<br />
					   
					 <div id="david-rose" class="grid_6 alpha">
						<a class="various3" rel="example_group" href="speakers/davidRose.html"><img class="speaker-profile" src="img/profile-davidRose.jpg" alt="David Rose" /></a>
						<div class="profile-content">
						<a class="various3" rel="example_group3" href="speakers/davidRose.html"><h3 class="speaker-name">David Rose</h3></a>
						<h5 class="speaker-title">Entrepreneur and Instructor, <a href="http://media.mit.edu/" target="_blank">MIT Media Lab</a></h5>
						<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/davidRose.html">Juicy Feedback Loops</a></h5>
						<p class="body-text">David Rose is an award-winning entrepreneur and instructor at the <a href="http://media.mit.edu/" target="_blank">MIT Media Lab</a>. He specializes in novel interfaces which make the physical environment an interface to digital information.  </p>
						<a class="various3" rel="example_group2" href="speakers/davidRose.html">Read more ></a>
						</div>
						</div>
				     
					<div id="john-weiss" class="grid_6 omega">
								<a class="various3" rel="example_group" href="speakers/johnWeiss.html"><img class="speaker-profile" src="img/profile-johnWeiss.jpg" alt="John Weiss" /></a>
							<div class="profile-content">
								<a class="various3" rel="example_group3" href="speakers/johnWeiss.html"><h3 class="speaker-name">John Weiss</h3></a>
								<h5 class="speaker-title">Executive Creative Director, <a href="http://webmd.com" target="_blank">WebMD</a> </h5>
								<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/johnWeiss.html">Conscious by Design</a></h5>
								<p class="body-text">As the Executive Creative Director of WebMD Health Services, John’s work is guided by purpose, passion, simplicity, beauty, innovation and surprise. He is responsible for crafting online experiences that change behavior and ultimately improve lives.</p>
								<a class="various3" rel="example_group2" href="speakers/johnWeiss.html">Read more ></a>	
							</div>
					</div> 
					   
					 <div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
						<br />
						<br />
                     
					<div id="john-yesko" class="grid_6 alpha">
								<a class="various3" rel="example_group" href="speakers/johnYesko.html"><img class="speaker-profile" src="img/profile-johnYesko.jpg" alt="John Yesko" /></a>
							<div class="profile-content">
								<a class="various3" rel="example_group3" href="speakers/johnYesko.html"><h3 class="speaker-name">John Yesko</h3></a>
								<h5 class="speaker-title">Director of User Experience, <a href="http://walgreens.com" target="_blank">Walgreens E-Commerce</a> </h5>
								<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/johnYesko.html">7 User Experience Principles for Online Self-Service</a></h5>
								<p class="body-text">John Yesko is Director of User Experience at Walgreens E-Commerce in Chicago. He is responsible for the customer experience at the company’s websites (Walgreens.com, drugstore.com and Beauty.com), as well as in-store interfaces and mobile applications.</p>
								<a class="various3" rel="example_group2" href="speakers/johnYesko.html">Read more ></a>	
							</div>
					</div>
				   
					<div id="anna-zandanel" class="grid_6 omega">
								<a class="various3" rel="example_group" href="speakers/annaZandanel.html"><img class="speaker-profile" src="img/profile-annaZandanel.jpg" alt="Anna Zandanel" /></a> 
							<div class="profile-content">
								<a class="various3" rel="example_group3" href="speakers/annaZandanel.html"><h3 class="speaker-name">Anna Zandanel, PhD</h3></a>
								<h5 class="speaker-title">Consultant</a> </h5>
								<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/annaZandanel.html">Design &amp; Innovation in Intensive Medicine Administration</a></h5>
								<p class="body-text">Since 2007, Anna has collaborated and worked with the IUAV University of Venice, where currently she is contributing to the Design and Innovation for Intensive Medicine Administration project. Topics of the project are: chemotherapic medicine preparation, and management, administration and design sciences for process analysis and improvement of the medicine path.</p>
								<a class="various3" rel="example_group2" href="speakers/annaZandanel.html">Read more ></a>	
							</div>
					</div>

					<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
					<br />
					<br />
					<br />
			
						<nav id="sub-nav-workshops"><h3><a href="#sub-nav-keynote">KEYNOTE SPEAKERS</a> | <a href="#sub-nav-mainConf">MAIN CONFERENCE SPEAKERS</a>&nbsp;&nbsp;<span class="sub-nav">WORKSHOP SPEAKERS</span></h3></nav>
							<div class="clearfix"></div>
							<br />
							<br />
								<div id="bj-fogg2" class="grid_6 alpha">
											<a class="various3" rel="example_group" href="speakers/bjfogg.html"><img class="speaker-profile" src="img/profile-bjFogg.jpg" /></a>
										<div class="profile-content">
											<a class="various3" rel="example_group3" href="speakers/bjfogg.html"><h3 class="speaker-name">BJ Fogg</h3></a>
											<h5 class="speaker-title">Director, <a href="http://captology.stanford.edu/" target="_blank">Persuasive Tech Lab</a> at Stanford University</h5>
											<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/bjfogg.html">Behavioral Change Bootcamp</a></h5>
											<p>A psychologist and innovator, he devotes at least half of his time to industry projects. His work empowers people to think clearly about the psychology of persuasion – and then to convert those insights into real-world outcomes.</p>
											<a class="various3" rel="example_group2" href="speakers/bjFogg.html">Read more ></a>		
										</div>
									</div>

									<div id="amy-cueva2" class="grid_6 omega">
											<a class="various3" rel="example_group" href="speakers/amyCueva.html"><img class="speaker-profile" src="img/profile-amyCueva.jpg" alt="Amy Cueva" /></a>
										<div class="profile-content">
											<a class="various3" rel="example_group3" href="speakers/amyCueva.html"><h3 class="speaker-name">Amy Cueva</h3></a>
											<h5 class="speaker-title">Founder, Chief Experience Officer, and Healthcare Principal, <a href="http://madpow.com" target="_blank">Mad*Pow</a></h5>
											<h5 class="speech-title"><a class="various3" rel="example_group" href="speakers/amyCueva.html">Designing Communities of Care</a></h5>
											<p>Amy Cueva is Founder, Chief Experience Officer, and Healthcare Principal at <a href="http://madpow.com" target="_blank">Mad*Pow</a>. Amy’s passion for user-centered design methodology has been demonstrated repeatedly in her work for clients like New England Journal of Medicine, Google, Aetna, Fidelity, and McKesson.</p>
											<a class="various3" rel="example_group2" href="speakers/amyCueva.html">Read more ></a>	
										</div>
									</div>

									<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
										<br />
										<br />	

									<div id="megan-grocki2" class="grid_6 alpha">
												<a class="various3" rel="example_group" href="speakers/meganGrocki.html"><img class="speaker-profile" src="img/profile-meganGrocki.jpg" alt="Megan Grocki" /></a>
											<div class="profile-content">
												<a class="various3" rel="example_group3" href="speakers/meganGrocki.html"><h3 class="speaker-name">Megan Grocki</h3></a>
												<h5 class="speaker-title">Experience Design Director, <a href="http://madpow.com" target="_blank">Mad*Pow</a> </h5>
												<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/meganGrocki.html">Mapping the Patient Journey</a></h5>
												<p class="body-text">With 15 years of experience in marketing, research and experience design, Megan specializes in helping clients discover the attitudes, intents and behaviors of their users and understand what is truly important to them. By being the ultimate user advocate, she is able to improve the organization and presentation of content and refine the messaging in a way that rings true with the audience(s) and meets business goals.</p>
												<a class="various3" rel="example_group2" href="speakers/meganGrocki.html">Read more ></a>	
											</div>
									</div>



										<div id="adam-connor2" class="grid_6 omega">
												<a class="various3" rel="example_group" href="speakers/adamConnor.html"><img class="speaker-profile" src="img/profile-adamConnor.jpg" alt="Adam Connor" /></a>
												<div class="profile-content">
													<a class="various3" rel="example_group3" href="speakers/adamConnor.html"><h3 class="speaker-name">Adam Connor</h3></a>
													<h5 class="speaker-title">Experience Design Director, <a href="http://madpow.com" target="_blank">Mad*Pow</a></h5>
													<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/adamConnor.html">Research-Inspired Design Studio</a></h5>
													<p class="body-text">With a background in Computer Science, Film and Visual Design plus ten years of in Experience Design, Adam Connor brings a unique design perspective that contribute to Mad*Pow’s digital product design and strategy projects.</p>
													<a class="various3" rel="example_group2" href="speakers/adamConnor.html">Read more ></a>	
												</div>
										</div>

										<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
											<br />
											<br />

										<div id="mike-hawley2" class="grid_6 alpha">
													<a class="various3" rel="example_group" href="speakers/mikeHawley.html"><img class="speaker-profile" src="img/profile-mikeHawley.jpg" alt="Mike Hawley" /></a>
												<div class="profile-content">
													<a class="various3" rel="example_group3" href="speakers/mikeHawley.html"><h3 class="speaker-name">Michael Hawley</h3></a>
													<h5 class="speaker-title">Chief Design Officer, <a href="http://madpow.com" target="_blank">Mad*Pow</a> </h5>
													<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/mikeHawley.html">Research-Inspired Design Studio</a></h5>
													<p class="body-text">As the leader of Mad*Pow's user experience team, Michael leverages 15 years experience in the software industry and expertise in user experience research and usability design to deliver value to clients such as Fidelity, Autodesk and Monster.</p>
													<a class="various3" rel="example_group2" href="speakers/mikeHawley.html">Read more ></a>	
												</div>
										</div>		
                                        
										<div id="jerilyn-maclarenhall" class="grid_6 omega">
											<a class="various3" rel="example_group" href="speakers/jerilynMacLarenHall.html"><img class="speaker-profile" src="img/profile-jerilynMacLarenHall.jpg" alt="Jerilyn MacLaren-Hall" /></a>
											<div class="profile-content">
												<a class="various3" rel="example_group3" href="speakers/jerilynMacLarenHall.html"><h3 class="speaker-name">Jerilyn MacLaren-Hall</h3></a>
												<h5 class="speaker-title">VP, User Experience Practice Lead, <a href="http://sachsinsights.com" target="_blank">Sachs Insights</a> </h5>
												<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/jerilynMacLarenHall.html">Mapping the Patient Journey</a></h5>
												<p class="body-text">A passionate disciple of all things Experience Design, Jerilyn has been working for over a decade with clients such as Prostate Cancer Foundation, Merck, Pfizer, AstraZeneca, Web MD, RiteAid, and many others to design engaging and valuable experiences tailored to the specific needs and goals of each audience.</p>
												<a class="various3" rel="example_group2" href="speakers/jerilynMacLarenHall.html">Read more ></a>
											</div>
										</div>
                                        
										<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
											<br />
											<br />
                                       
										<div id="stephen-anderson2" class="grid_6 alpha">
											<a class="various3" rel="example_group" href="speakers/stephenAnderson.html"><img class="speaker-profile" src="img/profile-stephenAnderson.jpg" alt="Stephen Anderson" /></a>
											<div class="profile-content">
												<a class="various3" rel="example_group3" href="speakers/stephenAnderson.html"><h3 class="speaker-name">Stephen Anderson</h3></a>
												<h5 class="speaker-title"><a href="http://poetpainter.com/" target="_blank">Independent Consultant</a></h5>
												<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/stephenAnderson.html">The Quest for Emotional Engagement</a></h5>
												<p class="body-text">Stephen P. Anderson is an internationally recognized speaker and consultant based out of Dallas, Texas. He created the <a href="http://getmentalnotes.com/" target="_blank">Mental Notes card deck</a>, a tool that's widely used by product teams to apply psychology to interaction design. He’s also of the author of the book <a href="http://amzn.com/0321725522" target="_blank">Seductive Interaction Design</a>, which answers the question: "How do we get people to fall in love with our applications?”</p>
												<a class="various3" rel="example_group2" href="speakers/stephenAnderson.html">Read more ></a>
											</div>
										</div>
                                       
											<div id="dustin-ditommaso2" class="grid_6 omega">
											<a class="various3" rel="example_group" href="speakers/dustinDitommaso.html"><img class="speaker-profile" src="img/profile-dustinDitommaso.jpg" alt="Dustin DiTommaso" /></a>
											<div class="profile-content">
											<a class="various3" rel="example_group3" href="speakers/dustinDitommaso.html"><h3 class="speaker-name">Dustin DiTommaso</h3></a>
											<h5 class="speaker-title">Experience Director, <a href="http://madpow.com" target="_blank">Mad*Pow</a></h5>
											<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/dustinDitommaso.html">Beyond Gamification:</a></h5> <span style="text-transform:uppercase">Architecting Engagement Through Game Design Thinking</span>
											<p class="body-text">Starting his career pulling double duty as a print graphic designer and a sound designer for new media, Dustin quickly learned that the work he created affected the actions of the audience experiencing it, and that this “silent majority” had a voice that needed to be heard and understood. Since that “Eureka!” moment, he has been blending research and design as a means to create value for both people and business.</p>
											<a class="various3" rel="example_group2" href="speakers/dustinDitommaso.html">Read more ></a>
											</div>
											</div>	
                         
											
											<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
												<br />
												<br />
                                            
												<div id="margot-bloomstein" class="grid_6 omega">
															<a class="various3" rel="example_group" href="speakers/margotBloomstein.html"><img class="speaker-profile" src="img/profile-margotBloomstein.jpg" alt="Margot Bloomstein" /></a>
														<div class="profile-content">
															<a class="various3" rel="example_group3" href="speakers/margotBloomstein.html"><h3 class="speaker-name">Margot Bloomstein</h3></a>
															<h5 class="speaker-title">Principal, Brand and Content Strategist, <a href="http://appropriateinc.com" target="_blank">Appropriate, Inc</a>.</h5>
															<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/margotBloomstein.html">KICKING OFF YOUR CONTENT STRATEGY</a></h5>
															<p class="body-text">Margot Bloomstein (<a href="http://twitter.com/mbloomstein" target="_blank">@mbloomstein</a>) is the principal of Appropriate, Inc., a brand and content strategy consultancy based in Boston. Independently and in partnership with leading agencies, she creates brand-appropriate user experiences to help organizations engage their target audiences and project key messages with consistency and clarity. She's also the author of "Content Strategy at Work: Real-World Stories to Strengthen Every Interactive Project" (Morgan Kaufmann, 2012).</p>
															<a class="various3" rel="example_group2" href="speakers/margotBloomstein.html">Read more ></a>	
														</div>
												</div>


											<div id="josh-clark2" class="grid_6 omega">
												<a class="various3" rel="example_group" href="speakers/joshClark.html"><img class="speaker-profile" src="img/profile-joshClark.jpg" alt="Josh Clark" /></a>
												<div class="profile-content">
												<a class="various3" rel="example_group3" href="speakers/joshClark.html"><h3 class="speaker-name">Josh Clark</h3></a>
												<h5 class="speaker-title">Founder, <a href="http://globalmoxie.com/index.shtml" target="_blank">Global Moxie</a></h5>
												<h5 class="speech-title"><a class="various3" rel="example_group4" href="speakers/joshClark.html">Designing for Touch</a></h5>
												<p>Josh Clark is a designer specializing in mobile design strategy and user experience. He's author of "Tapworthy: Designing Great iPhone Apps" (O'Reilly, 2010) and "Best iPhone Apps" (O'Reilly, 2009). Josh's outfit Global Moxie offers consulting services, training, and product invention workshops to help creative organizations build tapworthy mobile apps and effective websites.</p>	
												<a class="various3" rel="example_group2" href="speakers/joshClark.html">Read more ></a>
												</div>	
											</div>

											<div class="clearfix"></div><a href="#container" class="float-right">Back to top ^</a>
												<br />
												<br />

								</div> <!-- end white content container -->
							</div><!-- end sub-page-container -->
							</div><!-- end of container -->
						<!-- InstanceEndEditable -->	

							
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
														fwrite($file, $fullnamepost . "," . $emailpost . "," . $_SERVER['REMOTE_ADDR'] . "\n");
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
						  //  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script> -->


						 <!-- scripts concatenated and minified via ant build script-->
						 <script defer src="js/plugins.js"></script>
						 <script defer src="js/script.js"></script>
						 <!-- end scripts-->


						 <!-- Change UA-XXXXX-X to be your site's ID -->
						 <script>
						  window._gaq = [['_setAccount','UA-27878607-1'],['_trackPageview'],['_trackPageLoadTime']];
						  Modernizr.load({
						   load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
						  });
						 </script>


</form>
</body>
<!-- InstanceEnd --></html>
			

				
			