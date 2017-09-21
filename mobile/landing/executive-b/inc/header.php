<?php ob_start(); ?>
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
<?php include('inc/config_headhunter.php'); ?>
<?php include('../inc/config_headhunter.php'); 
if ($_SERVER['HTTP_HOST'] != "www.kandc.com") {
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: http://www.kandc.com".$_SERVER['REQUEST_URI']);
			exit; 
		}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<meta name="keywords" content="ヘッドハンティング,人材紹介,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,ヘッドハンター" />
<meta name="description" content="クライス&カンパニーは、30代の転職サポートを得意しています。「経験、能力が最大限に活かせる魅力的なオファーに出会いたい」「専属コンサルタントと情報交換をして、自分の可能性を常に把握していたい」「独自に開拓した、コンフィデンシャル案件を紹介して欲しい」方はぜひエントリーください。" />


<meta PROPERTY="og:title" content="30代の転職ならクライス＆カンパニー（エグゼクティブにふさわしいプレミアム転職サポート）" />
<meta PROPERTY="og:type" content="website" /> 
<meta PROPERTY="og:url" content="http://www.kandc.com/landing/executive-b/" /> 
<meta PROPERTY="og:description" content="クライス&カンパニーは、30代の転職サポートを得意しています。「経験、能力が最大限に活かせる魅力的なオファーに出会いたい」「専属コンサルタントと情報交換をして、自分の可能性を常に把握していたい」「独自に開拓した、コンフィデンシャル案件を紹介して欲しい」方はぜひエントリーください。" />
<meta PROPERTY="og:image" content="http://www.kandc.com/landing/executive-b/img/facebook-og-image.png" />
<meta PROPERTY="og:site_name" content="30代の転職ならクライス＆カンパニー（エグゼクティブにふさわしいプレミアム転職サポート）" />


<title>30代の転職ならクライス＆カンパニー（エグゼクティブにふさわしいプレミアム転職サポート）</title>
<link rel="stylesheet" type="text/css" href="<?php echo url_root_headhunter; ?>css/style.css" media="all" />

<!--[if lt IE 9]>
<script src="<?php echo url_root_headhunter; ?>js/html5.js" type="text/javascript"></script>
<script src="<?php echo url_root_headhunter; ?>/js/css3-mediaqueries.js" type="text/javascript"></script>
<![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .consultant_block, .voice_box {
       filter: none;
    }
  </style>
<![endif]-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo url_root_domain; ?>js/number_check.js"></script>
<script type="text/javascript" src="<?php echo url_root_domain; ?>js/common_funcs.js"></script>

<!--scroll to top-->
<script type="text/javascript">
jQuery(document).ready(function($){
/*xuong dong dat trong jquery*/
			$('textarea').keypress(function(event) {
			  if (event.which == 13) {
				event.preventDefault();
			      var s = $(this).val();
			      $(this).val(s+"\n");
			  }
			});
			
		/*het xuong dong*/

	// scroll to section
	$('.features_btn a').click(function () {
		var divSroll = $(this).attr('href');
		$('body,html').animate({
			scrollTop: $(divSroll).offset().top
		}, 800);
		return false;
	});
	// short button scroll to section
	$('#entry_short_btn a').click(function () {
		$('body,html').animate({
			scrollTop: $('#headhunter_short_form').offset().top
		}, 800);
		return false;
	});

});
</script>
<?php 
	$url_check = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		if (strpos($url_check,'complete.php') !== false) {
		   ?>

	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
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
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSRPSR');</script>
<!-- End Google Tag Manager -->
</head>

<body>

<header>

<div class="logo wrapper"><a href="<?php echo url_root_headhunter; ?>"><img alt="株式会社クライス＆カンパニー" src="<?php echo url_root_headhunter; ?>img/logo-kreis.png" /></a></div>
    
</header>