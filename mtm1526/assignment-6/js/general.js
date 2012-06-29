// JavaScript Document
var emptyId = '#empty-div';
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
    $(emptyId).addClass('loading');
       
	   console.log(tabObj.attr('href').replace(/\?tabs\=/, '')+'.html');
	   
   $(emptyId).load(tabObj.attr('href').replace(/\?tabs\=/, '')+'.html', function(){
        $(emptyId).removeClass('loading');
    });
}


