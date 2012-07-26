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
	  <?php include_once("analytics.php"); ?>

		<form id="form1" name="form1" method="post" action="">
		<?php include 'main-nav.php'; ?> 
			
		<div id="container">	
			<header>
				 <div id="header-wrapper" class="container_12">
								<div id="logo"><h1><a href="index.php"><img src="img/logo-white.png" /></a></h1></div>

								<div id="organizers">
									<p><span style="color:white;">Brought to you by:</span></p>
									<div id="organizers-logos"><a href="http://madpow.com" target="_blank"><img src="img/madpow_logo-white.png" alt="Mad*Pow"/></a><span style="color:white;">&amp;</span>
									<a href="http://claricode.com" target="_blank"><img id="claricode-logo" src="img/claricode_logo_white.png" /></a></div>
								</div>
						</div><!-- end header-wrapper div -->
			 </header>
	
			<div id="top-spacer"></div> 
			<!-- InstanceBeginEditable name="page-content" -->

	
			<div id="content-wrapper" role="main" class="container_12">
							<div id="headlines">
								<h1 class="headline">Improving Health through</h1>
								<h1 class="headline" id="human-centered">Human-Centered</h1>
								<h1 class="headline">Design and Technology</h1>
							</div>
						<div id="date-and-place">
							<h4 class="float-left">Save the date for the 2013 Conference<br />MAIN CONFERENCE: Monday, March 25, 2013<br />WORKSHOPS: Sunday, March 24 &amp; Tuesday, March 26, 2013</h4>
			
						</div>
							<!-- <div class="clearfix"></div> -->
						<div id="white-content-container">
			
							<section id="mission" class="grid_6 alpha">
								<h2 class="section-header">About HxD 2012</h2>				 
				
								<div id="overview-videos">
				
								<div id="overview-video" class="displayvideo">
									<iframe src="http://player.vimeo.com/video/37683623?title=0&amp;byline=0&amp;portrait=0" width="400" height="220" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
									<!--<iframe src="http://www.youtube.com/embed/jHr_hSIjoko" width="400" height="233" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>-->
								</div>
				 
								<div id="wrapup-video">
								<iframe src="http://player.vimeo.com/video/40300621?title=0&amp;byline=0&amp;portrait=0" width="400" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								</div> 
				
								</div>
				
							  <div class="labels" style="padding:1em 0em 1em 0em;">
									<label class="tab-label active" id="overview-tab">2012 Overview Video</label>		                                                   
									<label class="tab-label" id="wrapup-tab">2012 Wrap Up Video</label>
								</div>
								<div class="clearfix"></div>
								<a style="color:white;" href="hxdposter_/" class="tab-label">Experience HxD 2012 via these interactive visual notes >></a>
				
							</section>
			
							<section id="speakers" class="grid_6 omega">
								<h2 class="section-header">2012 Speakers</h2>
								<a href="speakers.php#todd-park" class="front-page-speaker"><img class="speaker-img" src="img/toddPark-main.jpg" alt="Todd Park" />
								<div class="overlay">
									<div class="hover-text"><h6>Todd Park</h6></div>
								</div>
								<div class="overlay-hover">
									<div class="hover-text"><h6>Todd Park</h6>
									<p>US Department of Health and Human Services <br />
									Read more ></p></div>
								</div>
								</a>
								<a href="speakers.php#gary-hirsberg" class="front-page-speaker">
									<img class="speaker-img" src="img/garyHirshberg-main.jpg" alt="Gary Hirshberg"/>
									<div class="overlay">
										<div class="hover-text"><h6>Gary Hirshberg</h6></div>
									</div>
									<div class="overlay-hover">
										<div class="hover-text"><h6>Gary Hirshberg</h6>
										<p>President and CE-Yo, Stonyfield Farms
											<br />
										Read more ></p></div>
									</div>
								</a>
								<a href="speakers.php#jonathan-bush" class="front-page-speaker">
									<img class="speaker-img" src="img/jonathanBush-main.jpg" alt="Jonathan Bush"/>
										<div class="overlay">
											<div class="hover-text"><h6>Jonathan Bush</h6></div>
										</div>
										<div class="overlay-hover">
											<div class="hover-text"><h6>Jonathan Bush</h6>
											<p>President, CEO and Co-Founder, athenahealth
												<br />
											Read more ></p></div>
										</div>
									</a>
								<a href="speakers.php#robyn-obrien" class="front-page-speaker">
									<img class="speaker-img" src="img/robynObrien-main.jpg" alt="Robyn O'Brien"/>
									<div class="overlay">
										<div class="hover-text"><h6>Robyn O'Brien</h6></div>
									</div>
									<div class="overlay-hover">
										<div class="hover-text"><h6>Robyn O'Brien</h6>
										<p>Founder, AllergyKids Foundation
											<br />
										Read more ></p></div>
									</div>
								</a>
				
								<div class="clearfix"></div>
								<br /><br/> 
								<h2 class="section-header">Mission</h2>
				
								<h4>We have the power to positively affect human lives through improved design technology in the healthcare arena. We’re bringing together the best and the brightest to explore the toughest challenges and present new solutions.</h4>
								<div class="clearfix"></div>

								<a class="inline-link" href="about.php">READ MORE ></a>
							</section>
			
							   <section id="current-photos" class="grid_12 alpha omega">

								   	<h2 class="section-header">Photos from HxD 2012</h2>
									<div class="clearfix"></div> 

									<div id="lightbox">
									    <p style="color:white">Click or esc to close &amp; use arrow keys to navigate. Enjoy!</p>
									    <div id="content">
									        <img src="#" />
									    </div>

									</div>

								  <div id="photos-wrapper">
									<ul id="photos-list" style="position:relative">
						 				<?php 

										// open this directory 
										$dir = opendir("photos");

										// get each entry
										while($file = readdir($dir)) {
										    if (substr($file, 0, 1) != '.') {
										        print "<li><img src='photos/$file' /></li>";  

										    }
										}

										// close directory
										closedir($dir);

										?>
						
									  </ul>

								   	</div> <!-- end photos-wrapper --> 
									<div class="clearfix"></div>
									<br /	>
									<a href="photos.php" class="float-right">See all photos >></a>			
								</section>

								<div class="clearfix"></div>
							<!-- <div class="clearfix"></div> -->
			
