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
	<form id="form1" name="form1" method="post" action="">
	<?php include 'main-nav.php' ?>
			
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
