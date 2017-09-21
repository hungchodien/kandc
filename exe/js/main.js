jQuery( document ).ready(function($) {
			
			$('#mobile_top_menu').slicknav();
			
			setInterval(mouse_header,1800);
			
			/*$("#text1").Watermark("姓");
			$("#text2").Watermark("名");
			$("#text3").Watermark("セイ");
			$("#text4").Watermark("メイ");*/
			$("#text10").Watermark("※「その他」を選択した方は具体的にご記入ください。");
			
			var vs_600= window.matchMedia("only screen and (max-width: 600px)");
			var share_1 = new Share(".tbl_share_f");
			var share_header = new Share(".share-button");
			
			$('#back_top a').click(function () {
						$('body,html').animate({
							scrollTop: 0
						}, 800);
						return false;
			  });
			  var width=$(document).width();
			  var height=$(document).height();
			  var height_header=$("header#masthead").height();
			  var height_footer=$("footer.footer_inc").height();
			 
			/*Menu*/
			/* $("#access").delegate(".menu_mobile","click", function() {
				if(vs_600.matches){
				 	var height_header=$("header#masthead").outerHeight( true )+17;
				}else{
					var height_header=$("header#masthead").outerHeight( true );
				}
				$('body').append($('<div/>', {
        			id: 'overlay' 
    			}));
				$('body').append("<div class='bg_full_mobile'></div>");
					
				var menu_ul=$("nav#access").html();
				$("#overlay").append(menu_ul);	

				$("#overlay").css({
					"height":+($(document).height()-height_header),
					"top":+height_header
				});
				
				$(".bg_full_mobile").css({
					"height":+($(document).height()-height_header),
					"top":+height_header
				});
				$("#overlay").animate({
					
					'width':'80%'
				},500, function(){
					$(".bg_full_mobile").animate({
						'opacity':0.8,
						'-ms-filter': 'progid:DXImageTransform.Microsoft.Alpha(opacity=80)',
						'filter': 'alpha(opacity=80)'
						},200, function(){
								//code
						});
				});
				//$("#access #menu_top").addClass("menu_mobile_close");
				$("#access #menu_top").removeClass('menu_mobile').addClass('menu_mobile_close');
				
				$("#overlay #menu_top").addClass('menu_close_left');
				
				$('body,html').animate({
							scrollTop: 0
						}, 1);
				
			 });	 
				 
			$("#access").delegate(".menu_mobile_close","click", function() {
				if ($('#overlay').length){
							
						if($("#overlay .footer_click").length){
							var divOffset_top = $('#ja-nav .menu_mobile_footer').offset().top;
							$("#overlay .nav").removeClass("footer_click");
							$('body,html').animate({
								scrollTop: +divOffset_top
							}, 1);
							
							$("#overlay").animate({
								'width':'0%'
							},500, function(){
										$("#overlay").remove();
										$(".bg_full_mobile").remove();
										$("#access #menu_top").removeClass('menu_mobile_close').addClass('menu_mobile');
							});
						}
						else
						{
							$("#overlay").animate({
								'width':'0%'
							},500, function(){
										$("#overlay").remove();
										$(".bg_full_mobile").remove();
										$("#access #menu_top").removeClass('menu_mobile_close').addClass('menu_mobile');
							});
							
						}
				}
			 });	 	 
			
			$(document).delegate(".menu_close_left","click", function() {
				if ($('#overlay').length){
							
						if($("#overlay .footer_click").length){
							var divOffset_top = $('#ja-nav .menu_mobile_footer').offset().top;
							$("#overlay .nav").removeClass("footer_click");
							$('body,html').animate({
								scrollTop: +divOffset_top
							}, 1);
							
							$("#overlay").animate({
								'width':'0%'
							},500, function(){
										$("#overlay").remove();
										$(".bg_full_mobile").remove();
										$("#access #menu_top").removeClass('menu_mobile_close').addClass('menu_mobile');
							});
							
							
						}
						else
						{
							$("#overlay").animate({
								
								'width':'0%'
							},500, function(){
										$("#overlay").remove();
										$(".bg_full_mobile").remove();
										$("#access #menu_top").removeClass('menu_mobile_close').addClass('menu_mobile');
							});
							
						}
				}
			 });	 */	 	 
				 
			if ($('footer.footer_index').length){
				
				var footer_inc=$("footer.footer_inc").html();
				$("footer.footer_index").css({
					"height":+height_footer
					});
				$("footer.footer_index").append(footer_inc);
				$("footer.footer_inc").remove();
			}
			
			//$('select#footer_box_menu').change(function() {	
			$("nav#ja-nav").delegate("select#footer_box_menu","change", function() {
				url= $(this).val();
				location.href = url;
				$('select#footer_box_menu').find("option[value='"+url+"']").attr("selected", "selected");
			});
			 
	
			$(window).on('load resize', function () {
				
				var vs_715= window.matchMedia("only screen and (max-width: 715px)");
					if(vs_715.matches)
					{
						if($("#ja-nav .container_menu").length == 0)
						{
							$("<div class='container_menu clear'><div class='menu-button'>Menu</div><ul class='flexnav go_section' id='footer_box_menu'></ul></div>").appendTo("nav#ja-nav");
								var menu_ul_footer=""
								$( "nav#ja-nav .nav_footer >li > ul" ).each(function() {
									var menu_ul_footer=$(this).html();
									$("nav#ja-nav ul#footer_box_menu").append(menu_ul_footer);
								});
								//$("nav#ja-nav .nav_footer >li > ul > li").appendTo("nav#ja-nav ul#footer_box_menu");
							
						}
						$(".flexnav").flexNav({ 'animationSpeed' : 'fast' });
						$("footer#colophon").css({
							"height":"auto"
							});
					}
					else
					{
						$('#ja-nav .container_menu').remove();
						
						$("#text1").on("keypress keyup keydown",function (){ 
								setRuby('text1','text3');
								//alert("ok");
						});
						$("#text2").on("keypress keyup keydown",function (event) {   
								setRuby('text2','text4');
								//alert("ok");
						});
					}
				
				
				
				if(vs_600.matches){
					var height_header=$("header#masthead").outerHeight( true )+17;
				}else{
					var height_header=$("header#masthead").outerHeight( true );
				}
				
				/*$("#main").css({
					"padding-top":+height_header
				});*/
				if($(".nav_consultant .nav_center").length != 0){
					var width_nav_consultant_center=$( ".nav_consultant .nav_center").width();
					$( ".nav_consultant .nav_center").css({
						"margin-right":-(width_nav_consultant_center)/2
					});
				}
				
				var width_li1=$( ".nav_story ul li:nth-child(1)").width();	
				var width_li2=$( ".nav_story ul li:nth-child(2)").width();	
				var width_li3=$( ".nav_story ul li:nth-child(3)").width();
				$( ".nav_story .nav_center").css({
					"width":+(width_li2+20),
					"margin-right":-(width_li2+20)/2
				});
				$( ".nav_story ul li:nth-child(2)").css({
					"position":"relative"
					
				});	
				$( ".nav_story ul li:nth-child(1)").css({
						"position":"absolute",
						"left":-(width_li1+10)
					});
				$( ".nav_story ul li:nth-child(3)").css({
						"position":"absolute",
						"right":-(width_li3+10)
					});
				
				
			});
			
			/*Fix*/
			
				
				$('#colophon').waypoint(function( direction ){
					if( direction == 'down'){
						$('#two_bottom_btns').removeClass('stuck');
						$('.home .back_top').removeClass('back_top_stuck');
					} else {
						$('#two_bottom_btns').addClass('stuck');
						$('.home .back_top').addClass('back_top_stuck');
					}
				}, {offset:function(){
					var navH = $('#two_bottom_btns').height();
					return $(window).height();// + navH;
				}});
			
				/*EndFix*/
			
		});
		function mouse_header() {
			jQuery(".scroll-btn .mouse > span").css({
						'margin-top':'-4px',
						'opacity':1,
						'-ms-filter': 'progid:DXImageTransform.Microsoft.Alpha(opacity=100)',
						'filter': 'alpha(opacity=100)'
			});
			jQuery(".scroll-btn .mouse > span").animate({
						'margin-top':'6px'
					},500, function(){
						$(".scroll-btn .mouse > span").delay(300).animate({
								'opacity':0,
								'-ms-filter': 'progid:DXImageTransform.Microsoft.Alpha(opacity=0)',
								'filter': 'alpha(opacity=0)'
						},500, function(){
							//this is code		
										
					});			
			});
		}
		function toggleDiv(id) {
		   var e = document.getElementById(id);
		   if(e.style.display == 'block'){
			  e.style.display = 'none';
			  jQuery("p.togg_p .togg_span").css({
				  		"display":"block"
				  });
				  jQuery("p.togg_p").removeClass('close_span');
			 }else{
			  e.style.display = 'block';
			  jQuery("a.tlb_togg_mobile").css({
				  		"background":"none"
				  });
			  jQuery("p.togg_p .togg_span").css({
				  		"display":"none"
				  });
				jQuery("p.togg_p").addClass('close_span');
		   }
    	}	