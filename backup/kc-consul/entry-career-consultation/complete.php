<?php 
	ob_start();
?>
<?php
@include('../Lib/_init.php');
@include('../config.php');

if ($protocol == 'http:' || $protocol =='HTTP:'){
   // $entry_protocol = str_replace('http', 'https', curPageURL() );
   // header('Location:'.$entry_protocol);
}
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
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="noIE" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="ヘッドハンティング,人材紹介会社,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,コンサルタント,エンジニア,キャリアデザイン,転職サポート,エントリー"/>
    <meta name="description" content="クライス&カンパニーのサービスへのエントリーフォームです。エントリーご希望の方は、下記項目にご入力の上、ご送信ください。私たちが、あなたの良きパートナーとして転職活動をサポートいたします。"/>
    <meta name="author" content="株式会社クライス・アンド・カンパニー" />
    <meta name="copyright" content="Copyright&copy;2007 KREIS&amp;Company Inc.　All Right Reserved." />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Language" content="ja" />
    <title>まずは気軽に相談する | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="<?php echo url_root_main; ?>js/jquery.min.js"></script>
    <script src="<?php echo url_root_main; ?>js/show_form.js" type="text/javascript"></script>
    <!-- css -->
     <link type="text/css" href="<?php echo url_root_main; ?>css/style.css" rel="stylesheet"/>
   <link type="text/css" href="../css/style.css" rel="stylesheet"/>
   <link type="text/css" href="../css/style_add.css" rel="stylesheet"/>
   <link type="text/css" href="style.css" rel="stylesheet"/>

    <!-- javascript -->
    <script type="text/javascript" src="js/scroller.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
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
        });
    </script>
    
<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=179447,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->
    
    
</head>

<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NFKWDH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NFKWDH');</script>
<!-- End Google Tag Manager -->
<div class="clear page_main">
<header>

   <div class="header_top clear">
         	<div class="header_top_content clear">
        	<div class="l site_title">
	            	<ul class="clear top_break">
	                   <li><a href="<?php  echo url_root_main; ?>" target="_blank">30代・40代転職</a></li>
	                    <li><a href="<?php  echo url_root_main; ?>exe/" target="_blank">エグゼクティブ転職</a></li>
						<li><a href="<?php  echo url_root; ?>" class="active">コンサルタント転職</a></li>
					</ul>
	           </div><!--site_title-->
               
	           <div class="social_btns r clear social_btns_header">
               		<div class="l title_product_by_hd">produced by</div>
               		<div class="l kandc_title_product_by_hd"><a href="<?php  echo url_root_main; ?>" target="_blank"><img src="<?php echo url_root; ?>img/link/head-kreis-name.png" alt="クライス＆カンパニー"/></a></div>
               		
               		<!--<div class="gplus_btn r" style="width:57px;"><g:plusone size="medium" href="<?php echo $pageURL_cu; ?>"></g:plusone></div>
					<div class="twitter_btn r">
	            		<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $pageURL_cu; ?>" rel="nofollow">Tweet</a>
	            	</div>  
		            <div class="fb_btn r">
	                	<div class="fb-like" data-href="<?php echo $pageURL_cu; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
	                </div>-->
                </div><!--end .social_btns-->
           </div> <!--End .header_top_content-->
         </div><!--End .header_top-->
         
         
        <div class="header_logo clear">
        	<div class="header_top_content header_logo_content clear">
            	<div class="l">
            	<h2 class="clear">
                <a href="<?php echo url_root; ?>">
                	<img src="<?php echo url_root; ?>img/home/logo-consul.png" alt="Consultant Career"/></a>
                    
                </h2>
                <h1 class="clear">コンサルタントのキャリアを共に考える</h1>
                </div>
                <div class="button_entry r">
                <!--<a class="go_entry_consultant" href="http://www.kandc.com/kc-recruit/entry/consultant/" target="_blank"><img src="<?php echo url_root; ?>img/link/button_recruit.png" alt="自社採用 コンサルタント職 募集中"/></a>-->
                <!--<a class="entry_tbl_kc" href="<?php

				/*$url_check_entry = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
							if (false !== strpos($url_check_entry,'entry')) {
								$link_entry.='/entry_easy';
							} else {
								$link_entry.='/entry/';
							}
 				//echo url_root."entry/?entry_id=1014585" 
				if(isset($_GET['entry_id'])){
					$link_entry.='?entry_id='.$_GET['entry_id'];
				}else{
					$link_entry.='?entry_id=1014585';
				}*/
			//echo $link_entry;
			echo url_root."entry_easy/?entry_id=1014585";

