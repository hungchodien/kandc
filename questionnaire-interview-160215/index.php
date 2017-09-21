<?php
	ob_start();
?>
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
<html id="noIE" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="ヘッドハンティング,人材紹介会社,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,コンサルタント,エンジニア,キャリアデザイン,転職サポート,エントリー"/>
    <meta name="description" content="クライス&カンパニーのサービスへのエントリーフォームです。エントリーご希望の方は、下記項目にご入力の上、ご送信ください。私たちが、あなたの良きパートナーとして転職活動をサポートいたします。"/>
    <meta name="author" content="株式会社クライス・アンド・カンパニー"/>
    <meta name="copyright" content="Copyright&copy;2007 KREIS&amp;Company Inc.　All Right Reserved."/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Content-Language" content="ja"/>
    <title>サービス満足度アンケート | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="validate_form_entry.js"></script>
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
    <script src="../js/show_form.js" type="text/javascript"></script>
    <!-- css -->
    <link type="text/css" href="../css/style.css" rel="stylesheet"/>

    <!-- javascript -->
    <script type="text/javascript">
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
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSRPSR');</script>
<!-- End Google Tag Manager -->
<div id="overlay" style="display:none;"></div>
<header>

    <?php //@include("../config.php"); ?>
    <div id="header" class="header clear">
        <div class="header-form-left clear">
            <div class="logo1 ">
                <h1>ヘッドハンティング・人材紹介・転職支援ならクライス&amp;カンパニー</h1>
                <a href="<?php echo url_root_http; ?>"><img src="../img/head/kreis-logo.png" alt="ヘッドハンティングのクライス＆カンパニー"/></a>
            </div>
            <div class="logo2">
                <h2>30代エグゼクティブのための<br />ヘッドハンティング・人材紹介会社</h2>
            </div>
        </div>
       
        <?php @include('../inc/popup_detail_entry.php'); ?>
    </div>
    <div id="entry">
        <div id="entry-nav">
            <ul class="clear">
                <li><span class="entry_question-interview-nav-step"><em class="step_title">サービス満足度アンケート</em></span></li>
                <li><span class="entry_question-interview-nav-step1"></span></li>
                <li><span class="entry_question-interview-nav-step2"></span></li>
                <li><span class="entry_question-interview-nav-step3"></span></li>
            </ul>
        </div>
    </div>
</header>
<div id="container">
<div id="content">


