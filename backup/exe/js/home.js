$(document).ready(function() {
	
	var isPC = window.matchMedia("only screen and (min-width: 767px)");
	
	 if (isPC.matches) {
			$('#fullpage').fullpage({
				'verticalCentered': false,
				'css3': true,
				//'sectionsColor': ['#F00', '#fff', '#fff', '#fff'],
				'navigation': true,
				'navigationPosition': 'left',
				'navigationTooltips': ['home', 'ヘッドハンターのリストにエントリーしませんか？', 'ヘッドハンターのリストにエントリーすると？', 'クライス＆カンパニー・EXECUTIVEチームとは？', 'クライス＆カンパニーとは？', 'エグゼクティブとは？'],
				
				anchors: ['home', 'entry', 'head-hunter', 'executive-team', 'kreis-company', 'executive'],
				
				autoScrolling: false,
				scrollOverflow: false,

				'afterLoad': function(anchorLink, index){
					if(index == 1){
						$('#fp-nav').css({'display':'none'});
						$('.back_top').css({'display':'none'});
						$('.goto_entry_pc').css({'display':'none'});
					}else {
						$('#fp-nav').css({'display':'block'});
						$('.back_top').css({'display':'block'});
						$('.goto_entry_pc').css({'display':'block'});
					}
					
						var section5_H = ($('.section').height() - $('#section5 .wrap').height()) / 2;
						if($('.section').height() > $('.last_section').height() ){
							//$('.last_section').css({'height': $('.section').height() - section5_H});
						}
					
				},

				'onLeave': function(index, nextIndex, direction){
					if(index == 1){
						$('#fp-nav').css({'display':'none'});
						$('.back_top').css({'display':'none'});
						$('.goto_entry_pc').css({'display':'none'});
					}else {
						$('#fp-nav').css({'display':'block'});
						$('.back_top').css({'display':'block'});
						$('.goto_entry_pc').css({'display':'block'});
					}
					
						var section5_H = ($('.section').height() - $('#section5 .wrap').height()) / 2;
						if($('.section').height() > $('.last_section').height() ){
							//$('.last_section').css({'height': $('.section').height() - section5_H});
						}
					
					
				}
				
			});
			//section wrap height
		$(window).on('load resize', function () {
			var section1_H = ($('.section').height() - $('#section1 .wrap').height()) / 2;
			var section2_H = ($('.section').height() - $('#section2 .wrap').height()) / 2;
			var section3_H = ($('.section').height() - $('#section3 .wrap').height()) / 2;
			var section4_H = ($('.section').height() - $('#section4 .wrap').height()) / 2;
			var section5_H = ($('.section').height() - $('#section5 .wrap').height()) / 2;
			
			if(section1_H > 0){
				$('#section1 .wrap').css({'margin-top': section1_H});
			} else {
				$('#section1 .wrap').css({'margin-top': 0});
			}
			if(section2_H > 0){
				$('#section2 .wrap').css({'margin-top': section2_H});
			} else {
				$('#section2 .wrap').css({'margin-top': 0});
			}
			if(section3_H > 0){
				$('#section3 .wrap').css({'margin-top': section3_H});
			} else {
				$('#section3 .wrap').css({'margin-top': 0});
			}
			if(section4_H > 0){
				$('#section4 .wrap').css({'margin-top': section4_H});
			} else {
				$('#section4 .wrap').css({'margin-top': 0});
			}
			if(section5_H > 0){
				$('#section5 .wrap').css({'margin-top': section5_H});
			} else {
				$('#section5 .wrap').css({'margin-top': 0});
			}
			
		});
		
	 }//end if isPC
	 else{ 
		 $('#fullpage').fullpage({
				'verticalCentered': false,
				'css3': true,
				//'sectionsColor': ['#F00', '#fff', '#fff', '#fff'],
				'navigation': true,
				'navigationPosition': 'left',
				'navigationTooltips': ['home', 'ヘッドハンターのリストにエントリーしませんか？', 'ヘッドハンターのリストにエントリーすると？', 'クライス＆カンパニー・EXECUTIVEチームとは？', 'クライス＆カンパニーとは？', 'エグゼクティブとは？'],
				
				anchors: ['home', 'entry', 'head-hunter', 'executive-team', 'kreis-company', 'executive'],
				
				autoScrolling: false,
				scrollOverflow: false,
				verticalCentered: false,
				loopHorizontal: false,
				
				

				'afterLoad': function(anchorLink, index){
					if(index == 1){
						$('#fp-nav').css({'display':'none'});
						$('.back_top').css({'display':'none'});
						$('.goto_entry_pc').css({'display':'none'});
					}else {
						$('#fp-nav').css({'display':'block'});
						$('.back_top').css({'display':'block'});
						$('.goto_entry_pc').css({'display':'block'});
					}
					
						var section5_H = ($('.section').height() - $('#section5 .wrap').height()) / 2;
						if($('.section').height() > $('.last_section').height() ){
							$('.last_section').css({'height': $('.section').height() - section5_H });
						}
					
				},

				'onLeave': function(index, nextIndex, direction){
					if(index == 1){
						$('#fp-nav').css({'display':'none'});
						$('.back_top').css({'display':'none'});
						$('.goto_entry_pc').css({'display':'none'});
					}else {
						$('#fp-nav').css({'display':'block'});
						$('.back_top').css({'display':'block'});
						$('.goto_entry_pc').css({'display':'block'});
					}
				}
				
			});
			$('.section').css({'height': 'auto'});
			
	}
	
	////////////// hide the navi when footer appears
	function log(footerY) {
  //$("#log").html("footer: <b>" + txt + "</b> px");
  var footerPos = $(window).height() - footerY;
  $("#log").html("footer: <b>" + footerPos + "</b> px");
  if(footerPos > 40){
	  $('#fp-nav').css({'display':'none'});
	  $('.goto_entry_pc').css({'display':'none'});
	 }
}

$(function() {
  var eTop = $('#colophon').offset().top; //get the offset top of the element
  log(eTop - $(window).scrollTop()); //position of the ele w.r.t window

  $(window).scroll(function() { //when window is scrolled
    log(eTop - $(window).scrollTop());
	
  });
});
/////////////
		
		if(isIE9OrBelow()){
			//setInterval(scroll_ani,0);
			//alert(isIE9OrBelow());
		}
});

var started = false;
function isIE9OrBelow()
{
   return /MSIE\s/.test(navigator.userAgent) && parseFloat(navigator.appVersion.split("MSIE")[1]) < 10;
}
function scroll_ani() {
    $(".roll_down_btn").animate({
                'bottom':'30px',
                'opacity':1,
                '-ms-filter': 'progid:DXImageTransform.Microsoft.Alpha(opacity=100)',
                'filter': 'alpha(opacity=100)'
                },1000, function(){
                	//this code
    });
    $(".roll_down_btn").animate({
                'bottom':'50px'
            },200, function(){
                $(".roll_down_btn").delay(300).animate({
                        'opacity':1,
                        '-ms-filter': 'progid:DXImageTransform.Microsoft.Alpha(opacity=100)',
                        'filter': 'alpha(opacity=100)'
                },200, function(){
                    //this is code      
                                
            });    
               
    }); 
}