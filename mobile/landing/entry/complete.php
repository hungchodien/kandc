<?php
	ob_start();
?>
<?php
	@include('../config_mobile.php');
	
	
	function curPageURL() {
		 $pageURL = 'http';
		 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
		 return $pageURL;
		}
	if ($protocol == 'http:' || $protocol =='HTTP:'){
		$entry_protocol = str_replace('http', 'https', curPageURL() );
		header('Location:'.$entry_protocol);
	}
	@include('../inc/header.php'); 
?>
    <link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>entry/style.css" media="all" />
    <script src="<?php echo url_root; ?>js/validate_form_entry.js" type="text/javascript"></script>
		<!--Content-->
        <!--End Content -->    
       <div id="content" class="inside clear">
       <!--****************************************************-->
       		
               <div class="bg_white content_inside block_content">
            		<div id="icon-send-complete"><img title="送信完了" alt="送信完了" src="<?php echo url_root; ?>img/icon-send-ok.png" /></div>
                    <h1 class="thank_title">お申し込みありがとうございます。</h1>
            	 <div class="thank_for_you clear">
                        <p>担当コンサルタントまたは候補者サポート事務局より、ご登録いただいたお電話番号またはメールアドレス宛にご連絡いたします。<br><br>
                        尚、1週間以内に弊社からのご連絡がない場合は、ご連絡先の誤入力の可能性がございますので、お手数おかけいたしますが下記までご一報くださいませ。<br><br>
                        また、ご経験やご希望の業界、職種、ご年齢などによってはご紹介が難しい場合がございます。予めご了承ください。</p><br /><br />

<p>
お問合せ<br />
TEL 03-5733-1602<br />
E-mail <a href="mailto:kreis-info@kandc.com">kreis-info@kandc.com</a><br />
</p>
                  </div>
              </div>
              <div class="block_content mg_bt10 clear">
              	<div id="back_home_btn"><a href="<?php echo url_root; ?>"><img title="ホームボタン" alt="ホームボタン" src="https://kandc.com/mobile/img/button-home.png" /></a></div>
              </div>
             <!--****************************************************-->
            
             
            
             
       </div><!--End content-->
 <!-- Google Code for &#12521;&#12531;&#12487;&#12451;&#12531;&#12464;&#12506;&#12540;&#12472;&#12304;&#12473;&#12510;&#12507;&#12305; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967277328;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "MEeoCJiW5yMQkPadzQM";
var google_conversion_value = 0;
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/967277328/?value=0&amp;label=MEeoCJiW5yMQkPadzQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<!-- Yahoo Code for your Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_conversion_id = 1000240003;
var yahoo_conversion_label = "GlITCOHltF8QgvPtvgM";
var yahoo_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://b91.yahoo.co.jp/pagead/conversion/1000240003/?value=0&amp;label=GlITCOHltF8QgvPtvgM&amp;guid=ON&amp;script=0&amp;disvt=true"/>
</div>
</noscript>


<?php 
			//	@include('../ebits.php');
			//	@include('../../ebits.php');
			//	@include('../../../ebits.php');
			//	@include('../../../../ebits.php');
			?>


    <?php include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>