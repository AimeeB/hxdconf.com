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
  <title> HxD Agenda | Healthcare Experience Design Conference 2012</title>
  <!-- InstanceEndEditable -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  
  	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	
	<meta name="description" content="The Healthcare Experience Design Conference blends the powerhouse perspectives of healthcare thought leaders, product developers, and design implementers across a broad spectrum of healthcare technologies and delivery channels." />
 
	
	<meta name="keywords" content="user experience design,healthcare, interaction design, usability, conference, design conference, experience design conference, healthcare conference, hxd, hxd conference, hxdconf" />   

  <!-- Mobile viewport -->
  <meta name="viewport" content="initial-scale = 1.0, user-scalable = no">

  <!-- CSS links -->
  
	<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" /> 
	<link rel="stylesheet" href="css/style.css" />
	 <link rel="stylesheet" href="css/style-768.css" />
	<link rel="stylesheet" href="css/style-525.css" /> 
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
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>	
<?php include_once("analytics.php") ?>

	<form id="form1" name="form1" method="post" action="">
	<?php include 'main-nav.php' ?>
			
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
		<a href="speakers.php">HxD Speakers</a> | 2012 HxD Agenda
	</h2>	
	   
	<nav id="sub-nav-monday"><h5><span class="sub-nav">MAIN CONFERENCE: Monday 03/26</span> | <a href="#sub-nav-tuesday">WORKSHOPS: Sunday 03/25 &amp; Tuesday 03/27</a></h5>  </nav>
		
