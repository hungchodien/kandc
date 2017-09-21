// JavaScript Document
$( document ).ready(function() {
	//scroll page top
	$('a#back-top').click(function () {
	
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
	});
	$(".text_search").Watermark("キーワードで求人を検索");
	if($(".nav_menu ul li a.active").length > 0)
				{
					$(".nav_menu ul li a").removeClass(function(i){
						 if (i==0) {return "default"}
       					 else {return "home"}
					});
				}
			 $( window ).load(function() {
				 if($("#header_meta").length > 0)
				 {
					 var content_div_meta=$("#header_meta").html();
					// alert(content_div_meta);
					$("head").append(content_div_meta);	
					$("#header_meta").remove(); 
				 }
				
			 });
			   var maxHeight = -1;
				$('.releated_inter .item_list').each(function() {
					if ($(this).outerHeight() > maxHeight)
						maxHeight = $(this).outerHeight()+30;
				});
				$('.releated_inter .item_list').each(function() {
					$(this).outerHeight(maxHeight);
				});
				
			   var maxHeight_index = -1;
				$('.left_content .inexp').each(function() {
						//alert($(this).height());
					if ($(this).outerHeight() > maxHeight_index)
						maxHeight_index = $(this).outerHeight()+50;
					
				});
				$('.left_content .inexp').each(function() {
					$(this).outerHeight(maxHeight_index);
				});
				
				
				$('.salary_option_job').bind('change',function(){ 
								var url= $(this).val(); 
								  //event.preventDefault();
    							  //event.stopPropagation();
								  //window.open(url,"_blank");
								 // return  false ; 
								//location.target = "_blank";
							 if (url != '') { // require a URL		
									//alert("ham ah");
									location.href = url; 
									//$('.salary_option_job').find("option[value='"+url+"']").attr("selected", "selected");
								}
       							 return false;
					});
					
			  $(".nav_menu > ul > li > a.active").each(function() {
					$(this).parent().addClass("active_pr");
			  });
			  
			  $('.title_hover').hide();
			  $(".item_iterview_post li").each(function( index ) {
				  	   
				  		var a_href=$(this).find('a').attr("href");
						var title=$(this).find('.title_end').html();
						var title_hover=$(this).find('.title_hover').html();
						var title_after=title_hover;
						$("<div id='title_apend_interview' class='title'></div>").appendTo(this);
						$("<div id='more'><a href='' target='_top'>more</a></div>").appendTo(this);

						var a_title_apend_interview="<a href='"+a_href+"' target='_top'>"+title_after+"</a>";
						$(this).find("#title_apend_interview").append(a_title_apend_interview);


						$(this).find('#more a').attr("href",a_href);
						$(this).find("#title_apend_interview").hide();
						$(this).find('#more').hide();
			  });
			  $(".item_iterview_post li").hover(function(){
			 			$(this).find('.title_end').hide();
						$(this).find('.title_hover').hide();
						$(this).find('#gradient_editor').hide();
						$(this).find("#title_apend_interview").show();
						$(this).find('#more').show();
						$(this).find('.vol_title').hide();
					}, function() {
						 $(this).find('.title_end').show();
						 $(this).find('#gradient_editor').show();
						 $(this).find('.vol_title').show();
						 $(this).find('.title_hover').hide();
						 $(this).find("#title_apend_interview").hide();
						 $(this).find('#more').hide();
						 
			});
			  
			  
		     $(".job_picup_slide_bar_search li").delegate("a","click", function() {
						var divSroll = $(this).attr('href');
						if($(divSroll).length > 0){
							$(".job_picup_slide_bar_search li a").removeClass("active");
						    $('body,html').animate({
								scrollTop: $(divSroll).offset().top
							}, 800);
							$(this).addClass("active");
							return false;
						}
						
				});
		
		
		
		
		
	
});