<section id="past-speakers" class="grid_8 alpha">
								<h2 class="section-header">PRESENTATIONS FROM HXD 2012</h2>
								<div class="clearfix"></div>
								<a href="speakers-videos.php" class="float-right" style="margin-top:-.5em;">VIEW ALL VIDEOS FROM HXD 2012 >></a>
								  <div class="clearfix">&nbsp;</div>
								 <p class="body-text">“Listening to BJ Fogg at least year's conference was a revelation for me. Even though I’d greatly admired his "stuff" for years, I took away things from his 45 minutes that I remember even now, which is for me is amazing.”  - Steve Krug</p>
								<div class="clearfix">&nbsp;</div>
								<div id="ajax-tabs" class="pagination">
								            <div>
												<input type="radio" id="radio-1-1" rel="tab-group-1" value="1-1" class="more" href="#first-item"/>
												<label class="tab-label active" for="radio-1-1">Todd Park</label>
											</div>

								            <div>                                                 
												<input type="radio" id="radio-1-2" rel="tab-group-1" value="1-2" class="more" href="#second-item" />
												<label class="tab-label" for="radio-1-2">Robyn O'Brien</label>
											</div>
								            <div>
												<input type="radio" id="radio-1-3" rel="tab-group-1" value="1-3" class="more" href="#third-item" />
												<label class="tab-label" for="radio-1-3">Jonathan Bush</label>
											</div>
		 			        </div>	
										
						<div id="ajax"></div>
				
   </section><!-- end 2011 speakers section -->

	 <div class="clearfix"></div>
 
			
						 </div><!-- end white-content-container div -->
						<div class="clearfix"></div>
			
					</div> <!-- end content-wrapper div -->
	
		</div><!-- end container -->
			<?php include "footer.php"; ?> 
  

			  <!-- JavaScript at the bottom for fast page loading -->

			  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
			  <!-- // <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
			    //   <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script> -->


			  <!-- scripts concatenated and minified via ant build script-->
			  <script defer src="js/plugins.js"></script>
			  <script defer src="js/script.js"></script>
			  <!-- end scripts-->


		</form>
  </body> 
</html>	