  <?php
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="noIE" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
<?php
$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https')
 === FALSE?'http':'https';
if (isset($_SERVER['HTTPS'])):
if ($_SERVER["HTTPS"] == "on"):
$protocol = "https:";
 else :
$protocol = "http:";
endif;
 else :
$protocol = "http:";
endif;
define('url_root', $protocol.'//'.$_SERVER["SERVER_NAME"].'/kc-recruit/');
define('url_root_main', $protocol.'//kandc.com/');

function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<link rel="apple-touch-icon" href="http://www.kandc.com/img/link/webclip.png" />
<link rel="icon" href="http://www.kandc.com/img/link/webclip.png" />
<meta content="ヘッドハンティング・人材紹介会社・転職エージェント・キャリアコンサルティングのクライス＆カンパニー" property="og:site_name"/>
<meta content="Copyright&copy;2013 KREIS&amp;Company Inc.All Right Reserved." name="copyright"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo curPageURL();?>" />
<meta http-equiv="Content-Language" content="ja" />
<meta content="notranslate" name="robots"/>
<link rel="stylesheet" type="text/css" href="<?php echo url_root;?>css/style.css" media="all" />
<!--[if gte IE 9]>
  <style type="text/css">
    .bg_grey, .bg_pink {
       filter: none;
    }
  </style>
<![endif]-->
<!--[if lt IE 9]>
<script src="<?php echo url_root;?>js/html5.js" type="text/javascript"></script>
<![endif]-->

<script src="<?php echo $protocol;?>//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo url_root;?>js/validate_form_entry.js" type="text/javascript"></script>

<!--hauptmenu-->
<script type="text/javascript">

$(document).ready(function(){


		$("ul.topnav li.link_parent").mouseenter(function() {
					$(this).find("ul.subnav").slideDown(200);
					$(this).addClass("subhover");
				}).mouseleave(function() {
				 	 $(this).find("ul.subnav").stop( true, true ).slideUp(200);
					 $(this).removeClass("subhover");
				});
		/*
		$("ul.topnav li.link_parent").hover(function() {

			$(this).find("ul.subnav").slideDown('fast').show();

			$(this).hover(function() {
			}, function(){
				$(this).find("ul.subnav").slideUp('slow');
			});

			}).hover(function() {
				$(this).addClass("subhover");
			}, function(){
				$(this).removeClass("subhover");
		});

	*/
});

</script>
<!--end hauptmenu-->

<!--scroll to top-->
<script type="text/javascript">
		$(document).ready(function(){
			if($("#header_meta").length > 0) { var content_header_meta=$("#header_meta").html();
				 // alert(content_div_meta);
				 $("head").append(content_header_meta);
				 $("#header_meta").remove();
				 }
			// hide #back-top first
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
			 $( window ).load(function() {
				 if($("#footer_add_bread").length > 0)
				 {
					 var content_div_link_footer=$("#footer_add_bread").html();
					// alert(content_div_meta);
					$("#footer_breadcrumb").append(content_div_link_footer);
					$("#footer_add_bread").remove();
				 }



			 });

		});
</script>
<?php
$url_check = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

$url_curent_check = curPageURL();
if ($protocol == 'https:' || $protocol == 'HTTPS:') {

	if (false !== strpos($url_curent_check, 'entry/partner/form') || false !== strpos($url_curent_check, 'entry/management/form') || false !== strpos($url_curent_check, 'entry/assistant/form') || false !== strpos($url_curent_check, 'entry/staff/form') || false !== strpos($url_curent_check, 'entry/consultant/form')):
	//not action
	//echo "not ***********************************************";
	 else :

	$entry_protocol_index  = str_replace('https://', 'http://', curPageURL());
	$entry_protocol_index1 = str_replace(':443', '', $entry_protocol_index);
	header("HTTP/1.1 301 Moved Permanently");
	header('Location:'.$entry_protocol_index1);
	endif;
}

if (strpos($url_check, 'complete.php') !== false) {
	?>
	<!-- Facebook Pixel Code -->
			<script>
			!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;
			n.loaded=!0;
			n.version='2.0';
			n.queue=[];
			t=b.createElement(e);
			t.async=!0;
			t.src=v;
			s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window,
			document,'script','//connect.facebook.net/en_US/fbevents.js');

			fbq('init', '1465874273714340');
			fbq('track', 'CompleteRegistration');</script>
			<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=1465874273714340&ev=PageView&noscript=1"
			/></noscript>
			<!-- End Facebook Pixel Code -->


	<?php
}
?>
</head>

<body>
<?php
function check_url_active($text) {
	$url_check = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	if (false !== strpos($url_check, $text)):
	echo "active";
	 else :
	echo "";
	endif;
}
?>
<div id="container">
<header>

    <div id="top_menu" class="clear">
    <div id="logo" class="fl"><a href="<?php echo url_root;?>"><img title="ヘッドハンティングのクライス＆カンパニー" alt="ヘッドハンティングのクライス＆カンパニー" src="<?php echo url_root;?>img/logo-kreis.png" /></a></div>
    <div class="navi fr">
    <ul class="topnav clear">
    <li><a id="menu_home" href="<?php echo url_root;?>" class=""><span>Home</span></a></li>
    <li><a id="menu_message" href="<?php echo url_root;?>message/" class="<?php check_url_active('message');?>"><span>Message</span></a></li>
    <li><a id="menu_about" href="<?php echo url_root;?>about/" class="<?php check_url_active('about');?>"><span>About Us</span></a></li>
    <li class="link_parent"><a id="menu_work" href="<?php echo url_root;?>work/"  class="<?php check_url_active('work');?>"><span>Work</span></a>
    <ul class="subnav">
    <li><a href="<?php echo url_root;?>work/" class="<?php check_url_active('work/consultant');?>">コンサルタント職</a></li>
    <li><a href="<?php echo url_root;?>work/staff/" class="<?php check_url_active('work/staff');?>">スタッフ職</a></li>
    </ul>
    </li>
    <li><a id="menu_member" href="<?php echo url_root;?>member/" class="<?php check_url_active('member');?>"><span>Member</span></a></li>
    <li class="link_parent"><a id="menu_entry" href="<?php echo url_root;?>entry/" class="<?php check_url_active('kc-recruit/entry');?>"><span>Entry</span></a>
    <ul class="subnav">
    <li><a href="<?php echo url_root;?>entry/consultant/">コンサルタント</a></li>
    <li><a href="<?php echo url_root;?>entry/partner/">コンサルタントパートナー</a></li>
    <li><a href="<?php echo url_root;?>entry/management/">エントリーマネージメント</a></li>
   
    </ul>
    </li>
    </ul>
    </div>
    </div>

</header>