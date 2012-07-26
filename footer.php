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
						<div class="grid_2"  style="margin-top:1.5em;"><a href="http://connected-health.com" target="_blank"><img src="img/sponsorLogo-centerForConnectedHealth.png" alt="Connected Health"/></a></div>
			           <div class="grid_2"  style="margin-top:1em;"><a href="http://rockhealth.com" target="_blank"><img src="img/sponsorlogo-rockhealth.png" alt="Rock Health" /></a></div>
						<div class="grid_4"  style="margin-top:2em;"><a href="http://www.thefrontierproject.com" target="_blank"><img src="img/sponsorlogo-frontier.png" alt="Frontier Health" /></a></div>    
						<div class="clearfix"></div>
					   <div class="grid_2"  style="margin-top:4.5em; margin-left:7%"><a href="http://www.theatomgroup.com/" target="_blank"><img src="img/sponsorLogo-atom.png" alt="Atom" /></a></div> 
							    <div class="grid_2 omega"  style="margin-top:1.5em;"><a href="http://www.medcitynews.com/about-us-2/" target="_blank"><img src="img/sponsorLogo-medcityMedia.png" alt="MedCity Media" /></a></div>

					   <div class="grid_2 alpha" style="margin-top:2.5em;"><a href="http://www.mobihealthnews.com/" target="_blank"><img src="img/sponsorLogo-mobiHealthNews.png" alt="Mobi Health News" /></a></div>       
					   <div class="grid_2" style="margin-top:3.5em;"><a href="http://www.linkedin.com/groups?about=&gid=2181454&trk=anet_ug_grppro" target="_blank"><img src="img/sponsorLogo-wirelessHealth.png" alt="Wireless Health" /></a></div>
					                                 <div class="grid_2" style="margin-top:3em;"><a href="http://www.dailychallenge.com/" target="_blank"><img src="img/sponsorLogo_dailyChallenge.png" alt="Daily Challege" /></a></div> 

													<div class="clearfix"></div>   
													<div class="grid_2" style="margin-top:3em; margin-left:4%"><a href="http://www.diversinet.com/" target="_blank"><img src="img/sponsorLogo-diversinet.png" alt="diversinet" /></a></div>
													<div class="grid_2" style="margin-top:2.5em; margin-left:4%"><a href="http://www.padinmotion.com/" target="_blank"><img src="img/sponsorLogo-padinmotion.png" alt="Pad In Motion" /></a></div>   	  						  

													<div class="grid_3" style="margin-top:3em; margin-left:4%"><a href="http://thehealthcareblog.com/" target="_blank"><img src="img/sponsorLogo-thcb.png" alt="The Health Care Blog" /></a></div>

													 <div class="grid_2 alpha" style="margin-top:3.25em"><a href="http://www.health2con.com/" target="_blank"><img src="img/sponsorLogo-health20.png" alt="Health 2.0 Conference" /></a></div> 

					     <div class="clearfix"></div>		</section>  			<!-- end sponsors @media > 525px   -->


					<section id="sponsors-small">
						<h2 class="top-padding grid_12">Sponsors</h2>

						<div class="grid_6"><a href="http://gehealthcare.com" target="_blank"><img src="img/sponsorLogo-GEHealthcare.png" alt="GE Healthcare"/></a></div>
		                <div class="grid_6"><a class="left-padding" href="http://continuuminnovation.com" target="_blank"><img src="img/sponsorlogo-continuum.png" alt="Continuum Innovation" /></a></div>   

		<div class="clearfix"></div>

		                <div class="grid_6"><a href="http://userzoom.com" target="_blank"><img src="img/sponsorLogo-userzoom.png" alt="User Zoom" /></a></div>
		                <div class="grid_6 top-margin"><a class="left-padding" href="http://aloftgroup.com" target="_blank"><img src="img/aloft-logo.png" alt="Aloft Group" /></a></div>

		<div class="clearfix"></div> 

					  <div class="grid_6 top-margin"><a href="http://axure.com" target="_blank"><img src="img/sponsorLogo-axure.png" alt="Axure" /></a></div>
		           	  <div class="grid_6 top-margin"><a href="http://rosenfeldmedia.com" target="_blank"><img src="img/sponsorLogo-rosenfeld.png" alt="Rosenfeld" /></a></div> 

					<div class="clearfix"></div> 

					<div class="grid_6 top-margin"><a href="http://connected-health.com" target="_blank"><img src="img/sponsorLogo-centerForConnectedHealth.png" alt="Connected Health"/></a></div>
		           <div class="grid_6 top-margin"><a class="left-padding" href="http://rockhealth.com" target="_blank"><img src="img/sponsorlogo-rockhealth.png" alt="Rock Health" /></a></div>

					 <div class="clearfix"></div>

					<div class="grid_6 top-margin" style="margin-top:60px;"><a  class="left-padding"  href="http://www.theatomgroup.com/" target="_blank"><img src="img/sponsorLogo-atom.png" alt="Atom" /></a></div><div class="grid_6 top-margin"><a class="left-padding" href="http://www.medcitynews.com/about-us-2/" target="_blank"><img src="img/sponsorLogo-medcityMedia.png" alt="MedCity Media" /></a></div> 

					<div class="clearfix"></div>
				        <div class="grid_12 extra-top-margin"><a class="left-padding" href="http://www.thefrontierproject.com" target="_blank"><img src="img/sponsorlogo-frontier.png" alt="Frontier Health" /></a></div>          

				   <div class="clearfix"></div>

				   <div class="grid_6 top-margin"><a href="http://www.mobihealthnews.com/" target="_blank"><img src="img/sponsorLogo-mobiHealthNews.png" alt="Mobi Health News" /></a></div> 

				   <div class="grid_6 extra-top-margin"><a class="left-padding" href="http://www.linkedin.com/groups?about=&gid=2181454&trk=anet_ug_grppro" target="_blank"><img src="img/sponsorLogo-wirelessHealth.png" alt="Wireless Health" /></a></div> 

		  		<div class="clearfix"></div>

				  <div class="grid_6 top-margin"><a href="http://www.dailychallenge.com/" target="_blank"><img src="img/sponsorLogo_dailyChallenge.png" alt="Daily Challege" /></a></div>  				   
				   <div class="grid_6 extra-top-margin"><a  class="left-padding" href="http://www.diversinet.com/" target="_blank"><img src="img/sponsorLogo-diversinet.png" alt="diversinet" /></a></div>   	 
                             				<div class="clearfix"></div> 	 

				<div class="grid_6 extra-top-margin"><a href="http://www.padinmotion.com/" target="_blank"><img src="img/sponsorLogo-padinmotion.png" alt="Pad In Motion" /></a></div>

				
				<div class="grid_6" style="margin-top:60px;"><a href="http://thehealthcareblog.com/" target="_blank"><img src="img/sponsorLogo-thcb.png" alt="The Health Care Blog" /></a></div>

				 <div class="clearfix"></div> 

				 <div class="grid_6 extra-top-margin"><a href="http://www.health2con.com/" target="_blank"><img src="img/sponsorLogo-health20.png" alt="Health 2.0 Conference" /></a></div> 
				 
				<div class="clearfix"></div>

					</section> <!-- end sponsors-small -->
	
	<div class="clearfix"></div>
	</div>
</footer>
