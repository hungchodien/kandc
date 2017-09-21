<?php
	ob_start();
	session_start();
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
    <title>メールマガジン配信停止 | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="validate_form_entry.js"></script>
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
                <li><span class="entry_consent-nav-step"><em class="step_title">メールマガジン配信停止</em></span></li>
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

	if(isset($_POST)){
		//$delivery_content = $_POST['delivery-content'];
		$email = $_POST['email'];
		$confirm = $_POST['confirm-email'];
		$career_change = $_POST['career-change'];
		$indus_cat = $_POST['industry-category'];
		$job_cat = $_POST['job-category'];
		
		$_SESSION["secur-email"] = $email;

		$delivery_content1 = $_POST['delivery-content1'];
		$delivery_content2 = $_POST['delivery-content2'];
		$delivery_content3= $_POST['delivery-content3'];
	}
?>

<div id="entry-form" class="confirmation entry-form">
	<div class="container">
      	<div class="label-asked">
              <div class="content-asked">
                以下の内容でお間違いないかご確認いただき、「送信」をクリックしてください。<br />
                <span style="font-size:11px; color:#646464">※修正する場合には「戻る」をクリックし、内容を変更してください。</span>
             </div>
        </div>
        
        
        <div class="errors-list rq">
            <p>入力エラー:</p>
            <ul>
                <li>「メールアドレス」を入力してください。</li>
            </ul>	
            
        </div>
       <form id="confirmation-form" method="post" action="send_mail.php" autocomplete="off"> 
       	<table class="form-table">
					
					
                	<tr>
                        <th>
                            配信停止コンテンツ      
                        </th>
                        <td>
                            <div class="checkboxes-list">
                               <?php 
							  		if(!empty($delivery_content1)){
										echo '<input type="text" name="delivery-content[]" value="'.$delivery_content1.'" readonly="readonly" />';
									}
									if(!empty($delivery_content2)){
										echo '<input type="text" name="delivery-content[]" value="'.$delivery_content2.'" readonly="readonly" />';
									}
									if(!empty($delivery_content3)){
										echo '<input type="text" name="delivery-content[]" value="'.$delivery_content3.'" readonly="readonly" />';
									}
									for($i=1;$i<4;$i++):
										$col="delivery-content{$i}";
										if(!empty($_POST[$col]))
										{
											echo "<input type='hidden'  name='chkbox_select".$i."' value='0'>";
										}
										else
										{
											echo "<input type='hidden'  name='chkbox_select".$i."' value='1'>";
										}
									endfor;
								?>
                            </div>
                        </td>
                     </tr>
                     <tr>
                     	<th>メールアドレス</th>
                        <td>
                        	<input type="text" name="email" value="<?php echo $email;?>" readonly="readonly" />
                            <input type="hidden" name="confirm-email" value="<?php echo $confirm;?>" />
                        </td>
                     </tr>
                     
                     
          </table>
		
        <div class="back-confirm-wrap clear">
	
            <a class="previous-page" href="javascript:history.back(1)">Back</a>
            <input class="submit-btn" type="submit" name="Submit" value="送信">
        </div>
        </form>
   </div><!--container-->
</div><!--#entry-form-->

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
