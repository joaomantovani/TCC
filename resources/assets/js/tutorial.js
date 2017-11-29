$(document).ready(function() {
	/*
	* Plugin intialization
	*/
	$('#pagepiling').pagepiling({
      	direction: 'horizontal',
		menu: '#menu',
		anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7', 'page8', 'page9', 'page10'],
	    sectionsColor: ['white', '#ee005a', '#2C3E50', '#39C', '#ee005a', 'white', '#ee005a', '#2C3E50', '#39C', '#ee005a'],
	    navigation: {
	    	'position': 'right',
	   		'tooltips': ['Page 1', 'Page 2', 'Page 3', 'Page 4', 'Page 5', 'Page 6', 'Page 7', 'Page 8', 'Page 9', 'Page 10'],
	   	},
	    afterRender: function(){
	    	$('#pp-nav').addClass('custom');
	    },
	    afterLoad: function(anchorLink, index){
	    	if(index>1){
	    		$('#pp-nav').removeClass('custom');
	    	}else{
	    		$('#pp-nav').addClass('custom');
	    	}
	    }
	});

	//Dismissable message
	$('.message .close')
	  .on('click', function() {
	    $(this)
	      .closest('.message')
	      .transition('fade')
	    ;
	  })
	;
});