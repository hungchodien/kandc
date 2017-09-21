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
    <link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>entry/style.css" media="all" />
    <script src="<?php echo url_root; ?>js/validate_form_entry.js" type="text/javascript"></script>
		<!--Content-->
        <div class="look_title_page yellow clear">
           <div class="publish_job_page"><h3 class="form_title">30代エグゼクティブのあなたにハイクラスな転職を。</h3></div>
        </div>
       
        
        <!--End Content -->    
       <div id="content" class="inside clear">
       <!--****************************************************-->
       		
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
            
             
            
             
       </div><!--End content-->
    <!-- Google Code for &#12473;&#12510;&#12507;&#12456;&#12531;&#12488;&#12522;&#12540; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967277328;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "XtR1CMDltyMQkPadzQM";
var google_conversion_value = 0;
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/967277328/?value=0&amp;label=XtR1CMDltyMQkPadzQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
 
 		<?php 
				@include('../ebits.php');
				@include('../../ebits.php');
				@include('../../../ebits.php');
			?>  
    <?php include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>