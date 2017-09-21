<?php
	ob_start();
?>
<?php
	@include('../../../config_mobile.php');
	
	
	function curPageURL1() {
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
		$entry_protocol = str_replace('http', 'https', curPageURL1() );
		header('Location:'.$entry_protocol);
	}
	@include('../inc/header.php'); 
?>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <script src="validate_form_entry.js" type="text/javascript"></script>
		<!--Content-->
        <div class="headhunter_form_content complete_page">
        <div class="wrapper">
        <!--End Content -->    
       <div id="content" class="inside clear">
       <!--****************************************************-->
       	
               <div class="bg_white content_inside block_content">
            		<div id="icon-send-complete"><img title="送信完了" alt="送信完了" src="//www.kandc.com/mobile/img/icon-send-complete.png" /></div>
                    <h1 class="title">あなたのメッセージは送信されました。
ありがとうございました。</h1>
            	 <div class="thank_for_you clear">
                       <p>担当コンサルタントまたは候補者サポート事務局より、ご登録いただいたお電話番号またはメールアドレス宛にご連絡いたします。<br><br>
                        尚、1週間以内に弊社からのご連絡がない場合は、ご連絡先の誤入力の可能性がございますので、お手数おかけいたしますが下記までご一報くださいませ。<br><br>
                        また、ご経験やご希望の業界、職種、ご年齢などによってはご紹介が難しい場合がございます。予めご了承ください。</p><br /><br />
                        <p>お問合せ<br />
TEL 03-5733-1602<br />
Email kreis-info@kandc.com</p><br />
                  </div>
              </div>
              <div class="block_content clear">
              	<div id="back_home_btn" class="center"><a href="//www.kandc.com/mobile/"><img title="ホームボタン" alt="ホームボタン" src="//www.kandc.com/mobile/img/button-home.png" /></a></div>
              </div>
             <!--****************************************************-->
            
             
            
             
       </div><!--End content-->
</div>
</div>

<?php 
		$google_check="entry_complete";
	?>


<!-- Google Code for &#12473;&#12510;&#12507;&#12506;&#12540;&#12472;&#35370;&#21839; -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967277328;
var google_conversion_label = "iNEACNis2CMQkPadzQM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/967277328/?value=1.00&amp;currency_code=JPY&amp;label=iNEACNis2CMQkPadzQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<!-- Google Code for &#12473;&#12510;&#12507;LP&#65288;KW&#12372;&#12392;&#65289; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967277328;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "SMoDCNbh214QkPadzQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/967277328/?label=SMoDCNbh214QkPadzQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Yahoo Code for your Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_conversion_id = 1000240003;
var yahoo_conversion_label = "Kdp_CKOWwF8QgvPtvgM";
var yahoo_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://b91.yahoo.co.jp/pagead/conversion/1000240003/?value=0&amp;label=Kdp_CKOWwF8QgvPtvgM&amp;guid=ON&amp;script=0&amp;disvt=true"/>
</div>
</noscript>
 	
    <?php include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>