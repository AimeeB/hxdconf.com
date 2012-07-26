$(document).ready(function(){ 
 	//$('#ajax').load(url + ' #first-item');
	
	//Click event for radio buttons to reveal tab content in results-content.html
    $(".pagination label").click(function (e) {
        $(".pagination label").removeClass("active");
        e.preventDefault();
        $("#" + $(this).attr("for")).click().change();
        $(this).addClass("active");
    });

    $(".pagination :radio").click(function () {
        $('.tab').hide();
        $("#tab" + $(this).val()).show();
    });
    //End Click Event


    // Set the active speaker based on the data-speaker attribute 
	function getActiveSpeaker() {
		var activeSpeaker = $('.active').attr('data-speaker');
		return activeSpeaker;		
	};
	
	var currentSpeaker = getActiveSpeaker();
    
	// Poster transition content
	$('.poster').click(function() {
		if ($('#ajax').is(':visible')) { 
			var $new_speaker = $(this).attr('data-speaker');
			// Url needs to be a function of the active div
			if ($new_speaker != getActiveSpeaker()) {
			   	var url = ('speakers/' + $new_speaker + '.html');
				$('#ajax').toggle();		
		
				$('#ajax').css('display','block').animate({height:'auto'},function(){
					$('#ajax').html('<img class="loader" src="css/loader.gif" alt="">');
					$('#ajax').load(url +' #second-item',function(){
					$('#ajax').hide().show(500, 'linear');
					$(".pagination label").removeClass("active");
					$(".pagination label#abstract").addClass("active");
					});		
				});
 
			};
		};
	});
	
	// Navigation transition content
	$('#main-nav li a').click(function() {
		if ($('#ajax').is(':visible')) {
			var $new_speaker = $(this).attr('data-speaker');
			// Url needs to be a function of the active div
			if ($new_speaker != getActiveSpeaker()) {
			   	var url = ('speakers/' + $new_speaker + '.html');
				$('#ajax').toggle();		
		
				$('#ajax').css('display','block').animate({height:'auto'},function(){
					$('#ajax').html('<img class="loader" src="css/loader.gif" alt="">');
					$('#ajax').load(url +' #second-item',function(){
					$('#ajax').hide().show(500, 'linear');
					$(".pagination label").removeClass("active");
					$(".pagination label#abstract").addClass("active");
					});		
				});
 
			};
		};
	});
	
	// Tabs transition content	
	$('.more').live('click',function(){
		var href = $(this).attr('href');
		
		// Url needs to be a function of the active div
		var url = ('speakers/' + getActiveSpeaker() + '.html');		
		
		$('#ajax').css('display','block').animate({height:'auto'},function(){
			$('#ajax').html('<img class="loader" src="css/loader.gif" alt="">');
			$('#ajax').load(url +' #'+href,function(){
			$('#ajax').hide().show(500, 'linear');
			});		
		});
		return true;
	});
	
	//Key press events
	document.addEventListener("keyup", function ( event ) {
        if ( event.keyCode === 9 || ( event.keyCode >= 32 && event.keyCode <= 34 ) || (event.keyCode >= 37 && event.keyCode <= 40) ) {
            switch( event.keyCode ) {
                case 33: // pg up
                case 37: // left
                case 38: // up
                         if ($('#ajax').is(':visible')) {// if ajax is visible, get the active speaker 
							if ( getActiveSpeaker() == $('.active').next().attr('data-speaker')) {
								console.log('It works!');
							} else { 
								var url = ('speakers/' + getActiveSpeaker() + '.html');
								
								$('#ajax').css('display','block').animate({height:'auto'},function(){
									$('#ajax').html('<img class="loader" src="css/loader.gif" alt="">');
									$('#ajax').load(url +' #second-item',function(){
									$('#ajax').hide().show(500, 'linear');
									});		
								});								
							}						   
						   // if the active speaker is the same speaker as the next speaker, don't do anything
						 }    					 						  
                         break;
                case 9:  // tab
                case 32: // space
                case 34: // pg down
                case 39: // right
                case 40: // down
 					  if ($('#ajax').is(':visible')) {
						 if ( getActiveSpeaker() == $('.active').prev().attr('data-speaker')) {
								console.log('It works!');
							} else { 
								var url = ('speakers/' + getActiveSpeaker() + '.html');

								$('#ajax').css('display','block').animate({height:'auto'},function(){
									$('#ajax').html('<img class="loader" src="css/loader.gif" alt="">');
									$('#ajax').load(url +' #second-item',function(){
									$('#ajax').hide().show(500, 'linear');
									});		
								});								
							}
						}						      						
                     break;
            }            
            event.preventDefault();				   
        }
    }, false);
	   		   
   //});  
});


