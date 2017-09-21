<?php
ob_start();
?>
<?php
@include ('../Lib/_init.php');
@include ('../config.php');

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
    <meta name="keywords" content="ヘッドハンティング,人材紹介会社,転職エージェント,キャリアコンサルティング,クライス&amp;カンパニー,30代,コンサルタント,エンジニア,キャリアデザイン,転職サポート,エントリー"/>
    <meta name="description" content="クライス&amp;カンパニーのサービスへのエントリーフォームです。エントリーご希望の方は、下記項目にご入力の上、ご送信ください。私たちが、あなたの良きパートナーとして転職活動をサポートいたします。"/>
    <meta name="author" content="株式会社クライス・アンド・カンパニー"/>
    <meta name="copyright" content="Copyright&copy;2007 KREIS&amp;Company Inc.　All Right Reserved."/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Content-Language" content="ja"/>
    <title>キャリアコンサルティング満足度アンケート | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/validate_form_entry.js"></script>
    <script src="../js/show_form.js" type="text/javascript"></script>
     <script src="../js/watermark.js" type="text/javascript"></script>
     <script type="text/javascript">

		if (screen.width <= 765 || ((navigator.userAgent.indexOf('iPhone') > 0 ) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0 )) {
		document.location = "//kandc.com/mobile/questionnaire/";
	}
	</script>
    <!--    <script type="text/javascript" src="../js/jquery.min.js"></script>-->
     <!--<script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/validate_form_entry.js"></script>
    <script src="../js/show_form.js" type="text/javascript"></script>-->

    <link type="text/css" href="../css/style.css" rel="stylesheet"/>

    <!-- javascript -->
    <script type="text/javascript">
		/* <![CDATA[ */
        $(document).ready(function () {
			//$("#s8").Watermark("例）他社エージェントと比べて良かった点・悪かった点/より理解してほしかった点/アドバイスしてほしかった点　など");
			$("#s0").Watermark("半角文字でお間違いのないようご入力ください");
			$("#s0_confirm").Watermark("確認のためもう一度入力してください");

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
					for(x1 = 0; x1 < allRadios1.length; x1++){

							allRadios1[x1].onclick = function(){

								if(booRadio1 == this){
									this.checked = false;
							booRadio1 = null;
								}else{
								booRadio1 = this;
							}
							};

					 }
					var allRadios2 = document.getElementsByName('s2');
					var booRadio2;
					var x2 = 0;
					for(x2 = 0; x2 < allRadios2.length; x2++){

							allRadios2[x2].onclick = function(){

								if(booRadio2 == this){
									this.checked = false;
							booRadio2 = null;
								}else{
								booRadio2 = this;
							}
							};

					 }
					 var allRadios3 = document.getElementsByName('s3');
					var booRadio3;
					var x3 = 0;
					for(x3 = 0; x3 < allRadios3.length; x3++){

							allRadios3[x3].onclick = function(){

								if(booRadio3 == this){
									this.checked = false;
							booRadio3 = null;
								}else{
								booRadio3 = this;
							}
							};

					 }
					var allRadios4 = document.getElementsByName('s4');
					var booRadio4;
					var x4 = 0;
					for(x4 = 0; x4 < allRadios4.length; x4++){

							allRadios4[x4].onclick = function(){

								if(booRadio4 == this){
									this.checked = false;
							booRadio4 = null;
								}else{
								booRadio4 = this;
							}
							};

					 }
					 var allRadios5 = document.getElementsByName('s5');
					var booRadio5;
					var x5 = 0;
					for(x5 = 0; x5 < allRadios5.length; x5++){

							allRadios5[x5].onclick = function(){

								if(booRadio5 == this){
									this.checked = false;
							booRadio5 = null;
								}else{
								booRadio5 = this;
							}
							};

					 }
					var allRadios6 = document.getElementsByName('s6');
					var booRadio6;
					var x6 = 0;
					for(x6 = 0; x6 < allRadios6.length; x6++){

							allRadios6[x6].onclick = function(){

								if(booRadio6 == this){
									this.checked = false;
							booRadio6 = null;
								}else{
								booRadio6 = this;
							}
							};

					 }
					var allRadios7 = document.getElementsByName('s7');
					var booRadio7;
					var x7 = 0;
					for(x7 = 0; x7 < allRadios7.length; x7++){

							allRadios7[x7].onclick = function(){

								if(booRadio7 == this){
									this.checked = false;
							booRadio7 = null;
								}else{
								booRadio7 = this;
							}
							};

					 }

					 document.getElementById("s0").style.imeMode = "disabled";
					 document.getElementById("s0_confirm").style.imeMode = "disabled";
		 });
		/* ]]> */
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
                <a href="<?php echo url_root_http;?>"><img src="../img/head/kreis-logo.png" alt="ヘッドハンティングのクライス＆カンパニー"/></a>
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
                <li><span class="entry_question-nav-step"><em class="step_title">キャリアコンサルティング満足度アンケート</em></span></li>
                <li><span class="entry_question-nav-step1"></span></li>
                <li><span class="entry_question-nav-step2"></span></li>
                <li><span class="entry_question-nav-step3"></span></li>
            </ul>
        </div>
    </div>
