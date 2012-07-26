<!DOCTYPE html>
<?php 		
		$DefaultName = "Name";
		$DefaultEmail = "Email Address";
 ?>
<html>
<head>
<?php include 'head.php'; ?> 
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
	<h2 class="section-header">2012 HxD Conference Registration</h2>
	<p class="body-text">This is the place to be to learn about best practices for the design and evaluation of healthcare technologies and digital care experiences. Over 500 industry professionals are expected to attend. Register today to secure your spot!</p>
<div id="registration-options" class="float-left">

 <div class="clearfix">&nbsp;</div>
<table id="registration-table">
	<thead>
		<th>&nbsp;</th>
		<th>Early-bird Registration <br />(must register by midnight 02/15/2012)</th>
		<th>Standard Registration <br />(02/15/2012 - 03/12/2012)</th>
		<th>Late and On-site Registration</th>
	</thead>
	<tbody>
		<tr>
			<td class="reg-type"><span style="font-weight:bold">Main Conference Registration (03/26/2012)</p></td>
			<td>$575</td>
			<td>$675</td>
			<td>$775</td>
		</tr>
		<tr>
			<td class="reg-type"><span style="font-weight:bold">Pre-Conference Full-Day Workshop (03/25/2012):</span> <br />Dr. BJ Fogg's Masterclass in Behavior Design (SOLD OUT)</td>
			<td>$1800</td>
			<td>$1800</td>
			<td>N/A</td>
		</tr>	
		<tr>
			<td class="reg-type"><span style="font-weight:bold">Post-Conference Full-Day Workshop (03/27/2012):</span> <br />Amy Cueva, Designing Communities of Care </td>
			<td>$550</td>
			<td>$600</td>
			<td>$700</td>
		</tr>
		<tr>
			<td class="reg-type"><span style="font-weight:bold">Post-Conference Half-Day Workshops (03/27/2012):</span>
				<ul>
					<li>Michael Hawley and Adam Connor: Research-Inspired Design Studio</li>
					<li>Jerilyn MacLaren-Hall and Megan Grocki, The Patient Journey</li>
					<li>Stephen Anderson, The Quest for Emotional Engagement</li>
					<li>Dustin DiTommaso, Beyond Gamification: Designing Behavior Change Games </li>
					<li>Margot Bloomstein, Content Strategy</li>
					<li>Josh Clark, Designing for Touch</li>
				</ul>
				</td>
			<td>$300 (each)</td>
			<td>$350 (each)</td>
			<td>$400 (each)</td>
		</tr>
	</tbody>
</table>
<br />

	<p class="body-text float-left">Breakfast, snacks, lunch and cocktail hour refreshments are included with <a href="registration.php">registration.</a></p>
	<!-- <h4 id="register" class="action-button" style="margin-top:0em"><a href=" http://www.regonline.com/hxd2012" target="_blank"><h4 style="color:white; padding:0em 0.2em;">REGISTER!</h4></a></h4 -->
	
</div> <!-- end registration options div -->

	<div class="clearfix"></div>
	<h3 class="top-padding">Don't Forget...</h3>

	<p class="body-text">To book a room! The Westin Boston Waterfront Hotel is one of Boston’s premiere hotels that implements wellness and rejuvenation in every experience you have there. We invite you to consider adding an overnight stay to your conference experience. Don’t miss out on our discounted room rates ($219 + tax.) 
</p>
	<a href="https://www.starwoodmeeting.com/StarGroupsWeb/booking/reservation?id=1109065089&key=74AA4" target="_blank">BOOK NOW ></a>
	
	<h3 class="top-padding">Speakers</h3>

	<p class="body-text">The conference will have three simultaneous tracks giving you a variety of presentations. Topics are relevant to thought leaders, designers, developers, usability professionals, students, and people new to these fields. There’s something for everyone.
</p>
	<a href="agenda.php">EXPLORE THE AGENDA ></a>
	
	<h3 class="top-padding">Sponsorship Opportunities</h3>

	<p class="body-text">Our growing sponsor list means attendees will have more opportunity to network, discover companies that are hiring, meet local design and usability organizations and try out new technologies and products.</p>

	<a href="sponsor.php">SPONSORSHIP DETAILS ></a>
	<h3 class="top-padding">Networking</h3>

	<p class="body-text">The core of any conference is the networking opportunities. This event will attract attendees from all over the country and overseas. We feature the top names and talent in the interface and user experience world so you can connect with the best.</p>

	<p class="body-text">Please plan on joining us after the conference for cocktails and networking from 5-7 PM.</p>

</div> <!-- end white-content-container -->

</div> <!-- end of sub-page-container -->

</div><!-- end of container --> 

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
