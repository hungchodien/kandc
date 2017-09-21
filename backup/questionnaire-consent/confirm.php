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
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/show_form.js" type="text/javascript"></script>

    <!-- css -->
    <link type="text/css" href="../css/style.css" rel="stylesheet"/>
	 <link type="text/css" href="style.css" rel="stylesheet"/>
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
                <a href="http://www.kandc.com/"><img src="../img/head/kreis-logo.png" alt="ヘッドハンティングのクライス＆カンパニー"/></a>
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
                <li><span class="entry_consent-nav-step"><em class="step_title">ご利用に関する注意事項承諾書</em></span></li>
                <li><span class="entry_consent-nav-step1-none"></span></li>
                <li><span class="entry_consent-nav-step2-active"></span></li>
                <li><span class="entry_consent-nav-step3"></span></li>
            </ul>
        </div>
    </div>
</header>
<div id="container">
<div id="content">

<?php
$prev_input = "";
	for ($i = -1; $i < 10; $i++):
		$col = "s{$i}";
		
		if(!empty($_POST["s" . $i])):
			if($i<1):
				$val = $_POST["s" . $i];
			else:
				$val="承諾する";
			endif;
			
		else:
			$val="承諾しない";
		endif;
		$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
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
                    <div>氏名<span class="red-color">(必須）</span></div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div>
              				<?php echo $_POST['s-1']; ?>
                        </div>
                       

                      
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
              				<?php echo $_POST['s0']; ?>
                        </div>
                       

                      
                    </div>
                   
                </td>
            </tr>
            
        
           
            <tr>
                <td class="label label_question">
                    <div>
                   <p>履歴書・職務経歴書について</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<div>
                    	<?php if(empty($_POST['s1'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?>
                    	</div>
                    </div>
                </td>
            </tr>
           
           
           <tr>
                <td class="label label_question">
                    <div>
                   <p>連絡先及び連絡事項の確認について</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<div>
						<?php if(empty($_POST['s2'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?>
                    	</div>
                    </div>
                </td>
            </tr>
           
           <tr>
                <td class="label label_question">
                    <div>
                   <p>転職活動の進捗状況について</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<div>
                    	<?php if(empty($_POST['s3'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label label_question">
                    <div>
                   <p>担当以外からのご連絡について</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<div>
						<?php if(empty($_POST['s4'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?>
                    	</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label label_question">
                    <div>
                   <p>面接のキャンセルについて</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<div>
						<?php if(empty($_POST['s5'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?>
                    	</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label label_question">
                    <div>
                   <p>求人情報のメーリングサービスについて</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<div>
						<?php if(empty($_POST['s6'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?>
                    	</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label label_question">
                    <div>
                   <p>条件等について</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<div>
						<?php if(empty($_POST['s7'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?>
                    	</div>
                    </div>
                </td>
            </tr>
             <tr>
                <td class="label label_question">
                    <div>
                   <p>内定から入社まで</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<div>
						<?php if(empty($_POST['s8'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?>
                    	</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label label_question">
                    <div>
                   <p>内定決定後について</p>
                    </div>
                </td>
                <td colspan="2">
                    <div class="td-content td-content-question clear">
                    	<div>
						<?php if(empty($_POST['s9'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?>
                   		</div>
                    </div>
                </td>
            </tr>
            
         </table>
    </div>
    
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
                Copyright &copy;<?php echo date('Y'); ?> KREIS &amp; Company Inc. All Right Reserved. webdesign tokyodesignroom.com
            </div>
        </div>
    </div>
</footer>
</body>
</html>