?>" target="_blank"><img src="<?php echo url_root; ?>img/entry/entry-easy-button.png" alt="まずは気軽に相談する" /></a>--></div>
            </div>
        </div><!--End .header_logo-->
		
 </header>   
 
<div id="entry" class="clear">
        <div id="entry-nav">
            <ul class="clear">
                <li><span class="entry-nav-step"></span></li>
                <li><span class="entry-nav-step1-none"></span></li>
                <li><span class="entry-nav-step2"></span></li>
                <li><span class="entry-nav-step3-active"></span></li>
            </ul>
        </div>
    </div>

<div id="container">
<div id="content_consul">

<div id="entry-form" class="entry-form entry-form-complete">
<form action="" method="">

<!-------------------------------------------------------------->
<div class="form-personal-profile" style="width:700px; margin:20px auto;">
    <div class="title-top">お申し込みありがとうございます。</div>
    <div class="thank-for-you">
       <p>1週間以内に担当のコンサルタントよりご連絡させて頂きますので、いましばらくお待ちください。 尚、1週間以内に弊社からの連絡がない場合は、ご連絡先の誤入力の可能性がございますので、 大変お手数ではございますが下記までご一報頂けますと幸いです。</p><br>
        
    </div>
    <div class="contact-personal">
        <div class="contact-personal-title">お問合せ</div>
        <div>TEL  03-5733-1602</div>
        <div>Email  <a href="mailto:kreis-info@kandc.com">kreis-info@kandc.com</a></div>
    </div>
</div>
<!--------------------------------------->
<div class="clear">
    <a class="button-complete-page" href="<?php echo url_root; ?>"><img src="../img/entry/back-home-button.png" alt="ヘッドハンティングのクライス＆カンパニー"></a>

    <!--    <div class="form-handler"><a href="#" title="Submit next Step 2"><img src="../img/entry/button-confirm.png" alt=""></a>-->
    <!--    </div>-->
</div>
</form>
</div>

</div>
<!--<div style="margin: 0 auto; width: 980px" class="clear">
    <div id="back-top">
        <a href="#top"><img src="../img/features/back-to-up.png"></a>
    </div>
</div>-->

</div>

<footer id="colophon" class="footer_inc clear" role="contentinfo">
    <div class="clear footer_entry_frm footer_content ">
    	<div class="l">
	              Copyright &copy; <?php echo date('Y'); ?> KREIS&amp;Company Inc. All Right Reserved. webdesign <a rel="nofollow" href="http://tokyodesignroom.com">tokyodesignroom.com</a>
		</div>
       <!-- <div id="footer" class="clear">
            <div class="copy">
                Copyright &copy;<?php echo date('Y'); ?> KREIS &amp; Company Inc. All Right Reserved. webdesign tokyodesignroom.com
            </div>
        </div>-->
     </div>
</footer>
</div>

    
<!--G+ script-->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<!--Twitter script-->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<!--facebook script-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-- Yahoo Code for your Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_conversion_id = 1000240003;
var yahoo_conversion_label = "FuxTCNCWwF8QgvPtvgM";
var yahoo_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://b91.yahoo.co.jp/pagead/conversion/1000240003/?value=0&amp;label=FuxTCNCWwF8QgvPtvgM&amp;guid=ON&amp;script=0&amp;disvt=true"/>
</div>
</noscript>


</body>
</html>