<table id="agenda" border="1">

		<thead>
			<tr>
				<th scope="col" id="time"><h4>time</h4></th>
				<th scope="col" id="ballroomA"><h4>Ballroom A</h4></th>
				<th scope="col" id="ballroomB"><h4>Ballroom B</h4></th>
				<th scope="col" id="ballroomCDE"><h4>Ballroom C</h4></th>
			</tr>
		</thead>
		<tbody>
			<tr class="odd">
				<td class="time">8:15-8:45am</td>
				<td class="break" colspan="3">Breakfast and coffee (Hallway/Exhibit Hall)</td>
			</tr>
			<tr>
				<td class="time">8:45-9:00am</td>
				<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/amyCueva.html">Amy Cueva</a></span>, Mad*Pow,<br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/amyCueva.html">Opening Address</a></p></td>
				<td class="blank" colspan="2">&nbsp;</td>
			</tr>
			
			<tr class="odd">
				<td class="time">9:00-9:30am</td>
				<td class="keynote" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/robynObrien.html">Robyn O'Brien</a></span>, AllergyKids &amp; The Unhealthy Truth <br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/robynObrien.html">Keynote</a></p>
				<td class="blank" colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td class="time">9:35-10:05am</td>
				<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/timKieschnick.html">Tim Kieschnick</a></span>, Kaiser Permanente<br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/timKieschnick.html">Data are People Too - Visualizing the new Health Care Reform consumer</a></p></td>
				<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/jillReed.html">Jill Reed</a></span>, Allscripts, <br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/jillReed.html">Go with the Flow: 
				EMR Design that Accommodates Physical and Procedural Workflows</a></p></td>
				<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/todMoore.html">Tod Moore</a></span>, Sparling<br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/todMoore.html">Weathering the Perfect Storm: 
				Design &amp; Management Strategies for Hospital Technology Systems</a></p></td>
			</tr> 
				<tr>
					<td class="time">10:10-10:40am</td>
					<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/alexandraDrane.html">Alexandra Drane</a></span>, President and Co-Founder of the Eliza Corporation<br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/alexandraDrane.html">Talk Health to Me, Baby</a></p></td>
					<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/devorahKlein.html">Devorah Klein PhD</a></span>, Continuum Innovation<br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/devorahKlein.html">Failure By Design</a></p></td>
					<td class="agenda-item" rowspan="1"> Case Studies:
					<ul>
					<li><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/jessicaFloeh.html">Jessica Floeh</a></span>, Hanky Pancreas, <br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/jessicaFloeh.html">Transformative Fashion for Diabetes Technologies</a></p></li>
					<li><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/davidRose.html">David Rose</a></span>, Vitality, <br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/davidRose.html">Juicy Feedback Loops</a></p></li>
					<li><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/annaZandanel.html">Anna Zandanel, PhD</a></span>, Researcher, <br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/annaZandanel.html">Design &amp; Innovation in Intensive Medicine Administration</a></p></li>
					</ul>
					</td>
				</tr>
				   
				<tr class="odd">
					<td class="time">10:40-11:00am</td>
					<td class="break" colspan="3">Break (Hallway/Exhibit Hall): Smoothie Station -  Sponsored by Stonyfield Yogurt!</td>
				</tr>
				
				<tr class="odd">
						<td class="time">11:00-11:30am</td>
						<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/reginaHolliday.html">Regina Holliday</a></span>, Artist and Patient Rights Advocate<br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/reginaHolliday.html">What does art have to do with medicine?</a></p></td>
						<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/mitchHigashi.html">Mitch Higashi</a></span>, GE Healthcare<br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/mitchHigashi.html">SimIndia:  Solving Real Healthcare Problems in the Virtual World</a></p></td>
						<td class="agenda-item" rowspan="1"> Case Studies:
						<ul> 				
						<li><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/chrisHerot.html">Chris Herot</a></span>, SBR Health, <br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/chrisHerot.html">Improving the usability of televideo technologies</a></p></li> 
						<li><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/christianRichard.html">CHRISTIAN RICHARD</a></span>, Philips Healthcare, <br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/christianRichard.html">Design for Emergency Medical Services</a></p></li> 
						<li><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/zenChu.html">Zen Chu</a></span>, Healthcare Entrepreneur, <br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/zenChu.html">Hacking Medicine Examples from MIT &amp; Beyond</a></p></li> 
						</ul>
						</td>
				</tr>
				
				<tr>
						<td class="time">11:35am-12:20pm</td>
						<td class="keynote" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/garyHirshberg.html">Gary Hirshberg</a></span>, Stonyfield, <br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/garyHirshberg.html">Keynote: You Can Help People Be Healthier While Making a Profit</a></p> </td>
						<td class="blank" colspan="2">&nbsp;</td>
				</tr>
				
				<tr class="odd">
						<td class="time">12:20-1:10pm</td>
						<td class="break" colspan="3">Lunch</td>
				</tr>
				<tr>
						<td class="time">1:10-1:40pm</td>
						<td class="keynote" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/toddPark.html">Todd Park</a></span>, US Department of Health &amp; Human Services <br /> <p class="speech-title"><a class="various3" rel="example_group2" href="speakers/toddPark.html">Unleashing the Power of Open Data and Innovation to Improve Health</a></p>
						<td class="blank" colspan="2" rowspan="2">&nbsp;</td>
				</tr>
				
				<tr class="odd">
						<td class="time">1:40-2:10pm</td>
						<td class="keynote" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/bjfogg.html">BJ Fogg</a></span>, Stanford</td>
				</tr>
				
				<tr>
					<td class="time">2:15-2:45pm</td>
					<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/stephenAnderson.html">Stephen Anderson</a></span>, Independent Consultant<br /><p class="speech-title"><a class="various3" rel="example_group3" href="speakers/stephenAnderson.html">The Quest for Emotional Engagement</a></p></td>
					<td class="agenda-item"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/debraGelman.html">Debra Gelman</a></span>, Nutrisystem, <br /><p class="speech-title"><a class="various3" rel="example_group3" href="speakers/debraGelman.html">Ready or not? How design can inspire &amp; support behavioral change</a></p></td>
					<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/joshClark.html">Josh Clark</a></span>, Global Moxie<br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/joshClark.html">Mobile Myths Debunked</a></p></td>
				</tr>
				<tr class="odd">
					<td class="time">2:50-3:20pm</td>
					<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/dustinDitommaso.html">Dustin DiTommaso</a></span>, Mad*Pow, <br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/dustinDitommaso.html">Motivational Dynamics in Health Behavior Change</a></p></td>
					<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/scottLind.html">Scott Lind</a></span>, Siemens, <br /><p class="speech-title"><a class="various3" rel="example_group3" href="speakers/scottLind.html">The Secret Life of EHRs</a></p></td>
					<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/josephFlaherty.html">Joseph Flaherty</a></span>, AgaMatrix, <br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/josephFlaherty.html">Improve Outcomes with Checklists</p></td>
				</tr>
				<tr>
						<td class="time">3:20-3:40pm</td>
						<td class="break" colspan="3">Break (Hallway/Exhibit Hall): Smoothie Station -  Sponsored by Stonyfield Yogurt!</td>
				</tr>
				<tr class="odd">
						<td class="time">3:40-4:10pm</td>
						<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/meredithDeZutter.html">Meredith DeZutter</a></span>, Mayo Clinic, <br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/meredithDeZutter.html">Aligning New Care Models with the Patient of the Future</a></p></td>
						<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/trapperMarkelz.html">Trapper Markelz</a></span>, Me You Health<br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/trapperMarkelz.html">Three Useful Schemas in Health Product Design</a></p></td>
						<td class="agenda-item" rowspan="2"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/meganGrocki.html">Megan Grocki</a></span>, <span class="speaker-name"><a class="various3" rel="example_group" href="speakers/mikeHawley.html">Michael Hawley</a></span>, &amp; <span class="speaker-name"><a class="various3" rel="example_group" href="speakers/adamConnor.html">Adam Connor</a></span>, Mad*Pow  						
								<p style="padding-bottom:0.5em;" class="speech-title"><a class="various3" rel="example_group" href="speakers/researchAndDesignMethods.html">Research and Design Methods</a></p>
						</td>
				</tr>
				<tr>
						<td class="time">4:15-4:45pm</td>
						<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/johnWeiss.html">John Weiss</a></span>, WebMD, <br /><p class="speech-title"><a class="various3" rel="example_group2" href="speakers/johnWeiss.html">Conscious by Design</a></p></td>
						<td class="agenda-item" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/johnYesko.html">John Yesko</a></span>, Walgreens<br /><a class="various3" rel="example_group3" href="speakers/johnYesko.html"><p class="speech-title">7 User Experience Principles for Online Self-Service</p></a></td>
						
				</tr>
				<tr class="odd">
						<td class="time">4:50-5:20pm</td>
						<td class="keynote" colspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/jonathanBush.html">Jonathan Bush, Interviewee</a></span>, athenahealth, 
							&amp; <span class="speaker-name"><a class="various3" rel="example_group" href="speakers/brianDumaine.html">Brian Dumaine, Interviewer</a></span>, Fortune, 
							<p class="speech-title"><a class="various3" rel="example_group2" href="speakers/jonathanBush.html">Closing Keynote</a></p></td> 
						<td class="blank" colspan="2">&nbsp;</td>
				</tr>
				<tr>
						<td class="time">5:20-7:00pm</td>
						<td class="break" colspan="3">Reception and Networking</td>
				</tr>
	</tbody>
