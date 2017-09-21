<?php 
	ob_start();
	session_start();
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="noIE" xmlns="http://www.w3.org/1999/xhtml"
	  xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml"
      xml:lang="en" lang="en">
<!--<![endif]-->
<head>
<link rel="shortcut icon" href="<?php echo url_root; ?>favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo url_root; ?>favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width" />

<?php 
	@include('config_exe.php');
	@include('../config_exe.php');
	$page="";
	if(isset($_GET['page'])):
	$page=$_GET['page'];
	endif;
	 
		$pageURL_cu="http";
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL_cu .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL_cu .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL_cu .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
	@include('seo/seo_inc.php'); 
	@include('../seo/seo_inc.php');
?>
<link type="text/css" href="<?php echo url_root; ?>css/style.css" rel="stylesheet"/>

<!--[if lt IE 9]>
		<script src="<?php echo url_root; ?>/js/html5.js" type="text/javascript"></script>
		<script src="<?php echo url_root; ?>/js/selectivizr.js" type="text/javascript"></script>
		<script src="<?php echo url_root; ?>/js/css3-mediaqueries.js" type="text/javascript"></script>
<![endif]-->

<!--[if lt IE 10]>
	<script src="<?php echo url_root; ?>/js/matchMedia.js" type="text/javascript"></script>
<![endif]-->
<script src="<?php echo url_root; ?>js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/jquery-ui.min.js"></script>
<script src="<?php echo url_root; ?>js/share.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:700&text=new+Share(".share-button");' rel='stylesheet' type='text/css'>
  
