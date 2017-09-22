<?php
	ob_start();
?>
<?php
	@include('../config_mobile.php');
	
	
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
        <div class="look_title_page yellow clear">
           <div class="publish_job_page"><h3 class="form_title">30代エグゼクティブのあなたにハイクラスな転職を。</h3></div>
        </div>
       
        
        <!--End Content -->    
       <div id="content" class="inside clear">
       <!--****************************************************-->
       		 <!--------------------------------------->
              <div class="bg_white content_inside block_content">
            		<div id="icon-send-complete"><img title="送信完了" alt="送信完了" src="<?php echo url_root; ?>img/icon-send-complete.png" /></div>
                    <h1 class="title">あなたのメッセージは送信されました。
ありがとうございました。</h1>
            	 <div class="thank_for_you clear">
                        <p>※ メールでのお問い合わせをいただいた方に、「ご確認メール」を
お送りしますので、お申込み内容に相違がないかご確認ください。</p><br />
                        <p>※ 「ご確認メール」が届かない場合は、お手数ですが「株式会社 ク
ライス＆カンパニー 03‑5733‑1602 」までお電話いただきますよう
お願いいたします。</p>
                  </div>
              </div>
              <div class="block_content clear">
              	<div id="back_home_btn"><a href="<?php echo url_root; ?>"><img title="ホームボタン" alt="ホームボタン" src="<?php echo url_root; ?>img/button-home.png" /></a></div>
              </div>
             <!--****************************************************-->
            
             
             <?php include('../inc/menu_interview.php'); ?>
			<?php include ('../inc/page_footer.php');?>   
             
       </div><!--End content-->



<?php 
		$google_check="contact_mobile";
	?>





 <!-- Yahoo Code for your Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_conversion_id = 1000240003;
var yahoo_conversion_label = "1Xt2CJ2WwF8QgvPtvgM";
var yahoo_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://b91.yahoo.co.jp/pagead/conversion/1000240003/?value=0&amp;label=1Xt2CJ2WwF8QgvPtvgM&amp;guid=ON&amp;script=0&amp;disvt=true"/>
</div>
</noscript>

	
    <?php include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>