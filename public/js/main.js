
"use strict";

//video player
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");
btn.className = "fa fa-pause";

function myFunction() {
  	if (video.paused) {
    	video.play();
    	btn.className = "fa fa-pause";
  	} else {
    	video.pause();
    	btn.className = "fa fa-play";
  	}
}

(function($){

/*toggle nav-switch*/
$('.nav-switch').on('click', function(event){
	$(this).toggleClass('active');
	$('.nav-wrap').slideToggle(400);
	event.preventDefault();
});	

/*set background image -hero section*/
$('.set-bg').each(function(){
	var bg = $(this).data('setbg');
	$(this).css('background-image', 'url(' + bg + ')');
});

})(jQuery);