<div id="entry-form" class="entry-form">
<div class="label-asked">
  <div class="content-asked">以下は当社が大切にしているポイントです。<br />皆さまのご評価、ならびに今後の参考のためにお気づきの点がございましたら是非お聞かせ下さい。</div>
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

                        <?php /*?><div>
                            <input class="text-personal-400" type="text" name="s0_confirm" id="s0_confirm" value="" onfocus="click_text(this.id)"
                                    onblur="confirm_Email(document.forms['submit_form']['s0'].value, this.value, this.id)"/>
                        </div>
                       <div><span id="errors0_confirm"></span></div><?php */?>
                    </div>
                   
                </td>
            </tr>
            
            <!--Q1-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q1.</p>
                    <p>コンサルティングについて（面談でのヒアリング、キャリアアドバイス等）</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                        <input type="radio" name="s1" value="とても満足" id="l19_0">
 							<label for="l19_0">とても満足</label>
						</p>
                        <p>
                         <input type="radio" name="s1" value="満足"
                          id="l19_1">
                         <label for="l19_1">満足</label>
                        </p>
                        <p>
                         <input type="radio" name="s1" value="普通" id="l19_2">
                         <label for="l19_2">普通</label>	
                         </p>
                         <p>
                         <input type="radio" name="s1" value="あまり満足していない" id="l19_3">
                         <label for="l19_3">あまり満足していない</label>	
                         </p>
                          <p>
                         <input type="radio" name="s1" value="満足していない" id="l19_4">
                         <label for="l19_4">満足していない</label>	
                         </p>
                         <p id="errorrs1"></p>
                         <p>-特にどのような点でそのように思われましたか？</p>
                         <p>
                         <textarea name="s1_area" rows="5" cols="66" id="s1_area"></textarea>
                         </p>
                    </div>
                </td>
            </tr>
            <!--End Q1-->
            
             <!--Q2-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q2.</p>
                    <p>企業情報の充実度（求人に対する情報量、質について）</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                        <input type="radio" name="s2" value="とても満足" id="l9_0">
 						<label for="l9_0">とても満足</label>
						</p>
                        <p>
                         <input type="radio" name="s2" value="満足" id="l9_1">
 						 <label for="l9_1">満足</label>
                        </p>
                        <p>
                         <input type="radio" name="s2" value="普通" id="l9_2">
 						 <label for="l9_2">普通</label>
                         </p>
                         <p>
                         <input type="radio" name="s2" value="あまり満足していない" id="l9_3">
 						 <label for="l9_3">あまり満足していない</label>
                         </p>
                         <p>
                         <input type="radio" name="s2" value="満足していない" id="l9_4">
 						 <label for="l9_4">満足していない</label>
                         </p>
                         <p id="errorrs2"></p>
                         <p>-特にどのような点でそのように思われましたか？</p>
                         <p>
                         <textarea name="s2_area" rows="5" cols="66" id="s2_area"></textarea>
                         </p>
                    </div>
                </td>
            </tr>
            <!--End Q2-->
            
             <!--Q3-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q3.</p>
                    <p>やり取りにおけるスピードについて</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                        <input type="radio" name="s3" value="とても満足" id="l16_0">
 						<label for="l16_0">とても満足</label>
						</p>
                        <p>
                        <input type="radio" name="s3" value="満足" id="l16_1">
						 <label for="l16_1">満足</label>
                        </p>
                        <p>
                          <input type="radio" name="s3" value="普通" id="l16_2">
 						  <label for="l16_2">普通</label>
                         </p>
                         <p>
                          <input type="radio" name="s3" value="あまり満足していない" id="l16_3">
 						  <label for="l16_3">あまり満足していない</label>
                         </p>
                          <p>
                          <input type="radio" name="s3" value="満足していない" id="l16_4">
 						  <label for="l16_4">満足していない</label>
                         </p>
                         <p id="errorrs3"></p>
                         <p>-特にどのような点でそのように思われましたか？</p>
                         <p>
                         <textarea name="s3_area" rows="5" cols="66" id="s3_area"></textarea>
                         </p>
                    </div>
                </td>
            </tr>
            <!--End Q3-->
            
            <!--Q4-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q4.</p>
                    <p>上記以外に、全体的に当社の関わり方で<br />よかった点がございましたら、<br />お聞かせ下さい。</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                        <textarea name="s4_area" rows="5" cols="66" id="s4_area"></textarea>
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
                    <p>当社にはどのようなことを期待されて<br />ご登録いただきましたでしょうか。</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p><textarea name="s5_area" rows="5" cols="66" id="s5_area"></textarea></p>
                        <p>-上記の期待には当社はどの程度応えられましたでしょうか。</p>
                        <p></p>
                    	<p>
                         <input type="radio" name="s5" value="期待以上"  id="l2_0">
 						 <label for="l2_0">期待以上</label>
						</p>
                        <p>
                        <input type="radio" name="s5" value="期待通り" id="l2_1">
 						<label for="l2_1">期待通り</label>
                        </p>
                        <p>
                         <input type="radio" name="s5" value="期待ほどではなかった"  id="l2_2">
 						<label for="l2_2">期待ほどではなかった</label>
                         </p>
                         <p id="errorrs5"></p>
                         <p>-特にどのような点でそのように思われましたか？</p>
                         <p><textarea name="s6_area" rows="5" cols="66" id="s6_area"></textarea></p>
                    </div>
                </td>
            </tr>
            <!--End Q5-->
            
              <!--Q6-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q6.</p>
                    <p>活動中、大変だったこと、不安になられたことなどございましたでしょうか？</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                         <textarea name="s7_area" rows="5" cols="66" id="s7_area"></textarea>
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
                    <p>今後、転職ならびにキャリアについて<br />ご相談される際には、<br />再度当社をご利用いただけますでしょうか。</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                         <input type="radio" name="s7" value="是非利用したい"  id="l7_0">
 						 <label for="l7_0">是非利用したい</label>
						</p>
                        <p>
                        <input type="radio" name="s7" value="わからない" id="l7_1">
 						<label for="l7_1">わからない</label>
                        </p>
                        <p>
                         <input type="radio" name="s7" value="できれば利用したくない"  id="l7_2">
 						<label for="l7_2">できれば利用したくない</label>
                         </p>
                    </div>
                    <p id="errorrs7"></p>
                </td>
            </tr>
            <!--End Q7-->
            
            <!--Q8-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q8.</p>
                    <p>当社をご友人、知人の方にご紹介いただけますでしょうか。</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                         <input type="radio" name="s8" value="是非紹介したい"  id="l8_0">
 						 <label for="l8_0">是非紹介したい</label>
						</p>
                        <p>
                        <input type="radio" name="s8" value="わからない" id="l8_1">
 						<label for="l8_1">わからない</label>
                        </p>
                        <p>
                         <input type="radio" name="s8" value="できれば紹介したくない"  id="l8_2">
 						<label for="l8_2">できれば紹介したくない</label>
                         </p>
                    </div>
                    <p id="errorrs0"></p>
                </td>
            </tr>
            <!--End Q8-->
        </table>
    </div>
    <p style="padding:10px 0;">アンケートご協力誠にありがとうございました。皆さまからのご意見を参考にさせていただきサービス向上に努めてまいります。今後ともよろしくお願いいたします。</p>
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
                Copyright &copy;2014 KREIS &amp; Company Inc. All Right Reserved. webdesign tokyodesignroom.com
            </div>
        </div>
    </div>
</footer>

<!--formassist.jp-->
<!--<script type='text/javascript' src='https://formassist.jp/FormAssist_tag.js?user=kandc&num=0101'></script>-->
</body>
</html>
