/*
* jQuery Achievement Alert 1.0
*
* Copyright 2014, Matthew Aisthorpe - http://matthewaisthorpe.com.au/
* 
*
* Date: 
*/

$.fn.achievement_alert = function(options) {
	
	//default options for achievement
	var options = $.extend({
        duration: 400,					// Duration for fade animation
        display: 3000,					// How long the achievement text is displayed
        title: 'Achievement', 	// Title of alert box
        points : '350',					// Number of points to be displayed
        currency : 'P', 				// Points description
        name : 'Achievement Name', 		// Name of achievement
        icon : 'fa-trophy', 			// Icon to be shown (uses font awesome)
        sound : 'F' 					// Play achievement sound or not set to either T or F
    }, options);
    
    //remove any other achievement divs in the html
    if($("#achievement_alert").length > 0) {
	  $("#achievement_alert").remove();
	}
    
    //add div to body for achievement alert
    $('body').append('<div id="achievement_alert"><div id="achievement_alert_sound"><audio src="/sounds/achievement_alert.mp3" preload="auto"></audio></div><div id="achievement_alert_icon"></div><div id="achievement_alert_text_block"><div id="achievement_alert_main_text"></div><div id="achievement_alert_sub_text"></div></div></div>');
    
	var achievement_alert = $("#achievement_alert");
	var main_text = $("#achievement_alert_main_text");
	var sub_text = $("#achievement_alert_sub_text");
	var icon = $("#achievement_alert_icon");
	var achievement_alert_sound = $("#achievement_alert").find('audio')[0];
	var iconHtml = '<i class="fa ' + options.icon + '"></i>';
	
	//set icon on achievement
	icon.append(iconHtml);
	
	//display achievement
	achievement_alert.show();
	
	//if sound is true play sound
	if(options.sound == 'T') {
		achievement_alert_sound.play();	
	}
	
	//do repeating fade animation - need to fix later
	achievement_alert.animate({opacity: 0.15}, options.duration, function() { 
		achievement_alert.animate({opacity: 0.75}, options.duration, function() {
			achievement_alert.animate({opacity: 0.15}, options.duration, function() {
				achievement_alert.animate({opacity: 0.75}, options.duration, function() {
					
					//
					achievement_alert.animate({ width:'350px' }, options.duration, function() {
						main_text.text(options.title);
						sub_text.text(options.points + options.currency + ' - ' + options.name);
						
						
						setTimeout(function() {
							achievement_alert.animate({ bottom: '-=100px' }, options.duration).fadeOut({ duration: options.duration, queue: false });
            			}, options.display);
            			
					});
					
				});
			});
		});
	});
	
}