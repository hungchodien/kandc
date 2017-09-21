<?php 
	ob_start();
	
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
<!--[if gte IE 9]>
  <style type="text/css">
    #wrapper {
       filter: none;
    }
  </style>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="noIE" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta name="keywords" content="ヘッドハンティング,人材紹介,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,求人" />
<meta name="description" content="クライス&カンパニーは、一人ひとりに合ったキャリアデザインを行った上での転職サポートを得意しています。30代を中心とした方々へのキャリアコンサルティング実績が豊富です。将来的な転職についてもお気軽にご相談ください。【完全無料サービス】" />

<meta PROPERTY="og:title" content="30代の転職ならクライス＆カンパニー（ヘッドハンティング・人材紹介・転職エージェント・キャリアコンサルティング）" />
<meta PROPERTY="og:type" content="website" /> 
<meta PROPERTY="og:url" content="http://kandc.com/landing/" /> 
<meta PROPERTY="og:description" content="クライス&カンパニーは、一人ひとりに合ったキャリアデザインを行った上での転職サポートを得意しています。30代を中心とした方々へのキャリアコンサルティング実績が豊富です。将来的な転職についてもお気軽にご相談ください。【完全無料サービス】" />
<meta PROPERTY="og:image" content="http://kandc.com/landing/img/facebook-og-image.png" />
<meta PROPERTY="og:site_name" content="30代の転職ならクライス＆カンパニー（ヘッドハンティング・人材紹介・転職エージェント・キャリアコンサルティング）" />

<title>30代の転職ならクライス＆カンパニー（ヘッドハンティング・人材紹介・転職エージェント・キャリアコンサルティング）</title>
<?php

/*
if ($_SERVER['HTTP_HOST'] != "www.kandc.com") {
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: http://www.kandc.com".$_SERVER['REQUEST_URI']);
			exit; 
		}

$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') 
                === FALSE ? 'http' : 'https';
			if(isset($_SERVER['HTTPS'])):
				if ($_SERVER["HTTPS"] == "on"): 
					$protocol = "https:";
				else:
					$protocol = "http:";
				endif;
			else :
				$protocol = "http:";
			endif;
*/

			define('url_root',$protocol."//".$_SERVER["SERVER_NAME"].'/kandc/landing/');
	        
			define('url_root_http',"http://".$_SERVER["SERVER_NAME"].'/');

			define('url_root_main',$protocol."//".$_SERVER["SERVER_NAME"].'/');
?>



<link rel="stylesheet" type="text/css" href="<?php echo url_root;?>css/style.css" media="all" />

<!--[if lt IE 9]>
<script src="<?php echo url_root;?>js/html5.js" type="text/javascript"></script>
<![endif]-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo url_root;?>js/validate_form_entry.js"></script>

<script type="text/javascript" src="<?php echo url_root_main; ?>js/number_check.js"></script>
<script type="text/javascript" src="<?php echo url_root_main; ?>js/common_funcs.js"></script>
<script src="../js/jquery.maxlength_plugin.js" type="text/javascript"></script>
<script src="../js/jquery.maxlength.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/common_funcs.js"></script>

<script type="text/javascript">
        $(document).ready(function(){

                // scroll to section
                $('.f1_btn').click(function () {
                    $('body,html').animate({
                        scrollTop: $("#features01").offset().top
                    }, 800);
                    return false;
                });
                $('.f2_btn').click(function () {
                    $('body,html').animate({
                        scrollTop: $("#features02").offset().top
                    }, 800);
                    return false;
                });
                $('.f3_btn').click(function () {
                    $('body,html').animate({
                        scrollTop: $("#features03").offset().top
                    }, 800);
                    return false;
                });
				$('#top_entry_btn').click(function () {
                    $('body,html').animate({
                        scrollTop: $("#form").offset().top
                    }, 800);
                    return false;
                });
				$('.entry_btn').click(function () {
                    $('body,html').animate({
                        scrollTop: $("#form").offset().top
                    }, 800);
                    return false;
                });
             
			 	$(".scroll-to-div,.scroll-to-div a").click(function(e){
						e.preventDefault();
						var anchor = $(this).attr("href");
						$("body,html").animate({scrollTop:$(anchor).offset().top},500);
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


</head>

<body>

<div id="page-wrapper">

<header>
   
        <div id="top-head">
        	 <div class="container clear">
                <div id="logo" class="fl"><a href="<?php echo $protocol;?>//kandc.com/"><img title="" alt="クライス＆カンパニー" src="<?php echo url_root;?>img/logo-kreis.png" /></a></div>
        		
                <ul class="social-btns fr clear">
                        <li class="facebook-like fl">
                            <div class="fb-like" data-href="<?php echo url_root;?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                        </li>
                        <li class="twitter fl">
                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo url_root;?>">Tweet</a>
                        </li>
                        <li class="google fl">
                            <div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?php echo url_root;?>"></div>
                        </li>
                </ul>
           </div><!--main-container-->
      </div><!--#top-head-->
   
</header>