<?php
	ob_start();
?>
<?php
	@include('../config_mobile.php');
//	@include('set_user_ID_mobile.php');
	//	@include('../set_user_ID_mobile.php');
	   //@include('../../set_user_ID_mobile.php');
 		//@include('../../../set_user_ID_mobile.php');
	
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
<?php 
	if(isset($_GET['midEbis'])):
		$idms=(int)$_GET['midEbis'];
		if($idms>0):
	?>
    <img src="https://px.a8.net/cgi-bin/a8fly/sales?pid=s00000016338001&so=<?php echo $idms; ?>&si=8000.1.8000.a8" width="1" height="1"/>

    <?php 
		endif;
	endif;
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



<?php 
		$google_check="entry_complete";
	?>


<script type="text/javascript" language="javascript">
/* <![CDATA[ */
var yahoo_ydn_conv_io = "_LaOawsOLDXsoLVLLP1r";
var yahoo_ydn_conv_label = "6J0YQD0HU03ML6NUWTO121495";
var yahoo_ydn_conv_transaction_id = "";
var yahoo_ydn_conv_amount = "0";
/* ]]> */
</script>
<script type="text/javascript" language="javascript" charset="UTF-8" src="//b90.yahoo.co.jp/conv.js"></script>

<!-- Yahoo Code for your Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_conversion_id = 1000240003;
var yahoo_conversion_label = "U7v5CLzt6mEQgvPtvgM";
var yahoo_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="//s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//b91.yahoo.co.jp/pagead/conversion/1000240003/?value=0&label=U7v5CLzt6mEQgvPtvgM&guid=ON&script=0&disvt=true"/>
</div>
</noscript>

	
    <?php include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>