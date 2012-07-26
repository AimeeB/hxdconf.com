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
				<div id="logo"><h1><a href="index.php"><img src="img/logo-white.png" /></a></h1></div>

				<div id="organizers">
					<p><span style="color:white;">Brought to you by:</span></p>
					<div id="organizers-logos"><a href="http://madpow.com" target="_blank"><img src="img/madpow_logo-white.png" alt="Mad*Pow"/></a><span style="color:white;">&amp;</span>
					<a href="http://claricode.com" target="_blank"><img id="claricode-logo" src="img/claricode_logo_white.png" /></a></div>
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

	
	<div id="content-wrapper" role="main" class="container_12">
		 <div id="white-content-container">     
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
				<ul id="photos-list-all">
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
			</section>
			<div class="clearfix"></div>
		</div><!-- end white-content-container div -->
	   <div class="clearfix"></div>
			
	    </div> <!-- end content-wrapper div -->
	
</div><!-- end container -->
<!-- InstanceEndEditable -->	

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
<!-- InstanceEnd --></html>