</table>

	<nav id="sub-nav-tuesday"><h5><a href="#sub-nav-monday">MAIN CONFERENCE: Monday 03/26</a> | <span class="sub-nav">WORKSHOPS: Sunday 03/25 &amp; Tuesday 03/27</span></h5></nav>  
	
	<table id="tuesday-agenda">
		<thead>
			<tr>
				<th scope="col" id="time"><h4>time</h4></th>
				<th scope="col" id="ballroomB"><h4>Full Day (03/25)</h4></th>
				<th scope="col" id="ballroomA"><h4>Full Day (03/27)</h4></th>
				<th scope="col" id="ballroomB"><h4>Half Day (03/27)</h4></th>
				<th scope="col" id="ballroomB"><h4>Half Day (03/27)</h4></th>
				<th scope="col" id="ballroomB"><h4>Half Day (03/27)</h4></th>				
			</tr>
			
			</thead>
			<tbody>
				<tr class="odd">
						<td class="time">9:00am-12:30pm</td>
						
						<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/bjfogg.html">BJ Fogg</a></span>, Stanford<br /><a class="various3" rel="example_group" href="speakers/bjfogg.html"><p class="speech-title">Masterclass in Behavior Design (SOLD OUT)</p></a></td> 
							
						<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/amyCueva.html">Amy Cueva</a></span>, Mad*Pow<br /><a class="various3" rel="example_group" href="speakers/amyCueva.html"><p class="speech-title">Designing Communities of Care</p></a></td>
						
						<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/mikeHawley.html">Michael Hawley</a></span>, &amp; <span class="speaker-name"><a class="various3" rel="example_group" href="speakers/adamConnor.html">Adam Connor</a></span>, Mad*Pow  						
								<p class="speech-title" style="padding-bottom:0.5em;"><a class="various3" rel="example_group" href="speakers/designStudio.html">Research-Inspired Design Studio</a></p> 
						   
						</td>
						<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/stephenAnderson.html">Stephen Anderson</a></span>, Independent Consultant<br /><p style="padding-bottom:0.5em;"><a class="various3" rel="example_group" href="speakers/stephenAnderson.html"><p class="speech-title">The Quest for Emotional Engagement</p></a></p></td>
				   
				 <td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/margotBloomstein.html">Margot Bloomstein</a></span>, Appropriate Inc.<br /><a class="various3" rel="example_group" href="speakers/margotBloomstein.html"><p class="speech-title">Content Strategy</p></a></td>	
				</tr>
				<tr>
						<td class="time">12:30-1:30pm</td>
						<td colspan="5">Lunch</td>
				</tr>
				<tr class="odd">
						<td class="time">1:30-5:00pm</td>
						 <td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/bjfogg.html">BJ Fogg</a></span>, Stanford<br /><a class="various3" rel="example_group" href="speakers/bjfogg.html"><p class="speech-title">Masterclass in Behavior Design (SOLD OUT)</p></a></td>
							<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/amyCueva.html">Amy Cueva</a></span>, Mad*Pow<br /><a class="various3" rel="example_group" href="speakers/amyCueva.html"><p class="speech-title">Designing Communities of Care</p></a></td>
						<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/jerilynMacLarenHall.html">Jerilyn MacLaren-Hall</a></span>, Sachs Insights, &amp; <span class="speaker-name"><a class="various3" rel="example_group" href="speakers/meganGrocki.html">Megan Grocki</a></span>, Mad*Pow, <br /><a class="various3" rel="example_group" href="speakers/patientJourney.html"><p class="speech-title">The Patient Journey</p></a>
						</td>
						<td class="agenda-item"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/dustinDitommaso.html">Dustin DiTommaso</a></span>, Mad*Pow<br /><a class="various3" rel="example_group" href="speakers/dustinDitommaso.html"><p class="speech-title">Beyond Gamification: Designing Behavior Change Games</p></a></td>
						<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/joshClark.html">Josh Clark</a></span>, Global Moxie<br /><a a class="various3" rel="example_group" href="speakers/joshClark.html"><p class="speech-title">Designing for Touch</p></a></td>
				</tr>
		</tbody>
	</table> <!-- end tuesday agenda large --> 
	 
	<div class="clearfix"></div> 
	
	<table id="tuesday-agenda-small-full">
		<thead>
			<tr>
				<th scope="col" id="time"><h4>time</h4></th>
				<th scope="col" id="ballroomB"><h4>Full Day (03/25)</h4></th>
				<th scope="col" id="ballroomA"><h4>Full Day (03/27)</h4></th>
			</tr>
			
			</thead>
			<tbody>
				<tr class="odd">
						<td class="time">9:00am-12:30pm</td>
						
						<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/bjfogg.html">BJ Fogg</a></span>, Stanford<br /><a class="various3" rel="example_group" href="speakers/bjfogg.html"><p class="speech-title">Masterclass in Behavior Design (SOLD OUT)</p></a></td> 
							
						<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/amyCueva.html">Amy Cueva</a></span>, Mad*Pow<br /><a class="various3" rel="example_group" href="speakers/amyCueva.html"><p class="speech-title">Designing Communities of Care</p></a></td>
  				</tr>
				<tr>
						<td class="time">12:30-1:30pm</td>
						<td colspan="5">Lunch</td>
				</tr>
				<tr class="odd">
						<td class="time">1:30-5:00pm</td>
						 <td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/bjfogg.html">BJ Fogg</a></span>, Stanford<br /><a class="various3" rel="example_group" href="speakers/bjfogg.html"><p class="speech-title">Masterclass in Behavior Design (SOLD OUT)</p></a></td>
							<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/amyCueva.html">Amy Cueva</a></span>, Mad*Pow<br /><a class="various3" rel="example_group" href="speakers/amyCueva.html"><p class="speech-title">Designing Communities of Care</p></a></td>
				</tr>
		</tbody>
	</table>
	   
	
	<table id="tuesday-agenda-small-half">
		<thead>
			<tr>
				<th scope="col" id="time"><h4>time</h4></th>
				<th scope="col" id="ballroomB"><h4>Half Day (03/27)</h4></th>
				<th scope="col" id="ballroomB"><h4>Half Day (03/27)</h4></th>
				<th scope="col" id="ballroomB"><h4>Half Day (03/27)</h4></th>				
			</tr>
			
			</thead>
			<tbody>
				<tr class="odd">
						<td class="time">9:00am-12:30pm</td>
						
						<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/mikeHawley.html">Michael Hawley</a></span>, &amp; <span class="speaker-name"><a class="various3" rel="example_group" href="speakers/adamConnor.html">Adam Connor</a></span>, Mad*Pow  						
								<p class="speech-title" style="padding-bottom:0.5em;"><a class="various3" rel="example_group" href="speakers/designStudio.html">Research-Inspired Design Studio</a></p> 
						   
						</td>
						<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/stephenAnderson.html">Stephen Anderson</a></span>, Independent Consultant<br /><p style="padding-bottom:0.5em;"><a class="various3" rel="example_group" href="speakers/stephenAnderson.html"><p class="speech-title">The Quest for Emotional Engagement</p></a></p></td>
				   
				 <td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/margotBloomstein.html">Margot Bloomstein</a></span>, Appropriate Inc.<br /><a class="various3" rel="example_group" href="speakers/margotBloomstein.html"><p class="speech-title">Content Strategy</p></a></td>	
				</tr>
				<tr>
						<td class="time">12:30-1:30pm</td>
						<td colspan="5">Lunch</td>
				</tr>
				<tr class="odd">
						<td class="time">1:30-5:00pm</td>
						<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/jerilynMacLarenHall.html">Jerilyn MacLaren-Hall</a></span>, Sachs Insights, &amp; <span class="speaker-name"><a class="various3" rel="example_group" href="speakers/meganGrocki.html">Megan Grocki</a></span>, Mad*Pow, <br /><a class="various3" rel="example_group" href="speakers/patientJourney.html"><p class="speech-title">The Patient Journey</p></a>
						</td>
						<td class="agenda-item"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/dustinDitommaso.html">Dustin DiTommaso</a></span>, Mad*Pow<br /><a class="various3" rel="example_group" href="speakers/dustinDitommaso.html"><p class="speech-title">Beyond Gamification: Designing Behavior Change Games</p></a></td>
						<td class="agenda-item" rowspan="1"><span class="speaker-name"><a class="various3" rel="example_group" href="speakers/joshClark.html">Josh Clark</a></span>, Global Moxie<br /><a a class="various3" rel="example_group" href="speakers/joshClark.html"><p class="speech-title">Designing for Touch</p></a></td>
				</tr>
		</tbody>
	</table>  <!-- end tuesday agenda half    -->
	
	</div> <!-- end white-content-container -->
</div> <!-- end sub-page-container -->
</div> <!-- end container -->
<!-- InstanceEndEditable -->	
<div class="clearfix"></div>
	
<?php include "footer.php"; ?> 
  

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
