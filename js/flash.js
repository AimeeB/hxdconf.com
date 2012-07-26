$(document).ready(function(){
   $('#flash-div').slideToggle('slow'); 
   $('#flash-div').click(function() {
	  $(this).slideToggle('slow');   
	  $('#main-nav ul').css('top','0px');
	});
});