// JavaScript Document
var containerId = '#tabs-container';
var tabsId = '#tabs';

$(document).ready(function(){
	// Preload tab on page load
	if($(tabsId + ' LI.current A').length > 0){
		loadTab($(tabsId + ' LI.current A'));
	}
	
    $(tabsId + ' A').click(function(){
    	if($(this).parent().hasClass('current')){ return false; }
    	
    	$(tabsId + ' LI.current').removeClass('current');
    	$(this).parent().addClass('current');
    	
    	loadTab($(this));    	
        return false;
    });
});

function loadTab(tabObj){
    if(!tabObj || !tabObj.length){ return; }
    $(containerId).addClass('loading');
    $(containerId).fadeOut('fast');
    
    $(containerId).load(tabObj.attr('href'), function(){
        $(containerId).removeClass('loading');
        $(containerId).fadeIn('fast');
    });
}

	
	/*var tab = {
	'Home' : 'index.html',
	'Alexandre Despatie' : 'alex.html',
	'Krystina Alogobo' : 'krystina.html',
	'Simon Whitfield' : 'simon.html',
	'Brent Hayden' : 'brent.html'
	}
	
	var z=0;
	$.each(tab,function(i){
		var tbd = $('<li><a href="#" class="tab">'+i+'</a></li>');
		tbd.find('a').data('page');
		$('ul.tabcontent').append(tbd);
	});
	
	var the_tab = $('.tab');*/
