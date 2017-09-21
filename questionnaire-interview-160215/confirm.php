<?php
	ob_start();
?>
<?php
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
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/show_form.js" type="text/javascript"></script>

    <!-- css -->
    <link type="text/css" href="../css/style.css" rel="stylesheet"/>

    <!-- javascript -->
    <script type="text/javascript">
        $(document).ready(function () {
            // hide #back-top first
            $("#back-top").hide();
			$("#main-footer").css("background-color","#011520");
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
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KSRPSR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSRPSR');</script>
<!-- End Google Tag Manager -->
<header>
    <?php
    @include('../config.php')
    ?>
    <div id="header" class="header clear">
        <div class="header-form-left clear">
            <div class="logo1 ">
                <h1>ヘッドハンティング・人材紹介・転職支援ならクライス&amp;カンパニー</h1>
                <a href="<?php echo url_root_http ?>"><img src="../img/head/kreis-logo.png" alt="ヘッドハンティングのクライス＆カンパニー"/></a>
            </div>
            <div class="logo2">
                <h2>30代エグゼクティブのための<br />ヘッドハンティング・人材紹介会社</h2>
            </div>
        </div>
        
        <?php @include('../inc/popup_detail_entry.php'); ?>
    </div>
    <div id="entry" class="clear">
        <div id="entry-nav">
            <ul class="clear">
                <li><span class="entry_question-interview-nav-step"><em class="step_title">サービス満足度アンケート</em></span></li>
                <li><span class="entry_question-interview-nav-step1-none"></span></li>
                <li><span class="entry_question-interview-nav-step2-active"></span></li>
                <li><span class="entry_question-interview-nav-step3"></span></li>
            </ul>
        </div>
    </div>
</header>
<div id="container">
<div id="content">

<?php
$prev_input = "";
	for ($i = 0; $i < 9; $i++):
		$col = "s{$i}";
		$val = $_POST["s" . $i];
		$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
	endfor;
	
	for ($j = 0; $j <8; $j++):
		$col_area = "s{$j}_area";
		$val_area = $_POST["s" . $j."_area"];
		$prev_input .= "<input type='hidden' name='{$col_area}' value='{$val_area}' id='{$col_area}'>";
	endfor;
	/*if($_POST['s8']=='例）他社エージェントと比べて良かった点・悪かった点/より理解してほしかった点/アドバイスしてほしかった点　など'):
						$prev_input .= "<input type='hidden' name='s8' value='' id='s8'>";
								else:
						$prev_input .= "<input type='hidden' name='s8' value='{$_POST['s8']}' id='s8'>";
								endif;*/


	//$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
?>


<div id="entry-form" class="entry-form">
<div class="label-asked">
  <div class="content-asked">以下の内容でお間違いないかご確認いただき、「送信」をクリックしてください。<br /><span style="font-size:11px; color:#646464">※修正する場合には「戻る」をクリックし、内容を変更してください。</span></div>
</div>
<form name="frm_confirm" method="post" action="send_mail.php">
<?php
echo $prev_input;
?>

<!-------------------------------------------------------------->
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
              				<?php echo $_POST['s0']; ?>
                        </div>
                       

                      
                    </div>
                   
                </td>
            </tr>
            
            <!--Q1-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q1.</p>
                    <p>コンサルティングについて <br />（面談でのヒアリング、キャリアアドバイス等）</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                        <?php echo $_POST['s1']; ?>
                         </p>
                         <p> <?php echo $_POST['s1_area']; ?></p>
                    </div>
                </td>
            </tr>
            <!--End Q1-->
            
             <!--Q2-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q2.</p>
                    <p>企業情報の充実度　<br />（求人に対する情報量、質について）</p>
                   
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p>
                        <?php echo $_POST['s2']; ?>
                         </p>
                         <p> <?php echo $_POST['s2_area']; ?></p>
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
                        <?php echo $_POST['s3']; ?>
                         </p>
                         <p> <?php echo $_POST['s3_area']; ?></p>
                    </div>
                </td>
            </tr>
            <!--End Q3-->
            
            <!--Q4-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q4.</p>
                    <p>上記以外に、全体的に当社の関わり方でよか<br />った点がございましたら、お聞かせ下さい。</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p> <?php echo $_POST['s4_area']; ?></p>
                    </div>
                </td>
            </tr>
            <!--End Q4-->
            
               <!--Q5-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q5.</p>
                    <p>当社にはどのようなことを期待されてご登録<br />いただきましたでしょうか。</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p> <?php echo $_POST['s5_area']; ?></p>
                    	<p>
                        <?php echo $_POST['s5']; ?>
                         </p>
                         <p> <?php echo $_POST['s6_area']; ?></p>
                    </div>
                </td>
            </tr>
            <!--End Q5-->
            
              <!--Q6-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q6.</p>
                    <p>活動中、大変だったこと、不安になられたこと<br />などございましたでしょうか？</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p> <?php echo $_POST['s7_area']; ?></p>
                    </div>
                </td>
            </tr>
            <!--End Q6-->
            
            
              <!--Q7-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q7.</p>
                    <p>今後、転職ならびにキャリアについてご相談<br />される際には、再度当社をご利用いただけま<br />すでしょうか。</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p> <?php echo $_POST['s7']; ?></p>
                    </div>
                </td>
            </tr>
            <!--End Q7-->
            
            <!--Q8-->
            	<tr>
                <td class="label label_question">
                    <div>
                    <p>Q8.</p>
                    <p>当社をご友人、知人の方にご紹介いただけ<br />ますでしょうか。</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<p> <?php echo $_POST['s8']; ?></p>
                    </div>
                </td>
            </tr>
            <!--End Q8-->
         </table>
    </div>
    <p style="padding:10px 0;">アンケートご協力誠にありがとうございました。皆さまからのご意見を参考にさせていただきサービス向上に努めてまいります。 今後ともよろしくお願いいたします。</p>
</div>


<!--------------------------------------->
<div class="form-personal-submit clear entry_question_personal">
	
    <a class="form-back  entry_question_new_back" href="javascript:history.back(1)">Back</a>
    <input class="button-confirm-page button-confirm-entry_question" type="submit" name="Submit" id="submit" value="Submit"/>
</div>
</form>
</div>

</div>
<div style="margin: 0 auto; width: 980px" class="clear">
    <div id="back-top">
        <a href="#top"><img src="../img/features/back-to-up.png"></a>
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
</body>
</html>
