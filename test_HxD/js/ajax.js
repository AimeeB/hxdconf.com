$(document).ready(function(){
	$('#ajax').load('video.html #first-item');
	
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

	$('.more').live('click',function(){
		var href = $(this).attr('href');
		if ($('#ajax').is(':visible')) {
							$('#ajax').css('display','block').animate({height:'1px'}).empty();
						}
		else {
			$('#ajax').empty();
		}
		$('#ajax').css('display','block').animate({height:'100%'},function(){
			$('#ajax').html('<img class="loader" src="loader.gif" alt="">');
			$('#ajax').load('video.html #'+href,function(){
				
				$('#ajax').hide().fadeIn().highlightFade({color:'rgb(253,253,175)'});
			});
		});
		return true;
	});
	$('#ajax2').load('attendee-video.html #first-item');
	
	//Click event for radio buttons to reveal tab content in results-content.html
    $(".pagination2 label").click(function (e) {
        $(".pagination2 label").removeClass("active");
        e.preventDefault();
        $("#" + $(this).attr("for")).click().change();
        $(this).addClass("active");
    });

    $(".pagination2 :radio").click(function () {
        $('.tab').hide();
        $("#tab" + $(this).val()).show();
    });
    //End Click Event

	$('.more2').live('click',function(){
		var href = $(this).attr('href');
		// if ($('#ajax').is(':visible')) {
		// 			$('#ajax').css('display','block').animate({height:'1px'}).empty();
		// 		}
		$('#ajax2').css('display','block').animate({height:'100%'},function(){
			$('#ajax2').html('<img class="loader" src="loader.gif" alt="">');
			$('#ajax2').load('attendee-video.html #'+href,function(){
				
				$('#ajax2').hide().fadeIn().highlightFade({color:'rgb(253,253,175)'});
			});
		});
		return true;
	});
});