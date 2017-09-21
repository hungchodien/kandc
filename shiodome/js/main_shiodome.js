jQuery(document).ready(function($){
	$(".flexnav").flexNav();
	$("#back-top").hide();

	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
	
	
	$(window).on('load hashchange', function(e){	
	  		var hash_url = window.location.hash;
			//alert(hash_url);
			//e.preventDefault();
			if(hash_url!="")
			{
				if($(hash_url).length >0){
					
					$('body,html').animate({
						scrollTop: $(hash_url).offset().top
					}, 800);
					
					history.pushState("", document.title, window.location.pathname);
					//return false;
				}
			}
	  });
	 
	  $(window).trigger( 'hashchange' );
	  $('#menu_about').click(function(e) {
		 
	       e.preventDefault();
		    var div_href = $(this).attr('href');
			var url      = window.location.href;  
			var result_export=div_href.split('#');
		   var  divSroll="#"+result_export[1];
		   var url_request=result_export[0];
		   if(url_request==url){
			  if($(divSroll).length > 0){
				  $('body,html').animate({
						scrollTop: $(divSroll).offset().top
				   }, 800);
				   $(this).addClass("active");
				   return false;
			  }
		   }
		   else
		   {
			   location.href =div_href; 
			   $(window).trigger( 'hashchange' );
			   return true;
			 
		   }
	  });
	  
	$('.lighbox_show').css({
			height:$(document).outerHeight(),
			width:$(document).width()
	});
		
	$(window).on('load resize', function (){

			$('.schedule_box_content .schedule_box_top').each(function() {
				$(this).removeAttr('style');
			});
			$('.schedule_box_content .schedule_box_tmb').each(function() {
				$(this).removeAttr('style');
			});
			$('.schedule_box_content h3.theme').each(function() {
				$(this).removeAttr('style');
			});
			$('.schedule_box_content .guest').each(function() {
				$(this).removeAttr('style');
			});
			$('.schedule_box_content .event_box_bottom').each(function() {
				$(this).removeAttr('style');
			});
			
			var maxHeight_schedule_box_top = -1;
			$('.schedule_box_content .schedule_box_top').each(function() {
			if ($(this).outerHeight() > maxHeight_schedule_box_top)
				maxHeight_schedule_box_top = $(this).outerHeight();
				$(this).css("height",maxHeight_schedule_box_top);
			});
			$('.schedule_box_content .schedule_box_top').each(function() {
			//	$('.schedule_box_content .schedule_box_top').css("height",maxHeight_schedule_box_top);
			});
			var maxHeight_schedule_box_tmb = -1;
			$('.schedule_box_content .schedule_box_tmb').each(function() {
			if ($(this).outerHeight() > maxHeight_schedule_box_tmb)
				maxHeight_schedule_box_tmb = $(this).outerHeight();
			});
			//$('.schedule_box_content .schedule_box_tmb').each(function() {
				//$('.schedule_box_content .schedule_box_tmb').css("height",maxHeight_schedule_box_tmb);
			//});
			
			var maxHeight_theme = -1;
			$('.schedule_box_content h3.theme').each(function() {
			if ($(this).outerHeight() > maxHeight_theme)
				maxHeight_theme = $(this).outerHeight();
				$(this).css("height",maxHeight_theme);
			});
			$('.schedule_box_content h3.theme').each(function() {
				//$('.schedule_box_content h3.theme').css("height",maxHeight_theme);
			});
			
			
			var maxHeight_guest = -1;
			$('.schedule_box_content .guest').each(function() {
			if ($(this).outerHeight() > maxHeight_guest)
				maxHeight_guest = $(this).outerHeight();
				$(this).css("height",maxHeight_guest);
			});
			$('.schedule_box_content .guest').each(function() {
				//$('.schedule_box_content .guest').css("height",maxHeight_guest);
			});
			var maxHeight_event_box_bottom = -1;
			$('.schedule_box_content .event_box_bottom').each(function() {
			if ($(this).outerHeight() > maxHeight_event_box_bottom)
				maxHeight_event_box_bottom = $(this).outerHeight();
			//	$(this).css("height",maxHeight_event_box_bottom);
			});
			$('.schedule_box_content .event_box_bottom').each(function() {
				//$('.schedule_box_content .event_box_bottom').css("height",maxHeight_event_box_bottom);
			});
			
			
			
		var vs_max_767= window.matchMedia("only screen and (max-width: 767px)");
		if(!vs_max_767.matches)
		{
			//pc version
			
			$( "a.click_readmore" ).click(function(e) {
				var current_url=window.location.href;  
				//console.log(current_url);
				e.preventDefault();
				$('.lighbox_show').removeAttr('style');
				var link_request=$(this).attr('data-href');
				var category_request=$(this).attr('data-category');
				if(link_request !=""){
					$.ajax({
					   type: "POST",
					   url: link_request,
					   dataType: "html",
					  contentType: "text/html",
					   beforeSend: function() {
						  $(".lighbox_show").show();
						  $("#overlay_load").show();
					   },
					   success: function(response) {
						   $('#content_inc').empty();
						  	var html_append=$(response).find('#single_events_details').html();
							$('#content_inc').css("display","block"); 
							$('#content_inc').append(html_append); 
							$('#content_inc').addClass(category_request); 
							$('#content_inc').find('#url_single_page').val(current_url);
							//console.log("URL load ajax"+current_url);
							$('.lighbox_show').css({
							  height:$(document).outerHeight(),
							  width:$(document).width()
						   });
						   
						   $("#overlay_load").fadeOut( "slow");
						    var pos = $(window).scrollTop();
							$('#content_inc').find('#position_sroll_id').val(pos);
							 //$('#content_inc').css("top",pos);	
							 history.pushState("", document.title, link_request);
							var height_document=$(document).outerHeight();
							var content_inc_height=$('#content_inc').outerHeight();
							//alert(content_inc_height);
							var $el = $('#content_inc');  //record the elem so you don't crawl the DOM everytime  
							var bottom = $el.position().top + $el.outerHeight(true);
							var height_du=$(document).outerHeight()-$el.position().top;
							$('.lighbox_show').css({
									height:+$el.outerHeight(true)+60
							});
							$('header').css({
								"position":"fixed",
								"top":"0px",
								"left": "0px",
								"right": "0px",
								});
							$('footer').css({
								"position":"fixed",
								"bottom":"0px",
								"left": "0px",
								"right": "0px"
								});
							$('#main_page').css("display","none");
							$('body,html').scrollTop(0);
						  
						  
					   }
					});
				}
			});
			$("#content_inc").delegate(".tbl_icon_single","click", function(e) {
				e.preventDefault();
				var url_current=$('#content_inc').find("#url_single_page").val();
				var pos_current=$('#content_inc').find("#position_sroll_id").val();
				var category_current=$('#content_inc').find("#category_sroll_id").val();
				
				$('#main_page').removeAttr('style');
				$('footer').removeAttr('style');
				$('header').removeAttr('style');
				
				$(".lighbox_show").fadeOut( "slow");
				$('#content_inc').removeClass(category_current);
				$('#content_inc').css("display","none");
				$('#content_inc').empty(); 
				$('body,html').scrollTop(pos_current);
				history.pushState("", document.title, url_current); 
			});
		}
		else
		{
			//mobile
			$( "a.click_readmore" ).click(function(e) {
				e.preventDefault();
				var link_request=$(this).attr('data-href');
				if(link_request !=""){
					location.href =link_request;
				}
			});
			if($('#content_inc').css('display') == 'block')
			{
				 $(".lighbox_show").fadeOut( "slow");
				$("#content_inc").hide();
				var url_link=window.location.pathname;
				location.href =url_link;
			}

			$(".content_top .group_top_content_1" ).each(function() {
				if($(this).find('.mobile_excerpt').length == 0)
				{
					var mobile_excerpt=$(this).find('.ts_excerpt').html();
					$("<div class='mobile_excerpt clear'></div>").appendTo(this);
					$(this).find('.mobile_excerpt').append(mobile_excerpt);
				}
			});


		}
	});
	
	
	
});