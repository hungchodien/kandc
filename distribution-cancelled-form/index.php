<?php
ob_start();
?>
<?php
@include ('../Lib/_init.php');
@include('../../Lib/_init.php');
@include ('../config.php');
@include('../../config.php');

$url_curent_check = curPageURL();
if (strpos($url_curent_check, 'kreisandcompany.sakura.ne.jp') !== false) {

	if ($protocol == 'https:' || $protocol == 'HTTPS:') {
		$url_kandc_primary = str_replace("kreisandcompany.sakura.ne.jp", "kandc.com", $url_curent_check);
		header("HTTP/1.1 301 Moved Permanently");
		header('Location:'.$url_kandc_primary);
	} else {
		$url_kandc_primary = str_replace("kreisandcompany.sakura.ne.jp", "kandc.com", $url_curent_check);
		$entry_protocol    = str_replace('http', 'https', $url_kandc_primary);
		header("HTTP/1.1 301 Moved Permanently");
		header('Location:'.$entry_protocol);
	}

} else {

	if ($protocol == 'http:' || $protocol == 'HTTP:') {
		$entry_protocol = str_replace('http', 'https', $url_curent_check);
		header("HTTP/1.1 301 Moved Permanently");
		header('Location:'.$entry_protocol);
	}

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
	<meta name="robots" content="noindex">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="ヘッドハンティング,人材紹介会社,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,コンサルタント,エンジニア,キャリアデザイン,転職サポート,エントリー"/>
    <meta name="description" content="クライス&カンパニーのサービスへのエントリーフォームです。エントリーご希望の方は、下記項目にご入力の上、ご送信ください。私たちが、あなたの良きパートナーとして転職活動をサポートいたします。"/>
    <meta name="author" content="株式会社クライス・アンド・カンパニー"/>
    <meta name="copyright" content="Copyright&copy;2007 KREIS&amp;Company Inc.　All Right Reserved."/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Content-Language" content="ja"/>
    <title>メールマガジン配信停止 | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="validate_form_entry.js"></script>
   
<?php
/*@include ('Lib/Mobile_Detect.php');
@include ('../Lib/Mobile_Detect.php');
@include ('../../Lib/Mobile_Detect.php');
$detect = new Mobile_Detect;
if ($detect->isMobile() || $detect->isTablet()):
header("Location:https://kandc.com/mobile/entry-mailmagazine/");
endif;*/
?>
<!--    <script type="text/javascript" src="../js/jquery.min.js"></script>-->
     <!--<script type="text/javascript" src="../js/jquery.min.js"></script>
  
    <!-- css -->
    <link type="text/css" href="../css/style.css" rel="stylesheet"/>
	 <link type="text/css" href="style.css" rel="stylesheet"/>
    <!-- javascript -->
</head>

<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KSRPSR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
j.async=true;
j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;
f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSRPSR');</script>
<!-- End Google Tag Manager -->
<div id="overlay" style="display:none;"></div>
<header>

<?php @include("../config.php"); ?>
<div id="header" class="header clear">
        <div class="header-form-left clear">
            <div class="logo1 ">
                <h1>ヘッドハンティング・人材紹介・転職支援ならクライス&amp;カンパニー</h1>
                <a href="http://www.kandc.com/"><img src="../img/head/kreis-logo.png" alt="ヘッドハンティングのクライス＆カンパニー"/></a>
            </div>
            <div class="logo2">
                <h2>30代エグゼクティブのための<br />ヘッドハンティング・人材紹介会社</h2>
            </div>
        </div>

<?php @include ('../inc/popup_detail_entry.php');?>
</div>
    <div id="entry">
        <div id="entry-nav">
            <ul class="clear">
                <li><span class="entry_consent-nav-step"><em class="step_title">メールマガジン配信停止</em></span></li>
                <li><span class="entry_consent-nav-step1"></span></li>
                <li><span class="entry_consent-nav-step2"></span></li>
                <li><span class="entry_consent-nav-step3"></span></li>
            </ul>
        </div>
    </div>
</header>
<div id="container">
    <div id="content">
    	<div id="entry-form" class="entry-form">
       		<div class="container">
                <div class="notes">
                    <p>配信停止されるメールマガジンにチェックを入れメールアドレスを入力してください。</p>
                    
                </div>
                
            	<form id="submit-form" method="post" action="confirm.php">
                    <table class="form-table">
                        <tr>
                            <th>
                                配信停止コンテンツ<span class="rq">(必須)</span>
                            </th>
                            <td>
                                <div class="checkboxes-list validate">
                                    
                                    <p>
                                        <input id="chkbox1" class="checkbox" type="checkbox" name="delivery-content1" value="面接官の本音" />
                                        <label for="chkbox1">面接官の本音</label>
                                    </p>
                                    <p>
                                        <input id="chkbox2" class="checkbox" type="checkbox" name="delivery-content2" value="キャリアアップコラム" />
                                        <label for="chkbox2">キャリアアップコラム</label>
                                    </p>
                                    <p>
                                        <input id="chkbox3" class="checkbox" type="checkbox" name="delivery-content3" value="ターニングポイント" />
                                        <label for="chkbox3">ターニングポイント</label>
                                    </p>
                                </div>
                            </td>
                         </tr>
                         <tr>
                            <th>
                                <p>メールアドレス<span class="rq">(必須)</span></p>
                                <p class="rq">携帯のアドレスは登録できません</p>
                            </th>
                            <td>
                                <div class="email">
                                    <div class="main validate">
                                        <input type="email" name="email" placeholder="半角文字でお間違いのないようご入力ください" value=""/>
                                    </div>
                                    
                                </div>
                            </td>
                         </tr>
                           
                        
                    </table>
                    <p class="center confirm-wrap">
                        <input type="submit" class="confirm-btn" value="送 信" />
                    </p>	
                </form>
				
            </div><!--.container-->
                
             </div><!-- #container-->   
        </div> <!--entry-form-->
    	
    </div>
  
</div><!--#container-->

 <div id="back-top">
        <a href="#top"><img src="../img/features/back-to-up.png"></a>
</div>

<footer>
    <div id="main-footer">
        <div id="footer" class="clear">
            <div class="copy">
                Copyright &copy;
<?php echo date('Y');
?>KREIS &amp;
 Company Inc. All Right Reserved. webdesign tokyodesignroom.com
            </div>
        </div>
    </div>
</footer>

</body>
</html>
