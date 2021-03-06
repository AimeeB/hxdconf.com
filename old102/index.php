﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php 		
		$DefaultName = "Name";
		$DefaultEmail = "Email Address";
 ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Healthcare Design Conference 2012</title>
<link href="main.css" rel="stylesheet" type= "text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
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
</head>

<body><form id="form1" name="form1" method="post" action="">
<div id="outerdiv">

<div id="header">
<div id="logo">
</div>

<div id="navigation"><img src="images/navigation.png" width="435" height="180" border="0" usemap="#navigation_links"/>
  <map name="navigation_links" id="navigation_links">
    <area shape="rect" coords="7,117,159,163" href="http://2011.healthcareexperiencedesign.com/" alt="2011 event site" />
    <area shape="rect" coords="179,118,296,158" href="HxDsponsorBrochureSept30.pdf" alt="sponsorship" />
    <area shape="rect" coords="316,115,400,157" href="mailto:info@healthcareexperiencedesign.com" alt="contact" />
    <area shape="rect" coords="320,80,346,104" href="http://twitter.com/#!/hxdconf" alt="twitter" />
    <area shape="rect" coords="347,79,369,105" href="http://www.facebook.com/pages/Healthcare-Experience-Design-Conference/175279145836929" alt="facebook" />
    <area shape="rect" coords="372,74,395,105" href="http://www.linkedin.com/groups?gid=1996303&amp;trk=hb_side_g" alt="linkedin" />
    <area shape="rect" coords="11,75,111,105" href="http://www.madpow.com" alt="madpow" />
    <area shape="rect" coords="126,75,214,105" href="http://www.claricode.com" alt="claricode" />
  </map>
</div>
</div> <!--header-->
<div id="content">
<div id="location">
</div>
<div id="headline">
</div>
<div id="maincontent">
				<table width="700" border="0" cellpadding="10">
				  <tr>
					<td width="328" valign="middle"><img src="images/power_head.png" alt="We have the power" /></td>
					<td width="326" valign="middle"><img src="images/speakers_head.png" alt="Confirmed speakers" /></td>
				  </tr>
				  <tr>
					<td valign="top"> <span class= "plain">To positively affect human lives through improved design technology in the healthcare arena. We’re bringing together the best and the brightest to explore the toughest challenges and present new solutions.</span></td>
					<td valign="top" class="plainbig"><span class= "plainbig"><strong>Alexandra Drane</strong>: CEO, Eliza Group<br />
			        <strong>			        Tim Kieshnick</strong>: Director, Kaiser Permanente<br />
			        <strong>Art Swanson</strong>: Director, Allscripts</span></td>
				  </tr>
				</table>
</div><!-- main content div-->
<div id= "sidebar">
<table width="240" border="0">
  <tr>
    <td height="50">&nbsp;</td>
  </tr>
  <tr>
    <td><img src="images/updated.png" width="152" height="16" alt="updated" /></td>
  </tr>
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
			mail('info@healthcareexperiencedesign.com', 'healthcare experience design conference - web contact form', $bodymessage);
			
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
    <td><label>
    <input name="emailfield" type="text" id="emailfield" value="<?php echo $emailpost; ?>" title="Email" />
    </label></td>
  </tr>
  <tr>
    <td><label><input type="submit" name="button" id="button" alt="Keep me posted!" value="" /><input type="hidden" name="submitted" value="true" />
      

    </label></td>
  </tr><?php } ?>
  <tr>
    <td height="50">&nbsp;</td>
  </tr>
  <tr>
    <td><a href="http://2011.healthcareexperiencedesign.com/"><img src="images/2011.jpg" width="230" height="135" border="0" alt="HXD 2011" /></a></td>
  </tr>
  <tr>
    <td><a href="http://www.starwoodmeeting.com/Book/MadPOWHeathcareExperienceDesignConference"><img src="images/venue.jpg" width="230" height="137" border="0" alt="The Venue" /></a></td>
  </tr>
</table>
</div> <!-- sidebar--->



</div><!--content div-->
</div> <!--outer div-->
</form>
</body>
</html>