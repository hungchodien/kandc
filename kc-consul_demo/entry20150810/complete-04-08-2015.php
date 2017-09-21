<?php 
	ob_start();
?>
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
    <meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,エントリー"/>
    <meta name="description" content="現役コンサルタントの転職専門人材紹介会社クライス&amp;カンパニーへのエントリーフォームです。"/>
    <meta name="author" content="株式会社クライス・アンド・カンパニー"/>
    <meta name="copyright" content="Copyright&copy;2007 KREIS&amp;Company Inc.　All Right Reserved."/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Content-Language" content="ja"/>
    <title>エントリー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="<?php echo url_root_main; ?>js/jquery.min.js"></script>
    <script src="<?php echo url_root_main; ?>js/show_form.js" type="text/javascript"></script>
    <!-- css -->
     <link type="text/css" href="<?php echo url_root_main; ?>css/style.css" rel="stylesheet"/>
	 <link type="text/css" href="../css/style.css" rel="stylesheet"/>

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
</head>

<body>
<header>

   <div class="header_top clear">
         	<div class="header_top_content clear">
        	<h1 class="l">
            	<a href="<?php echo url_root_main; ?>"><span class="b">KREIS &Company Inc.</span> コンサルタントの転職ならクライス＆カンパニーへ</a>
		   </h1>
           <div class="social_btns r clear">
            <div class="facebook_btn l">
                <div class="fb-like" data-href="<?php echo  $pageURL_cu; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false">
                </div>
                </div>
            <div class="twitter_btn l">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo  $pageURL_cu; ?>" rel="nofollow">Tweet</a>
            </div>    
               <div class="gplus_btn l"><g:plusone size="medium" href="<?php echo  $pageURL_cu; ?>"></g:plusone></div>
            </div><!--end .social_btns-->
           </div> <!--End .header_top_content-->
         </div><!--End .header_top-->
         
         
        <div class="header_logo clear">
        	<div class="header_top_content header_logo_content clear">
            	<h2 class="l">
                <a href="<?php echo url_root; ?>">
                	<img src="<?php echo url_root; ?>img/home/logo-consul.png" alt="コンサルタントキャリア"/></a>
                    <p>コンサルタントのキャリアを共に考えるクライス＆カンパニー</p>
                </h2>
                <div class="button_entry r"><a href="<?php
 //echo url_root."entry/?entry_id=1014585"
	if(isset($_GET['entry_id'])):
		echo url_root."entry_easy/?entry_id=".$_GET['entry_id'];
	else:
		echo url_root."entry_easy/";
	endif;
 ?>" target="_blank"><img src="<?php echo url_root; ?>img/entry/button-link-easy-entry.jpg" alt="簡単３分エントリー" /></a></div>
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

<div id="container" class="clear">
<div id="content_consul">


<div id="entry-form" class="entry-form">
<form action="" method="">

<!-------------------------------------------------------------->
<div class="form-personal-profile" style="margin: 20px 0 0;">
    <div class="title-top">お申し込みありがとうございます。</div>
    <div class="thank-for-you">
        <p>1週間以内に担当のコンサルタントよりご連絡させて頂きますので、いましばらくお待ちください。 尚、1週間以内に弊社からの連絡がない場合は、ご連絡先の誤入力の可能性がございますので、 大変お手数ではございますが下記までご一報頂けますと幸いです。</p><br>
        <p>また、ご経験やご希望の業界、職種、ご年齢などによってはご紹介が難しい場合がございますので ご了承願います。</p>
        <p>そのような場合も、ご紹介案件の有無など現状をご連絡させていただきます。</p>
    </div>
    <div class="contact-personal">
        <div class="contact-personal-title">お問合せ</div>
        <div>TEL  03-5733-1602</div>
        <div>Email  kreis-info@kandc.com</div>
    </div>
</div>
<!--------------------------------------->
<div class="form-personal-submit clear">
    <a class="button-complete-page" href="<?php echo url_root; ?>"><img src="<?php echo url_root_main; ?>img/entry/button-backtoindex.png" alt="ヘッドハンティングのクライス＆カンパニー"></a>

    <!--    <div class="form-handler"><a href="#"><img src="../img/entry/button-confirm.png" alt=""></a>-->
    <!--    </div>-->
</div>
</form>
</div>

</div>


</div>
<!-- Google Code for &#12467;&#12531;&#12469;&#12523;&#12469;&#12452;&#12488;&#12456;&#12531;&#12488;&#12522;&#12540; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967277328;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "0UkSCNj1pyQQkPadzQM";
var google_conversion_value = 1.00;
var google_conversion_currency = "JPY";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/967277328/?value=1.00&amp;currency_code=JPY&amp;label=0UkSCNj1pyQQkPadzQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php 
				//@include('../ebits.php');
				//@include('../../ebits.php');
				//@include('../../../ebits.php');
			?>

<?php include('../inc/footer.php'); ?>

</body>
</html>
