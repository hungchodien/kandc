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
<meta PROPERTY="og:url" content="http://kandc.com/mobile/landing-20/" /> 
<meta PROPERTY="og:description" content="クライス&カンパニーは、一人ひとりに合ったキャリアデザインを行った上での転職サポートを得意しています。30代を中心とした方々へのキャリアコンサルティング実績が豊富です。将来的な転職についてもお気軽にご相談ください。【完全無料サービス】" />
<meta PROPERTY="og:image" content="http://kandc.com/landing/img/facebook-og-image.png" />
<meta PROPERTY="og:site_name" content="30代の転職ならクライス＆カンパニー（ヘッドハンティング・人材紹介・転職エージェント・キャリアコンサルティング）" />
<title>20代の転職ならクライス＆カンパニー（ヘッドハンティング・人材紹介・転職エージェント・キャリアコンサルティング）</title>
<?php
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


			define('url_root',$protocol."//".$_SERVER["SERVER_NAME"].'/mobile/landing-20/');
	        
			define('url_root_http',$protocol."//".$_SERVER["SERVER_NAME"].'/');
			define('url_root_mobile',$protocol."//".$_SERVER["SERVER_NAME"].'/mobile/');
			
?>

<link rel="stylesheet" type="text/css" href="<?php echo url_root;?>css/style.css" media="all" />

<!--[if lt IE 9]>
<script src="<?php echo url_root;?>js/html5.js" type="text/javascript"></script>
<![endif]-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" src="../../js/validate_form_entry.js"></script>
<script type="text/javascript" src="<?php echo url_root_http; ?>js/watermark.js"></script>

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
				
                $("#text1").Watermark("姓");
				$("#text2").Watermark("名");
				$("#text3").Watermark("セイ");
				$("#text4").Watermark("メイ");
				
				$("#text8").Watermark("メールアドレスを入力してください。");
				$("#text9").Watermark("確認のためもう一度入力してください。");
				$("#text11").Watermark("TOEIC");
				$("#text14").Watermark("直近の職歴についてご入力ください。");
				$("#text15").Watermark("人");
				$("#text16").Watermark("最終部課／職位くをご入力ください。");
				$("#text17").Watermark("万円");
				$("#text19").Watermark("今までの職歴をご自由にご入力ください。");
				$('.submit-go-confirm').click(function() {
						$('#submit_form').submit();
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

<header>
    
    <div class="wrapper">
    <div id="top_menu" class="inside clear">
    <div id="logo"><a href="<?php echo $protocol;?>//kandc.com/"><img title="株式会社クライス&カンパニー" alt="株式会社クライス&カンパニー" src="<?php echo url_root;?>img/logo.png" /></a></div>
  	
    </div>
    </div>
</header>