</header>
<div id="container">
<div id="content">


<div id="entry-form" class="entry-form">
<div class="label-asked">
  <div class="content-asked">コンサルタントとのご面談を終えてのご感想、ご意見をお聞かせ下さい。下記項目を選択頂き、「内容確認に進む」ボタンを押してください。</div>
</div>


<form action="confirm.php" method="post" id="submit_form">


<div class="form-personal-profile step_hiden">
	 <div class="table-personal-profile2">
        <table>
            <tr>
                <td class="label_question label">
                    <div>メールアドレス<span class="red-color">(必須）</span></div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div>
              <input class="text-personal-400" type="text" name="s0" id="s0" onfocus="click_text(this.id)" value="" onblur="IsEmail(this.value,this.id)" style="ime-mode:disabled; -webkit-ime-mode: disabled;"/>
                        </div>
                       <div><span id="errors0"></span></div>
                        <br/>

                        <div>
                            <input class="text-personal-400" type="text" name="s0_confirm" id="s0_confirm" value="" onfocus="click_text(this.id)"
                                    onblur="confirm_Email(document.forms['submit_form']['s0'].value, this.value, this.id)"/>
                        </div>


                        <div><span id="errors0_confirm"></span></div>
                    </div>

                </td>
            </tr>

            <!--Q1-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q1.</p>
                    <p>エントリーいただいた後、弊社からの対応のスピードはいかがでしたか</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                        <input type="radio" name="s1" value="適切なタイミング" id="l19_0"/>
 							<label for="l19_0">適切なタイミング</label>
						</p>
                        <p>
                         <input type="radio" name="s1" value="少し遅い"
                          id="l19_1"/>
                         <label for="l19_1">少し遅い</label>
                        </p>
                        <p>
                         <input type="radio" name="s1" value="遅かった"
                          id="l19_2"/>
                         <label for="l19_2">遅かった</label>
                         </p>
                         <p id="errorrs1"></p>
                    </div>
                </td>
            </tr>
            <!--End Q1-->

             <!--Q2-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q2.</p>
                    <p>面談日程はご希望に添っていましたか </p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                        <input type="radio" name="s2" value="希望通り" id="l9_0"/>
 						<label for="l9_0">希望通り</label>
						</p>
                        <p>
                         <input type="radio" name="s2" value="少し遅い" id="l9_1"/>
 						 <label for="l9_1">少し遅い</label>
                        </p>
                        <p>
                         <input type="radio" name="s2" value="遅かった" id="l9_2"/>
 						 <label for="l9_2">遅かった</label>
                         </p>
                         <p id="errorrs2"></p>
                    </div>
                </td>
            </tr>
            <!--End Q2-->

             <!--Q3-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q3.</p>
                    <p>ご提案した案件、内容はあなたにマッチしていましたか </p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                        <input type="radio" name="s3" value="とても納得のいく内容" id="l16_0"/>
 						<label for="l16_0">とても納得のいく内容</label>
						</p>
                        <p>
                        <input type="radio" name="s3" value="普通" id="l16_1"/>
						 <label for="l16_1">普通</label>
                        </p>
                        <p>
                          <input type="radio" name="s3" value="あまり納得がいかなかった" id="l16_2"/>
 						  <label for="l16_2">あまり納得がいかなかった</label>
                         </p>
                         <p id="errorrs3"></p>
                    </div>
                </td>
            </tr>
            <!--End Q3-->

            <!--Q4-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q4.</p>
                    <p>ご提案した案件情報の詳しさはいかがでしたか </p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                        <input type="radio" name="s4" value="充実していて適切だった"  id="l15_1"/>
 						<label for="l15_1">充実していて適切だった</label>
						</p>
                        <p>
                        <input type="radio" name="s4" value="他社エージェントと変わらない"  id="l15_2"/>
 						<label for="l15_2">他社エージェントと変わらない</label>
                        </p>
                        <p>
                         <input type="radio" name="s4" value="もっと詳しく知りたかった"  id="l15_99"/>
 						<label for="l15_99">もっと詳しく知りたかった</label>
                         </p>

                         <p id="errorrs4"></p>
                    </div>
                </td>
            </tr>
            <!--End Q4-->

               <!--Q5-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q5.</p>
                    <p>ご面談にて「自分のことをよく理解してくれた」と感じましたか </p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                         <input type="radio" name="s5" value="期待以上に理解してくれた"  id="l2_0"/>
 						 <label for="l2_0">期待以上に理解してくれた</label>
						</p>
                        <p>
                        <input type="radio" name="s5" value="よく理解してくれた" id="l2_1"/>
 						<label for="l2_1">よく理解してくれた</label>
                        </p>
                        <p>
                         <input type="radio" name="s5" value="普通"  id="l2_2"/>
 						<label for="l2_2">普通</label>
                         </p>
                         <p id="errorrs5"></p>
                    </div>
                </td>
            </tr>
            <!--End Q5-->

              <!--Q6-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q6.</p>
                    <p>キャリアに関するアドバイスは参考になりましたか </p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                         <input type="radio" name="s6" value="とても参考になった" id="l13_0"/>
 						 <label for="l13_0">とても参考になった</label>
						</p>
                        <p>
                        <input type="radio" name="s6" value="参考になった"  id="l13_1"/>
 						<label for="l13_1">参考になった</label>
                        </p>
                        <p>
                         <input type="radio" name="s6" value="普通" id="l13_2"/>
 						 <label for="l13_2">普通</label>
                         </p>
                         <p>
                         <input type="radio" name="s6" value="あまり参考にならなかった" id="l13_99"/>
 						 <label for="l13_99">あまり参考にならなかった</label>
                         </p>
                         <p id="errorrs6"></p>
                    </div>
                </td>
            </tr>
            <!--End Q6-->



            <!--Q7-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q7.</p>
                    <p>面談にもっとも期待していたことは何ですか<br />その期待にお答えできましたか</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<textarea name="s9" rows="5" cols="66" id="s9"></textarea>
                    </div>
                    <p id="errorrs9"></p>
                </td>
            </tr>
            <!--End Q7-->

            <!--Q8-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q8.</p>
                    <p>他社エージェントと比較して良かった点は何ですか</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<textarea name="s10" rows="5" cols="66" id="s10"></textarea>
                    </div>
                    <p id="errorrs10"></p>
                </td>
            </tr>
            <!--End Q8-->




              <!--Q9-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q9.</p>
                    <p>エントリーから面談までの総合的な満足度をお教えください </p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                        <input type="radio" name="s7" value="とても満足" id="l17_0"/>
 						<label for="l17_0">とても満足</label>
						</p>
                        <p>
                       <input type="radio" name="s7" value="どちらかといえば満足" id="l17_1"/>
						 <label for="l17_1">どちらかといえば満足</label>
                        </p>
                        <p>
                        <input type="radio" name="s7" value="普通" id="l17_2"/>
 						<label for="l17_2">普通</label>
                         </p>
                         <p>
                        <input type="radio" name="s7" value="不満" id="l17_3"/>
 						<label for="l17_3">不満</label>
                         </p>
                         <p id="errorrs7"></p>
                    </div>
                </td>
            </tr>
            <!--End Q9-->

            <!--Q10-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q10.</p>
                    <p>その他ご意見・ご感想がございましたら、<br />お聞かせください </p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<textarea name="s8" rows="5" cols="66" id="s8" placeholder="例）他社エージェントと比べて良かった点・悪かった点/より理解してほしかった点/アドバイスしてほしかった点　など"></textarea>
                    </div>
                    <p id="errorrs8"></p>
                </td>
            </tr>
            <!--End Q8-->


        </table>
    </div>
</div>

<!--*********************************************************-->

<!--*********************************************************-->
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
        <a href="#top"><img src="../img/features/back-to-up.png" alt="ページの先頭へ戻る"/></a>
    </div>
</div>

</div>

<footer>
    <div id="main-footer">
        <div id="footer" class="clear">
            <div class="copy">
                Copyright &copy;
2014 KREIS &amp;
 Company Inc. All Right Reserved. webdesign tokyodesignroom.com
            </div>
        </div>
    </div>
</footer>

<!--formassist.jp-->
<!--<script type='text/javascript' src='https://formassist.jp/FormAssist_tag.js?user=kandc&num=0101'></script>-->
</body>
</html>
