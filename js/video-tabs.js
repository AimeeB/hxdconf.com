$(document).ready(function() {       
    // Toggle class on tabs
	$('#mission div label').each(function() {
	   
	   $(this).click(function(e) { 

	   	e.preventDefault(); 
	    $('#mission div label').removeClass('active');
	 	$(this).toggleClass('active'); 
	
	  	var index = $(this).index();
	
		$('#overview-videos div').each(function() {  
			console.log($(this).index());
			if ( $(this).index() == index ) {
				$('#overview-videos div').removeClass('displayvideo');
			    $(this).toggleClass('displayvideo');
			};   			
		});
		

	}); 
	
  });

}); 