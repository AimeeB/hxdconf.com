$(document).ready(function() {  
  
  // Set a trigger for all lightbox list elements
  var lightbox_trigger = $('#photos-wrapper li');
  
  // Get all the list items, for toggling and indexing!
  var $li_images = $('#photos-wrapper li');

  // User clicks link with class lightbox_trigger
  lightbox_trigger.click(function (e) { 
	  e.preventDefault();     // Prevent the browser from following the link by default
	   
	   $('#lightbox').css('display','block');
	
	    var image_href = $(this).children('img').attr('src');
			        
		// Insert img tag with clicked link's href as src value
   		$('#content').html('<img src="' + image_href + '" />');	        
		$('#lightbox').show();
		
		// Find the images placement in list
		var nth_element = $(this).index();

		// Set the index of all the other images according to that image

		k = nth_element; 	

		$(document).keydown(function(event) {
		                switch (event.keyCode) {
		                    // left
							case 37:  
                                 
								event.preventDefault();
								
								// Set a previous variable to count backwards from the clicked index
								var prev = k - 1;
															
								$li_images.each(function() {
								   if ( $(this).index() == prev ) {
									  var image_href = $(this).children('img').attr('src');   
									 
									  $('#content').html('<img src="' + image_href + '" />');									  
									};
								   
								});
									
								k--;
								console.log("Prev is " + prev + " and k is " + k); 
							  	break;
							
							// up	      
		                    case 38: ; break;                            
							
							// right
		                    case 39:
                                event.preventDefault(); 

			  			    	var next = k + 1;
  															
								$li_images.each(function() {
								   if ( $(this).index() == next ) {
									  var image_href = $(this).children('img').attr('src');   
									 
									  $('#content').html('<img src="' + image_href + '" />');									  
									};
								   
								});	
								k++;
								
                                console.log("Next is " + next +  " and k is " + k);
							   								              
								break;
								 							
							// down	   
		                    case 40: ; break;
							// escape
		     				case 27: 
								$('#lightbox').hide();
								
								break;
		                }
		});		
  	});

	// When the lightbox is live, close it upon click anywhere
	$('#lightbox').live('click', function() {
	    $('#lightbox').hide();
	});
	
	// Add hover attribution
	$('#photos-list li:nth-child(2)').hover(function(e){
	   e.preventDefault();
	   $('#hover-attribution').toggle();
	}); 
	
}); 