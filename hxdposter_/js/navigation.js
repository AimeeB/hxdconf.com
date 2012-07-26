$(document).ready(function(){ 
    if (window.location.hash == '#/overview' || window.location.hash == '' ) {
		$('#start-screen a').click(function(e) {
		   e.preventDefault(); 
		   $('#start-screen').hide();
		
		   $('#main-nav').show();
		   $('#ajax-tabs').show();
		   $('#zoom-out').show();
		});
	} else {
		$('#start-screen').hide();
		$('#main-nav').show(); 
		$('#ajax-tabs').show();
		$('#zoom-out').show();
	}
	
	$('.poster').click(function(e){
	   var speaker = $(this).attr('data-speaker'); 
	   var $nav_tab = $('#main-nav li a[data-speaker=' + speaker + ']');
	   $('#main-nav li a').each(function(){
			$(this).removeAttr('id','selected').css('padding-left','10px');
	   });
	   $nav_tab.attr('id','selected').css('padding-left','100px');
	   $('#ajax-wrapper').show();
	});
	
	$('#main-nav ul li a').click(function(e){
	   var speaker = $(this).attr('data-speaker'); 
	   var $nav_tab = $('#main-nav li a[data-speaker=' + speaker + ']');
	   $('#main-nav li a').each(function(){
			$(this).removeAttr('id','selected').css('padding-left','10px');
	   });
	   $nav_tab.attr('id','selected').css('padding-left','100px');
	   $('#ajax-wrapper').show();
	});

});