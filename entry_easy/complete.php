<?php
@include('../Lib/_init.php');
@include('../config.php');

if ($protocol == 'http:' || $protocol =='HTTP:'){
    $entry_protocol = str_replace('http', 'https', curPageURL() );
    header('Location:'.$entry_protocol);
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
<html ID="noIE" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>簡単３分エントリー（今すぐ転職をお考えのあなた） | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
    <meta name="keywords" content="エントリー,簡単,ヘッド,ハンティング,転職,支援,人材,紹介,30代,キャリア,コンサルティング"/>
    <meta name="description" content="クライス&カンパニーのサービスへの簡単3分エントリーフォームです。お手持ちのレジュメを添付していただき、必要項目にご入力の上、ご送信ください。私たちが、あなたの良きパートナーとして転職活動をサポートいたします。" />
    <meta name="author" content="株式会社クライス・アンド・カンパニー" />
    <meta name="copyright" content="Copyright&copy;2007 KREIS&amp;Company Inc.　All Right Reserved." />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Language" content="ja" />
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/show_form.js" type="text/javascript"></script>
    <!-- css -->
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
<?php @include('../config.php'); ?>
<header>
    <div id="header" class="header clear">
        <div class="header-form-left clear">
            <div class="logo1 ">
                <h1>ヘッドハンティング・人材紹介・転職支援ならクライス&amp;カンパニー</h1>
                <a href="<?php echo url_root_http ?>"><img src="../img/head/kreis-logo.png" alt="ヘッドハンティング・人材紹介・転職支援ならクライス&amp;カンパニー"/></a>
            </div>
            
        </div>
        <div class="detail-entry">
            <a href="javascript:void(0);" onClick="show_layer_gcdf('750');"><span class="bg-popup-entry"></span><span class="color-popup-entry">エントリー方法・エントリー後の流れについてはこちら</span><!--<img class="" src="../img/entry/detail-entry.png" alt="">--></a>
        </div>
        <?php @include('../inc/popup_detail_entry.php'); ?>
    </div>
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
</header>
<div id="container">
<div id="content">
<div id="page" class="clear">
    <div class="title-page">
        <p class="title-top">いますぐ転職をお考えのあなた。</p>
        <p class="sub-title-top">今すぐ、もしくは近いうちに転職をお考えの方はこちらからお申し込みください。<br />私たちが、あなたの良きパートナーとして転職活動をサポートいたします。</p>
    </div>
</div>

<div id="entry-form" class="entry-form">
<form action="#" method="">

<!-------------------------------------------------------------->
<div class="form-personal-profile">
<div style="width:700px; margin:20px auto;">
    <div class="title-top">お申し込みありがとうございます。</div>
    <div class="thank-for-you">
        <p>1週間以内に担当のコンサルタントよりご連絡させて頂きますので、いましばらくお待ちください。 尚、1週間以内に弊社からの連絡がない場合は、ご連絡先の誤入力の可能性がございますので、 大変お手数ではございますが下記までご一報頂けますと幸いです。</p><br>
        <p>また、ご経験やご希望の業界、職種、ご年齢などによってはご紹介が難しい場合がございますので ご了承願います。</p><br>
        <p>そのような場合も、ご紹介案件の有無など現状をご連絡させていただきます。</p><br>
        <p><STRONG>メールでのご連絡について</STRONG><br>
当社からお送りしているメールが迷惑メール削除機能により受信できないケースが発生しております。特にyahoo等の無料メールサービスで多く報告されております。<br />
ご利用のお客様は、各メールサービスのご案内にしたがって迷惑メール削除機能の解除等、設定の変更をお願いいたします。</p>
    </div>
    <div class="contact-personal">
        <div class="contact-personal-title">お問合せ</div>
        <div>TEL  03-5733-1602</div>
        <div>Email  kreis-info@kandc.com</div>
    </div>
</div>
</div>
<!--------------------------------------->
<div class="form-personal-submit completed_btn clear">
    <a class="button-complete-page" href="<?php echo url_root; ?>"><img src="../img/entry/button-backtoindex.png" alt="クライス&カンパニーサイトに戻る"></a>
    <!--    <div class="form-handler"><a href="#"><img src="../img/entry/button-confirm.png" alt=""></a>-->
    <!--    </div>-->
</div>
</form>
</div>

</div>
<div style="margin: 0 auto; width: 980px" class="clear">
    <div id="back-top">
        <a href="#top"><img src="../img/features/back-to-up.png" alt="ページの先頭に戻る"></a>
    </div>
</div>

</div>
<footer>
    <div id="main-footer">
        <div id="footer" class="clear">
            <div class="copy">
                Copyright &copy;<?php echo date('Y'); ?> KREIS &amp; Company Inc. All Right Reserved. webdesign tokyodesignroom.com
            </div>
        </div>
    </div>
</footer>
</body>
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
<!-- Google Code for &#31777;&#21336;&#65299;&#20998;&#12456;&#12531;&#12488;&#12522;&#12540; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967277328;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "M03gCKCIxSMQkPadzQM";
var google_conversion_value = 0;
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/967277328/?value=0&amp;label=M03gCKCIxSMQkPadzQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php 
			//	@include('../ebits.php');
			//	@include('../../ebits.php');
			//	@include('../../../ebits.php');
			?>

</html>
