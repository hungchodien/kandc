<?php
ob_start();
?>
<?php
@include ('../Lib/_init.php');
//@include('../../Lib/_init.php');
@include ('../config.php');
//@include('../../config.php');

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
    <title>ご利用に関する注意事項承諾書 | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="validate_form_entry.js"></script>
    <script src="../js/show_form.js" type="text/javascript"></script>
     <script src="../js/watermark.js" type="text/javascript"></script>
<?php
@include ('Lib/Mobile_Detect.php');
@include ('../Lib/Mobile_Detect.php');
@include ('../../Lib/Mobile_Detect.php');
$detect = new Mobile_Detect;
if ($detect->isMobile() || $detect->isTablet()):
header("Location:https://kandc.com/mobile/questionnaire-consent/");
endif;
?>
<!--    <script type="text/javascript" src="../js/jquery.min.js"></script>-->
     <!--<script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/validate_form_entry.js"></script>
    <script src="../js/show_form.js" type="text/javascript"></script>
    <!-- css -->
    <link type="text/css" href="../css/style.css" rel="stylesheet"/>
	 <link type="text/css" href="style.css" rel="stylesheet"/>
    <!-- javascript -->
    <script type="text/javascript">
        $(document).ready(function () {
			//$("#s8").Watermark("例）他社エージェントと比べて良かった点・悪かった点/より理解してほしかった点/アドバイスしてほしかった点　など");
			//$("#s0").Watermark("半角文字でお間違いのないようご入力ください");
			//$("#s0_confirm").Watermark("確認のためもう一度入力してください");

			$("#main-footer").css("background-color","#011520");
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

						var allRadios1 = document.getElementsByName('s1');
						var booRadio1;
						var x1 = 0;
							allRadios1[x1].onclick = function(){
								if(booRadio1 == this){
										this.checked = false;
										booRadio1 = null;
								}else{
									booRadio1 = this;
								}
							};

						var allRadios2 = document.getElementsByName('s2');
						var booRadio2;
						var x2 = 0;
							allRadios2[x2].onclick = function(){
								if(booRadio2 == this){
										this.checked = false;
										booRadio2 = null;
								}else{
									booRadio2 = this;
								}
							};
						var allRadios3 = document.getElementsByName('s3');
						var booRadio3;
						var x3 = 0;
							allRadios3[x3].onclick = function(){
								if(booRadio3 == this){
										this.checked = false;
										booRadio3 = null;
								}else{
									booRadio3 = this;
								}
							};
       					var allRadios4 = document.getElementsByName('s4');
						var booRadio4;
						var x4 = 0;
							allRadios4[x4].onclick = function(){
								if(booRadio4 == this){
										this.checked = false;
										booRadio4 = null;
								}else{
									booRadio4 = this;
								}
							};
						var allRadios5 = document.getElementsByName('s5');
						var booRadio5;
						var x5 = 0;
							allRadios5[x5].onclick = function(){
								if(booRadio5 == this){
										this.checked = false;
										booRadio5 = null;
								}else{
									booRadio5 = this;
								}
							};
						var allRadios6 = document.getElementsByName('s6');
						var booRadio6;
						var x6 = 0;
							allRadios6[x6].onclick = function(){
								if(booRadio6 == this){
										this.checked = false;
										booRadio6 = null;
								}else{
									booRadio6 = this;
								}
							};
						var allRadios7 = document.getElementsByName('s7');
						var booRadio7;
						var x7 = 0;
							allRadios7[x7].onclick = function(){
								if(booRadio7 == this){
										this.checked = false;
										booRadio7 = null;
								}else{
									booRadio7 = this;
								}
							};
						var allRadios8 = document.getElementsByName('s8');
						var booRadio8;
						var x8 = 0;
							allRadios8[x8].onclick = function(){
								if(booRadio8 == this){
										this.checked = false;
										booRadio8 = null;
								}else{
									booRadio8 = this;
								}
							};
						var allRadios9 = document.getElementsByName('s9');
						var booRadio9;
						var x9 = 0;
							allRadios9[x9].onclick = function(){
								if(booRadio9 == this){
										this.checked = false;
										booRadio9 = null;
								}else{
									booRadio9 = this;
								}
							};

					   var allRadios_radio_end = document.getElementsByName('radio_end');
						var booRadio_radio_end;
						var x_radio_end = 0;
							allRadios_radio_end[x_radio_end].onclick = function(){
								if(booRadio_radio_end == this){
										this.checked = false;
										booRadio_radio_end = null;
								}else{
									booRadio_radio_end = this;
								}
							};

						var allRadios_check_all_id = document.getElementsByName('check_all');
						var booRadio_check_all_id;
						var x_check_all_id = 0;
							allRadios_check_all_id[x_check_all_id].onclick = function(){
								if(booRadio_check_all_id == this){
										this.checked = false;
										booRadio_check_all_id = null;
										//alert('No checked');
										$("input:radio.radioR").prop('checked',false);

								}else{
									booRadio_check_all_id = this;
									//alert('checked');
									$("input:radio.radioR").prop('checked',true);
								}
							};



				 document.getElementById("s0").style.imeMode = "disabled";
				 //document.getElementById("s0_confirm").style.imeMode = "disabled";
		 });

    </script>


 <style type="text/css">
    	.error {
			top:0 !important;
			left:0 !important;
		}
    </style>



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

