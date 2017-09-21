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
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="noIE" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />-->
<meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0">
<title>エントリー（今すぐ転職をお考えのあなた） | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
<meta content="ヘッドハンティング,人材紹介会社,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,キャリアデザイン,転職サポート" name="keywords">
<meta content="数ある転職エージェントの中で私たちクライス&カンパニーは、一人ひとりに合ったキャリアデザインのお手伝いと転職のサポートをしています。30代を中心とした方々へのキャリアコンサルティング実績が豊富ですので、将来的な転職についてもご相談ください。" name="description"/>
<meta content="ヘッドハンティング・人材紹介会社・転職エージェント・キャリアコンサルティングのクライス&カンパニー" property="og:title">
<meta content="数ある転職エージェントの中で私たちクライス&カンパニーは、一人ひとりに合ったキャリアデザインのお手伝いと転職のサポートをしています。30代を中心とした方々へのキャリアコンサルティング実績が豊富ですので、将来的な転職についてもご相談ください。" property="og:description"/>
<meta content="株式会社クライス＆カンパニー" name="author"/>
<meta content="Copyright©2013 KREIS&Company Inc.　All Right Reserved." name="copyright"/>

<?php
	@include('../config_mobile.php');
	
	
	function curPageURL1() {
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
	if ($protocol == 'http:' || $protocol =='HTTP:'){
		$entry_protocol = str_replace('http', 'https', curPageURL1() );
		header('Location:'.$entry_protocol);
	}
	//@include('../inc/header.php'); 
?>
<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>nivo-slider/nivo-slider.css" media="all" />

<!--[if lt IE 9]>
<script src="<?php echo url_root; ?>js/html5.js" type="text/javascript"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>entry/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<script src="<?php echo $protocol; ?>//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $protocol; ?>//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo url_root; ?>js/jquery.nivo.slider.js"></script>
<script src="<?php echo url_root; ?>js/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/show_layer.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/smoothDivScroll.css" media="all"/>
<script src="<?php echo url_root; ?>js/validate_form_entry.js" type="text/javascript"></script>
<script type="text/javascript">
		var isMobile = window.matchMedia("only screen and (min-width: 760px)");
			if (isMobile.matches) 
				{
							//	alert("mobile");
							//document.location = "https://www.kandc.com/entry_fb/";
				}
</script>
<script type="text/javascript">
	jQuery(document).ready(function($){
	
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
		
		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		
		$('#menu_btn a#show_menu_hover').click(function () {
			//$(this).hide();
			$("#wrapper").show()
			.css({right:0,position:'absolute'})
			.animate({right:"100%"}, 500, function() {
			});
			$('#top_menu').show()
			.animate({width: '100%',right:'0%'}, '500', function() {
			$('#overlay').show();
			});
			});
			$('a.hide_menu_hover').click(function () {
			//$(this).hide();
			$("#wrapper").show()
			.css({right:'100%',position:'absolute'})
			.animate({right:"0%"}, 500, function() {
			});
			$('#top_menu').show()
			.animate({width: '0%',right:'-100%'}, '500', function() {
			$('#overlay').hide();
			$('#top_menu').hide();
			});
			}); 
			
			
		 $('.interview_selected_category').change(function(){ 
					url= $(this).val(); 
					location.href =$(this).val(); 
					$('.interview_selected_category').find("option[value='"+url+"']").attr("selected", "selected");
		 });
			
       	$(window).on('load resize', function () {
			var height_browse=$(window).height();
			var height_body=$(document).height();
			var width_body=$(window).width();
			
		});

    });
</script>
</head>

<body>
<div id="wrapper" class="wrapper">
<header>
  <div id="top_site" class="clear inside">
    <h1 class="logo clear"><a href="<?php echo url_root; ?>"><img title="株式会社クライス&カンパニー" alt="株式会社クライス&カンパニー" src="<?php echo url_root; ?>img/logo-kreis.png" /></a></h1>
    <!--<h2 id="site_description">ヘッドハンティングのクライス＆カンパニー</h2>-->
    <!--<div id="menu_btn" class="fr"><a href="javascript:void(0);" id="show_menu_hover"><img src="<?php echo url_root; ?>img/button-menu.png" alt="メニュー" title="メニュー" /></a> </div>-->
  </div>
</header>

	<!--End Content -->    
       <div id="content" class="inside clear">
       		<div class="content_single clear">
       <!--****************************************************-->
    
       		
               <div class="bg_white content_inside block_content">
            		<div id="icon-send-complete"><img title="送信完了" alt="送信完了" src="<?php echo url_root; ?>img/icon-send-complete.png" /></div>
                    <h1 class="title">あなたのメッセージは送信されました。
ありがとうございました。</h1>
            	 <div class="thank_for_you clear">
                        <p>担当コンサルタントまたは候補者サポート事務局より、ご登録いただいたお電話番号またはメールアドレス宛にご連絡いたします。</p><br>
			  <p>尚、1週間以内に弊社からのご連絡がない場合は、ご連絡先の誤入力の可能性がございますので、お手数おかけいたしますが下記までご一報くださいませ。</p>
			  <p> また、ご経験やご希望の業界、職種、ご年齢などによってはご紹介が難しい場合がございます。予めご了承ください。</p><br/>
<div class="contact-personal">
              <div class="contact-personal-title">お問合せ</div>
              <div>TEL  03-5733-1602</div>
              <div>Email  kreis-info@kandc.com</div>
            </div>
                  </div>
              </div>
              <div class="block_content clear">
           
              </div>
             <!--****************************************************-->
            
             
            
      
           
           </div><!--.content single-->
       </div><!--End content-->
    
    
 <footer>
  <div id="foot" class="inside">
    <div id="foot_copyR" class="clear">
		<div class="group_footer_r clear icon_back_index">
      	<a class="back_kandc_lb-mobile" href="<?php echo url_root; ?>"><img src="<?php echo url_root; ?>img/lp-entry-form/button_back.png" /></a>
      	</div>

    	<div class="clear group_footer_l">
      <p class="txt1-f">株式会社 クライス&カンパニー</p>
      <p id="copyR">Copyright&copy;2015 KREIS &amp; Company Inc. All Rights Reserved. webdesign <a href="http://tokyodesignroom.com/" title="webdesign tokyodesignroom.com" target="_blank">tokyodesignroom.com</a></p>
		</div>
        
	  
	</div>
   </div>
  </footer>
  
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2905089-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- リマーケティング タグの Google コード -->
<!--
リマーケティング タグは、個人を特定できる情報と関連付けることも、デリケートなカテゴリに属するページに設置することも許可されません。タグの設定方法については、こちらのページをご覧ください。
http://google.com/ads/remarketingsetup
-->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967277328;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/967277328/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<!-- Google Code for &#12473;&#12510;&#12507;&#12506;&#12540;&#12472;&#35370;&#21839; -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967277328;
var google_conversion_label = "iNEACNis2CMQkPadzQM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/967277328/?value=0&amp;label=iNEACNis2CMQkPadzQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php 
				@include('../ebits.php');
				@include('../../ebits.php');
				@include('../../../ebits.php');
			?> 

</body>



</html>

<?php 
	ob_flush();
?>
 		 
   
