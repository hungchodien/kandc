<?php
@include('../Lib/_init.php');
@include('../config.php');
@include('../../config.php');

		$pageURL_cu="http";
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL_cu .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL_cu .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL_cu .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
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
    <title>簡単３分エントリー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
    <meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,簡単,エントリー" />
    <meta name="description" content="現役コンサルタントの転職専門人材紹介会社クライス&amp;カンパニーへの簡単３分エントリーフォームです。" />
    <meta name="author" content="株式会社クライス・アンド・カンパニー"/>
    <meta name="copyright" content="Copyright&copy;2007 KREIS&amp;Company Inc.　All Right Reserved."/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Content-Language" content="ja"/>
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="<?php echo url_root_main; ?>js/jquery.min.js"></script>
    <script src="../js/show_form.js" type="text/javascript"></script>
    
    <script src="<?php echo url_root_main; ?>js/watermark.js" type="text/javascript"></script>
    <script src="<?php echo url_root; ?>js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script  src="<?php echo url_root; ?>js/jquery.flexnav.js"></script>
      <script  src="<?php echo url_root; ?>js/kc-consul_main.js"></script>
      <script  src="<?php echo url_root; ?>js/mobile_main.jquery.js"></script>
      <script  src="<?php echo url_root; ?>js/mobile.js"></script>
    <!-- css -->
    <link type="text/css" href="<?php echo url_root; ?>css/style.css" rel="stylesheet"/>
   <link type="text/css" href="<?php echo url_root; ?>css/flexnav.css" rel="stylesheet"/>
   <link type="text/css" href="<?php echo url_root; ?>css/mobile_style.css" rel="stylesheet"/>
   <link type="text/css" href="style.css" rel="stylesheet"/>

    <!-- javascript -->
    <script type="text/javascript" src="js/scroller.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // hide #back-top first
           // $("#back-top").hide();
		   $('a#back-top').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
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
<div class="clear page_main entry_forms_page">
<header id="header_inc" class="clear">

    <?php //@include("../config.php"); ?>
   
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
                <h1 class="clear">コンサルタントの転職・キャリアを共に考える</h1>
                </div>
                
            </div>
        </div><!--End .header_logo-->
  
  
</header>
<header id="header_area" class="container hide_on_pc mobile">
	<div id="top_area" class=" clear">
    	<div class="l">
            	<h1 class="big_title clear">
                    <a href="<?php echo url_root; ?>">
                        <img src="<?php echo url_root; ?>img/home/logo-consul.png" alt="Consultant Career">
                    </a>                    
                </h1>
                <h2 class="subtitle clear"><a href="<?php echo url_root; ?>">コンサルタントの転職・キャリアを共に考える</a></h2>
        </div>
        
        <div class="r menu_btn_area">
        	<a href="javascript:void(0);" class="mobile_menu_btn open_icon r">Toggle Menu</a>
   			<ul id="mobile_primary_menu" class="clear">
                    <li>
                      <a class="home" href="<?php echo url_root; ?>">
                      <span>ホーム</span>
                      </a>
                    </li>
                     <li>
                        <a class="policy" href="<?php echo url_root; ?>about-us/">
                        <span>クライスの特徴</span></a>
                    </li>
                    <li>
                        <a class="interview" href="<?php echo url_root; ?>interview/"><span>インタビュー </span></a>
                    </li>
                    
                    <li>
                        <a class="job-search" href="<?php echo url_root; ?>job-search/"><span>求人情報</span></a>
                    </li>
                 
                    <li>
                        <a class="blog" href="<?php echo url_root; ?>blog/"><span>プログ</span></a>
                    </li>
               
            </ul>
       </div> <!--menu_btn_area-->
    </div>
   
</header>   
    <div id="entry" class="clear">
        <div id="entry-nav">
            <ul class="clear">
                <li><span class="process-easy-step"></span></li>
                <li><span class="process-easy-step1-none"></span></li>
                <li><span class="process-easy-step2"></span></li>
                <li><span class="process-easy-step3-active"></span></li>
            </ul>
        </div>
    </div>

<div id="container">
<div id="content_consul">


<div id="entry-form" class="entry-form entry-form-complete">
<form action="#" method="">

<!-------------------------------------------------------------->
<div class="form-personal-profile">
<div style="width:700px; margin:20px auto;">
    <div class="title-top">お申し込みありがとうございます。</div>
    <div class="thank-for-you">
       <p>1週間以内に担当のコンサルタントよりご連絡させて頂きますので、いましばらくお待ちください。 尚、1週間以内に弊社からの連絡がない場合は、ご連絡先の誤入力の可能性がございますので、 大変お手数ではございますが下記までご一報頂けますと幸いです。</p><br>
        <p>また、ご経験やご希望の業界、職種、ご年齢などによってはご紹介が難しい場合がございますので ご了承願います。</p>
        <p>そのような場合も、ご紹介案件の有無など現状をご連絡させていただきます。</p>
    </div>
    <div class="contact-personal">
        <div class="contact-personal-title">お問合せ</div>
        <div>TEL  03-5733-1602</div>
        <div>Email  <a href="mailto:kreis-info@kandc.com">kreis-info@kandc.com</a></div>
    </div>
</div>
</div>
<!--------------------------------------->
<div class="form-personal-submit completed_btn clear">
    <a class="button-complete-page" href="<?php echo url_root; ?>"><img src="../img/entry/back-home-button.png" alt="クライス＆カンパニーサイトに戻る"></a>
    <!--    <div class="form-handler"><a href="#"><img src="../img/entry/button-confirm.png" alt=""></a>-->
    <!--    </div>-->
</div>
</form>
</div>

</div>

</div>



<!-- Yahoo Code for your Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_conversion_id = 1000240003;
var yahoo_conversion_label = "CgRBCLPfuV8QgvPtvgM";
var yahoo_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://b91.yahoo.co.jp/pagead/conversion/1000240003/?value=0&amp;label=CgRBCLPfuV8QgvPtvgM&amp;guid=ON&amp;script=0&amp;disvt=true"/>
</div>
</noscript>

<?php 
			//	@include('../ebits.php');
			//	@include('../../ebits.php');
			//	@include('../../../ebits.php');
			?>
<?php include('../inc/footer_entry.php');?>

</body>
</html>