<?php //@include("../config.php"); ?>
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
                <li><span class="entry_consent-nav-step"><em class="step_title">ご利用に関する注意事項承諾書</em></span></li>
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
<div class="label-asked2" style="width:800px; margin:0 auto">
  <div class="content-asked">弊社転職支援サービスをご利用いただく上でご注意いただきたい事項です。<br />内容をご確認いただき、ご承知いただきましたら各項目のチェックボタンをチェックした上でご署名をお願いいたします。</div>
</div>


<form action="confirm.php" method="post" id="submit_form">


<div class="form-personal-profile step_hiden" style="width:800px; margin:0 auto">


    <div class="table-personal-profile2 container_consent_question">
    	 <table class="table_group_question">
           <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s1" value="履歴書・職務経歴書について" id="ls1" class="radioR"></td>
                <td class="col2"><label for="ls1">履歴書・職務経歴書について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">弊社及び求人企業にご提出いただきます履歴書・職務経歴書等に関しては、虚偽・誤りなく正確なものをご用意ください。企業によっては確認のため、リファレンスを取られる企業もございます。ご提出内容に明らかな偽りがあった場合には、サービスを停止させていただきます。また、その内容の不備等によって求人企業から何らかの異議、請求もしくは要求などがなされた場合には、自己の責任で対処していただきますようお願いします。</td>
            </tr>
             <!--item -->

             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s2" value="連絡先及び連絡事項の確認について" id="ls2" class="radioR"></td>
                <td class="col2"><label for="ls2">連絡先及び連絡事項の確認について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">進捗状況､面接の急なアレンジなど､緊急を要する連絡が必要なケースがございますので確実に取れる連絡先をお知らせください。また紹介案件、面接日などのご連絡はなるべく迅速にご返答いただけますようお願いいたします。</td>
            </tr>
             <!--item -->

             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s3" value="転職活動の進捗状況について" id="ls3" class="radioR"></td>
                <td class="col2"><label for="ls3">転職活動の進捗状況について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">転職活動において、状況に動きや変化等が起きましたら､お手数ですがその都度早めにご連絡いただきますようお願いいたします。情報交換､連絡等は密に取っていきましょう。</td>
            </tr>
             <!--item -->

             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s4" value="担当以外からのご連絡について" id="ls4" class="radioR"></td>
                <td class="col2"><label for="ls4">担当以外からのご連絡について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">本日ご面談させていただきましたコンサルタントが貴方様の担当をさせていただきますが、別の担当者から直接その担当案件をご提案差し上げるケースもございますのでご了承願います。</td>
            </tr>
             <!--item -->

             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s5" value="面接のキャンセルについて" id="ls5" class="radioR"></td>
                <td class="col2"><label for="ls5">面接のキャンセルについて</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">面接の急なキャンセルはご遠慮ください。企業側も面接に際し、多数の方のスケジュールを調整しております。やむを得ない場合にはできるだけ早くご連絡をいただきますようお願いいたします。</td>
            </tr>
             <!--item -->

             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s6" value="求人情報のメーリングサービスについて" id="ls6" class="radioR"></td>
                <td class="col2"><label for="ls6">求人情報のメーリングサービスについて</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">求人情報のご紹介は、基本的には担当コンサルタントからさせていただきますが、可能性をできるだけ広げるためにも、別途マーケティング・リサーチ部からも求人情報のお知らせメールをお送りすることがございますのでご了承願います。</td>
            </tr>
             <!--item -->

             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s7" value="条件等について" id="ls7" class="radioR"></td>
                <td class="col2"><label for="ls7">条件等について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">弊社は求人企業の仕事内容や処遇など労働条件の概略について確認を行いますが、雇用契約に関しましては、自己の責任において求人企業に労働条件を直接確認した上で結ぶものとし、弊社が確認し通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではないことをご承諾願います。</td>
            </tr>
             <!--item -->

             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s8" value="内定から入社まで" id="ls8" class="radioR"></td>
                <td class="col2"><label for="ls8">内定から入社まで</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">正式な内定から入社までの期間について､状況にもよりますが常識的に1ヶ月､伸びても2ヶ月が限度となります。3ヶ月以上となると､内定取り消しになることもございますのでご注意ください。企業側としては1日も早い入社を希望されております。調整､交渉段階で企業も譲歩致しますが､同様に退職の努力もお願いいたします。</td>
            </tr>
             <!--item -->

             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s9" value="内定決定後について" id="ls9" class="radioR"></td>
                <td class="col2"><label for="ls9">内定決定後について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">転職活動の場合､新卒の就職活動と違いますので､内定後はお早めの意思決定の程宜しくお願いいたします。またご検討の後､一旦オファーを受諾しましたら､辞退はできません。企業側は入社の意思を受け事業計画等を進めますので､常識としてご理解くださいますようお願いいたします。</td>
            </tr>
             <!--item -->
             <!--item-->
            <tr>
             	<td colspan="3" class="col_all"><input type="radio" name="check_all" value="上記全ての項目のチェックボックスにチェックを入れる" id="check_all"><label for="check_all">上記全ての項目のチェックボックスにチェックを入れる</label>
           	    </td>
             </tr>
             <!--item-->

          </table>
    </div><!--container_consent_question-->



     <div class="table-personal-profile2" style="margin-top:20px;">
        <table>
        	<tr>
            	<td class="label_question label">
                	<div>氏名<span class="red-color">(必須）</span></div>
                </td>
                <td colspan="2">
                	 <div class="td-content clear">
                        <div>
              <input class="text-personal-400" type="text" name="s-1" id="s-1" onfocus="click_text(this.id)" onblur="validatetext(this.value,this.id)" />
                        </div>
                       <div style="display:block; width:100%; line-height:25px;"><span id="errors-1"></span></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label_question label">
                    <div>メールアドレス<span class="red-color">(必須）</span></div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div>
              <input class="text-personal-400" type="text" name="s0" id="s0" onfocus="click_text(this.id)" value="" placeholder="半角文字でお間違いのないようご入力ください" onblur="IsEmail(this.value,this.id)" style="ime-mode:disabled; -webkit-ime-mode: disabled;"/>
                        </div>
                       <div style="display:block; width:100%; line-height:25px;"><span id="errors0"></span></div>
                        <br/>
					</div>
                </td>
            </tr>
         </table>
    </div><!--table-personal-profile2-->

    <div style="text-align:center;" id="checkbox_require" class="table-personal-profile2 end_check_radio">
		<label style="position:relative;"><input type="radio" id="radio_end" name="radio_end">上記チェック項目の内容につき、確認及び承諾します。</label>
		<p id="radio_end_error"></p>
	</div>




</div>

<!-------------------------------------------------------------->

<!--------------------------------------->
<div class="form-entry-submit clear">

    <input class="button-confirm button_confirm_entry_question" type="submit" name="Submit" id="submit" value="Submit"/>
    <!--    <div class="form-handler"><a href="#"><img src="../img/entry/button-confirm.png" alt=""></a>-->
    <!--    </div>-->
</div>
</form>
</div>


</div>
<div style="margin: 0 auto; width: 980px" class="clear">
    <div id="back-top">
        <a href="#top"><img src="../img/features/back-to-up.png" alt="ページの先頭へ戻る"></a>
    </div>
</div>

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

<!--formassist.jp-->
<!--<script type='text/javascript' src='https://formassist.jp/FormAssist_tag.js?user=kandc&num=0101'></script>-->
</body>
</html>
