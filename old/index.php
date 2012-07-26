<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>healthcare experience design conference - April 11 2011 - Boston, MA</title>
<style type="text/css">
body {
	background-color: #FFF;
	background-image: url(Background.gif);
	background-repeat: repeat-x;
	padding: 0px;
	font-size: 13px; 
	margin: 0px; 	
	font-family: Arial, Sans-Serif; 	
	height: 100%;
	text-align:left;
	-moz-box-sizing: border-box;

}
a {
color:#000000;
font-weight:bold;
}
a:hover
{
color:red;
}
p {
        width:510px; 
        font-size:14px;
  }
#EmailOpen {
	cursor:pointer;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
$('.emailbutton').live('click', showEmailForm);
$('.EmailOpen').live('click', hideEmailForm);

function showEmailForm()
{
	$('#footer').css('margin-top', '-186px');
	$('#EmailFormDiv').show();
	$('#fullname').focus();
	return false;
}
function hideEmailForm()
{
	$('#footer').css('margin-top', '25px');
	$('#EmailFormDiv').hide();
	return false;
}
</script>
</head>
<body>
<form method="post" action=""><?php
	if (isset($_POST['submitted']))
	{
		$fullnamepost = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING, array(FILTER_FLAG_STRIP_LOW, FILTER_FLAG_ENCODE_HIGH));
		$emailpost = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		$companypost = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING, array(FILTER_FLAG_STRIP_LOW, FILTER_FLAG_ENCODE_HIGH));
	
	
		if (strlen($fullnamepost)>0 && filter_var($emailpost, FILTER_VALIDATE_EMAIL))
		{
			$bodymessage = "Full Name:\n\t " . $fullnamepost . "\n\n Email:\n\t " . $emailpost . "\n\n";
			$bodymessage .= "IP:\n\t" . $_SERVER['REMOTE_ADDR'] . "\n\n";
			$bodymessage .= "Company:\n " . $companypost . "\n\n\n\n";
	
			if (strlen($zippost) > 0)
				$bodymessage .= "Zip:\n\t $zippost\n\n";
				
			mail('info@healthcareexperiencedesign.com', 'healthcare experience design conference - web contact form', $bodymessage);
			
			$submissionsFilePath = "emaillist/submissions.csv";
			$file = fopen($submissionsFilePath, 'a') or die("Unable to open file.");
			fwrite($file, $fullnamepost . "," . $emailpost . ","  . $companypost . "," . $_SERVER['REMOTE_ADDR'] . "\n");
			fclose($file);
			
			$thankyou = true;
		}
		else
		{
			if (strlen($emailpost) == 0)
			  $errormessage = "Please enter your email address<br />\n";
			else
			  {
				if(!filter_var($emailpost, FILTER_VALIDATE_EMAIL))
			  		$errormessage .= "Please fix your email address<br />\n";
			  }
			if (strlen($fullnamepost) == 0)
			  $errormessage .= "Please enter your name<br />\n";
		}
	}
		

?>
				<?php if (isset($thankyou)) { ?>Thank you for submitting your information<?php } ?>
			<?php 
				if (isset($errormessage))
					echo "<p style=\"color:red;\">$errormessage</p>";
			?>

<div style="width:960px;margin:auto;">
<img src="Header.jpg" width="959" height="200" style="margin-top:0px;" alt="Healthcare Experience Design: Improving Health Through Human-Centered Design and Technology.  Brought to you by Mad*Pow and Claricode"  title="Healthcare Experience Design: Improving Health Through Human-Centered Design and Technology.  Brought to you by Mad*Pow and Claricode" />
<div style="width:960px;height:300px;">
<table width="960" cellpadding="0" cellspacing="0">
<tr>
<td width="283"><img src="FairmontCopley.jpg" width="283" height="290" style="margin-top:10px;" alt="Boston photo" title="Boston photo" /></td>
<td width="575" valign="top"><img src="DateLocation.gif" width="575" height="121" style="vertical-align:top;margin-top:5px" alt="April 11, 2011 - Fairmont Copley Boston, MA" title="April 11, 2011 - Fairmont Copley Boston, MA" /><div style="width:575px;height:170px;margin-top:9px;background-color:white;"><div style="width:545px;height:122px;padding-left:15px;padding-right:15px;padding-top:10px;"><p>We have the power to positively affect human lives through design technology in the healthcare space. This Conference will bring together the best and the brightest to explore the toughest challenges, present new solutions, collaborate, connect, and be inspired to go and create the results we need to see.<br /><br /><span style="font-weight:bold">Be the first to know:</span></p></div>
<img src="SignUpEmailUpdates.gif" class="emailbutton" width="257" height="38" style="margin-left:15px;" alt="Sign Up for Email Updates" title="Sign Up for Email Updates" />
</div></td>
<td width="102"><img src="share.jpg" width="102" height="300" usemap="#Map" border="0" alt="share" /></td>
</tr>
</table>
</div>

<div id="EmailFormDiv" style="background-color:#000; width:257px; position:relative; height:210px; left: 298px; top: -210px; color:white;display:none;"><img src="EmailUpdatesOpen.jpg" class="EmailOpen" id="EmailOpen" width="257" height="35" alt="Email Updates Image" title="Email Updates Image" />
<div style="padding-left:15px;padding-right:15px;">Name:<br /><input type="text" name="fullname" id="fullname" title="Your Name" style="width:225px;margin-bottom:3px;" /><br />Company/Organization:<br /><input type="text" name="company" title="Your Company" style="width:225px;margin-bottom:3px;" /><br />Email:<br /><input type="text" name="email" title="Your Email Address" style="width:225px;margin-bottom:3px;" /><input type="image" style="margin-left:145px;margin-top:3px;" src="submit.jpg" alt="submit" title="submit" /></div></div>

<map name="Map" id="Map">
  <area shape="rect" coords="0,47,100,131" href="http://www.facebook.com/pages/Healthcare-Experience-Design-Conference/175279145836929" alt="Share with FaceBook" title="Share with FaceBook" />
  <area shape="rect" coords="0,132,100,213" href="http://events.linkedin.com/Healthcare-Experience-Design-Conference/pub/513683" alt="Share with Linked In" title="Share with Linked In" />
  <area shape="rect" coords="0,217,100,298" href="http://twitter.com/#!/hxdconf" alt="Share with Twitter" title="Share with Twitter" />
</map>
<div id="footer" style="margin-top:25px; background-color:#d7d2cc;width:960px;height:126px;">&nbsp;
  <div style="text-align:right;width:100%;"><a href="mailto:contact@healthcareexperiencedesign.com">Contact Us</a> for sponsorship opportunities.&nbsp;</div></div>
</div>			<input type="hidden" name="submitted" value="true" />			

</form>
</body>
</html>