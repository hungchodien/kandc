jQuery(document).ready(function($) {
	
	$(window).load(function() {
        $('#main-slider').nivoSlider();
    });
	
	//Show / hide primary mobile menu
		$(".mobile_menu_btn").click(function(){
			if($(this).hasClass("open_icon")){
				$(this).removeClass("open_icon").addClass("close_icon");
				$("#mobile_primary_menu").stop().slideDown(500);
			}
			else{
				$(this).removeClass("close_icon").addClass("open_icon");
				$("#mobile_primary_menu").stop().slideUp(500);
			}
		});
		
		//Show / hide footer mobile menu
		$(".open_footer_menu_btn").click(function(){
			$("#mobile_footer_menu").stop().slideToggle();
		});
		
		//Back to top
		$(".back_top_btn").click(function(){
			$('body,html').animate({scrollTop:0});
		});
		
		
		
    $(window).resize(function(){

       if ($(window).width() <= 767) {  
            //$(".button_entry").append('');
       }     

});
});