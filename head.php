  <meta charset="utf-8">
<!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="true" -->
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- InstanceBeginEditable name="doctitle" -->
  <title>HxD Conference | Healthcare Experience Design Conference 2012</title>
  <!-- InstanceEndEditable -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	
	<meta name="description" content="The Healthcare Experience Design Conference (The HxD Conference) blends the powerhouse perspectives of healthcare thought leaders, product developers, and design implementers across a broad spectrum of healthcare technologies and delivery channels." />
	
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
	<link rel="stylesheet" href="css/twitter.css" />
	<link rel="stylesheet" href="css/colorbox.css" />
	<link rel="stylesheet" href="css/bgstretcher.css" />
	<link rel="stylesheet" href="css/lightbox.css" />
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
	<script type="text/javascript" src="js/swfobject.js"></script>
	<script type="text/javascript" src="js/jwplayer.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/video-tabs.js"></script>
	<script type="text/javascript" src="js/flash.js"></script>
	<!-- <script type="text/javascript">
	$(document).ready(function(){
	//  Initialize Backgound Stretcher
	$(document).bgStretcher({
	images: ['img/biker.jpg'], imageWidth: 1024, imageHeight: 768
	});
	});
	</script> -->
	
	<script type="text/javascript" language="javascript">
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
	</script>