<script language="javascript" type="text/javascript">
		jQuery( document ).ready(function($) {
			
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
			  /*$(".company_bg").css({
				  	"width":+width,
					"padding":0
				 });*/
				 
			/*Menu*/
			 $("#access").delegate(".menu_mobile","click", function() {
				$('body').append($('<div/>', {
        			id: 'overlay' 
    			}));
				$('body').append("<div class='bg_full_mobile'></div>");
					
				var menu_ul=$("nav#access").html();
				$("#overlay").append(menu_ul);	
				
				var height_overlay=$("#overlay").outerHeight( true );
				
				$(".bg_full_mobile").css({
					"height":+(height_overlay+73)
				});
				$("body").css({
					"height":+(height_overlay+73)
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
							$("body").css({'height':'initial'});
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
							$("body").css({'height':'initial'});
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
							$("body").css({'height':'initial'});
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
							$("body").css({'height':'initial'});
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
				 
				 
				 
				 
				 
				 
				 
				 
			if ($('footer.footer_index').length){
				
				var footer_inc=$("footer.footer_inc").html();
				$("footer.footer_index").css({
					"height":+height_footer
					});
				$("footer.footer_index").append(footer_inc);
				$("footer.footer_inc").remove();
			}
			
			 $("#ja-nav").delegate(".menu_mobile_footer","click", function() {
				
				$('body').append($('<div/>', {
        			id: 'overlay' 
    			}));
				$('body').append("<div class='bg_full_mobile'></div>");
					
				var menu_ul=$("nav#ja-nav").html();
				$("#overlay").append(menu_ul);	
				
				var height_overlay=$("#overlay").outerHeight( true );
				
				$(".bg_full_mobile").css({
					"height":+(height_overlay+73)
				});
				$("body").css({
					"height":+(height_overlay+73)
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
				$("#overlay .nav_footer").addClass("footer_click");
				//$("#access #menu_top").addClass("menu_mobile_close");
				$("#access #menu_top").removeClass('menu_mobile').addClass('menu_mobile_close');
				$("#overlay .menu_mobile_footer").addClass('menu_close_left');
				$('body,html').animate({
							scrollTop: 0
						}, 1);
				
			 });
		
			$(window).on('load resize', function () {

				var width_li1=$( ".nav_story ul li:nth-child(1)").width();	
				var width_li2=$( ".nav_story ul li:nth-child(2)").width();	
				var width_li3=$( ".nav_story ul li:nth-child(3)").width();
				$( ".nav_story .nav_center").css({
					"width":+(width_li2+20)
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
			
		});
		
		/*var share = new Share(".share-button", {
		  networks: {
			facebook: {
			  app_id: "602752456409826",
			}
		  }
		});*/
	</script>
</head>
<body>

<?php 
	$active_home="";
	$active_company="";
	$active_entry="";
	$active_service="";
	$active_story="";
	$active_consultant="";
	$active_access="";
	
	if(!empty($page)):
		switch($page)
			{
			case "company":
				$active_company="active";
			break;
			case "entry":
				$active_entry="active";
			break;	
			case "service":
				$active_service="active";
			break;	
			
			case "story":
				$active_story="active";
			break;	
			
			case "consultant":
				$active_consultant="active";
			break;	
			
			case "access":
				$active_access="active";
			break;
			default:
				$active_home="active";
			}
	else: 
		$active_home="active";
	endif;
?>


<header id="masthead" class="site-header clear" role="banner">
	<div class="contact_header_top clear">
    	<h1>エグゼクティブの転身・転職　クライス＆カンパニー・EXECUTIVEチーム</h1>
        <h3><span class="tel_top"><a href="tel:0357332684">03-5733-2684</a> </span><span class="mail_top"><a href="mailto:exe@kandc.com">exe@kandc.com</a></span> </h3>
    </div><!--contact_header_top-->
    
    <div class="clear logo_menu">
	
        <div class="group_logo l">
            <div class="content_logo clear">
                
                <h2><a href="<?php echo url_root; ?>"><img src="<?php echo url_root; ?>img/logo-executive.png" alt="株式会社 クライス＆カンパニー"/></a></h2>
               
            </div>
        </div>
    
        <div class="group_menu r">
            <nav role="navigation" id="access" class="clear">
                <h2 id="menu_top" class="menu_mobile">MENU</h2>
                <ul class="nav clear">
                    <li><a class="<?php echo $active_home; ?>" href="<?php echo url_root; ?>">
                    
                    <?php if($active_home!="" && !empty($active_home)):echo "ホーム"; else: echo "Home"; endif; ?>
                  
                    </a></li>
                    <li><a class="<?php echo $active_service; ?>" href="<?php echo url_root; ?>service/">
                    
                    <?php if($active_service!="" && !empty($active_service)):echo "サービス"; else: echo "Service"; endif; ?>
                    
                    </a></li>
                    <li><a class="<?php echo $active_story; ?>" href="<?php echo url_root; ?>story/">
                    
                    <?php if($active_story!="" && !empty($active_story)):echo "実績・リアルストーリー"; else: echo "Performance"; endif; ?>
                    
                    </a></li>
                    <li><a class="<?php echo $active_consultant; ?>" href="<?php echo url_root; ?>consultant/">
                    
                    <?php if($active_consultant!="" && !empty($active_consultant)):echo "コンサルタント紹介"; else: echo "Consultant"; endif; ?>
                    
                    </a></li>
                    <li><a class="<?php echo $active_company; ?>" href="<?php echo url_root; ?>company/">
                    
                    <?php if($active_company!="" && !empty($active_company)):echo "会社概要"; else: echo "Company"; endif; ?>
                    
                    </a></li>
                    <li><a class="<?php echo $active_entry; ?>" href="<?php echo url_root; ?>entry/">
                    
                    <?php if($active_entry!="" && !empty($active_entry)):echo "エントリー"; else: echo "Entry"; endif; ?>
                    
                    </a></li>
                    <li><a class="<?php echo $active_access; ?>" href="<?php echo url_root; ?>access/">
                    
                    <?php if($active_access!="" && !empty($active_access)):echo "アクセス"; else: echo "Access"; endif; ?>
                    
                    </a></li>
                    <li><a href="javascript:void(0);" class="share-button">Share social</a></li>
                </ul>
            </nav>
        </div>
    
    </div><!--logo_menu-->
    
</header><!--masthead-->
<div id="main" class="wrapper clear">