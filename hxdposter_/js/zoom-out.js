$(document).ready(function(){
	console.log($('.active'));
   // If you click the trigger element
   // the zoom-out div will get a class of active
	$('#zoom-out-trigger').click(function(e){
		e.preventDefault();
		$('.active').removeClass('active');
		$('.present').removeClass('present');
		$('.future').removeClass('future');
		$('.poster').addClass('past');
		$('#zoom-out').removeClass('future past');
		$('#zoom-out').addClass('active present');
		console.log($('#zoom-out').attr('class'));
	})
});