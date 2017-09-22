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
    <script src="<?php echo url_root; ?>js/validate_form_entry.js" type="text/javascript"></script>
		<!--Content-->
		 <script type="text/javascript">
        $(document).ready(function () {
			
					$('#top_site #menu_btn').css("display", "none");
			});
	 	</script>
	
        <!--<div class="look_title_page yellow clear">
           <div class="publish_job_page"><h3 class="form_title">30代エグゼクティブのあなたにハイクラスな転職を。</h3></div>
        </div>-->
       
        
        <!--End Content -->    
       <div id="content" class="inside clear">
       <!--****************************************************-->
       		
               <div class="bg_white content_inside block_content" style="margin-top:10px;">
            		<div id="icon-send-complete"><img title="送信完了" alt="送信完了" src="<?php echo url_root; ?>img/icon-send-complete.png" /></div>
                    <h1 class="title">アンケートへのご協力ありがとうございます。<br /><br />いただきました貴重なご意見は、今後のサービス改善のために活用させていただきます。<br /><br />それでは、今後ますますのご活躍をお祈り申し上げます。<br><br></h1>
            	 <div class="thank_for_you clear">
                        <div class="contact-personal-title">お問合せ</div>
        <div>TEL  03-5733-1602</div>
        <div>Email  <A href="mailto:kc-kikaku@kandc.com">kc-kikaku@kandc.com</A></div><br><br></p>
                  </div>
              </div>
              <div class="block_content clear">
              	<div id="back_home_btn"><a href="<?php echo url_root; ?>"><img title="ホームボタン" alt="ホームボタン" src="<?php echo url_root; ?>img/button-home.png" /></a></div>
              </div>
             <!--****************************************************-->
            
             
            
             
       </div><!--End content-->
 
 		<?php 
				@include('../ebits.php');
				@include('../../ebits.php');
				@include('../../../ebits.php');
			?>  
    <?php include('../inc/footer-q.php'); ?>
<?php 
	ob_flush();
?>