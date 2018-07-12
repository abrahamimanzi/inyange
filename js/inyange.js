$(document).ready(function(){
	$(window).scroll(function(){
		//isScrolledIntoView('#topNavScrolled');
		//isFooterIntoView('.footerDetectView');
        
        mn = $(".nav_container_div");
        mns = "main-nav-scrolled";
        if( $(this).scrollTop() > 35 ) {
            $('.nav_container_div').addClass(mns);
          } else {
            mn.removeClass(mns);
          }
	});
	
	function isScrolledIntoView(elem)
	{
		var $elem = $(elem);
		var $window = $(window);
		var docViewTop = $window.scrollTop();
		var docViewBottom = docViewTop + $window.height();
		var elemTop = $elem.offset().top;
		var elemBottom = elemTop + $elem.height();
		var ret = ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
		
		if(ret == false){
			//if(!$('.nav_container_div').hasClass('fixedNav')){
				$('.nav_container_div').addClass('fixedNav');
				$('#topNavScrolled').addClass('scrolled');
				$('.logo_main').removeClass('pageloaded');
                $('.home_main_section').addClass('scrolled');
			//}
		}else{
			//if($('.nav_container_div').hasClass('fixedNav')){
                $('.home_main_section').removeClass('scrolled');
				$('#topNavScrolled').removeClass('scrolled');
                window.setTimeout(function() {
				    $('.nav_container_div').removeClass('fixedNav'); 
                },1000);
			//}
		}
	}	

	function isFooterIntoView(elem)
	{
		var $elem = $(elem);
		var $window = $(window);
		var docViewTop = $window.scrollTop();
		var docViewBottom = docViewTop + $window.height();
		var elemTop = $elem.offset().top;
		var elemBottom = elemTop + $elem.height();
		var reti = ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
		
		if(reti == false){
			if($('#footer').hasClass('fixed')){
				$('#footer').removeClass('fadeInUp');
				$('#footer').addClass('fadeOutDown');
                window.setTimeout(function() {
				$('#footer').removeClass('fixed');
                },1000);
			}
		}else{
			if(!$('#footer').hasClass('fixed')){
				$('#footer').removeClass('fadeOutDown');
				$('#footer').addClass('fixed');
				$('#footer').addClass('fadeInUp');
			}
		}
	}	
    
//     mn = $(".main-nav");
//    mns = "main-nav-scrolled";
//    hdr = $('header').height();
//
//$(window).scroll(function() {
//  if( $(this).scrollTop() > hdr ) {
//    mn.addClass(mns);
//  } else {
//    mn.removeClass(mns);
//  }
//});
    
});	

