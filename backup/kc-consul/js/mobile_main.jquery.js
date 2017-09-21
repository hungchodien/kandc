// JavaScript Document
jQuery( document ).ready(function($) {

		//$(".srolltop_fix").on("click", function() {
		
		



		$(window).on('load resize', function () {
				var vs_767= window.matchMedia("only screen and (max-width: 767px)");
				if(vs_767.matches)
				{

					var height_top_area=$('#top_area').innerHeight();
					//alert(height_top_area);
					//var height_menu_btn_area=$('#top_area a.mobile_menu_btn').height();
					var height_menu_btn_area=get('#top_area a.mobile_menu_btn');
					//alert(get('#top_area a.mobile_menu_btn'));
					//alert(height_menu_btn_area);
					var height_center_menu=height_top_area-height_menu_btn_area;
					$('#top_area a.mobile_menu_btn').css({
						  "top":+height_center_menu/2,
						  "right":'0'
					});
					 



					if($(".footer_content_one .container_menu").length == 0)
					{
							//$('#nav_footer > ul.sub-menu').remove();
							//mobile
							$("<div class='container_menu clear'><div class='menu-button'><span class='txt_menu'>メニューを選択してください</span><span class='icon_menu'><img src='img/footer_menu_icon.png'></span></div><ul class='flexnav go_section' id='footer_box_menu'></ul></div>").appendTo(".footer_content_one");
							//$("#nav_footer ul#footer_menu-id >li > ul >li").appendTo("#nav_footer ul#footer_box_menu");
							
							$(".footer_content_one ul.footer_item_link_1" ).each(function() {
								var menu_ul_footer_link1=$(this).html();
								$(".footer_content_one ul#footer_box_menu").append(menu_ul_footer_link1);
					    	});
							$(".footer_content_one ul.footer_item_link_2" ).each(function() {
								var menu_ul_footer_link2=$(this).html();
								$(".footer_content_one ul#footer_box_menu").append(menu_ul_footer_link2);
					    	});
							
							//$('#nav_footer .container_menu #footer_box_menu > a').remove();
							
						
							
							$(".footer_content_one ul.footer_item_link_1 ").css({
								"display":"none"
							});
							$(".footer_content_one ul.footer_item_link_2 ").css({
								"display":"none"
							});
							$(".flexnav").flexNav({ 'animationSpeed' : 'fast' });
					}
					
					if($(".page_main .fixed_footer").length == 0)
					{
						$("<div class='fixed_footer clear'><div class='entry_fix'></div><div class='srolltop_fix'><img class='mobile_show' src='img/back_top_kc.png'></div></div>").appendTo(".page_main");
						var button_entry=$(".header_logo_content .button_entry").html();	
						//var button_srolltop=$(".footer_break_top_right").html();
						$(".fixed_footer .entry_fix").append(button_entry);	
						//$(".fixed_footer .srolltop_fix").append(button_srolltop);	
						
						 $(".fixed_footer").delegate(".srolltop_fix","click", function() {					
							$('body,html').stop().animate({
								scrollTop: 0
							}, 800);
							return false;
						});
					}
					
					
					
					
				}
				else
				{
							$('.footer_content_one .container_menu').remove();
							
							$('.page_main .fixed_footer').remove();
							
							$(".footer_content_one ul.footer_item_link_1 ").css({
								"display":"block"
							});
							$(".footer_content_one ul.footer_item_link_2 ").css({
								"display":"block"
							});
				}
			});
});

function get(img){

    var imageSrc = $(img).css('backgroundImage')
                   .replace(/url\((['"])?(.*?)\1\)/gi, '$2')
                    .split(',')[0];    
    var image = new Image();
    image.src = imageSrc;
    var bgwidth = image.width,
    bgheight = image.height,    
    bgContainWidth = $(img).width();

    var bgContainHeight = (bgheight*bgContainWidth)/bgwidth;

    var decimal = bgContainHeight.toString().split('.');

    if(decimal[0]>=5)
    {
       bgContainHeight = Math.ceil(bgContainHeight);
    }
    else
    {
       bgContainHeight = Math.floor(bgContainHeight);
    }
	return bgContainHeight;
    //alert('bg Contain width = ' + bgContainWidth+ ',bg Contain Height = ' + bgContainHeight);

}